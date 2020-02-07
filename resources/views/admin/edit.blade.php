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
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
                    </select>
                @elseif ($qna->jenis == 'Perubahan Daya')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
                    </select>
                @elseif ($qna->jenis == 'Balik Nama')
                <select name="jenis">
                    <option value="Pasang Baru">Pasang Baru</option>
                    <option value="Perubahan Daya">Perubahan Daya</option>
                    <option value="Balik Nama">Balik Nama</option>
                    <option value="Pesta">Pesta</option>
                    <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
                </select>
                @elseif ($qna->jenis == 'Pesta')
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
                    </select>
                @else
                    <select name="jenis">
                        <option value="Pasang Baru">Pasang Baru</option>
                        <option value="Perubahan Daya">Perubahan Daya</option>
                        <option value="Balik Nama">Balik Nama</option>
                        <option value="Pesta">Pesta</option>
                        <option value="Geser Meter/Geser Tiang/Geser Sr">Geser Meter/Geser Tiang/Geser Sr</option>
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
            <textarea class="form-control" name="jawaban">{{ $qna->jawaban }}</textarea>
        </div>        
        
        <button type="submit" class="btn btn-primary">Edit Data</button>
        </div>
   
    </form>
  </div>
</div>
@endsection