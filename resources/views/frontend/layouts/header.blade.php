<!-- ========== HEADER ========== -->
    <header id="header" class="u-header u-header-left-aligned-nav">
        <div class="u-header__section">
                <!-- Topbar -->
                <div class="u-header-topbar py-2 d-none d-xl-block">
                    <div class="container">
                        <div class="d-flex align-items-center">
                            <div class="topbar-left">
                                <a href="{{url('/')}}" class="text-gray-110 font-size-13 hover-on-dark">Welcome to Rymosbd Electronics Store</a>
                            </div>
                            <div class="topbar-right ml-auto">
                                <ul class="list-inline mb-0">
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="{{ url('contact') }}" class="u-header-topbar__nav-link"><i class="ec ec-map-pointer mr-1"></i> Store Locator</a>
                                    </li>
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <a href="#" class="u-header-topbar__nav-link"><i class="ec ec-transport mr-1"></i> Track Your Order</a>
                                    </li>
                                    
                                    <li class="list-inline-item mr-0 u-header-topbar__nav-item u-header-topbar__nav-item-border">
                                        <!-- Account Sidebar Toggle Button -->
                                        <a id="sidebarNavToggler" href="javascript:;" role="button" class="u-header-topbar__nav-link"
                                            aria-controls="sidebarContent"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarContent"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInRight"
                                            data-unfold-animation-out="fadeOutRight"
                                            data-unfold-duration="500">
                                            <i class="ec ec-user mr-1"></i> Register <span class="text-gray-50">or</span> Sign in
                                        </a>
                                        <!-- End Account Sidebar Toggle Button -->
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Topbar -->

                <!-- Logo-Search-header-icons -->
                <div class="py-2 py-xl-5 bg-primary-down-lg">
                    <div class="container my-0dot5 my-xl-0">
                        <div class="row align-items-center">
                            <!-- Logo-offcanvas-menu -->
                            <div class="col-auto">
                                <!-- Nav -->
                                <nav class="navbar navbar-expand u-header__navbar py-0 justify-content-xl-between max-width-270 min-width-270">
                                    <!-- Logo -->
                                    <a class="order-1 order-xl-0 navbar-brand u-header__navbar-brand u-header__navbar-brand-center"
                                        href="{{ url('/') }}"
                                        aria-label="{{ $setting->site_name ?? 'Website' }}">

                                            <img class="logo_light"
                                                src="{{ url($setting->logo) }}"
                                                alt="{{ $setting->site_name ?? 'Logo' }}"
                                                style="max-width: 175px; max-height: 50px;">

                                    </a>
                                    <!-- End Logo -->

                                    <!-- Fullscreen Toggle Button -->
                                    <button id="sidebarHeaderInvokerMenu"
                                            type="button"
                                            class="navbar-toggler d-block d-xl-none btn u-hamburger mr-3"
                                            aria-controls="sidebarHeader1"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-event="click"
                                            data-unfold-hide-on-scroll="false"
                                            data-unfold-target="#sidebarHeader1"
                                            data-unfold-type="css-animation"
                                            data-unfold-animation-in="fadeInLeft"
                                            data-unfold-animation-out="fadeOutLeft"
                                            data-unfold-duration="500">

                                        <span id="hamburgerTriggerMenu" class="u-hamburger__box">
                                            <span class="u-hamburger__inner"></span>
                                        </span>

                                    </button>
                                    <!-- End Fullscreen Toggle Button -->
                                </nav>
                                <!-- End Nav -->

                                <!-- ========== HEADER SIDEBAR ========== -->
                            <aside id="sidebarHeader1"
                                class="u-sidebar u-sidebar--left"
                                aria-labelledby="sidebarHeaderInvoker">

                                <div class="u-sidebar__scroller">

                                    <div class="u-sidebar__container">

                                        <div class="u-header-sidebar__footer-offset">


                                            <!-- ========================= -->
                                            <!-- TOGGLE / CLOSE BUTTON -->
                                            <!-- ========================= -->

                                            <div class="position-absolute top-0 right-0 z-index-2 pt-4 pr-4 bg-white">

                                                <button type="button"
                                                        class="close ml-auto"
                                                        aria-controls="sidebarHeader1"
                                                        aria-haspopup="true"
                                                        aria-expanded="false"
                                                        data-unfold-event="click"
                                                        data-unfold-hide-on-scroll="false"
                                                        data-unfold-target="#sidebarHeader1"
                                                        data-unfold-type="css-animation"
                                                        data-unfold-animation-in="fadeInLeft"
                                                        data-unfold-animation-out="fadeOutLeft"
                                                        data-unfold-duration="500">

                                                    <span aria-hidden="true">
                                                        <i class="ec ec-close-remove text-gray-90 font-size-20"></i>
                                                    </span>

                                                </button>

                                            </div>


                                            <!-- ========================= -->
                                            <!-- CONTENT -->
                                            <!-- ========================= -->

                                            <div class="js-scrollbar u-sidebar__body">

                                                <div id="headerSidebarContent"
                                                    class="u-sidebar__content u-header-sidebar__content">


                                                    <!-- ========================= -->
                                                    <!-- DYNAMIC LOGO -->
                                                    <!-- ========================= -->

                                                    <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center mb-3"
                                                    href="{{ url('/') }}"
                                                    aria-label="{{ $setting->site_name ?? 'Website' }}">

                                                        <img class="logo_light"
                                                            src="{{ url($setting->logo) }}"
                                                            alt="{{ $setting->site_name ?? 'Logo' }}"
                                                            style="max-width: 175px; max-height: 50px;">

                                                    </a>


                                                    <!-- ========================= -->
                                                    <!-- DYNAMIC MENU -->
                                                    <!-- ========================= -->

                                                    <ul id="headerSidebarList"
                                                        class="u-header-collapse__nav">


                                                        <!-- HOME -->
                                                        <li>

                                                            <a class="u-header-collapse__nav-link font-weight-bold"
                                                            href="{{ url('/') }}">

                                                                Home

                                                            </a>

                                                        </li>


                                                        <!-- ABOUT US -->
                                                        <li>

                                                            <a class="u-header-collapse__nav-link font-weight-bold"
                                                            href="{{ url('about') }}">

                                                                About Us

                                                            </a>

                                                        </li>


                                                        <!-- CONTACT US -->
                                                        <li>

                                                            <a class="u-header-collapse__nav-link font-weight-bold"
                                                            href="{{ url('contact') }}">

                                                                Contact Us

                                                            </a>

                                                        </li>


                                                        <!-- ================================= -->
                                                        <!-- DYNAMIC CATEGORIES -->
                                                        <!-- ================================= -->

                                                        @foreach($categories as $category)


                                                            @if($category->subcategories->isNotEmpty())

                                                                <!-- CATEGORY WITH SUBCATEGORY -->

                                                                <li class="u-has-submenu u-header-collapse__submenu">


                                                                    <!-- CATEGORY -->
                                                                    <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                    href="javascript:;"
                                                                    data-target="#category{{ $category->id }}Collapse"
                                                                    role="button"
                                                                    data-toggle="collapse"
                                                                    aria-expanded="false"
                                                                    aria-controls="category{{ $category->id }}Collapse">

                                                                        {{ $category->category_name }}

                                                                    </a>


                                                                    <!-- CATEGORY COLLAPSE -->
                                                                    <div id="category{{ $category->id }}Collapse"
                                                                        class="collapse"
                                                                        data-parent="#headerSidebarContent">


                                                                        <ul class="u-header-collapse__nav-list">


                                                                            <!-- CATEGORY TITLE / LINK -->
                                                                            <li>

                                                                                <a class="u-header-sidebar__sub-menu-title"
                                                                                href="{{ route('slug.handler', $category->category_slug) }}">

                                                                                    {{ $category->category_name }}

                                                                                </a>

                                                                            </li>


                                                                            <!-- ======================= -->
                                                                            <!-- SUBCATEGORIES -->
                                                                            <!-- ======================= -->

                                                                            @foreach($category->subcategories as $sub)


                                                                                @if($sub->childCategories->isNotEmpty())

                                                                                    <!-- SUBCATEGORY WITH CHILDREN -->

                                                                                    <li class="u-has-submenu u-header-collapse__submenu">


                                                                                        <!-- SUBCATEGORY -->
                                                                                        <a class="u-header-collapse__nav-link u-header-collapse__nav-pointer"
                                                                                        href="javascript:;"
                                                                                        data-target="#subcategory{{ $sub->id }}Collapse"
                                                                                        role="button"
                                                                                        data-toggle="collapse"
                                                                                        aria-expanded="false"
                                                                                        aria-controls="subcategory{{ $sub->id }}Collapse">

                                                                                            {{ $sub->subcategory_name }}

                                                                                        </a>


                                                                                        <!-- SUBCATEGORY COLLAPSE -->
                                                                                        <div id="subcategory{{ $sub->id }}Collapse"
                                                                                            class="collapse"
                                                                                            data-parent="#category{{ $category->id }}Collapse">


                                                                                            <ul class="u-header-collapse__nav-list">


                                                                                                <!-- SUBCATEGORY TITLE / LINK -->
                                                                                                <li>

                                                                                                    <a class="u-header-sidebar__sub-menu-title"
                                                                                                    href="{{ route('slug.handler', $sub->subcategory_slug) }}">

                                                                                                        {{ $sub->subcategory_name }}

                                                                                                    </a>

                                                                                                </li>


                                                                                                <!-- ======================= -->
                                                                                                <!-- CHILD CATEGORIES -->
                                                                                                <!-- ======================= -->

                                                                                                @foreach($sub->childCategories as $child)

                                                                                                    <li>

                                                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                                                        href="{{ route('slug.handler', $child->childcategory_slug) }}">

                                                                                                            {{ $child->childcategory_name }}

                                                                                                        </a>

                                                                                                    </li>

                                                                                                @endforeach


                                                                                            </ul>

                                                                                        </div>

                                                                                    </li>


                                                                                @else

                                                                                    <!-- SUBCATEGORY WITHOUT CHILD -->

                                                                                    <li>

                                                                                        <a class="u-header-collapse__submenu-nav-link"
                                                                                        href="{{ route('slug.handler', $sub->subcategory_slug) }}">

                                                                                            {{ $sub->subcategory_name }}

                                                                                        </a>

                                                                                    </li>

                                                                                @endif


                                                                            @endforeach


                                                                        </ul>

                                                                    </div>

                                                                </li>


                                                            @else

                                                                <!-- CATEGORY WITHOUT SUBCATEGORY -->

                                                                <li>

                                                                    <a class="u-header-collapse__nav-link"
                                                                    href="{{ route('slug.handler', $category->category_slug) }}">

                                                                        {{ $category->category_name }}

                                                                    </a>

                                                                </li>

                                                            @endif


                                                        @endforeach


                                                    </ul>

                                                    <!-- END MENU -->


                                                </div>

                                            </div>

                                            <!-- END CONTENT -->


                                            <!-- ========================= -->
                                            <!-- FOOTER -->
                                            <!-- ========================= -->

                                            <footer id="SVGwaveWithDots"
                                                    class="svg-preloader u-header-sidebar__footer">

                                                <ul class="list-inline mb-0">

                                                    <li class="list-inline-item pr-3">

                                                        <a class="u-header-sidebar__footer-link text-gray-90"
                                                        href="{{ url('privacy-policy') }}">

                                                            Privacy

                                                        </a>

                                                    </li>


                                                    <li class="list-inline-item pr-3">

                                                        <a class="u-header-sidebar__footer-link text-gray-90"
                                                        href="{{ url('terms-condition') }}">

                                                            Terms

                                                        </a>

                                                    </li>


                                                    <li class="list-inline-item">

                                                        <a class="u-header-sidebar__footer-link text-gray-90"
                                                        href="{{ url('contact') }}">

                                                            <i class="fas fa-info-circle"></i>

                                                        </a>

                                                    </li>

                                                </ul>


                                                <!-- SVG BACKGROUND -->

                                                <div class="position-absolute right-0 bottom-0 left-0 z-index-n1">

                                                    <img class="js-svg-injector"
                                                        src="https://transvelo.github.io/electro-html/2.0/assets/svg/components/wave-bottom-with-dots.svg"
                                                        alt="Image Description"
                                                        data-parent="#SVGwaveWithDots">

                                                </div>

                                            </footer>

                                            <!-- END FOOTER -->


                                        </div>

                                    </div>

                                </div>

                            </aside>
                                <!-- ========== END HEADER SIDEBAR ========== -->
                            </div>
                            <!-- End Logo-offcanvas-menu -->
                            <!-- Search Bar -->
                            <div class="col d-none d-xl-block">
                                <form class="js-focus-state" action="" method="GET">
                                    {{-- {{ route('product.search') }}action --}}

                                    <label class="sr-only" for="searchproduct-item">
                                        Search
                                    </label>

                                    <div class="input-group">

                                        <input type="text"
                                            class="form-control py-2 pl-5 font-size-15 border-right-0 height-40 border-width-2 rounded-left-pill border-primary"
                                            name="search"
                                            id="searchproduct-item"
                                            value="{{ request('search') }}"
                                            placeholder="Search for Products"
                                            aria-label="Search for Products">

                                        <div class="input-group-append">

                                            <!-- Select Category -->
                                            <select name="category"
                                                    class="js-select selectpicker dropdown-select custom-search-categories-select"
                                                    data-style="btn height-40 text-gray-60 font-weight-normal border-top border-bottom border-left-0 rounded-0 border-primary border-width-2 pl-0 pr-5 py-2">

                                                <option value="">All Categories</option>

                                                @foreach($categories as $category)

                                                    <option value="{{ $category->id }}"
                                                        {{ request('category') == $category->id ? 'selected' : '' }}>
                                                        {{ $category->category_name }}
                                                    </option>

                                                @endforeach

                                            </select>
                                            <!-- End Select -->

                                            <button class="btn btn-primary height-40 py-2 px-3 rounded-right-pill"
                                                    type="submit"
                                                    id="searchProduct1">

                                                <span class="ec ec-search font-size-24"></span>

                                            </button>

                                        </div>
                                    </div>

                                </form>
                            </div>
                            <!-- End Search Bar -->
                            <!-- Header Icons -->
                            <div class="col col-xl-auto text-right text-xl-left pl-0 pl-xl-3 position-static">
                                <div class="d-inline-flex">
                                    <ul class="d-flex list-unstyled mb-0 align-items-center">
                                        <!-- Search -->
                                        <li class="col d-xl-none px-2 px-sm-3 position-static">
                                            <a id="searchClassicInvoker"
                                            class="font-size-22 text-gray-90 text-lh-1 btn-text-secondary"
                                            href="javascript:;"
                                            role="button"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Search"
                                            aria-controls="searchClassic"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            data-unfold-target="#searchClassic"
                                            data-unfold-type="css-animation"
                                            data-unfold-duration="300"
                                            data-unfold-delay="300"
                                            data-unfold-hide-on-scroll="true"
                                            data-unfold-animation-in="slideInUp"
                                            data-unfold-animation-out="fadeOut">

                                                <span class="ec ec-search"></span>

                                            </a>
                                            <!-- Search Box -->
                                            <div id="searchClassic"
                                                class="dropdown-menu dropdown-unfold dropdown-menu-right left-0 mx-2"
                                                aria-labelledby="searchClassicInvoker">

                                                <form onsubmit="return redirectSearchURL(event)"
                                                    autocomplete="off"
                                                    class="js-focus-state input-group px-3"
                                                    style="position: relative;">

                                                    <input type="text"
                                                        placeholder="Search Product"
                                                        class="form-control"
                                                        id="search_input"
                                                        autocomplete="off">

                                                    <div class="input-group-append">
                                                        <button class="btn btn-primary px-3"
                                                                type="submit">
                                                            <i class="font-size-18 ec ec-search"></i>
                                                        </button>
                                                    </div>

                                                    <!-- Search Result -->
                                                    <div id="search_result"
                                                        class="list-group"
                                                        style="
                                                            position:absolute;
                                                            top:100%;
                                                            left:15px;
                                                            right:15px;
                                                            width:auto;
                                                            z-index:9999;
                                                            display:none;
                                                            background:#fff;
                                                        ">
                                                    </div>

                                                </form>

                                            </div>
                                            <!-- End Search Box -->
                                        </li>
                                        <!-- End Search -->
                                        {{-- ================= COMPARE ================= --}}
                                        <li class="col d-none d-xl-block">

                                            <a href="{{ route('compare.page') }}"
                                            class="text-gray-90"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Compare">

                                                <i class="font-size-22 ec ec-compare"></i>

                                            </a>

                                        </li>
                                        {{-- ================= END COMPARE ================= --}}

                                        {{-- ================= WISHLIST ================= --}}
                                        @php
                                            $wishlist = Auth::check()
                                                ? \App\Models\Wishlist::where('user_id', Auth::id())->count()
                                                : 0;
                                        @endphp

                                        <li class="col d-none d-xl-block">

                                            <a href="{{ route('wishlist') }}"
                                            class="text-gray-90"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Favorites">

                                                <i class="font-size-22 ec ec-favorites"></i>

                                                @if($wishlist > 0)
                                                    <span class="bg-primary width-22 height-22 position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">
                                                        {{ $wishlist }}
                                                    </span>
                                                @endif

                                            </a>

                                        </li>
                                        {{-- ================= END WISHLIST ================= --}}

                                        {{-- ================= MOBILE ACCOUNT ================= --}}
                                        <li class="col d-xl-none px-2 px-sm-3">

                                            <a href="{{ route('login') }}"
                                            class="text-gray-90"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="My Account">

                                                <i class="font-size-22 ec ec-user"></i>

                                            </a>

                                        </li>
                                        {{-- ================= END MOBILE ACCOUNT ================= --}}

                                        {{-- ================= MOBILE CART ================= --}}
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-xl-none">

                                            <a href="{{ route('cart.view') }}"
                                            class="text-gray-90 position-relative d-flex"
                                            data-toggle="tooltip"
                                            data-placement="top"
                                            title="Cart">

                                                <i class="font-size-22 ec ec-shopping-bag"></i>

                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">
                                                    {{ Cart::count() }}
                                                </span>

                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">
                                                    {{ $setting->currency }}{{ Cart::subtotal() }}
                                                </span>

                                            </a>

                                        </li>
                                        {{-- ================= END MOBILE CART ================= --}}

                                        {{-- ================= DESKTOP CART ================= --}}
                                        <li class="col pr-xl-0 px-2 px-sm-3 d-none d-xl-block">

                                            <div id="basicDropdownHoverInvoker"
                                                class="text-gray-90 position-relative d-flex"
                                                data-toggle="tooltip"
                                                data-placement="top"
                                                title="Cart"
                                                aria-controls="basicDropdownHover"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                                data-unfold-event="click"
                                                data-unfold-target="#basicDropdownHover"
                                                data-unfold-type="css-animation"
                                                data-unfold-duration="300"
                                                data-unfold-delay="300"
                                                data-unfold-hide-on-scroll="true"
                                                data-unfold-animation-in="slideInUp"
                                                data-unfold-animation-out="fadeOut">

                                                <i class="font-size-22 ec ec-shopping-bag"></i>

                                                {{-- Cart Count --}}
                                                <span class="bg-lg-down-black width-22 height-22 bg-primary position-absolute d-flex align-items-center justify-content-center rounded-circle left-12 top-8 font-weight-bold font-size-12">
                                                    {{ Cart::count() }}
                                                </span>

                                                {{-- Cart Total --}}
                                                <span class="d-none d-xl-block font-weight-bold font-size-16 text-gray-90 ml-3">
                                                    {{ $setting->currency }}{{ Cart::subtotal() }}
                                                </span>

                                            </div>


                                            {{-- ================= CART DROPDOWN ================= --}}
                                            <div id="basicDropdownHover"
                                                class="cart-dropdown dropdown-menu dropdown-unfold border-top border-top-primary mt-3 border-width-2 border-left-0 border-right-0 border-bottom-0 left-auto right-0"
                                                aria-labelledby="basicDropdownHoverInvoker">


                                                <ul class="list-unstyled px-3 pt-3">

                                                    @forelse(Cart::content() as $item)

                                                        <li class="border-bottom pb-3 mb-3">

                                                            <div class="">

                                                                <ul class="list-unstyled row mx-n2">

                                                                    {{-- Product Image --}}
                                                                    <li class="px-2 col-auto">

                                                                        <img class="img-fluid"
                                                                            src="{{ asset($item->options->thumbnail) }}"
                                                                            alt="{{ $item->name }}"
                                                                            style="width:75px;height:75px;object-fit:cover;">

                                                                    </li>


                                                                    {{-- Product Name & Price --}}
                                                                    <li class="px-2 col">

                                                                        <h5 class="text-blue font-size-14 font-weight-bold">

                                                                            {{ Str::limit($item->name, 30) }}

                                                                        </h5>

                                                                        <span class="font-size-14">

                                                                            {{ $item->qty }}
                                                                            ×
                                                                            {{ $setting->currency }}{{ $item->price }}

                                                                        </span>

                                                                    </li>


                                                                    {{-- Remove --}}
                                                                    <li class="px-2 col-auto">

                                                                        <a href="{{ route('cart.remove', $item->rowId) }}"
                                                                        class="text-gray-90 remove-cart-item"
                                                                        data-id="{{ $item->rowId }}">

                                                                            <i class="ec ec-close-remove"></i>

                                                                        </a>

                                                                    </li>

                                                                </ul>

                                                            </div>

                                                        </li>

                                                    @empty

                                                        <li class="text-center py-3">
                                                            No items in cart.
                                                        </li>

                                                    @endforelse

                                                </ul>


                                                {{-- ================= CART FOOTER ================= --}}
                                                <div class="flex-center-between px-4 pt-2">

                                                    <a href="{{ route('cart.view') }}"
                                                    class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5">

                                                        View cart

                                                    </a>

                                                    <a href="{{ route('checkout') }}"
                                                    class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5">

                                                        Checkout

                                                    </a>

                                                </div>
                                                {{-- ================= END CART FOOTER ================= --}}


                                            </div>
                                            {{-- ================= END CART DROPDOWN ================= --}}

                                        </li>
                                        {{-- ================= END DESKTOP CART ================= --}}
                                    </ul>
                                </div>
                            </div>
                            <!-- End Header Icons -->
                        </div>
                    </div>
                </div>
                <!-- End Logo-Search-header-icons -->

                <!-- Vertical-and-secondary-menu -->
                <div class="desktop-navbar-wrapper">
                    <div class="d-none d-xl-block container">
                        <div class="row">
                            <!-- Vertical Menu -->
                            <div class="col-md-auto d-none d-xl-block">
                                <div class="max-width-270 min-width-270">

                                    <!-- All Departments -->
                                    <div id="basicsAccordion">

                                        <div class="card border-0">

                                            <div class="card-header card-collapse border-0"
                                                id="basicsHeadingOne">

                                                <button type="button"
                                                        class="btn-link btn-remove-focus btn-block d-flex
                                                            card-btn py-3 text-lh-1 px-4 shadow-none
                                                            btn-primary rounded-top-lg border-0 font-weight-bold
                                                            text-gray-90"
                                                        data-toggle="collapse"
                                                        data-target="#basicsCollapseOne"
                                                        aria-expanded="true"
                                                        aria-controls="basicsCollapseOne">

                                                    <span class="ml-0 text-gray-90 mr-2">
                                                        <span class="fa fa-list-ul"></span>
                                                    </span>

                                                    <span class="pl-1 text-gray-90">
                                                        All Departments
                                                    </span>

                                                </button>
                                            </div>


                                            <!-- Dynamic Category Menu -->
                                            <div id="basicsCollapseOne"
                                                class="collapse show vertical-menu"
                                                aria-labelledby="basicsHeadingOne"
                                                data-parent="#basicsAccordion">

                                                <div class="card-body p-0">

                                                    <nav class="js-mega-menu navbar navbar-expand-xl
                                                            u-header__navbar u-header__navbar--no-space
                                                            hs-menu-initialized">

                                                        <div id="navBar"
                                                            class="collapse navbar-collapse
                                                                    u-header__navbar-collapse">

                                                            <ul class="navbar-nav u-header__navbar-nav">

                                                                @foreach($categories as $category)

                                                                    <li class="nav-item
                                                                            hs-has-mega-menu
                                                                            u-header__nav-item"
                                                                        data-event="hover"
                                                                        data-animation-in="slideInUp"
                                                                        data-animation-out="fadeOut"
                                                                        data-position="left">

                                                                        <!-- Main Category -->
                                                                        <a class="nav-link u-header__nav-link
                                                                                u-header__nav-link-toggle"
                                                                        href="{{ route('slug.handler', $category->category_slug) }}"
                                                                        aria-haspopup="true"
                                                                        aria-expanded="false">

                                                                            {{ $category->category_name }}

                                                                        </a>


                                                                        @if($category->subcategories->isNotEmpty())

                                                                            <!-- Mega Menu -->
                                                                            <div class="hs-mega-menu
                                                                                        vmm-tfw
                                                                                        u-header__sub-menu">

                                                                                <div class="row
                                                                                            u-header__mega-menu-wrapper">

                                                                                    @foreach($category->subcategories as $sub)

                                                                                        <div class="col mb-3 mb-sm-0">

                                                                                            <!-- Subcategory Title -->
                                                                                            <span class="u-header__sub-menu-title">

                                                                                                <a href="{{ route('slug.handler', $sub->subcategory_slug) }}"
                                                                                                class="text-decoration-none">

                                                                                                    {{ $sub->subcategory_name }}

                                                                                                </a>

                                                                                            </span>


                                                                                            @if($sub->childCategories->isNotEmpty())

                                                                                                <ul class="u-header__sub-menu-nav-group">

                                                                                                    @foreach($sub->childCategories as $child)

                                                                                                        <li>

                                                                                                            <a class="nav-link
                                                                                                                    u-header__sub-menu-nav-link"
                                                                                                            href="{{ route('slug.handler', $child->childcategory_slug) }}">

                                                                                                                {{ $child->childcategory_name }}

                                                                                                            </a>

                                                                                                        </li>

                                                                                                    @endforeach

                                                                                                </ul>

                                                                                            @else

                                                                                                <!-- View All -->
                                                                                                <ul class="u-header__sub-menu-nav-group">

                                                                                                    <li>

                                                                                                        <a class="nav-link
                                                                                                                u-header__sub-menu-nav-link
                                                                                                                border-top pt-2"
                                                                                                        href="{{ route('slug.handler', $sub->subcategory_slug) }}">

                                                                                                            View All
                                                                                                            {{ $sub->subcategory_name }}

                                                                                                        </a>

                                                                                                    </li>

                                                                                                </ul>

                                                                                            @endif

                                                                                        </div>

                                                                                    @endforeach

                                                                                </div>

                                                                            </div>

                                                                        @endif

                                                                    </li>

                                                                @endforeach

                                                            </ul>

                                                        </div>

                                                    </nav>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <!-- End Vertical Menu -->
                            <!-- Secondary Menu -->
                    
                        <div class="col">
                            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">

                                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">

                                    <ul class="navbar-nav u-header__navbar-nav">

                                        {{-- Home --}}
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link"
                                            href="{{ url('/') }}">
                                                Home
                                            </a>
                                        </li>

                                        {{-- About Us --}}
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link"
                                            href="{{ url('about') }}">
                                                About Us
                                            </a>
                                        </li>

                                        {{-- Contact Us --}}
                                        <li class="nav-item u-header__nav-item">
                                            <a class="nav-link u-header__nav-link"
                                            href="{{ url('contact') }}">
                                                Contact Us
                                            </a>
                                        </li>

                                    </ul>

                                </div>
                            </nav>
                        </div>
                            <!-- End Secondary Menu -->
                        </div>
                    </div>
                </div>
                <!-- End Vertical-and-secondary-menu -->
        </div>
    </header>
<!-- ========== END HEADER ========== -->    