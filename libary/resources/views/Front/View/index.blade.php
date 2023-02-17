@extends('layouts.app')
@section('title', 'Event')
@section('content')
    @include('Front.Common.top')
    @include('Front.Common.sidebar')
    @include('Front.Common.header')
    @include('Front.View.Components.homeSlider')
    @include('Front.View.Components.Charity')
    @include('Front.View.Components.Children')
    @include('Front.View.Components.Appeals')
    @include('Front.View.Components.Goals')
    @include('Front.View.Components.Donate')
    @include('Front.View.Components.Upcoming')


    @include('Front.Common.footer')
@endsection
