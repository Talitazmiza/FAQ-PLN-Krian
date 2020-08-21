<?php
    $value = DB::table('qna')->select('id','jenis', 'pertanyaan', 'jawaban')->where('jenis', $jenis ?? '')->get();
    $kind = ["Pasang Baru", "Perubahan Daya", "Balik Nama", "Pesta", "Geser"];
?>

@extends('admin.index')

@section('content')
    @foreach($kind as $k)
        <a href="{{ route('get.dataInfo',$k) }}" class="btn btn-info">{{ $k }}</a>&nbsp&nbsp
    @endforeach
    <br><br>
    <table class="table table-striped border text-center">
        <thead>
            <tr>
                <td>Jenis</td>
                <td>Pertanyaan</td>
                <td>Jawaban</td>
                <td colspan="2">Kelola Data</td>
            </tr>
        </thead>
        <tbody>
            @foreach($value as $qnashow)
                <tr>
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
