@extends('adminlte.master')

@section('content1')

<table class="table table-striped">
    <thead>
      <tr>
        <th>Judul Pertanyaan</th>
        <th>Isi Pertanyaan</th>
      </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
      <tr>
        <td><a href="/jawaban">{{ $item->judul }}</a></td>
        <td>{{ $item->pertanyaan }}</td>
      </tr>
    @endforeach  
    </tbody>
  </table>

@endsection