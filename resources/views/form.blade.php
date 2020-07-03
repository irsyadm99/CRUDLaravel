@extends('adminlte.master')

@section('content1')

<form action="/pertanyaan" method="POST">
    @csrf
  <div class="form-group">
    <label for="judul">Judul:</label>
    <input type="text" class="form-control" placeholder="Enter Here" id="judul" name="judul">
  </div>
  <div class="form-group">
    <label for="pertanyaan">Pertanyaan:</label>
    <input type="text-area" class="form-control" placeholder="Enter Here" id="pertanyaan" name="pertanyaan">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection