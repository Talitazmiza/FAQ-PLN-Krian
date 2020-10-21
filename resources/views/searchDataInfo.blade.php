<?php
    $no = 1;
    $collapse = ["collapseOne", "collapseTwo", "collapseThree", "collapseFour", "collapseFive", "collapseSix"];
?>

@extends('index', ['search' => $search])

@section('content')
<style media="screen">
  pre{
    font-family:calibri,arial,sans-serif;
    background-color: inherit; overflow-wrap: break-word;font-size: 16px; ; color: #000000;

  }
</style>

<div class="section">
    <div class="container">
       <div class="row">
          <div class="col-xs-12">
             <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <h3 style="text-align: center; color:black;">Hasil Dari Yang Anda Masukkan ...</h3>
                      <div class="section-title-divider"></div>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                         <div class="panel panel-default">
                            @foreach ($search as $see)
                                <div>
                                    <div class="panel-body">
                                    <div class="accordion">
                                            <div class="accordion-item">
                                                <a style="color: black;"><b>{{ $see->pertanyaan }}</b> ({{ $see->jenis }})</a>
                                                <div class="content">
                                                <pre>{{ $see->jawaban }}</pre>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
                                </div>
                            @endforeach
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
@endsection
