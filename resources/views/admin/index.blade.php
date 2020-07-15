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
	@if( $model=='Meeting' || $model=='Improvement' || $model=='Development' )
		@include('admin.email_modal')
	@endif
@endsection

@section('scripts')
	{{-- DataTables --}}
	@include('plugins.datatables.dataTables')

	@if( $model=='Meeting' || $model=="Improvement" || $model=="Development" )
		<script>
			$("#sendMail").click(function(event) {
				$("#sendMail").html('<i class="fas fa-spinner fa-spin"></i>');
				$("#sendMail").attr('disabled', 'disabled');
				$("#msg-success").slideUp('400');
				$("#msg-error").slideUp('400');
				{{-- $.post('{{ URL::route('meetings.sendMail') }}', --}}
				$.post(direction+'/admin/sendMail/'+$("#meeting_route").val(),
				{
					_token: "{{ csrf_token() }}",
					body: CKEDITOR.instances.body.getData(),
					users: $("#users").val(),
					subject: $("#subject").val(),
					meeting_id: $("#meeting_id").val(),
					which_m: $("#meeting_model").val()
				},
				function(data, textStatus, xhr) {
					$("#sendMail").html('Enviar');
					$("#sendMail").removeAttr('disabled');
					if(data == 1){
						$("#msg-success").slideDown('400');
					}
					else{
						$("#msg-error").slideDown('400');
					}
				});
			});

			function setMeetingId(id, model) {
				$("#meeting_id").val(id);
				$("#meeting_model").val(model);
				$("#meeting_route").val(model.toLowerCase());
			}
		</script>
	@endif

@endsection
