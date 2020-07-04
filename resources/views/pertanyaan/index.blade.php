@extends('adminlte.master')

@section('content1')

<div class="ml-3 mt-3">
  <h1>Daftar Pertanyaan</h1>
  <a href="/pertanyaan/create" class="btn btn-primary">
    Buat Pertanyaan Baru
    </a>
</div>

<table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>Judul Pertanyaan</th>
        <th>Isi Pertanyaan</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($items as $key => $item)
      <tr>
        <td><a href="/jawaban">{{ $item->judul }}</a></td>
        <td>{{ $item->pertanyaan }}</td>
        <td>
            <a href="/pertanyaan/{{ $item->id }}" class="btn btn-sm btn-info">Detail</a>
            <a href="/pertanyaan/{{$item->id}}/edit" class="btn btn-sm btn-primary">Edit</a>
            <form action="/pertanyaan/{{ $item->id }}" method="POST" style="display:inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>            
            </form>
        </td>
      </tr>
    @endforeach  
    </tbody>
  </table>

@endsection