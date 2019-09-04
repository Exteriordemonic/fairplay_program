@php
    $title = $data['title'];
    $milestones = $data['milestones'];
@endphp
<section class="milestones">
    <div class="container">
        <header class="milestones__header">
            <h2 class="milestones__title aos-init" data-aos="fade-up">{{$title}}</h2>
        </header>
        @if ($milestones)
        <ul class="milestone">
            @foreach ($milestones as $item)

                @if ($item['add_text'])
                <li class="milestone__part 
                @if($loop->index % 2 == 1) milestone__part--right  @endif 
                aos-init" 
                data-aos="fade-up">
                    <div class="milestone__marker"></div>
                        <div class="milestone__content">
                        <h3 class="milestone__subtitle">
                            {{$item['subtitle']}}
                        </h3>
                        <p class="milestone__text">
                            {{$item['text']}}
                        </p>
                    </div>
                </li>

                @else
                <li class="milestone__part milestone__part--special @if($loop->last) milestone__part--last  @endif aos-init" data-aos="fade-up">
                    <div class="milestone__marker milestone__marker--special @if($loop->last) milestone__marker--last  @endif"></div>
                    <div class="milestone__content @if($loop->last) milestone__content--last  @endif ">
                        <h3 class="milestone__subtitle">{{$item['subtitle']}}</h3>
                    </div>
                    <div class="milestone__content milestone__content--special">
                    <h3 class="milestone__subtitle milestone__subtitle--red">{{$item['subtitle2']}}</h3>
                    </div>
                </li>

                @endif

            @endforeach
            
            {{-- <li class="milestone__part milestone__part--right aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--right">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--left aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--left">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--right aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--right">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--left aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--left">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--special aos-init" data-aos="fade-up">
                <div class="milestone__marker--special"></div>
                <div class="milestone__content milestone__content--last">
                    <h3 class="milestone__subtitle"></h3>
                </div>
                <div class="milestone__content milestone__content--special">
                    <h3 class="milestone__subtitle milestone__subtitle--red"></h3>
                </div>
            </li> --}}
        </ul>
        @endif
        {{-- <ul class="milestone">
            <li class="milestone__part milestone__part--left aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--left">
                <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--right aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--right">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--left aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--left">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--right aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--right">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--left aos-init" data-aos="fade-up">
                <div class="milestone__marker"></div>
                <div class="milestone__content milestone__content--left">
                    <h3 class="milestone__subtitle"></h3>
                    <p class="milestone__text"></p>
                </div>
            </li>
            <li class="milestone__part milestone__part--special aos-init" data-aos="fade-up">
                <div class="milestone__marker--special"></div>
                <div class="milestone__content milestone__content--last">
                    <h3 class="milestone__subtitle"></h3>
                </div>
                <div class="milestone__content milestone__content--special">
                    <h3 class="milestone__subtitle milestone__subtitle--red"></h3>
                </div>
            </li>
        </ul> --}}
    </div>
</section>

@dump($data)