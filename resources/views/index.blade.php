@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('content')
  <section class="container-custom">
  	<div class="row">
  		<div class="col-md-10 offset-md-1 mt-3 text-center">
  			<video id="introInncredi" autoplay muted playsinline loop style="width:100%;">
				<source src="{{ env('APP_URL') }}/assets/videos/intro.mp4" type="video/mp4">
				Your browser does not support the video tag.
			</video>
  		</div>
  		<div class="col-md-6 offset-md-3 text-center text-white main-text">
  			<div class="progress mb-3">
				<div class="progress-bar" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="sr-only">70% Complete</span>
				</div>
			</div>
  			<h2>Página en mantenimiento</h2>
  			<p>Pronto encontrarás el mejor servicio</p>
  		</div>
  	</div>
  </section>
@endsection

@section('styles')
	<style>
		body{
			background: #000 !important;
		}
		.main-text{
			font-family: 'silom';
		}
		.main-text h1{
			font-size: 50px;
		}
		.main-text p{
			font-size: 20px;
		}
		.progress {
		    display: -ms-flexbox;
		    display: flex;
		    height: 1rem;
		    overflow: hidden;
		    font-size: .75rem;
		    background-color: #000000;
		    border-radius: 10px;
		    border: 1px solid #ffffff;
		}

		.progress-bar {
		    display: -ms-flexbox;
		    display: flex;
		    -ms-flex-direction: column;
		    flex-direction: column;
		    -ms-flex-pack: center;
		    justify-content: center;
		    overflow: hidden;
		    color: #080000;
		    text-align: center;
		    white-space: nowrap;
		    background-color: #ffffff;
		    transition: width .6s ease;
		}

	</style>
@endsection

@section('scripts')

	<script type="text/javascript">
		var video= $('#introInncredi').get(0);
		video.addEventListener('ended',function(){
		    video.load();
		},false);
	</script>

@endsection
