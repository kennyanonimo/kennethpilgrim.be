@extends('index')
@section('content')
@if (Auth::guest())
<h1>How did you get here??</h1>
@else
<main id="dashMain" class="container">
    <div class="row">
        <div class="col-lg-12">
            <div id=dashText>
                <h1>DASHBOARD</h1>
            </div>
        </div>
    </div>
</main>
@endif
@endsection
