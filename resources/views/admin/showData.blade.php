<?php
    $qna = DB::table('qna')->select('id', 'jenis', 'pertanyaan', 'jawaban')->get();
    $kind = ["Pasang Baru", "Perubahan Daya", "Balik Nama", "Pesta", "Geser"];
?>

@extends('admin/index')

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
    @foreach($kind as $value)
        <a href="{{ route('get.dataInfo',$value) }}" class="btn btn-info">{{ $value }}</a>&nbsp&nbsp
    @endforeach
    <br><br>
    @yield('showdata')
    
@endsection