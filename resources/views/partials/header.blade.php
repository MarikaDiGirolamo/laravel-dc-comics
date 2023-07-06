@php
    $links = config('store.links');
    $footerCols = config('store.footerCols');
    $footerSocialMedias = config('store.footerSocialMedias');
@endphp

<header class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-5 d-flex align-items-center">
                <a href="#"><img id="header-logo" class="img-fluid"
                        src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Logo"></a>
            </div>
            <div class="col-7 d-flex justify-content-end align-items-center">
                <ul class="d-none d-lg-flex m-0">
                    @foreach ($links as $link)
                        <li class="d-flex flex-column">
                            <a href="#">{{ $link }}</a>
                            <div></div>
                        </li>
                    @endforeach
                </ul>
                <div class="d-lg-none _flex-center fs-1">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</header>
