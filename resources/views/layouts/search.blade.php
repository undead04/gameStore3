@foreach ($viewData['searchGame'] as $search)
    <div class="row">
        <div class="col-4">
            <img src="{{ '/storage/' . $search->getIamge() }}" alt="" class="img-fluid">
        </div>
        <div class="col">
            <a href="{{ route('clients.gamesDetail', ['id' => $search->getGameId()]) }}"> {{ $search->getNameGame() }}</a>
        </div>
    </div>
@endforeach
