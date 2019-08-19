@php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
@endphp

<header class="header" header>
  <div class="container">
    <div class="row">
      <div class="col header__wrapper">
        <a class="header__brand" href="{{ home_url('/') }}">
          
        </a>
        <button class="header__hamburger hamburger" data-toggle-menu>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
          <span class="hamburger__line"></span>
        </button>
        <nav class="header__nav" data-nav>
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'header__menu']) !!}
          @endif
          <ul class="social-media">
            <li class="social-media__item">
              <a href="#" class="social-media__link">
                <span class="social-media__icon">
                  facebook
                </span>
              </a>
            </li>
            <li class="social-media__item">
              <a href="#" class="social-media__link">
                <span class="social-media__icon">
                  instagram
                </span>
              </a>
            </li>
            <li class="social-media__item">
              <a href="#" class="social-media__link">
                <span class="social-media__icon">
                  mail
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</header>
