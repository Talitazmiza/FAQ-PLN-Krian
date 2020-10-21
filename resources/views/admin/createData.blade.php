@extends('admin.index')

<?php
    $qna = DB::table('qna')->select('id', 'jenis', 'pertanyaan', 'jawaban')->get();
?>

@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div><br/>
    @endif
    @if(session()->get('successCreateData'))
        <div class="alert alert-success">
        {{ session()->get('successCreateData') }}
        </div><br/>
    @endif

    <div class="card uper">
    <div class="card-body">
        <form method="post" action="{{ route('qna.store') }}">
            @csrf
            <div class="form-group">
                <label>Jenis</label>
                <div class="form-group">
                    <select name="jenis">
                    <option value="Pasang Baru">Pasang Baru</option>
                    <option value="Perubahan Daya">Perubahan Daya</option>
                    <option value="Balik Nama">Balik Nama</option>
                    <option value="Pesta">Pesta</option>
                    <option value="SLO">SLO</option>
                    <option value="IML">IML</option>
                    <option value="Geser">Geser Meter/Geser Tiang/Geser Sr</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Pertanyaan</label>
                <textarea class="form-control" name="pertanyaan"></textarea>
            </div>
            <div class="form-group">
                <label>Jawaban</label>
                <textarea style="height:300px;" class="form-control" name="jawaban"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
    </div>
    </div>

    <br><br>

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


    <br><br>
@endsection
