@extends('index')
@section('content')
<main id="cvMain" class="container">
    <div class="row">
        <div class="col-md-2">
            <nav id="cvButtons" class="navbar navbar-default">
                <button class="btn btn-default filter-button" data-filter="development">Development</button>
                <br class="break">
                <button class="btn btn-default filter-button" data-filter="cms">Framework / CMS</button>
                <br class="break">
                <button class="btn btn-default filter-button" data-filter="devOps">DevOps</button>
                <br class="break">
                <button class="btn btn-default filter-button" data-filter="os">OS</button>
                <br class="break">
                <button class="btn btn-default filter-button" data-filter="linux">Linux</button>
                <br class="break">
                <button class="btn btn-default filter-button" data-filter="windows">Windows</button>
            </nav>
        </div>
        <div id="cvSkills"  class="col-md-8">
            @foreach($devList as $skill)
                <button class="btn btn-default filter development">{{$skill->skill}}</button>
            @endforeach
            @foreach($cmsList as $skill)
                <button class="btn btn-default filter cms">{{$skill->skill}}</button>
            @endforeach
            @foreach($devopsList as $skill)
                <button class="btn btn-default filter devOps">{{$skill->skill}}</button>
            @endforeach
            @foreach($osList as $skill)
                <button class="btn btn-default filter os">{{$skill->skill}}</button>
            @endforeach
            @foreach($linuxList as $skill)
                <button class="btn btn-default filter linux">{{$skill->skill}}</button>
            @endforeach
            @foreach($windowsList as $skill)
                <button class="btn btn-default filter windows">{{$skill->skill}}</button>
            @endforeach
        </div>
    </div>
</main>
@endsection
