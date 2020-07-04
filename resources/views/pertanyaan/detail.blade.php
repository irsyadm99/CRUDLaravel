@extends('adminlte.master')

@section('content1')
<div class="card ml-3 mt-3 mr-3">
  <div class="card-body">
    <h3 class="card-title">{{ $items->judul }}</h3><br>
    <p class="card-text">{{ $items->pertanyaan }}</p>
  </div>
</div>

<div class="card ml-3 mt-3 mr-3">
  <div class="card-body">
    <h3 class="card-title">Jawaban</h3><br>
    <p class="card-text">-{{ $items->pertanyaan }}</p>
  </div>
</div>

<form action="/jawaban" method="POST">
    @csrf
<div class="form-group ml-3 mr-3">
    <label for="jawab">Jawab:</label>
    <input type="text" class="form-control" placeholder="Enter Here" id="jawab" name="isi">
  </div>
</form>

@endsection