@extends('admin.index', ['search' => $search])

@section('content')
<style media="screen">
  pre{
    font-family:calibri,arial,sans-serif;
    background-color: inherit; overflow-wrap: break-word;font-size: 16px; ; color: #000000;
    white-space: pre-wrap;
  }
</style>
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
            @foreach($search as $see)
                <tr>
                    <td>{{$see->jenis}}</td>
                    <td style="text-align:left;">{{$see->pertanyaan}}</td>
                    <td style="text-align:left; width:60%;"><pre>{{ $see->jawaban }}</pre></p></td>
                    <td><a href="{{ route('qna.edit', $see->id) }}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{ route('qna.destroy', $see->id)}}" method="post">
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
