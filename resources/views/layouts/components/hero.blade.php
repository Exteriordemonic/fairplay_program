@php
    $title = $data['hero'];
    $bg = $data['background_image']['ID'];
@endphp
<section class="hero">
    {!! image($bg, 'full', 'hero__image') !!}
    <div class="container">
        <h2 class="hero__slogan">
            {!!$title!!}
        </h2>
    </div>
</section>
