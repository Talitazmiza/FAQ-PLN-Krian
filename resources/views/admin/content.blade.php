@extends('admin/index')

@section('content')
<div class="card uper">
  <div class="card-header">
    Form Tambah Data
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br/>
    @endif
        @csrf
          <div class="form-group">
              <label>Jenis</label>
              <div class="form-group">
                <input type="radio" name="jenis" value="pasangBaru"> Pasang Baru<br>
                <input type="radio" name="jenis" value="tambahDaya"> Tambah Daya <br>
                <input type="radio" name="jenis" value="pesta"> Pesta
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