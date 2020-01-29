@extends('admin/index')

@section('content')
<<<<<<< HEAD
    <p>BERHASIL</p>
=======
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
                <td>{{$qnashow->jenis}}</td>
                <td>{{$qnashow->pertanyaan}}</td>
                <td>{{$qnashow->jawaban}}</td>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
>>>>>>> 801dec7c73d515d04934ce6f558a8e5a7436b322
@endsection