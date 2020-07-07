@extends('layout.principal')

@section('title')
	Inicio
@endsection

@section('content')
  <section class="container-custom">
  	<div class="row">
  		<div class="col-md-12 mt-3 text-center">
  			<img src="{{ env('APP_URL') }}/assets/images/logo.jpg" width="40%">
  		</div>
		<div class="col-md-12 text-center">
			<div class="ic-Spin-cycle--classic">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="156 -189 512 512" enable-background="new 156 -189 512 512" xml:space="preserve">
					<path d="M636 99h-64c-17.7 0-32-14.3-32-32s14.3-32 32-32h64c17.7 0 32 14.3 32 32S653.7 99 636 99z"/>
					<path d="M547.8-23.5C535.2-11 515-11 502.5-23.5s-12.5-32.8 0-45.2l45.2-45.2c12.5-12.5 32.8-12.5 45.2 0s12.5 32.8 0 45.2L547.8-23.5z"/>
					<path d="M412-61c-17.7 0-32-14.3-32-32v-64c0-17.7 14.3-32 32-32s32 14.3 32 32v64C444-75.3 429.7-61 412-61z"/>
					<path d="M276.2-23.5L231-68.8c-12.5-12.5-12.5-32.8 0-45.2s32.8-12.5 45.2 0l45.2 45.2c12.5 12.5 12.5 32.8 0 45.2S288.8-11 276.2-23.5z"/>
					<path d="M284 67c0 17.7-14.3 32-32 32h-64c-17.7 0-32-14.3-32-32s14.3-32 32-32h64C269.7 35 284 49.3 284 67z"/>
					<path d="M276.2 248c-12.5 12.5-32.8 12.5-45.2 0 -12.5-12.5-12.5-32.8 0-45.2l45.2-45.2c12.5-12.5 32.8-12.5 45.2 0s12.5 32.8 0 45.2L276.2 248z"/>
					<path d="M412 323c-17.7 0-32-14.3-32-32v-64c0-17.7 14.3-32 32-32s32 14.3 32 32v64C444 308.7 429.7 323 412 323z"/>
					<path d="M547.8 157.5l45.2 45.2c12.5 12.5 12.5 32.8 0 45.2 -12.5 12.5-32.8 12.5-45.2 0l-45.2-45.2c-12.5-12.5-12.5-32.8 0-45.2S535.2 145 547.8 157.5z"/>
				</svg>
			</div>
  		</div>
  		<div class="col-md-8 offset-md-2 mt-5 text-center">
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuenow="70"
					aria-valuemin="0" aria-valuemax="100" style="width:70%">
					<span class="sr-only">70% Complete</span>
				</div>
			</div>
  		</div>
  		<div class="col-md-12 mt-3 text-center text-white main-text">
  			<h1>Página en mantenimiento</h1>
  			<p>Pronto encontrarás el mejor servicio</p>
  		</div>
  	</div>
  </section>
@endsection

@section('styles')
	<style>
		.main-text{
			font-family: 'silom';
		}
		.main-text h1{
			font-size: 50px;
		}
		.main-text p{
			font-size: 30px;
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

		.ic-Spin-cycle--classic, .ic-Spin-cycle--classic-magenta-purple, .ic-Spin-cycle--circles, .ic-Spin-cycle--police-car, .ic-Spin-cycle--faces {
		  box-sizing: border-box;
		  display: inline-block;
		  vertical-align: middle;
		  overflow: visible;
		}
		.ic-Spin-cycle--classic > svg, .ic-Spin-cycle--classic-magenta-purple > svg, .ic-Spin-cycle--circles > svg, .ic-Spin-cycle--police-car > svg, .ic-Spin-cycle--faces > svg {
		  display: block;
		  overflow: visible;
		}
		.ic-Spin-cycle--classic > svg > *, .ic-Spin-cycle--classic-magenta-purple > svg > *, .ic-Spin-cycle--circles > svg > *, .ic-Spin-cycle--police-car > svg > *, .ic-Spin-cycle--faces > svg > * {
		  -webkit-transform: translate3d(0, 0, 0);
		          transform: translate3d(0, 0, 0);
		  -webkit-transform-origin: center;
		          transform-origin: center;
		  -webkit-animation-iteration-count: infinite;
		          animation-iteration-count: infinite;
		}

		.ic-Spin-cycle--classic {
		  margin: 12px 24px;
		  width: 72px;
		  height: 72px;
		}
		@-webkit-keyframes spin-cycle {
		  from {
		    fill: #ffffff;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		  to {
		    fill: rgba(255, 255, 255, 0);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		@keyframes spin-cycle {
		  from {
		    fill: #ffffff;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		  to {
		    fill: rgba(255, 255, 255, 0);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		.ic-Spin-cycle--classic > svg {
		  width: 72px;
		  height: 72px;
		}
		.ic-Spin-cycle--classic > svg > * {
		  fill: rgba(255, 255, 255, 0);
		  -webkit-animation-name: spin-cycle;
		          animation-name: spin-cycle;
		  -webkit-animation-duration: 0.8s;
		          animation-duration: 0.8s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(1) {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(2) {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(3) {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(4) {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(5) {
		  -webkit-animation-delay: 0.5s;
		          animation-delay: 0.5s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(6) {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(7) {
		  -webkit-animation-delay: 0.7s;
		          animation-delay: 0.7s;
		}
		.ic-Spin-cycle--classic > svg > *:nth-of-type(8) {
		  -webkit-animation-delay: 0.8s;
		          animation-delay: 0.8s;
		}

		.ic-Spin-cycle--classic-magenta-purple {
		  margin: 12px 24px;
		  width: 72px;
		  height: 72px;
		}
		@-webkit-keyframes yellow {
		  from {
		    fill: #ef0878;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		  to {
		    fill: #5f5ffe;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		@keyframes yellow {
		  from {
		    fill: #ef0878;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		  to {
		    fill: #5f5ffe;
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		.ic-Spin-cycle--classic-magenta-purple > svg {
		  width: 72px;
		  height: 72px;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > * {
		  fill: #5f5ffe;
		  -webkit-animation-name: yellow;
		          animation-name: yellow;
		  -webkit-animation-duration: 0.8s;
		          animation-duration: 0.8s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(1) {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(2) {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(3) {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(4) {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(5) {
		  -webkit-animation-delay: 0.5s;
		          animation-delay: 0.5s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(6) {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(7) {
		  -webkit-animation-delay: 0.7s;
		          animation-delay: 0.7s;
		}
		.ic-Spin-cycle--classic-magenta-purple > svg > *:nth-of-type(8) {
		  -webkit-animation-delay: 0.8s;
		          animation-delay: 0.8s;
		}

		.ic-Spin-cycle--circles {
		  margin: 12px 24px;
		  width: 100px;
		  height: 72px;
		}
		@-webkit-keyframes circles {
		  from {
		    fill: rgba(95, 95, 254, 0.8);
		    -webkit-transform: scale(1.5);
		            transform: scale(1.5);
		  }
		  to {
		    fill: rgba(95, 95, 254, 0.5);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		@keyframes circles {
		  from {
		    fill: rgba(95, 95, 254, 0.8);
		    -webkit-transform: scale(1.5);
		            transform: scale(1.5);
		  }
		  to {
		    fill: rgba(95, 95, 254, 0.5);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		.ic-Spin-cycle--circles > svg {
		  width: 100px;
		  height: 72px;
		}
		.ic-Spin-cycle--circles > svg > * {
		  fill: rgba(95, 95, 254, 0.5);
		  -webkit-animation-name: circles;
		          animation-name: circles;
		  -webkit-animation-duration: 0.8s;
		          animation-duration: 0.8s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(1) {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(2) {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(3) {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(4) {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(5) {
		  -webkit-animation-delay: 0.5s;
		          animation-delay: 0.5s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(6) {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(7) {
		  -webkit-animation-delay: 0.7s;
		          animation-delay: 0.7s;
		}
		.ic-Spin-cycle--circles > svg > *:nth-of-type(8) {
		  -webkit-animation-delay: 0.8s;
		          animation-delay: 0.8s;
		}

		.ic-Spin-cycle--police-car {
		  margin: 12px 24px;
		  width: 100px;
		  height: 72px;
		}
		@-webkit-keyframes your-animation {
		  from {
		    fill: #5f5ffe;
		    -webkit-transform: scale(1.1);
		            transform: scale(1.1);
		  }
		  to {
		    fill: rgba(34, 34, 34, 0.8);
		    -webkit-transform: scale(0.9);
		            transform: scale(0.9);
		  }
		}
		@keyframes your-animation {
		  from {
		    fill: #5f5ffe;
		    -webkit-transform: scale(1.1);
		            transform: scale(1.1);
		  }
		  to {
		    fill: rgba(34, 34, 34, 0.8);
		    -webkit-transform: scale(0.9);
		            transform: scale(0.9);
		  }
		}
		.ic-Spin-cycle--police-car > svg {
		  width: 100px;
		  height: 72px;
		}
		.ic-Spin-cycle--police-car > svg > * {
		  fill: rgba(34, 34, 34, 0.8);
		  -webkit-animation-name: your-animation;
		          animation-name: your-animation;
		  -webkit-animation-duration: 0.8s;
		          animation-duration: 0.8s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(1) {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(2) {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(3) {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(4) {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(5) {
		  -webkit-animation-delay: 0.5s;
		          animation-delay: 0.5s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(6) {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(7) {
		  -webkit-animation-delay: 0.7s;
		          animation-delay: 0.7s;
		}
		.ic-Spin-cycle--police-car > svg > *:nth-of-type(8) {
		  -webkit-animation-delay: 0.8s;
		          animation-delay: 0.8s;
		}

		.ic-Spin-cycle--faces {
		  margin: 12px 24px;
		  width: 100px;
		  height: 72px;
		}
		@-webkit-keyframes faces {
		  from {
		    fill: rgba(239, 8, 120, 0.8);
		    -webkit-transform: scale(1.25);
		            transform: scale(1.25);
		  }
		  to {
		    fill: rgba(95, 95, 254, 0.7);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		@keyframes faces {
		  from {
		    fill: rgba(239, 8, 120, 0.8);
		    -webkit-transform: scale(1.25);
		            transform: scale(1.25);
		  }
		  to {
		    fill: rgba(95, 95, 254, 0.7);
		    -webkit-transform: scale(1);
		            transform: scale(1);
		  }
		}
		.ic-Spin-cycle--faces > svg {
		  width: 100px;
		  height: 72px;
		}
		.ic-Spin-cycle--faces > svg > * {
		  fill: rgba(95, 95, 254, 0.7);
		  -webkit-animation-name: faces;
		          animation-name: faces;
		  -webkit-animation-duration: 1.2s;
		          animation-duration: 1.2s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(1) {
		  -webkit-animation-delay: 0.1s;
		          animation-delay: 0.1s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(2) {
		  -webkit-animation-delay: 0.2s;
		          animation-delay: 0.2s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(3) {
		  -webkit-animation-delay: 0.3s;
		          animation-delay: 0.3s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(4) {
		  -webkit-animation-delay: 0.4s;
		          animation-delay: 0.4s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(5) {
		  -webkit-animation-delay: 0.5s;
		          animation-delay: 0.5s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(6) {
		  -webkit-animation-delay: 0.6s;
		          animation-delay: 0.6s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(7) {
		  -webkit-animation-delay: 0.7s;
		          animation-delay: 0.7s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(8) {
		  -webkit-animation-delay: 0.8s;
		          animation-delay: 0.8s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(9) {
		  -webkit-animation-delay: 0.9s;
		          animation-delay: 0.9s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(10) {
		  -webkit-animation-delay: 1s;
		          animation-delay: 1s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(11) {
		  -webkit-animation-delay: 1.1s;
		          animation-delay: 1.1s;
		}
		.ic-Spin-cycle--faces > svg > *:nth-of-type(12) {
		  -webkit-animation-delay: 1.2s;
		          animation-delay: 1.2s;
		}

		:root {
		  background: #222;
		  height: 100%;
		}

		body {
		  text-align: center;
		  height: 100%;
		  color: #111;
		  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
		}

		.words {
		  text-align: left;
		  box-sizing: border-box;
		  padding: 24px;
		  line-height: 1.5;
		  background: #7070fe;
		  margin-bottom: 48px;
		}
		.words h1 {
		  color: white;
		  margin-top: 0;
		}

		.examples {
		  -webkit-box-flex: 1;
		          flex: 1;
		  text-align: center;
		}

	</style>
@endsection

@section('scripts')
@endsection
