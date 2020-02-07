@extends('admin/index')


@section('judul')
    <p>Upload</p>
@endsection


@section('content')
<html>
<head>
	<title>Upload Javascript</title>
 
	<!-- Javascript -->
	<script type="text/javascript">
	  var loadFile = function(event) {
	    var output = document.getElementById('output');
	    output.src = URL.createObjectURL(event.target.files[0]);
	  };
	</script>
 
</head>
<body>
	
	<!-- image preview -->
	<img id="output"/ height="150" width="150">
 
	<form action="{{ route('post.upload') }}" method="POST">
		<input type="file" accept="image/*" onchange="loadFile(event)" name="file" required="required">
        <br>
        <input type="submit" name="submit" value="UPLOAD">
	</form>
 
	<ol style='font-style: italic; font-size: 12px; color: red;'>
		<li>Pilih File (browse)</li>
		<li>File yang diperbolehkan - <b>images(jpeg,jpg,png).</b></li>
		<li>File kurang dari 100kb</li>
	</ol>
</body>
</html>
@endsection
