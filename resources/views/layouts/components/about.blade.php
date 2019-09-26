@php
    $title = $data['title'];
    $subtitle = $data['subtitle'];
    $text = $data['text'];
    $url = $data['link']['url'];
@endphp
<section class="section">
    <div class="container">
        <header class="section__header">
            <h2 class="section__title">{{$title}}</h2>
        </header>
        <article class="article">
            <div class="wrapper">
                <h3 class="wrapper__desc">{{$subtitle}}</h3>
                <p class="wrapper__content">{{$text}}</p>
            </div>
            <iframe src="{{$url}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"class="video" allowfullscreen></iframe>
        </article>
    </div>
</section>
