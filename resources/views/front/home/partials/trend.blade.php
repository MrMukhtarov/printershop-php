<div class="latest-items section-padding fix">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12">
                <div class="nav-button">

                    <nav>
                        <div class="nav-tittle">
                            <h2>Trending This Week</h2>
                        </div>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            @foreach ($categories as $count => $cat)
                                <a @if ($count == 0) class="nav-link active" @endif class="nav-link"
                                    id="nav-{{ $cat->slug }}-tab" data-bs-toggle="tab"
                                    href="#nav-{{ $cat->id }}" role="tab"
                                    aria-controls="nav-{{ $cat->id }}" aria-selected="true">{{ $cat->name }}</a>
                            @endforeach
                        </div>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="tab-content" id="nav-tabContent">
            @foreach ($categories as $count => $cat)
                <div @if ($count == 0) class="tab-pane fade show active" @endif
                    class="tab-pane fade show" id="nav-{{ $cat->id }}" role="tabpanel"
                    aria-labelledby="nav-one-tab">

                    <div class="latest-items-active">

                        @foreach ($cat->product as $prod)
                            <div class="properties pb-30">
                                <div class="properties-card">
                                    <div class="properties-img">
                                        <a href="pro-details.html"><img
                                                src="{{ $prod->image }}"
                                                style="width: 100%;height:200px;object-fit:contain" alt=""></a>
                                        <div class="socal_icon">
                                            <a href="#"><i class="ti-shopping-cart"></i></a>
                                            <a href="#"><i class="ti-heart"></i></a>
                                            <a href="#"><i class="ti-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="properties-caption properties-caption2">
                                        <h3><a href="pro-details.html">{{ $prod->name }}</a></h3>
                                        <div class="properties-footer">
                                            <div class="price">
                                                <span>${{ $prod->price - ($prod->price * $prod->discount_percent) / 100 }}
                                                    <span>${{ $prod->price }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@push('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush
