@extends('layouts.master')
@extends('partials.header')


@section('title', 'Teams')

@section('content')

<h1>Teams:</h1>
@foreach ($teams as $team)
{{-- @dd($team) --}}

<h3> <a href="/teams/{{ $team->id }}"> {{ $team->name }}</a></h3>

@endforeach

@endsection