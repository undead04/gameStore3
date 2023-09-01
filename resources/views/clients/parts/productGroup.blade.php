<section class="bg-black">
    <div class="container-md">
        <div class="row g-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="card bg-transparent text-light">
                        <img src="{{ '/storage/' . $viewData['games'][$i]->getIamge() }}"
                            class="card-img-top rounded-4"
                            alt="{{ $viewData['games'][$i]->getNameGame() }}">
                        <div class="card-body">
                            <h5 class="card-title truncated">
                                {{ $viewData['games'][$i]->getNameGame() }}</h5>
                            <p
                                class="card-text truncated-3 productGroup_description">
                                {{ $viewData['games'][$i]->getDescription() }}
                            </p>
                            <a href="#"
                                class="productGroup_price_label"><span
                                    class="text-decoration-underline">đ</span>{{ $viewData['games'][$i]->getPrice() }}</a>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>
