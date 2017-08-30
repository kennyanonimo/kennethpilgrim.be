@extends('mail_templates.index')
@section('content')
<main id="newComment">
	<h1>{{ $subject }}</h1>
	<p>
		<span>{{ $title }} {{ $firstName }} {{ $lastName }}</span><br>
		<span>{{ $email }}</span><br>
		<span>{{ $phone }}</span>
	</p>
	<p>{{ $comment }}</p>
</main>
@endsection

