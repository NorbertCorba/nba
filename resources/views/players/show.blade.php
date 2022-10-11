@extends('layouts.master')

@section('title', $player->first_name)

@section('content')


<h3> Name: {{ $player->first_name }} {{ $player->last_name }} </h3>

<h3> Email: {{ $player->email }}</h3>


<h3> Team: <a href = "/teams/{{ $player->team->id}}">{{ $player->team->name }}  </a> </h3>


@endsection