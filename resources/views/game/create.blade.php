@extends('game.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Game</div>
  <div class="card-body">

      <form action="{{ url('game') }}" method="post">
        {!! csrf_field() !!}
        <label>Nama Game</label></br>
        <input type="text" name="nama" id="nama" class="form-control"></br>
        <label>Deskripsi Game</label></br>
        <input type="text" name="deskripsi" id="deskripsi" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
