{{--
  Template Name: Custom Template
--}}

@extends('layouts.app')

  @section('content')
  
  {{-- @include('layouts.components.hero')

  @include('layouts.components.about')

  @include('layouts.components.map-section ')

  @include('layouts.components.milestones')

  @include('layouts.components.statistics')

  @include('layouts.components.cooperation')

  @include('layouts.components.footer') --}}

  @php $sections = get_field('components') @endphp

  @if($sections)
    @foreach ($sections as $section)
      @php ($sectionName = $section['acf_fc_layout']) @endphp

        @include('layouts.components.' . $sectionName, ['data'=>$section])
    @endforeach
  @endif

@endsection
