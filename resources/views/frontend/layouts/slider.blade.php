<div class="mb-5">

    @if($sliders->count())

        <div class="bg-img-hero">

            <div class="container min-height-420 overflow-hidden">

                {{-- ONE SLICK CAROUSEL --}}
                <div class="js-slick-carousel u-slick"
                     data-autoplay="true"
                     data-speed="5000"
                     data-infinite="true"
                     data-arrows="true"
                     data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">

                    {{-- ALL SLIDES --}}
                    @foreach($sliders as $index => $slider)

                        <div class="js-slide">

                            {{-- SLIDE BACKGROUND --}}
                            <div class="position-relative min-height-420 overflow-hidden">

                                {{-- VIDEO BACKGROUND --}}
                                @if(!empty($slider->video_url))

                                    <video
                                        autoplay
                                        muted
                                        loop
                                        playsinline
                                        class="position-absolute top-0 start-0 w-100 h-100"
                                        style="object-fit: cover; z-index: 0;">

                                        <source
                                            src="{{ asset($slider->video_url) }}"
                                            type="video/mp4">

                                        Your browser does not support the video tag.

                                    </video>

                                {{-- IMAGE BACKGROUND --}}
                                @elseif(!empty($slider->image_url))

                                    <div class="position-absolute top-0 start-0 w-100 h-100"
                                         style="
                                            background-image: url('{{ asset($slider->image_url) }}');
                                            background-size: cover;
                                            background-position: center;
                                            z-index: 0;
                                         ">
                                    </div>

                                @endif


                                {{-- OVERLAY --}}
                                @if(isset($slider->overlay))

                                    <div class="position-absolute top-0 start-0 w-100 h-100"
                                         style="
                                            background: rgba(0,0,0,{{ $slider->overlay / 100 }});
                                            z-index: 1;
                                         ">
                                    </div>

                                @endif


                                {{-- CONTENT --}}
                                <div class="container position-relative"
                                     style="z-index: 2;">

                                    <div class="row min-height-420 py-7 py-md-0">


                                        {{-- LEFT CONTENT --}}
                                        <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">

                                            {{-- HEADING --}}
                                            @if(!empty($slider->heading_text))

                                                <h1 class="font-size-64 text-lh-57 font-weight-light text-white"
                                                    data-scs-animation-in="fadeInUp">

                                                    {{ $slider->heading_text }}

                                                </h1>

                                            @endif


                                            {{-- CAPTION --}}
                                            @if(!empty($slider->caption_text))

                                                <h6 class="font-size-15 font-weight-bold mb-3 text-white"
                                                    data-scs-animation-in="fadeInUp"
                                                    data-scs-animation-delay="200">

                                                    {{ $slider->caption_text }}

                                                </h6>

                                            @endif


                                            {{-- SHOP BUTTON --}}
                                            <div class="mb-4"
                                                 data-scs-animation-in="fadeInUp"
                                                 data-scs-animation-delay="300">

                                                <a href="{{ url('/shop') }}"
                                                   class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                                   data-scs-animation-in="fadeInUp"
                                                   data-scs-animation-delay="400">

                                                    Shop Now

                                                </a>

                                            </div>

                                        </div>


                                        {{-- RIGHT IMAGE --}}
                                        <div class="col-xl-5 col-6 d-flex align-items-center"
                                             data-scs-animation-in="zoomIn"
                                             data-scs-animation-delay="500">

                                            {{-- 
                                                যদি video থাকে, background video already আছে।
                                                তাই এখানে আলাদা image/video দেখানো হবে না।
                                            --}}

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            </div>

        </div>

    @endif

</div>

