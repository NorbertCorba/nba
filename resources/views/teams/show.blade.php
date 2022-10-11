@extends('layouts.master')

@section('title', $team->name)

@section('content')


<h3> Name: {{ $team->name }}</h3>
<h3> Email: {{ $team->email }}</h3>

<h3> Address: {{ $team->address }}</h3>

<h3> City: {{ $team->city }}</h3>

@foreach ($team->players as $player)
    
<h3> Players: <a href= "/players/{{ $player->id }}">{{ $player->first_name }} {{ $player->last_name }}</a> </h3>

@endforeach


@endsection