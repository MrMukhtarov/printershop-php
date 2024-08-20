 @push('css')
     <style>
      .trend_image{
        width: 250px !important;
      }
      .properties{
        display: flex !important;
        flex-direction: row !important;
      }
     </style>
 @endpush
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
                  <a class="nav-link @if ($count == 0) active @endif"
                     id="nav-{{ $cat->slug }}-tab" data-bs-toggle="tab"
                     href="#nav-{{ $cat->slug }}" role="tab"
                     aria-controls="nav-{{ $cat->slug }}"
                     aria-selected="@if ($count == 0) true @else false @endif">
                    {{ $cat->name }}
                  </a>
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
          <div class="tab-pane fade @if ($count == 0) show active @endif"
               id="nav-{{ $cat->slug }}" role="tabpanel"
               aria-labelledby="nav-{{ $cat->slug }}-tab">
  
            <div class="latest-items-active">
              @foreach ($cat->product as $prod)
                <div class="properties pb-30 d-flex">
                  <div class="properties-card">
                    <div class="properties-img">
                      <a href="pro-details.html">
                        <img src="{{ $prod->image }}" alt="image" preload="auto" class="trend_image">
                      </a>
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
                          <span>${{ $prod->price - ($prod->price * $prod->discount_percent) / 100 }}</span>
                          <span>${{ $prod->price }}</span>
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