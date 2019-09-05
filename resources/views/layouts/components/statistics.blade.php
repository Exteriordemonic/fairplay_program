@php
    $title = $data['title'];
    $stats = $data['statistics'];
@endphp
<section class="section">
    <header class="section__header">
        <h2 class="section__title aos-init" data-aos="fade-up">{{$title}}</h2>
    </header>
    <div class="container">
        @if($stats)
        <ul class="stats">
            @foreach($stats as $item)
            @php
                $bg = $item['img']['ID'];
            @endphp
            <li class="stats__elem" data-aos="fade-up" >
                    {!! image($bg, 'full', 'stats__icon') !!}
                <span class="stats__counter count" data-count>{{$item['subtitle']}}</span>
                <p class="stats__info">{{$item['text']}}</p>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</section>

