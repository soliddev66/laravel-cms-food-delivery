<nav id="navbar-main" class="navbar navbar-light navbar-expand-lg fixed-top">
  <div class="container">
      <a class="navbar-brand mr-lg-5" href="/">
        <img src="{{ config('global.site_logo') }}">
      </a>
      @if( request()->get('location') )
        <span style="z-index: 10" class="">{{ __('DELIVERING TO')}} :  <b>{{request()->get('location')}}</b></span> <a   data-toggle="modal"  href="#locationset"><span class="ml-sm-2 search description">({{ __('change')}})</span></a>
      @endif
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">

          @if (!config('settings.single_mode')&&config('settings.restaurant_link_register_position')=="navbar")
            <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="{{ route('newrestaurant.register') }}">{{ __(config('settings.restaurant_link_register_title')) }}</a>
            </li>
          @endif
          @if (config('app.isft')&&config('settings.driver_link_register_position')=="navbar")
          <li class="nav-item">
              <a data-mode="popup" target="_blank" class="button nav-link nav-link-icon" href="{{ route('driver.register') }}">{{ __(config('settings.driver_link_register_title')) }}</a>
            </li>
            @endif
          @if(!empty(config('global.facebook')))
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{ config('global.facebook') }}" target="_blank" data-toggle="tooltip" title="{{ __('Like us on Facebook') }}">
              <i class="fa fa-facebook-square"></i>
              <span class="nav-link-inner--text d-lg-none">{{ __('Facebook') }}</span>
            </a>
          </li>
          @endif
          @if(!empty(config('global.instagram')))
          <li class="nav-item">
            <a class="nav-link nav-link-icon" href="{{ config('global.instagram') }}" target="_blank" data-toggle="tooltip" title="{{ __('Follow us on Instagram') }}">
              <i class="fa fa-instagram"></i>
              <span class="nav-link-inner--text d-lg-none">{{ __('Instagram') }}</span>
            </a>
          </li>
          @endif
          @yield('addiitional_button_1')
          @yield('addiitional_button_2')
          <ul class="navbar-nav navbar-nav-hover align-items-lg-center navbar-custom-menu">
            <li class="web-menu">
              @if(\Request::route()->getName() != "cart.checkout")
                <a  id="desFacebookLink" onclick="#" style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-facebook"></i> -->
                    <img src="{{ asset('images') }}/icons/facebook.svg">
                  </span>
                </a>
                <a  id="desInstagramLink" onclick="#" style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-instagram"></i> -->
                    <img src="{{ asset('images') }}/icons/instagram.svg">
                  </span>
                </a>
                <a  id="desCartLink" onclick="openNav()"  style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-shopping-cart"></i> -->
                    <img src="{{ asset('images') }}/icons/shopping-cart.svg">
                  </span>
                </a>
              @endif

            </li>
            <li class="mobile-menu">
              @yield('addiitional_button_1_mobile')
              @yield('addiitional_button_2_mobile')
              @if(\Request::route()->getName() != "cart.checkout")
                <a  id="desFacebookLink" onclick="#" style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-facebook"></i> -->
                    <img src="{{ asset('images') }}/icons/facebook.svg">
                  </span>
                </a>
                <a  id="desInstagramLink" onclick="#" style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-instagram"></i> -->
                    <img src="{{ asset('images') }}/icons/instagram.svg">
                  </span>
                </a>
                <a  id="desCartLink" onclick="openNav()"  style="cursor:pointer;">
                  <span class="btn-inner--icon">
                    <!-- <i class="fa fa-shopping-cart"></i> -->
                    <img src="{{ asset('images') }}/icons/shopping-cart.svg">
                  </span>
                </a>
              @endif
            </li>
            <li class="nav-item dropdown">
                @auth()
                    @include('layouts.menu.partials.auth')
                @endauth
                @guest()
                    @include('layouts.menu.partials.guest')
                @endguest
            </li>
          </ul>
        </ul>
      </div>
    </div>

  </nav>
