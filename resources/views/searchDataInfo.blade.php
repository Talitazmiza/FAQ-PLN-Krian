<?php
    $no = 1;
    $collapse = ["collapseOne", "collapseTwo", "collapseThree", "collapseFour", "collapseFive", "collapseSix"];
?>

@extends('index', ['search' => $search])

@section('content')
<div class="section">
    <div class="container">
       <div class="row">
          <div class="col-xs-12">
             <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <h3 style="text-align: center;">Hasil Dari Yang Anda Masukkan ...</h3>
                      <div class="section-title-divider"></div>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                         <div class="panel panel-default">
                            @foreach ($search as $see)
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="fa fa-link"></i>{{ $see->jenis }}
                                    </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                    <div class="accordion">
                                            <div class="accordion-item">
                                                <a>{{ $see->pertanyaan }}</a>
                                                <div class="content">
                                                <p>{{ $see->jawaban }}</p>
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
