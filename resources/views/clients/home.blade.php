@extends('layouts.client')
@section('title', $viewData['title'])
@section('content')
    @include('clients.parts.banner')
    @include('clients.parts.xItemsScroll')
    @include('clients.parts.productGroup')
@endsection
@section('script')
    <script>
        const xSlideDOM = document.querySelector(
            '.carousel_multiple');

        console.log((xSlideDOM.offsetWidth * 0.2));
        const maxScollX = xSlideDOM.scrollWidth - xSlideDOM.clientWidth;
        setInterval(() => {
            xSlideDOM.scrollLeft += (xSlideDOM
                .offsetWidth * 0.2);
            if (xSlideDOM.scrollLeft == maxScollX) {
                let scrollTimeOut = setTimeout(() => {
                    xSlideDOM.scrollLeft = 0;
                    clearTimeout(scrollTimeOut);
                }, 3000);
            }
        }, 3000);
    </script>
@endsection
