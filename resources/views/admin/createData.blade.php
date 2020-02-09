@extends('admin/index')


@section('judul')
    <p>Create Data</p>
@endsection


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
                  <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
                </select>
              </div>
          </div>
          <div class="form-group">
              <label>Pertanyaan</label>
              <textarea class="form-control" name="pertanyaan"></textarea>
          </div>
          <div class="form-group">
              <label>Jawaban</label>
              <textarea class="form-control" name="jawaban"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
      </form>
  </div>
</div>
@endsection