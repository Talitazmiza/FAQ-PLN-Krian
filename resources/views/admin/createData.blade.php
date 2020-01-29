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
                <select name="jenis">
                  <option value="Pasang Baru">Pasang Baru</option>
                  <option value="Tambah Daya">Tambah Daya</option>
                  <option value="Pesta">Pesta</option>
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