@php
    $title = $data['title'];
    $images = $data['cooperation'];
@endphp
<section class="section">
    <header class="section__header">
        <h2 class="section__title">{{$title}}</h2>
    </header>
    @if($images)
    <ul class="slider carousel">
        @foreach ($images as $image)
        @php
        $bg = $image['img']['ID'];
    @endphp
        <li class="slider__elem carousel-cell">
            <a href="" class="slider__link">
                    {!! image($bg, 'full', 'slider__image') !!}
            </a>
        </li>
        @endforeach
    </ul>
    @endif
</section>
