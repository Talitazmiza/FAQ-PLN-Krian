@extends('admin/index')

@section('judul')
    <p>Show Data</p>
@endsection

@section('content')
    @if(session()->get('successUpdate'))
        <div class="alert alert-success">
        {{ session()->get('successUpdate') }}  
        </div><br/>
    @endif
    @if(session()->get('successDelete'))
        <div class="alert alert-success">
        {{ session()->get('successDelete') }}  
        </div><br/>
    @endif
    <a href="{{ route('qna.create')}}" class="btn btn-primary">Tambah Data</a></td><br><br>
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
                <td><a href="{{ route('qna.edit', $qnashow->id) }}" class="btn btn-warning">Edit</a></td>
                <td>
                <form action="{{ route('qna.destroy', $qnashow->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection