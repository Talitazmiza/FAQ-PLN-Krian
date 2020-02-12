<?php
$qnaPasangBaru = DB::table('qna')->select('pertanyaan','jawaban')->where('jenis', 'Pasang Baru')->get();
$qnaPesta = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Pesta')->get();
$qnaPerubahanDaya = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Perubahan Daya')->get();
$qnaBalikNama = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Balik Nama')->get();
$qnaGeser = DB::table('qna')->select('pertanyaan', 'jawaban')->where('jenis', 'Geser Meter/Geser Tiang/Geser SR')->get();
?>

<!doctype html>
<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/acc2.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>FAQ</title>
	<style type="text/css">
		#homepage-banner {
			background-image: url('img/bg-faq.jpg');
			background-size: cover;
			background-repeat: no-repeat;
			height : 270px;
			width : 100%;
		}

		form.promoted-search__form {
		    margin: 0 auto;
		    padding: 0 0 2.5rem;
		    width: 50.5rem;
		}
		form.promoted-search__form input[type=text] {
		    background-color: #ffffff;
		    border: none;
		    border-radius: .5rem 0rem 0rem .5rem;
		    box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
		    box-sizing: border-box;
			color: #202124;
		    display: block;
		    font-size: 1.8rem;
		    height: 4.5rem;
		    padding: 0 2.5rem 0 4.5rem;
		    width: 90%;
		    -webkit-appearance: none;
		    float : left;
		}

		/* Style the submit button */
		form.promoted-search__form button {
		  float: left;
		  width: 10%;
		  border-radius: 0rem .5rem .5rem 0rem;
		  padding: 10px;
		  top : 20px;
		  background: #ffffff;
		  color: black;
		  font-size: 18px;
		  cursor: pointer;
		  border : none;
		}

		form.promoted-search__form button:hover {
		  background: #0b7dda;
		}

		/* Clear floats */
		form.promoted-search__form::after {
		  content: "";
		  clear: both;
		  display: table;
		}

		.accordion a {
  position: relative;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
  -webkit-flex-direction: column;
  -ms-flex-direction: column;
  flex-direction: column;
  width: 100%;
  padding: 1rem 3rem 1rem 1rem;
  color: #7288a2;
  font-size: 1.7rem;
  font-weight: 400;
  border-bottom: 1px solid #e5e5e5;
}

.accordion a:hover,
.accordion a:hover::after {
  cursor: pointer;
  color: #03b5d2;
  text-decoration : none;
}

.accordion a:hover::after {
  border: 1px solid #03b5d2;
}

.accordion a.active {
  color: #03b5d2;
  border-bottom: 1px solid #03b5d2;
}

.accordion a::after {
  font-family: 'Ionicons';
  content: '\f218';
  position: absolute;
  float: right;
  right: 1rem;
  font-size: 1rem;
  color: #7288a2;
  padding: 5px;
  width: 30px;
  height: 30px;
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  border-radius: 50%;
  border: 1px solid #7288a2;
  text-align: center;
}

.accordion a.active::after {
  font-family: 'Ionicons';
  content: '\f209';
  color: #03b5d2;
  border: 1px solid #03b5d2;
}

.accordion .content {
  opacity: 0;
  padding: 0 1rem;
  max-height: 0;
  border-bottom: 1px solid #e5e5e5;
  overflow: hidden;
  clear: both;
  -webkit-transition: all 0.2s ease 0.15s;
  -o-transition: all 0.2s ease 0.15s;
  transition: all 0.2s ease 0.15s;
}

.accordion .content p {
  font-size: 1.5rem;
  font-weight: 300;
}

.accordion .content.active {
  opacity: 1;
  padding: 1rem;
  max-height: 100%;
  -webkit-transition: all 0.35s ease 0.15s;
  -o-transition: all 0.35s ease 0.15s;
  transition: all 0.35s ease 0.15s;
}


</style>
</head>
<body>
	<header>
		<nav id="main-menu" class="visible-lg-block navbar navbar-default pln">
		<div class="bg-left-side"></div>
		<div class="container">
		<div class="col-xs-10">

		<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
		<li class="">
		<a href="{{ route ('get.login') }}">Admin</a> </li>
		<li class="">
		<a href="/media/siaran-pers"></a> </li>
		<li class="">
		<a href="/stakeholder/laporan-keuangan"></a> </li>
		<li class="">
		<a href="/tentang-kami/profil-perusahaan"></a> </li>
		</ul>
		<div class="pull-right">
		<ul class="nav navbar-nav navbar-small">
		<li class="dropdown">
		<a href="/pln-peduli/pln-peduli-index"></a> </li>
		<li class="dropdown">
		<a href="/kip/layanan-informasi-publik"></a> </li>
		<li class="dropdown">
		<a href="/karier/informasi-rekrutmen-pln"></a> </li>
		</ul>
		<form class="navbar-form navbar-left" role="search" method="get" action="http://www.pln.co.id/search">
		<div class="form-group">
		
		</div>
		<button type="submit" class="btn btn-default">
		<i class="fa fa-search"></i>
		</button>
		</form>
		<ul class="nav navbar-nav language">
		<li class="text-right">
		<a class="padding-right-5 disabled" title="Bahasa"></a>
		</li>
		<li class="text-center">
		<div class="language-divider"></div>
		</li>
		<li class="text-left">
		<a class="padding-left-8" title="English" href="http://www.pln.co.id/eng"></a>
		</li>
		</ul>
		</div>
		</div>

		</div>
		<div class="col-xs-2">
<a href="http://www.pln.co.id"><img src="http://www.pln.co.id/statics/img/logo-header-20170501a.jpg" alt="PT PLN (Persero)" title="PT PLN (Persero)"></a> </div>
		<div class="clearfix"></div>
		</div>

		</nav>
		<div class="clearfix"></div>


		<nav id="m-main-menu" class="visible-xs-block visible-md-block visible-sm-block navbar navbar-default" role="navigation">
		<div class="container-fluid">

		<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#mobile-main-menu" aria-expanded="false">
		<div class="pull-left">
		<span class="sr-only">PLN.co.id</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</div>
		<div class="pull-left menu-label">
		Menu
		</div>
		<div class="clearfix"></div>
		</button>
		<a class="navbar-brand pull-right" href="http://www.pln.co.id"><img src="http://www.pln.co.id/statics/img/m-logo-pln.png" alt="PT PLN (Persero)" title="PT PLN (Persero)"></a> </div>

		<div class="collapse navbar-collapse" id="mobile-main-menu">
		<ul class="nav navbar-nav">
		<li>
		<div class="navbar-left" style="background: #218698;text-align: center;padding: 10px 0px 10px 0px;/* margin-right:0px; */width:95%;">
		<div class="row">
		<a type="button" style="width:45%; padding: 5px 5px 5px 5px;" class="btn btn-primary col-sm-6" disabled="" title="Bahasa"> ID</a>
		<a type="button" style="width:45%; padding: 5px 5px 5px 5px;" class="btn btn-primary col-sm-6" href="http://www.pln.co.id/eng" title="English">EN</a>
		</div>
		</div>
		</li>
		<li><a href="/pelanggan/layanan-online">Pelanggan</a></li>
		<li><a href="/media/siaran-pers">Media</a></li>
		<li><a href="/stakeholder/laporan-keuangan">Hubungan Investor</a></li>
		<li><a href="/tentang-kami/profil-perusahaan">Tentang Kami</a></li>
		<li><a href="/pln-peduli/pln-peduli-index">PLN Peduli</a></li>
		<li><a href="/kip/layanan-informasi-publik">KIP</a></li>
		<li><a href="/karier/informasi-rekrutmen-pln">Karier</a></li>
		<li>
		<form class="navbar-left" role="search" method="get" action="http://www.pln.co.id/search">
		<div class="container row">
		<div class="form-group col-md-10 colsm-10 col-xs-10">
		<input type="text" name="q" class="form-control" placeholder="Cari...">
		</div>
		<div class="col-md-2 col-sm-2 col-xs-2" style="margin-left: -15px;">
		<button type="submit" class="btn btn-default">
		<i class="glyphicon glyphicon-search"></i>
		</button>
		</div>
		</div>
		</form>
		</li>
		</ul>
		</div>

		</div>

		</nav>

		<div class="container breadcrumb-wrapper">
		<div class="row">
		<div class="col-lg-9 col-md-12">

		</div>
		</div>
		</div>
	</header>
<div class="content-wrapper">
<div class="content-wrapper homepage">
<div id="homepage-banner">
<div class="section news">
<div class="container">
<div class="row">
<div class="col-xs-12">
<div class="main-title">
<h1 class="section-title" style="margin-top: 80px;font-family:sans-serif;font-weight : 700;color : white">Apa yang Dapat Kami Bantu?</h1>
<p class="sub-title">
	<form class="promoted-search__form" action="/youtube/search?hl=en-GB" id="search-form" role="search">
		 <input type="text" placeholder="Cari.." name="search">
		  <button type="submit"><i class="fa fa-search"></i></button>
			</form>
</p> </div>
</div>
</div>
</div>
</div>
</div>
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
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="accordion">
								@foreach($qnaPasangBaru as $pasangBaru)
									<div class="accordion-item">
									<a>{{$pasangBaru->pertanyaan}}</a>
									<div class="content">
										<p>{{$pasangBaru->jawaban}}</p>
									</div>
									</div>
								@endforeach
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa fa-link"></i>Pesta
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           <div class="accordion">
						   		@foreach($qnaPesta as $pesta)
									<div class="accordion-item">
									<a>{{$pesta->pertanyaan}}</a>
									<div class="content">
										<p>{{$pesta->jawaban}}</p>
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
                                <i class="fa fa-comment"></i>Perubahan Daya
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           <div class="accordion">
						   		@foreach($qnaPerubahanDaya as $perubahanDaya)
									<div class="accordion-item">
									<a>{{$perubahanDaya->pertanyaan}}</a>
									<div class="content">
										<p>{{$perubahanDaya->jawaban}}</p>
									</div>
									</div>
								@endforeach						    
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
						    
						  </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class="fa fa-link"></i>Balik Nama
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                           <div class="accordion">
						   		@foreach($qnaBalikNama as $balikNama)
									<div class="accordion-item">
									<a>{{$balikNama->pertanyaan}}</a>
									<div class="content">
										<p>{{$balikNama->jawaban}}</p>
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
                                <i class="fa fa-link"></i>Geser Meter/Geser Tiang/Geser SR
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                           <div class="accordion">
						   		@foreach($qnaGeser as $geser)
									<div class="accordion-item">
									<a>{{$geser->pertanyaan}}</a>
									<div class="content">
										<p>{{$geser->jawaban}}</p>
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
<script type="text/javascript" href="js/main.js"></script>
<script type="text/javascript" href="js/util.js"></script>
<script>
const items = document.querySelectorAll(".accordion a");

function toggleAccordion(){
  this.classList.toggle('active');
  this.nextElementSibling.classList.toggle('active');
}

items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
</body>
=======
   <head>
      <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <link rel="stylesheet" type="text/css" href="css/acc2.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
      <title>FAQ</title>
      <style type="text/css">
         #homepage-banner {
         background-image: url('img/bg-faq.jpg');
         background-size: cover;
         background-repeat: no-repeat;
         height : 270px;
         width : 100%;
         }
         form.promoted-search__form {
         margin: 0 auto;
         padding: 0 0 2.5rem;
         width: 50.5rem;
         }
         form.promoted-search__form input[type=text] {
         background-color: #ffffff;
         border: none;
         border-radius: .5rem 0rem 0rem .5rem;
         box-shadow: 0 1px 2px 0 rgba(60, 64, 67, .30), 0 1px 3px 1px rgba(60, 64, 67, .15);
         box-sizing: border-box;
         color: #202124;
         display: block;
         font-size: 1.8rem;
         height: 4.5rem;
         padding: 0 2.5rem 0 4.5rem;
         width: 90%;
         -webkit-appearance: none;
         float : left;
         }
         /* Style the submit button */
         form.promoted-search__form button {
         float: left;
         width: 10%;
         border-radius: 0rem .5rem .5rem 0rem;
         padding: 10px;
         top : 20px;
         background: #ffffff;
         color: black;
         font-size: 18px;
         cursor: pointer;
         border : none;
         }
         form.promoted-search__form button:hover {
         background: #0b7dda;
         }
         /* Clear floats */
         form.promoted-search__form::after {
         content: "";
         clear: both;
         display: table;
         }
         .accordion a {
         position: relative;
         display: -webkit-box;
         display: -webkit-flex;
         display: -ms-flexbox;
         display: flex;
         -webkit-box-orient: vertical;
         -webkit-box-direction: normal;
         -webkit-flex-direction: column;
         -ms-flex-direction: column;
         flex-direction: column;
         width: 100%;
         padding: 1rem 3rem 1rem 1rem;
         color: #7288a2;
         font-size: 1.7rem;
         font-weight: 400;
         border-bottom: 1px solid #e5e5e5;
         }
         .accordion a:hover,
         .accordion a:hover::after {
         cursor: pointer;
         color: #03b5d2;
         text-decoration : none;
         }
         .accordion a:hover::after {
         border: 1px solid #03b5d2;
         }
         .accordion a.active {
         color: #03b5d2;
         border-bottom: 1px solid #03b5d2;
         }
         .accordion a::after {
         font-family: 'Ionicons';
         content: '\f218';
         position: absolute;
         float: right;
         right: 1rem;
         font-size: 1rem;
         color: #7288a2;
         padding: 5px;
         width: 30px;
         height: 30px;
         -webkit-border-radius: 50%;
         -moz-border-radius: 50%;
         border-radius: 50%;
         border: 1px solid #7288a2;
         text-align: center;
         }
         .accordion a.active::after {
         font-family: 'Ionicons';
         content: '\f209';
         color: #03b5d2;
         border: 1px solid #03b5d2;
         }
         .accordion .content {
         opacity: 0;
         padding: 0 1rem;
         max-height: 0;
         border-bottom: 1px solid #e5e5e5;
         overflow: hidden;
         clear: both;
         -webkit-transition: all 0.2s ease 0.15s;
         -o-transition: all 0.2s ease 0.15s;
         transition: all 0.2s ease 0.15s;
         }
         .accordion .content p {
         font-size: 1.5rem;
         font-weight: 300;
         }
         .accordion .content.active {
         opacity: 1;
         padding: 1rem;
         max-height: 100%;
         -webkit-transition: all 0.35s ease 0.15s;
         -o-transition: all 0.35s ease 0.15s;
         transition: all 0.35s ease 0.15s;
         }
      </style>
   </head>
   <body>
      <header>
         <nav id="main-menu" class="visible-lg-block navbar navbar-default pln">
            <div class="bg-left-side"></div>
            <div class="container">
               <div class="col-xs-10">
                  <div class="collapse navbar-collapse">
                     <ul class="nav navbar-nav">
                        <li class="">
                           <a href="{{ route ('get.login') }}">Admin</a> 
                        </li>
                        <li class="">
                           <a href="/media/siaran-pers"></a> 
                        </li>
                        <li class="">
                           <a href="/stakeholder/laporan-keuangan"></a> 
                        </li>
                        <li class="">
                           <a href="/tentang-kami/profil-perusahaan"></a> 
                        </li>
                     </ul>
                     <div class="pull-right">
                        <ul class="nav navbar-nav navbar-small">
                           <li class="dropdown">
                              <a href="/pln-peduli/pln-peduli-index"></a> 
                           </li>
                           <li class="dropdown">
                              <a href="/kip/layanan-informasi-publik"></a> 
                           </li>
                           <li class="dropdown">
                              <a href="/karier/informasi-rekrutmen-pln"></a> 
                           </li>
                        </ul>
                        <form class="navbar-form navbar-left" role="search" method="get" action="http://www.pln.co.id/search">
                           <div class="form-group">
                           </div>
                           <button type="submit" class="btn btn-default">
                           <i class="fa fa-search"></i>
                           </button>
                        </form>
                        <ul class="nav navbar-nav language">
                           <li class="text-right">
                              <a class="padding-right-5 disabled" title="Bahasa"></a>
                           </li>
                           <li class="text-center">
                              <div class="language-divider"></div>
                           </li>
                           <li class="text-left">
                              <a class="padding-left-8" title="English" href="http://www.pln.co.id/eng"></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="col-xs-2">
                  <a href="http://www.pln.co.id"><img src="http://www.pln.co.id/statics/img/logo-header-20170501a.jpg" alt="PT PLN (Persero)" title="PT PLN (Persero)"></a> 
               </div>
               <div class="clearfix"></div>
            </div>
         </nav>
         <div class="clearfix"></div>
         <nav id="m-main-menu" class="visible-xs-block visible-md-block visible-sm-block navbar navbar-default" role="navigation">
            <div class="container-fluid">
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed pull-left" data-toggle="collapse" data-target="#mobile-main-menu" aria-expanded="false">
                     <div class="pull-left">
                        <span class="sr-only">PLN.co.id</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                     </div>
                     <div class="pull-left menu-label">
                        Menu
                     </div>
                     <div class="clearfix"></div>
                  </button>
                  <a class="navbar-brand pull-right" href="http://www.pln.co.id"><img src="http://www.pln.co.id/statics/img/m-logo-pln.png" alt="PT PLN (Persero)" title="PT PLN (Persero)"></a> 
               </div>
               <div class="collapse navbar-collapse" id="mobile-main-menu">
                  <ul class="nav navbar-nav">
                     <li>
                        <div class="navbar-left" style="background: #218698;text-align: center;padding: 10px 0px 10px 0px;/* margin-right:0px; */width:95%;">
                           <div class="row">
                              <a type="button" style="width:45%; padding: 5px 5px 5px 5px;" class="btn btn-primary col-sm-6" disabled="" title="Bahasa"> ID</a>
                              <a type="button" style="width:45%; padding: 5px 5px 5px 5px;" class="btn btn-primary col-sm-6" href="http://www.pln.co.id/eng" title="English">EN</a>
                           </div>
                        </div>
                     </li>
                     <li><a href="/pelanggan/layanan-online">Pelanggan</a></li>
                     <li><a href="/media/siaran-pers">Media</a></li>
                     <li><a href="/stakeholder/laporan-keuangan">Hubungan Investor</a></li>
                     <li><a href="/tentang-kami/profil-perusahaan">Tentang Kami</a></li>
                     <li><a href="/pln-peduli/pln-peduli-index">PLN Peduli</a></li>
                     <li><a href="/kip/layanan-informasi-publik">KIP</a></li>
                     <li><a href="/karier/informasi-rekrutmen-pln">Karier</a></li>
                     <li>
                        <form class="navbar-left" role="search" method="get" action="http://www.pln.co.id/search">
                           <div class="container row">
                              <div class="form-group col-md-10 colsm-10 col-xs-10">
                                 <input type="text" name="q" class="form-control" placeholder="Cari...">
                              </div>
                              <div class="col-md-2 col-sm-2 col-xs-2" style="margin-left: -15px;">
                                 <button type="submit" class="btn btn-default">
                                 <i class="glyphicon glyphicon-search"></i>
                                 </button>
                              </div>
                           </div>
                        </form>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         <div class="container breadcrumb-wrapper">
            <div class="row">
               <div class="col-lg-9 col-md-12">
               </div>
            </div>
         </div>
      </header>
      <div class="content-wrapper">
         <div class="content-wrapper homepage">
            <div id="homepage-banner">
               <div class="section news">
                  <div class="container">
                     <div class="row">
                        <div class="col-xs-12">
                           <div class="main-title">
                              <h1 class="section-title" style="margin-top: 80px;font-family:sans-serif;font-weight : 700;color : white">Apa yang Dapat Kami Bantu?</h1>
                              <p class="sub-title">
                              <form class="promoted-search__form" action="/youtube/search?hl=en-GB" id="search-form" role="search">
                                 <input type="text" placeholder="Cari.." name="search">
                                 <button type="submit"><i class="fa fa-search"></i></button>
                              </form>
                              </p> 
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
                                       <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                          <div class="panel-body">
                                             <div class="accordion">
                                                <div class="accordion-item">
                                                   <a>Bagaimana cara pengajuan pasang baru</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
                                                <div class="accordion-item">
                                                   <a>Apa saja persyaratan untuk pasang baru?</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
                                                <div class="accordion-item">
                                                   <a>Bagaimana prosedur cara pasang baru?</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
                                                <div class="accordion-item">
                                                   <a>Berapa biaya untuk pasang baru?</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
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
                                                <div class="accordion-item">
                                                   <a>Bagaimana prosedur perubahan daya?</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
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
                                                <div class="accordion-item">
                                                   <a>Bagaimana prosedur Penyambubngan Sementara?</a>
                                                   <div class="content">
                                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum sagittis vitae et leo duis ut. Ut tortor pretium viverra suspendisse potenti.</p>
                                                   </div>
                                                </div>
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
      <script type="text/javascript" href="js/main.js"></script>
      <script type="text/javascript" href="js/util.js"></script>
      <script>
         const items = document.querySelectorAll(".accordion a");
         
         function toggleAccordion(){
           this.classList.toggle('active');
           this.nextElementSibling.classList.toggle('active');
         }
         
         items.forEach(item => item.addEventListener('click', toggleAccordion));
      </script>
   </body>
>>>>>>> 75905c11c90c750bc5c8e2275f637469a5e4303f
</html>