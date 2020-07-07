@extends('layout.principal')

@section('title')
	Gracias por contactarnos
@endsection

@section('styles')
@endsection

@section('content')
	<div class="row">
		<section class="container-custom thanks-page">
			<div class="row h-100 align-items-center">
				<div class="col-md-12 text-center">
					<h1 class="mb-3">
						Gracias por contactarnos, en breve nos pondremos en contacto contigo.
					</h1>

					<div class="row justify-content-center">
						<div class="col-md-3">
							<a href="{{ URL::to("/") }}" class="btn btn-secondary btn-block">
								<span class="btn-text text-capitalize">Volver</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
@endsection

@section('scripts')
@endsection
