@extends('game.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edit Data Game</div>
  <div class="card-body">

      <form action="{{ url('game/' .$game->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$game->id}}" id="id" />
        <label>Nama Game</label></br>
        <input type="text" name="nama" id="nama" value="{{$game->nama}}" class="form-control"></br>
        <label>Deskripsi Game</label></br>
        <input type="text" name="deskripsi" id="deskripsi" value="{{$game->deskripsi}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
