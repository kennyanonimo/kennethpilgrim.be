@extends('index')
@section('content')
@if (Auth::guest())
<h1>How did you get here??</h1>
@else
    <main id="commentsMain" class="container">
        <h1>COMMENTS</h1>
        <div class="row">
            @foreach($commentArray as $comment)
                <div class="col-lg-3">
                    <div id=commentsText>
                        <h2>{{$comment->subject}}</h2>
                        <p>{{$comment->title}} {{$comment->first_name}} {{$comment->last_name}}</p>
                        <p>{{$comment->email}} {{$comment->phone}}</p>
                        <p>{{$comment->comment}}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endif
@endsection