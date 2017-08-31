@extends('index')
@section('content')
@if (Auth::guest())
<h1>How did you get here??</h1>
@else
    <main id="notesMain" class="container">
        <h1>NOTES</h1>
        <div class="row">
            <div class="col-md-3">
                <form method="post" action="/notes" class="noteButtons">
                    <ul>
                        @foreach($notesCategoriesArray as $cat)
                            @if ($cat->underneath === 'root')
                                <li><input type="submit" name="noteCategory" value="{{$cat->name}}" /></li>
                            @else
                                <ul>
                                    <li><input type="submit" name="noteCategory" value="{{$cat->name}}" /></li>
                                </ul>
                            @endif
                        @endforeach
                    </ul>
                </form>
            </div>
            <div class="col-md-9">
                @if (! empty($notes))
                    @foreach ($notes as $note)
                        <div class="note">
                            <h1>{{ $note->title}}</h1>
                            <p>{{ $note->note }}<p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </main>
@endif
@endsection

<script type="text/javascript">

</script>
