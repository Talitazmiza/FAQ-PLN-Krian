<?php
    $qnaPasangBaru = DB::table('qna')->select('pertanyaan','jawaban')->where('jenis', 'Pasang Baru')->get();
    $qnaPesta = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Pesta')->get();
    $qnaPerubahanDaya = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Perubahan Daya')->get();
    $qnaBalikNama = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Balik Nama')->get();
    $qnaGeser = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Geser')->get();
?>

@extends('index')

@section('content')
<div class="section">
    <div class="container">
       <div class="row">
          <div class="col-xs-12">
             <div class="container">
                <div class="row">
                   <div class="col-md-12">
                      <h3 style="text-align: center;">Pertanyaan Yang Sering Diajukan</h3>
                      <div class="section-title-divider"></div>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                               <h4 class="panel-title">
                                  <a class="" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  <i class="fa fa-bars"></i>Pasang baru
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                               <div class="panel-body">
                                  <div class="accordion">
                                     @foreach($qnaPasangBaru as $pasangBaru)
                                        <div class="accordion-item">
                                           <a>{{ $pasangBaru->pertanyaan }}</a>
                                           <div class="content">
                                              <p>{{ $pasangBaru->jawaban }}</p>
                                           </div>
                                        </div>
                                     @endforeach
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                               <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                  <i class="fa fa-link"></i>Perubahan Daya
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                               <div class="panel-body">
                                  <div class="accordion">
                                     @foreach($qnaPerubahanDaya as $perubahanDaya)
                                        <div class="accordion-item">
                                           <a>{{ $perubahanDaya->pertanyaan }}</a>
                                           <div class="content">
                                              <p>{{ $perubahanDaya->jawaban }}</p>
                                           </div>
                                        </div>
                                     @endforeach
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                               <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  <i class="fa fa-comment"></i>Penyambungan Sementara
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                               <div class="panel-body">
                                  <div class="accordion">
                                     @foreach($qnaPesta as $pesta)
                                        <div class="accordion-item">
                                           <a>{{ $pesta->pertanyaan }}</a>
                                           <div class="content">
                                              <p>{{ $pesta->jawaban }}</p>
                                           </div>
                                        </div>
                                     @endforeach
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFour">
                               <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  <i class="fa fa-link"></i>SLO
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                               <div class="panel-body">
                                  <div class="accordion">
                                     <div class="accordion-item">
                                        <a>Ilustrasi alur SLO</a>
                                     </div>
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                               <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                  <i class="fa fa-comment"></i>Balik Nama
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                               <div class="panel-body">
                                  <div class="accordion">
                                     @foreach($qnaBalikNama as $balikNama)
                                        <div class="accordion-item">
                                           <a>{{ $balikNama->pertanyaan }}</a>
                                           <div class="content">
                                              <p>{{ $balikNama->jawaban }}</p>
                                           </div>
                                        </div>
                                     @endforeach
                                  </div>
                               </div>
                            </div>
                         </div>
                         <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                               <h4 class="panel-title">
                                  <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                  <i class="fa fa-bars"></i>Geser Meter/Geser Tiang/Geser SR
                                  </a>
                               </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                               <div class="panel-body">
                                  <div class="accordion">
                                     @foreach($qnaGeser as $geser)
                                        <div class="accordion-item">
                                           <a>{{ $geser->pertanyaan }}</a>
                                           <div class="content">
                                              <p>{{ $geser->jawaban }}</p>
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
       </div>
    </div>
 </div>
@endsection