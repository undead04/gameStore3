<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\GameOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

use function PHPSTORM_META\map;

class ShoppingController extends Controller
{
    public function index()
    {
        $total = 0;

        $gameInSession = session()->get("cart");
        if ($gameInSession) {

            $total = array_reduce($gameInSession, function ($total, $item) {
                return $total + $item['price'];
            });
        }
        $viewData["total"] = $total;
        $viewData["games"] = $gameInSession;

        return view('cart.index')->with("viewData", $viewData);
    }
    public function add($id)
    {
        $gameItem = Game::find($id);
        $cart = session()->get('cart', []);
        $cart[$id] = [
            'id' => $gameItem->getGameId(),
            'name' => $gameItem->getNameGame(),
            'price' => $gameItem->getPrice(),
            'image' => $gameItem->getIamge(),

        ];
        session()->put('cart', $cart);

        return back();
    }
    public function delete($id)
    {
        $cart = session()->get('cart');

        unset($cart[$id]);
        session()->put('cart', $cart);


        return back();
    }
    public function purchase()
    {
        $gameInSession = session()->get("cart");
        if ($gameInSession) {
            $userId = Auth::user()->getId();
            $order = new Order();
            $order->setUserId($userId);
            $order->setTotal(0);
            $order->save();
            $total = 0;
            $gameInCart = Game::findMany(array_keys($gameInSession));
            foreach ($gameInCart as $game) {

                $item = new GameOrder();

                $item->setPrice($game->getPrice());
                $item->setGameId($game->getGameId());
                $item->setOrderId($order->getOrderId());
                $item->save();
                $total += $game->getPrice();
            }
            $order->setTotal($total);
            $order->save();
            $newBalance = Auth::user()->getBalance() - $total;
            Auth::user()->setBalance($newBalance);
            Auth::user()->save();
            session()->forget('cart');
            $viewData = [];
            $viewData["title"] = "Purchase - Online Store";
            $viewData["subtitle"] = "Purchase Status";
            $viewData["order"] = $order;
            return view('cart.purchase')->with("viewData", $viewData);
        } else {
            return redirect()->route('cart.index');
        }
    }
}
