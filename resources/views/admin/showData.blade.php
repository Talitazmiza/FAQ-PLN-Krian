@extends('admin/index')

@section('content')
@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
  @endif
  <h1>Selamat Datang di CRUD Laravel 6</h1>
  <a href="{{ route('qna.create')}}" class="btn btn-primary">Tambah</a></td><br><br>
  <table class="table table-striped border text-center">
    <thead>
        <tr>
          <td>No</td>
          <td>Jenis</td>
          <td>Pertanyaan</td>
          <td>Jawaban</td>
          <td colspan="2">Kelola Data</td>
        </tr>
    </thead>
    <tbody>
        @foreach($qna as $qnashow)
        <tr>
            <td>{{$qnashow->id}}</td>
            <td>{{$qnashow->pertanyaan}}</td>
            <td>{{$qnashow->jawaban}}</td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection