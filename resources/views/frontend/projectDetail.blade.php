@extends('frontend.layout')
@section('extern-css')
    <style>
        .gallery-item {
            border: 1px solid #ddd;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            text-align: center;
            max-width: calc(25% - 2rem);
            /* Subtracting margin space */
            flex: 1 0 calc(25% - 2rem);
            height: auto;
            /* Fixed height for consistency */
        }

        .text-centers {
            text-align: -webkit-center;
        }

        .mar h1,
        p {
            margin-left: 0;
            color: black;
            text-align: center;
            max-inline-size: 100ch;
            font-family: auto;
        }

        .gallery-item img,
        .gallery-item video {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
            max-height: 100%;
            /* Ensure content fits within the fixed height */
        }

        .gallery-container {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            /* Margin space */
            justify-content: center;
        }

        /* Mobile responsive adjustments */
        @media (max-width: 768px) {
            .gallery-item {
                max-width: calc(50% - 1.5rem);
                /* Adjust width for smaller screens */
                flex: 1 0 calc(50% - 1.5rem);
            }
        }

        @media (max-width: 576px) {
            .gallery-item {
                max-width: calc(100% - 1.5rem);
                /* Adjust width for smallest screens */
                flex: 1 0 calc(100% - 1.5rem);
            }
        }
    </style>

    <style>
        @import 'https://unpkg.com/open-props@1.7.0/open-props.min.css' layer(design.system);
        @import 'https://unpkg.com/open-props@1.7.0/normalize.dark.min.css' layer(design.normalize);
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@200..900&family=Lobster&display=swap');

        .iage {
            height: 50vh !important;
        }

        @layer base.override-normalize {
            :root {
                font-family: 'Inter Variable', sans-serif;
                --surface-1: oklch(0 0 0);
                --text-1: oklch(0.97 0 0);
                --text-2: oklch(0.73 0 0);
                --link-visited: oklch(0.73 0 0);
            }

            a {
                color: var(--text-2);
                display: flex;
                gap: var(--size-1);
            }
        }

        @layer base.app {


            section {
                display: grid;
                justify-content: center;
                padding-inline: var(--size-1);
                gap: var(--size-7);
            }
        }

        @layer components.header {
            header {
                display: flex;
                justify-content: center;
                padding-block: var(--gap);
                background-color: var(--surface-1);
                position: sticky;
                inset-block-start: 0;
                z-index: var(--layer-1);

                & h1 {
                    font-family: 'Lobster', sans-serif;

                    font-weight: var(--font-weight-1);
                    font-size: clamp(1.5rem, 6vw, 3rem);
                }
            }
        }

        @layer components.gallery {
            .imageGallery {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                max-inline-size: var(--max-inline);
                gap: calc(var(--border-size-2) * 2);

                & img {
                    aspect-ratio: var(--ratio-square);
                    max-inline-size: 100%;
                    background-image: var(--gradient-8);
                }

                &>button {
                    position: relative;
                    padding: 0;
                    margin: 0;
                    border: none;

                    &::after {
                        content: '';
                        inset: 0;
                        display: block;
                        background-color: oklch(0 0 0 / 0.4);
                        position: absolute;
                        background-image: url(https://raw.githubusercontent.com/mobalti/open-props-interfaces/7d7d59bdb5dca71ec7280b88876b45d31cbf3c4a/image-gallery/images/pushpin-fill.svg);
                        background-size: var(--size-5);
                        background-repeat: no-repeat;
                        background-position: top var(--size-1) right var(--size-1);
                        opacity: 0;
                        transition: 0.2s ease;
                    }

                    &:hover::after {
                        opacity: 1;
                    }
                }
            }
        }

        @layer components.dialog {
            .dialog {
                --sm-font-size: 0.875rem;
                --size: min(80dvh, 100%);
                --fade-duration: 1s;

                inline-size: var(--size);
                max-inline-size: 600px;
                border-radius: unset;

                padding: 0;

                .dialog-container {
                    display: flex;
                    flex-direction: column;
                    gap: var(--size-3);
                    position: relative;
                    overflow: hidden;
                }

                .controls {
                    position: fixed;
                    z-index: var(--layer-1);
                    inset-block-start: calc(50% - var(--size-5) / 2);
                    inset-inline: var(--size-3);
                    display: flex;
                    justify-content: space-between;
                    opacity: 0;
                    animation: var(--animation-fade-in) var(--fade-duration) forwards;

                    & button {
                        inline-size: var(--size-8);
                        border-radius: var(--radius-round);
                        aspect-ratio: var(--ratio-square);
                        font-size: 1.75rem;
                        background: transparent;
                        display: inline-flex;
                        align-items: center;
                        justify-content: center;
                        padding: 0;
                        box-shadow: var(--shadow-1);
                        color: var(--stone-1);
                        transition: color 0.2s ease;

                        @media (width > 600px) {
                            font-size: 3rem;
                        }

                        &:hover {
                            color: var(--stone-6);
                        }
                    }
                }

                .closeDialog {
                    position: fixed;
                    inset-block-start: var(--size-2);
                    inset-inline-end: var(--size-2);
                    block-size: 48px;
                    inline-size: 48px;
                    background-color: transparent;
                    font-size: var(--font-size-5);
                    padding: 0;
                }

                .carousel {
                    display: grid;
                    grid-auto-flow: column;
                    grid-auto-columns: var(--size);
                    inline-size: var(--size);
                    block-size: var(--size);


                    /* Hide scrollbar */
                    -ms-overflow-style: none;
                    /* IE and Edge */
                    scrollbar-width: none;

                    /* Firefox */
                    &::-webkit-scrollbar {
                        display: none;
                    }

                    & img {
                        inline-size: 100%;
                        block-size: 100%;
                    }

                    &::after {
                        content: '';
                        position: absolute;
                        inset: 0;

                        background-color: var(--surface-1);

                        background-image: url(https://raw.githubusercontent.com/mobalti/open-props-interfaces/7d7d59bdb5dca71ec7280b88876b45d31cbf3c4a/image-gallery/images/bars-rotate-fade.svg);
                        background-repeat: no-repeat;
                        background-position: center;
                        z-index: var(--layer-3);

                        /* <Suspense> */
                        animation: var(--animation-fade-out) var(--fade-duration) forwards,
                            var(--fade-duration) op-hide 1s forwards;
                    }
                }
            }
        }

        @layer animation.base {
            @keyframes op-hide {
                100% {
                    visibility: hidden;
                }
            }
        }

        @layer animation.scroll-driven {

            #carousel {
                overflow-x: scroll;
                scroll-snap-type: x mandatory;
                overscroll-behavior: contain;
                scroll-behavior: smooth;

                scroll-timeline: --carousel inline;

                >* {
                    scroll-snap-align: center;
                }
            }

            #nextBtn {
                animation: auto next ease;
                animation-timeline: --carousel;

                /* fix bug scrollPort nextBtn visibility */
                animation-range: 0% 101%;
            }

            #prevBtn {
                animation: auto prev ease;
                animation-timeline: --carousel;
            }

            @keyframes prev {
                from {
                    visibility: hidden;
                }
            }

            @keyframes next {

                99%,
                100% {
                    visibility: hidden;
                }
            }
        }
    </style>
@endsection
@section('content')
    <div class="career container mt-5 ">
        <div class="text-centers">
            <h1 class="mb-5 ">{{ @$project->name }}</h1>
        </div>

        <div class="row">
            <div class="col-12 col-lg-12 mar ">
                <p>{!! @$project->description !!}</p>

            </div>
            {{-- <div class="col-md-3 col-6 my-4">
          <div class="row">
              <div class="col-md-2 col-2" style=" font-size: 53px; color: #c79b3e; "><i class="fa fa-dollar"></i></div>
              <div class="col-md-8 col-8 m-3"><p>PROPERTY SIZE <br>
                {{@$project->psize}}</p></div>
          </div>  
      </div>

      <div class="col-md-3 col-6 my-4">
          <div class="row">
              <div class="col-md-2 col-2" style=" font-size: 53px; color: #c79b3e; "><i class="fa fa-dollar"></i></div>
              <div class="col-md-8 col-8 m-3"><p>PROPERTY Cost <br>
                {{@$project->cost}}</p></div>
          </div>  
      </div>

      <div class="col-md-3 col-6 my-4">
          <div class="row">
              <div class="col-md-2 col-2" style=" font-size: 53px; color: #c79b3e; "><i class="fa fa-dollar"></i></div>
              <div class="col-md-8 col-8 m-3"><p>PROPERTY ROOMS <br>
                {{@$project->room}}</p></div>
          </div>  
      </div>

      <div class="col-md-3 col-6 my-4">
          <div class="row">
              <div class="col-md-2 col-2" style=" font-size: 53px; color: #c79b3e; "><i class="fa fa-dollar"></i></div>
              <div class="col-md-8 col-8 m-3"><p>ROOM SIZE <br>
                {{@$project->size}}</p></div>
          </div>  
      </div> --}}


            <div class="col-12 col-lg-6">
                <img src="{{ @$project->image }}" alt="Image Gallery">
            </div>
            {{-- <div class="col-12 col-lg-6">
          <h3 style="color: #c79b3e; margin-top: 0px;"><strong>{{@$project->address}}</strong></h3>
          <div class="row mt-4">
              <div class="col-md-5 col-12 mt-4">
                  <span>Supermarket : <strong>200M</strong></span>
              </div>
              <div class="col-md-6 col-12 mt-4">
                  <span>Railway Station : <strong> 1,800M</strong></span>
              </div>

              <div class="col-md-5 col-12 mt-4">
                  <span>Airport    : <strong>2,790M</strong></span>
              </div>
              <div class="col-md-6 col-12 mt-4">
                  <span>University: <strong> 250M</strong></span>
              </div>

              <div class="col-md-5 col-12 mt-4">
                  <span>Hospital : <strong>500M</strong></span>
              </div>
              <div class="col-md-6 col-12 mt-4">
                  <span>Bus Station: <strong> 150M</strong></span>
              </div>

              <div class="col-md-5 col-12 mt-4">
                  <span>Park : <strong>1,500M</strong></span>
              </div>
              <div class="col-md-6 col-12 mt-4">
                  <span>Railway Station : <strong> 1,800M</strong></span>
              </div>
          </div>
          <a href="{{url('/contact-us')}}" class="btn btn-success mt-4" style="background-color:#c79b3e; border-color: #c79b3e;">Get Quote</a>
          
      </div> --}}
            <div class="col-6 col-lg-6" style=" max-height: 30rem; overflow: scroll; ">
                <div class="row">
                    @if (!empty($ProductVariant) && count($ProductVariant) != 0)
                    <div class="col-3 col-lg-2 mb-2"><button onclick="$('.badge-info').css('background-color', '#c79b3e');this.style.backgroundColor='#ff9900';$('.imagesClass').show();"
                      class="badge badge-info" style="background: #c79b3e;">All</button></div>
                        @foreach ($ProductVariant as $key => $item)
                            <div class="col-4 col-lg-3 mb-2"><button onclick="$('.badge-info').css('background-color', '#c79b3e');this.style.backgroundColor='#ff9900'; $('.imagesClass').hide();$('.{{str_replace(' ', '', $item->catName)}}').show();"
                                    class="badge badge-info" style="background: #c79b3e;">{{ $item->catName }}</button></div>
                        @endforeach
                    @endif

                </div>

                <section>
                    <div class="imageGallery">
                        @if (!empty($ProductVariant) && count($ProductVariant) != 0)
                            @foreach ($ProductVariant as $key => $item)
                                @if (!empty($item->image))
                                    @php
                                        $images = json_decode($item->image);
                                    @endphp
                                    @foreach ($images as $key => $value)
                                        @php
                                            $explode = explode('.', $value);
                                            $count = count($explode);
                                            $meme = $explode[$count - 1];
                                        @endphp

                                        @if ($meme == 'mp4' || $meme == 'mov')
                                        @else
                                            <button class="imagesClass {{str_replace(' ', '', $item->catName)}}">
                                                <picture>
                                                    <img width="309" height="309" src="{{ @$value }}"
                                                        alt="Image1" loading="lazy" />
                                                </picture>
                                            </button>
                                        @endif
                                    @endforeach
                                @endif
                            @endforeach
                        @elseif (!empty($project->o_image))
                            @php
                                $images = json_decode($project->o_image);
                            @endphp
                            @foreach ($images as $key => $value)
                                @php
                                    $explode = explode('.', $value);
                                    $count = count($explode);
                                    $meme = $explode[$count - 1];
                                @endphp

                                @if ($meme == 'mp4' || $meme == 'mov')
                                @else
                                    <button>
                                        <picture>
                                            <img width="309" height="309" src="{{ @$value }}" alt="Image1"
                                                loading="lazy" />
                                        </picture>
                                    </button>
                                @endif
                            @endforeach
                        @endif


                    </div>

                    <dialog class="dialog" id="dialog">
                        <div class="dialogContainer">
                            <div class="carousel" id="carousel">
                                @if (!empty($ProductVariant) && count($ProductVariant) != 0)
                                    @foreach ($ProductVariant as $key => $item)
                                        @if (!empty($item->image))
                                            @php
                                                $images = json_decode($item->image);
                                            @endphp
                                            @foreach ($images as $key => $value)
                                                @php
                                                    $explode = explode('.', $value);
                                                    $count = count($explode);
                                                    $meme = $explode[$count - 1];
                                                @endphp

                                                @if ($meme == 'mp4' || $meme == 'mov')
                                                @else
                                                    <button>
                                                        <picture>
                                                            <img width="309" height="309" src="{{ @$value }}"
                                                                alt="Image1" loading="lazy" />
                                                        </picture>
                                                    </button>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                @elseif (!empty($project->o_image))
                                    @php
                                        $images = json_decode($project->o_image);
                                    @endphp
                                    @foreach ($images as $key => $value)
                                        @php
                                            $explode = explode('.', $value);
                                            $count = count($explode);
                                            $meme = $explode[$count - 1];
                                        @endphp

                                        @if ($meme == 'mp4' || $meme == 'mov')
                                        @else
                                            <picture>
                                                <img class="iage" width="309" height="309" src="{{ $value }}"
                                                    alt="Image" loading="lazy" />
                                            </picture>
                                        @endif
                                    @endforeach
                                @endif


                            </div>
                            <div class="controls">
                                <button id="prevBtn" onclick="carousel.scrollBy(-100, 0)">
                                    <i class="fa fa-arrow-left" style="color: black;"></i>
                                </button>
                                <button id="nextBtn" onclick="carousel.scrollBy(100, 0)">
                                    <i class="fa fa-arrow-right" style="color: black;"></i>
                                </button>
                            </div>
                        </div>
                        <button id="closeDialogBtn" class="closeDialog">
                            <i class="fa fa-close" style="color: black;"></i>
                        </button>
                    </dialog>
                </section>
            </div>
            <div class="gallery-container">
                @if (!empty($project->o_image))
                    @php
                        $images = json_decode($project->o_image);
                    @endphp
                    @foreach ($images as $key => $value)
                        @php
                            $explode = explode('.', $value);
                            $count = count($explode);
                            $meme = $explode[$count - 1];
                        @endphp

                        @if ($meme == 'mp4' || $meme == 'mov')
                            <div class="gallery-item mt-4">
                                <video controls>
                                    <source src="{{ @$value }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @else
                        @endif
                    @endforeach
                @endif
            </div>


        </div>
    </div>
@endsection
@section('extern-js')
    <script src="{{ url('frontend_assets/custom_js/cart.js') }}"></script>

    <script>
        const dialog = document.querySelector('#dialog');
        const images = document.querySelectorAll('.imageGallery button');
        const closeDialogBtn = document.querySelector('#closeDialogBtn');

        function openDialog(index) {
            if (!document.startViewTransition) {
                dialog.showModal();
                document.querySelectorAll('#carousel img')[index].scrollIntoView();
            } else handleTransition(index);
        }

        // Wait until the transition finished and the dialog opens before scrolling into view.
        async function handleTransition(index) {
            const transition = document.startViewTransition(() => dialog.showModal());
            try {
                await transition.finished;
            } finally {
                document.querySelectorAll('#carousel img')[index].scrollIntoView();
            }
        }

        const closeDialog = () => {
            if (!document.startViewTransition) dialog.close();
            else document.startViewTransition(() => dialog.close());
        };

        images.forEach((img, index) => {
            console.log(index);
            img.addEventListener('click', () => openDialog(index));
        });

        closeDialogBtn.addEventListener('click', () => closeDialog());
    </script>
@endsection
