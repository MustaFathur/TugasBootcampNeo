@extends('game.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Game Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama Game    : {{ $game->nama }}</h5>
        <p class="card-text">Deskripsi Game : {{ $game->deskripsi }}</p>
  </div>
    </hr>
  </div>
</div>
