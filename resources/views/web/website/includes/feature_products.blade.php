<div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
    <div class="ps-container">
        <div class="ps-section__header mb-50">
            <h3 class="ps-section__title" data-mask="features">- Features Products</h3>
            <ul class="ps-masonry__filter">
                <li class="current"><a href="#" data-filter="*">All <sup>8</sup></a></li>
                <li><a href="#" data-filter=".ON">ON <sup>1</sup></a></li>
                <li><a href="#" data-filter=".MUSCLEADD">MUSCLEADD <sup>1</sup></a></li>
                <li><a href="#" data-filter=".BPI">BPI <sup>1</sup></a></li>
                <li><a href="#" data-filter=".MUSCLETECH">MUSCLETECH <sup>1</sup></a></li>
                <li><a href="#" data-filter=".RAND">RAND <sup>4</sup></a></li>
            </ul>
        </div>
        <div class="ps-section__content pb-50">
            <div class="masonry-wrapper" data-col-md="4" data-col-sm="2" data-col-xs="1" data-gap="30"
                data-radio="100%">
                <div class="ps-masonry">
                    <div class="grid-sizer"></div>
                    @foreach( $products AS $product )
                    <div class="grid-item {{ array_rand($cats) }}">
                        <div class="grid-item__content-wrapper">
                            <div class="ps-shoe mb-30">
                                <div class="ps-shoe__thumbnail" style="height: 400px">
                                    <div class="ps-badge">
                                        <span>New</span>
                                    </div>
                                    <div class="ps-badge ps-badge--sale ps-badge--2nd">
                                        <span>-35%</span>
                                    </div>
                                    <a class="ps-shoe__favorite" href="#">
                                        <i class="ps-icon-heart"></i>
                                    </a>
                                    <img src="{{ asset('uploads/products/' . $product->id . '/' . $product->cover[0]->image) }}" alt="">
                                    <a class="ps-shoe__overlay" href="{{ route('test') }}"></a>
                                </div>
                                <div class="ps-shoe__content">
                                    <div class="ps-shoe__variants">
                                        <div class="ps-shoe__variant normal">
                                            @foreach( $product->images AS $image )
                                            <img src="{{ asset('uploads/products/' . $product->id . '/' . $image->image) }}" alt="">
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="ps-shoe__detail">
                                        <a class="ps-shoe__name" href="#">{{ $product->title }}</a>
                                        <p class="ps-shoe__categories">
                                            <a href="#">Men shoes</a>,
                                            <a href="#">Nike</a>,
                                            <a href="#"> Jordan</a>
                                        </p>
                                        <span class="ps-shoe__price">{{ get_current_currency() }} {{ $product->price->price }}</span>
                                        <button class='btn btn-default btn-block add-to-cart' data-url="{{ route('product.cart.add') }}" data-product="{{ $product->id }}">{{ trans('Add to cart') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
