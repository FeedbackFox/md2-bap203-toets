@extends('layouts.master')

@section('content')

@foreach ($links as $link)

<a href="{{ $link->url }}"><h3>{{ $link->title }}</h3></a>
<p>{{ $link->description }}</p>


@endforeach

@endsection