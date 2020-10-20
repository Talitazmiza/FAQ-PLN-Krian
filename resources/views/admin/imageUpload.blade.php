@extends('admin.index')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

    <!-- call image_upload.css for showing image -->
    <link rel="stylesheet" href="css/image_upload.css">

    <style type="text/css">
        .gallery
        {
            display: inline-block;
            margin-top: 20px;
        }
        .close-icon{
            border-radius: 50%;
            position: absolute;
            right: 5px;
            top: -10px;
            padding: 5px 8px;
        }
        .form-image-upload{
            background: #e8e8e8 none repeat scroll 0 0;
            padding: 15px;
        }
    </style>
</head>

<body>
<div class="container">
    <form action="{{ route('post.imageUpload') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
            @endif

        <!-- <div class="column"> -->
            <div class="col-md-2">
                <strong>Jenis:</strong>
                <select name="title" id="">
                    <option value="Brousr Daftar Instalir Resmi">Brosur Daftar Instalir Resmi</option>
                    <option value="Brosur PLN">Brosur PLN</option>
                    <option value="Jasa SLO">Jasa SLO</option>
                    <!-- <option value="Brosur 4">Brosur 4</option>
                    <option value="Brosur 5">Brosur 5</option>
                    <option value="SLO">SLO</option>
                    <option value="IML">IML</option> -->
                </select>
            </div>
                <br><br><br>
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        <!-- </div> -->
    </form>
        <br>
        <div class="row">
          @if($images->count())
              @foreach($images as $image)
                <div class="column">
                  <div class="card">
                    <div class="container">
                      <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                          <img class="img-responsive" alt="{{ $image->title }}" style="width:200px; height:300px;" src="/images/{{ $image->image }}" >
                      </a>
                    </div>
                    <p style="padding-top: 10px">{{ $image->title }}</p>
                    <div class="container">
                      <form action="{{ route('delete.imageUpload',$image->id) }}" method="POST">
                        <input type="hidden" name="_method" value="delete">
                        {!! csrf_field() !!}
                          <button type="submit" class="btn btn-danger center">Hapus</button>
                      </form>
                    </div>
                  </div>
                </div>
              @endforeach
          @endif
</div> <!-- container / end -->
</body>

<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
@endsection
