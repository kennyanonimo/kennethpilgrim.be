@extends('layouts.kp')

@section('header')
    @include('layouts.header')
@endsection

@section('main')
    @yield('content')
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
