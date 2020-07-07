@extends('admin.layout.principal')

@section('title', '| '.$word)

@section('styles')
@endsection

@section('page-header', $word)

@section('card-breadcrumb')
	<ol class="breadcrumb my-4">
			<li class="breadcrumb-item"><a href="{{ URL::to("admin") }}">Dashboard</a></li>
			<li class="breadcrumb-item active">{{ $word }}</li>
	</ol>
@endsection

@section('card-title')
	<i class="fa fa-list fa-fw"></i> {{ $word }}
@endsection

@section('card-body')
	{{ Form::token() }}
	@include('admin.modules.datatable')
	@if($actions == 1 || $actions == 3 || $actions == 4 || $actions == 7)
		@include('admin.delete_modal')
	@endif
@endsection

@section('scripts')
	{{-- DataTables --}}
	@include('plugins.datatables.dataTables')
@endsection
