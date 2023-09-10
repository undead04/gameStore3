<section class="py-5 bg-black">
    <div class="container-md">
        <a class="">
            <h2 class="text-white my-3">Game on sale</h2>
        </a>
        <div class="row flex-nowrap overflow-x-scroll carousel_multiple">
            @foreach ($viewData['bestSaler'] as $games)
                @include('clients.compant.showGame')
            @endforeach
        </div>
    </div>
</section>
