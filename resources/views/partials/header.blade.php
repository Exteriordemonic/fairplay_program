@php    
  $phone = get_field('phone','options');
  $mail = get_field('mail','options'); 

  $sm = get_field('icons');
@endphp

<header class="header" data-header>
  <div class="container">
    <div class="header__wrapper">
      <a class="header__brand" href="{{ home_url('/') }}">
        <img class="header__logo" src="@asset('images/logo-edited.png')" alt="Fair Play logo">
      </a>
      <button class="hamburger" data-toggle-menu>
        <span class="hamburger__line hamburger__line--first"></span>
        <span class="hamburger__line hamburger__line--second"></span>
        <span class="hamburger__line hamburger__line--third"></span>
      </button>
      <nav class="header__nav" data-nav>
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'menu']) !!}
        @endif
        <ul class="social-media">
          <li class="social-media__item">
            <a href="#" class="social-media__link">
                <i class="social-media__icon fab fa-facebook-square"></i>
            </a>
          </li>
          <li class="social-media__item">
            <a href="#" class="social-media__link">
                <i class="social-media__icon fab fa-instagram"></i>
            </a>
          </li>
          <li class="social-media__item">
            <a href="#" class="social-media__link">
                <i class="social-media__icon fas fa-envelope"></i>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </div>
</header>
