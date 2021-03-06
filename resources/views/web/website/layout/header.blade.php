@php $cart = get_cart_products(); @endphp

<header class="header">
    <div class="header__top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                    <p>460 West 34th Street, 15th floor, New York - Hotline: 804-377-3580 - 804-399-3580</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                    <div class="header__actions">
                        <a href="#">Login & Regiser</a>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">{{ trans(session()->get('region')) }}<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                @foreach( config('app.region_array') AS $region )
                                <li>
                                    <a href="{{ str_replace(session()->get('region'), $region, request()->fullUrl()) }}">{{ trans($region) }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="btn-group ps-dropdown"><a class="dropdown-toggle" href="#" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">{{ trans(session()->get('locale')) }}<i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                @foreach( config('app.locale_array') AS $locale )
                                <li>
                                    <a href="{{ str_replace(session()->get('locale'), $locale, request()->fullUrl()) }}">{{ trans($locale) }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navigation">
        <div class="container-fluid">
            <div class="navigation__column left">
                <div class="header__logo">
                    <a class="ps-logo" href="index.html">
                        <img src="{{ asset('web/website') }}/images/logo.png" alt="">
                    </a>
                </div>
            </div>
            <div class="navigation__column center">
                <ul class="main-menu menu">
                    <li class="menu-item menu-item-has-children dropdown"><a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="index.html">Homepage #1</a></li>
                            <li class="menu-item"><a href="#">Homepage #2</a></li>
                            <li class="menu-item"><a href="#">Homepage #3</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                        <div class="mega-menu">
                            <div class="mega-wrap">
                                <div class="mega-column">
                                    <ul class="mega-item mega-features">
                                        <li><a href="product-listing.html">NEW RELEASES</a></li>
                                        <li><a href="product-listing.html">FEATURES SHOES</a></li>
                                        <li><a href="product-listing.html">BEST SELLERS</a></li>
                                        <li><a href="product-listing.html">NOW TRENDING</a></li>
                                        <li><a href="product-listing.html">SUMMER ESSENTIALS</a></li>
                                        <li><a href="product-listing.html">MOTHER'S DAY COLLECTION</a></li>
                                        <li><a href="product-listing.html">FAN GEAR</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Shoes</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">All Shoes</a></li>
                                        <li><a href="product-listing.html">Running</a></li>
                                        <li><a href="product-listing.html">Training & Gym</a></li>
                                        <li><a href="product-listing.html">Basketball</a></li>
                                        <li><a href="product-listing.html">Football</a></li>
                                        <li><a href="product-listing.html">Soccer</a></li>
                                        <li><a href="product-listing.html">Baseball</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">CLOTHING</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">Accessories</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">Compression & Nike Pro</a></li>
                                        <li><a href="product-listing.html">Tops & T-Shirts</a></li>
                                        <li><a href="product-listing.html">Polos</a></li>
                                        <li><a href="product-listing.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="product-listing.html">Jackets & Vests</a></li>
                                        <li><a href="product-listing.html">Pants & Tights</a></li>
                                        <li><a href="product-listing.html">Shorts</a></li>
                                    </ul>
                                </div>
                                <div class="mega-column">
                                    <h4 class="mega-heading">BRAND</h4>
                                    <ul class="mega-item">
                                        <li><a href="product-listing.html">NIKE</a></li>
                                        <li><a href="product-listing.html">Adidas</a></li>
                                        <li><a href="product-listing.html">Dior</a></li>
                                        <li><a href="product-listing.html">B&G</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="menu-item"><a href="#">Women</a></li>
                    <li class="menu-item"><a href="#">Kids</a></li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="#">News</a>
                        <ul class="sub-menu">
                            <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.html">Blog-grid</a>
                                <ul class="sub-menu">
                                    <li class="menu-item"><a href="blog-grid.html">Blog Grid 1</a></li>
                                    <li class="menu-item"><a href="blog-grid-2.html">Blog Grid 2</a></li>
                                </ul>
                            </li>
                            <li class="menu-item"><a href="blog-list.html">Blog List</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-has-children dropdown"><a href="#">Contact</a>
                        <ul class="sub-menu">
                            <li class="menu-item"><a href="contact-us.html">Contact Us #1</a></li>
                            <li class="menu-item"><a href="contact-us.html">Contact Us #2</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="navigation__column right">
                <form class="ps-search--header" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="Search Product…">
                    <button><i class="ps-icon-search"></i></button>
                </form>
                <div class="ps-cart">
                    <a class="ps-cart__toggle" href="#">
                        <span>
                            <i class='cart-total-quantity'>{{ count(session()->get('cart')) }}</i>
                        </span>
                        <i class="ps-icon-shopping-cart"></i>
                    </a>
                    <div class="ps-cart__listing">
                        <div class="ps-cart__content">
                            @foreach( $cart->items AS $product )
                            <div class="ps-cart-item">
                                <a class="ps-cart-item__close remove-product-from-cart" href="#" data-product="{{ $product->id }}"></a>
                                <div class="ps-cart-item__thumbnail">
                                    <a href="product-detail.html"></a>
                                    <img src="{{ asset('uploads/products/' . $product->id . '/' . $product->cover[0]->image) }}" alt="">
                                </div>
                                <div class="ps-cart-item__content">
                                    <a class="ps-cart-item__title" href="product-detail.html">{{ $product->title }}</a>
                                    <p>
                                        <span>{{ trans('Quantity') }}:<i class='cart-item-quantity-{{ $product->id }}'>{{ $product->quantity }}</i></span>
                                    </p>
                                    <p>
                                        <span>{{ trans('Total') }}:<i class='cart-item-total-{{ $product->id }}'>{{ $product->price->price * $product->quantity }}</i><i>{{ get_current_currency() }}</i></span>
                                    </p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="ps-cart__total">
                            <p>{{ trans('Number of items') }}:<span class='cart-total-quantity'>{{ $cart->quantity }}</span></p>
                            <p>{{ trans('Item Total') }}:<span>{{ get_current_currency() }}</span> <span class='cart-total-price'>{{ $cart->total }}</span></p>
                        </div>
                        <div class="ps-cart__footer">
                            <a class="ps-btn" href="cart.html">{{ trans('Check out') }}
                                <i class="ps-icon-arrow-left"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="menu-toggle"><span></span></div>
            </div>
        </div>
    </nav>
</header>
