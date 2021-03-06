<?php
    $qnaPasangBaru = DB::table('qna')->select('pertanyaan','jawaban')->where('jenis', 'Pasang Baru')->get();
    $qnaPesta = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Pesta')->get();
    $qnaPerubahanDaya = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Perubahan Daya')->get();
    $qnaBalikNama = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Balik Nama')->get();
    $qnaGeser = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Geser')->get();
    $qnaSLO = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'SLO')->get();
    $qnaIML = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'IML')->get();

    $brosur_Daftar_Instalir_Resmi = DB::table('upload_images')->select('title', 'image')->where('title', 'Brosur Daftar Instalir Resmi')->get();
    $brosur_PLN = DB::table('upload_images')->select('title', 'image')->where('title', 'Brosur PLN')->get();
    $Jasa_SLO = DB::table('upload_images')->select('title', 'image')->where('title', 'Jasa SLO')->get();
?>


@extends('index')

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
                      <h3 style="text-align: center;">Pertanyaan Yang Sering Diajukan</h3>
                      <div class="section-title-divider"></div>
                      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingOne">
                                  <h4 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                          <i class="fa fa-comment"></i>Pasang Baru
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                  <div class="panel-body">
                                      <div class="accordion">
                                          @foreach($qnaPasangBaru as $pasangBaru)
                                              <div class="accordion-item">
                                                  <a style="color : black">{{ $pasangBaru->pertanyaan }}</a>
                                                  <div class="content">
                                                      <pre>{{ $pasangBaru->jawaban }}</pre>
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
                                          <i class="fa fa-comment"></i>Perubahan Daya
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                  <div class="panel-body">
                                      <div class="accordion">
                                          @foreach($qnaPerubahanDaya as $perubahanDaya)
                                              <div class="accordion-item">
                                                  <a style="color : black">{{ $perubahanDaya->pertanyaan }}</a>
                                                  <div class="content">
                                                      <pre>{{ $perubahanDaya->jawaban }}</pre>
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
                                          <i class="fa fa-comment"></i>Penyambungan Sementara (Pesta)
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                  <div class="panel-body">
                                      <div class="accordion">
                                          @foreach($qnaPesta as $pesta)
                                              <div class="accordion-item">
                                                  <a style="color : black">{{ $pesta->pertanyaan }}</a>
                                                  <div class="content">
                                                      <pre>{{ $pesta->jawaban }}</pre>
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
                                          <i class="fa fa-comment"></i>Sertifikat Laik Operasi (SLO)
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                  <div class="panel-body">
                                      <div class="accordion">
                                        @foreach($qnaSLO as $slo)
                                            <div class="accordion-item">
                                                <a style="color : black">{{ $slo->pertanyaan }}</a>
                                                <div class="content">
                                                    <pre>{{ $slo->jawaban }}</pre>
                                                </div>
                                            </div>
                                        @endforeach
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading" role="tab" id="headingNine">
                                  <h4 class="panel-title">
                                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                          <i class="fa fa-comment"></i>Instalasi Milik Pelanggan (IML)
                                      </a>
                                  </h4>
                              </div>
                              <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                                  <div class="panel-body">
                                      <div class="accordion">
                                        @foreach($qnaIML as $iml)
                                            <div class="accordion-item">
                                                <a style="color : black">{{ $iml->pertanyaan }}</a>
                                                <div class="content">
                                                    <pre>{{ $iml->jawaban }}</pre>
                                                </div>
                                            </div>
                                        @endforeach
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
                                           <a style="color : black">{{ $balikNama->pertanyaan }}</a>
                                           <div class="content">
                                             <pre>{{ $balikNama->jawaban }}</pre>
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
                                        <i class="fa fa-comment"></i>Geser Meter/Geser Tiang/Geser SR
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                    <div class="accordion">
                                        @foreach($qnaGeser as $geser)
                                            <div class="accordion-item">
                                                <a style="color : black">{{ $geser->pertanyaan }}</a>
                                                <div class="content">
                                                  <pre>{{ $geser->jawaban }}</pre>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSeven">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                        <i class="fa fa-comment"></i>Video Alur
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                <div class="panel-body">
                                    <div class="accordion">
                                            <div class="accordion-item">
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg1">Balik Nama</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Balik Nama.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg2">Geser</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Geser.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg3">Migrasi</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Migrasi.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg4">Pasang Baru</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Pasang Baru.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg5">Pesta</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Pesta.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg6">Tambah Daya</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Tambah Daya.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                                <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg7">Turun Daya</a>
                                                    <!-- Modal -->
                                                    <div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                                                        <div class="modal-content" style="align-content: center">
                                                            <video width="900" height="500" controls loop autoplay>
                                                                <source src="{{ url('/video/Turun Daya.mp4') }}">
                                                            </video>
                                                        </div>
                                                        </div>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingEight">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                        <i class="fa fa-comment"></i>Brosur
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                                <div class="panel-body">
                                    <div class="accordion">
                                      @foreach($brosur_Daftar_Instalir_Resmi as $brosur1)
                                        <div class="accordion-item">
                                            <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg8">{{ $brosur1->title }}</a>
                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg8" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="align-content: center">
                                                      <img class="img-responsive" alt="{{ $brosur1->title }}" style="width:800px; height:1100px;" src="/images/{{ $brosur1->image }}" >
                                                    </div>
                                                    </div>
                                                </div>
                                        </div>
                                      @endforeach
                                    </div>
                                    <div class="accordion">
                                      @foreach($brosur_PLN as $brosur2)
                                        <div class="accordion-item">
                                            <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg9">{{ $brosur2->title }}</a>
                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg9" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="align-content: center">
                                                      <img class="img-responsive" alt="{{ $brosur2->title }}" style="width:800px; height:1100px;" src="/images/{{ $brosur2->image }}" >
                                                    </div>
                                                    </div>
                                                </div>
                                        </div>
                                      @endforeach
                                    </div>
                                    <div class="accordion">
                                      @foreach($Jasa_SLO as $brosur3)
                                        <div class="accordion-item">
                                            <a style="color: black" data-toggle="modal" data-target=".bd-example-modal-lg10">{{ $brosur3->title }}</a>
                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg10" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                    <div class="modal-content" style="align-content: center">
                                                      <img class="img-responsive" alt="{{ $brosur3->title }}" style="width:800px; height:1100px;" src="/images/{{ $brosur3->image }}" >
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
       </div>
    </div>
 </div>
@endsection
