@extends('mail_templates.mail')
@section('main')
    @yield('content')
@endsection
@section('footer')
    @include('mail_templates.mailfooter')
@endsection
