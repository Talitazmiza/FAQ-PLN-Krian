@extends('admin/index')

@section('judul')
    <p>Upload Files</p>
@endsection

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="css/up.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<form method="post" action="{{ route('qna.store') }}">
<div class="row">
    <div class="col s12">
        <!-- Uploader Dropzone -->
        <div id="zdrop" class="fileuploader ">
            <div id="upload-label" style="width: 200px;">
                <span class="title">Drag your Files here</span>
                <span>Some description here <span/>
            </div>
        </div>
        <!-- Preview collection of uploaded documents -->
        <div class="preview-container">
            <div class="header">
                <span>Uploaded Files</span>	
                <i id="controller" class="material-icons">keyboard_arrow_down</i>
            </div>
            <div class="collection card" id="previews">
                <div class="collection-item clearhack valign-wrapper item-template" id="zdrop-template">
                    <div class="left pv zdrop-info" data-dz-thumbnail>
                        <div>
                            <span data-dz-name></span> <span data-dz-size></span>
                        </div>
                        <div class="progress">
                            <div class="determinate" style="width:0" data-dz-uploadprogress></div>
                        </div>
                        <div class="dz-error-message"><span data-dz-errormessage></span></div>
                    </div>

                    <div class="secondary-content actions">
                        <a href="#!" data-dz-remove class="btn-floating ph red white-text waves-effect waves-light"><i class="material-icons white-text">clear</i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form>

    <script type="text/javascript" href="js/up.js"></script>
    </div>
@endsection
