<section class="py-5 bg-black">
    <div class="container-md">
        <a class="games_title">
            <h2 class="text-white my-3">Game on sale</h2>
        </a>
        <div class="row flex-nowrap overflow-x-scroll">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-2-4">
                    @include('clients/parts/gameItem')
                </div>
            @endfor
        </div>
    </div>
</section>
