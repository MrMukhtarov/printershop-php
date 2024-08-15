@push('css')
<style>
    .slider-area .single-slider:before {
    position: absolute;
    content: '';
    background: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    }
</style>
@endpush
<section class="slider-area ">
    <div class="slider-active">

        @foreach ($sliders as $slider)
            <div
                class="single-slider slider-bg1 slider-height d-flex align-items-center"style="background-image: url('{{ $slider->image }}');">
                <div class="container">
                    <div class="rowr">
                        <div class="col-xxl-5 col-xl-6 col-lg-7 col-md-8  col-sm-10">
                            <div class="hero-caption text-center">
                                <span style="color: white;z-index:10">{{ $slider->title }}</span>
                                <p data-animation="fadeInUp" data-delay="0.4s">{{ $slider->description }}</p>
                                <a href="{{ $slider->link_url }}" class="btn_1 hero-btn" data-animation="fadeInUp"
                                    data-delay="0.7s">{{ $slider->button }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
