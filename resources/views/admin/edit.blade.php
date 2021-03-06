@extends('admin.index')

@section('judul')
    <p>Edit Data</p>
@endsection

@section('content')
<div class="card uper">
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

    <form action="{{ route('qna.update',$qna->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label>Jenis</label>
            <div class="form-group">
                @if ($qna->jenis == 'Pasang Baru')
                    <select name="jenis">
                        <option value="Pasang Baru" selected>Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="SLO">SLO</option>
                        <option value="IML">IML</option>
                        <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @elseif ($qna->jenis == 'Perubahan Daya')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya" selected>Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="SLO">SLO</option>
                        <option value="IML">IML</option>
                        <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @elseif ($qna->jenis == 'Balik Nama')
                <select name="jenis">
                    <option value="Pasang Baru">Pasang Baru</option>
                    <option value="Perubahan Daya">Perubahan Daya</option>
                    <option value="Balik Nama" selected>Balik Nama</option>
                    <option value="Pesta">Pesta</option>
                    <option value="SLO">SLO</option>
                    <option value="IML">IML</option>
                    <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                </select>
                @elseif ($qna->jenis == 'Pesta')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta" selected>Pesta</option>
                        <option value="SLO">SLO</option>
                        <option value="IML">IML</option>
                        <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @elseif ($qna->jenis == 'SLO')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="SLO" selected>SLO</option>
                        <option value="IML">IML</option>
                        <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @elseif ($qna->jenis == 'IML')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="SLO">SLO</option>
                        <option value="IML" selected>IML</option>
                        <option value="Geser">Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @else
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="SLO">SLO</option>
                        <option value="IML">IML</option>
                        <option value="Geser" selected>Geser Meter/Geser Tiang/Geser SR</option>
                    </select>
                @endif
            </div>
        </div>
        <div class="form-group">
            <label>Pertanyaan</label>
            <textarea class="form-control" name="pertanyaan">{{ $qna->pertanyaan }}</textarea>
        </div>
        <div class="form-group">
            <label>Jawaban</label>
            <textarea style="height:300px;" class="form-control" name="jawaban">{{ $qna->jawaban }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>

    </form>
  </div>
</div>
@endsection
