<footer>

    @php
        $links = config('store.links');
        $footerCols = config('store.footerCols');
        $footerSocialMedias = config('store.footerSocialMedias');
    @endphp


    <div id="footer-top-section">
        <div class="container">
            <div class="row justify-content-start">
                <div class="col-lg-5">
                    <div class="row h-100 py-5">
                        @foreach ($footerCols as $col)
                            <div class="col-4 d-flex justify-content-start flex-column">
                                @foreach ($col as $topic)
                                    <div class="links-list text-white">
                                        <h5>{{ $topic['heading'] }}</h5>
                                        <ul class="text-white p-0">
                                            @foreach ($topic['links'] as $link)
                                                <a href="#">
                                                    <li>{{ $link }}</li>
                                                </a>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div id="footer-bottom-section" class="_flex-center">
        <div class="container">
            <div class="row d-flex justify-content-between align-items-center">
                <div id="sign-up" class="col-4 d-flex justify-content-center align-items-center text-white">
                    <a href="#">
                        <h5 class="p-1 text-white m-0">SIGN-UP NOW!</h5>
                    </a>
                </div>
                <div id="social-media" class="col-4 _flex-center gap-3">
                    <div>
                        <a href="#">
                            <h5 class="p-1 m-0">FOLLOW US</h5>
                        </a>
                    </div>
                    <div class="text-secondary d-none d-lg-flex gap-2 fs-5">
                        @foreach ($footerSocialMedias as $icon)
                            <a href="#"><img class="img-fluid"
                                    src="{{ Vite::asset('/resources/img/' . $icon['path']) }}"
                                    :alt="{{ $icon['media'] }}"></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
