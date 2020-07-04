@extends('adminlte.master')

@section('content1')

<form action="/pertanyaan/{$items->id}" method="POST">
    @csrf
    @method('put')

  <div class="form-group ml-3 mr-3">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Enter Here" id="judul" name="judul" value="{{ $items->judul }}">
  </div>
  <div class="form-group ml-3 mr-3">
    <label for="pertanyaan">Pertanyaan:</label>
    <input type="text-area" class="form-control" placeholder="Enter Here" id="pertanyaan" name="pertanyaan" value="{{ $items->pertanyaan }}">
  </div>
  <button type="submit" class="btn btn-primary ml-3 mr-3">Edit</button>
</form>


@endsection