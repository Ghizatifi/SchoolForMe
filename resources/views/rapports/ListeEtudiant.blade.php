@extends('layout.master')

@section('content')
<style type="text/css">
	caption{
		height: 50px;
		font-size: 20px;
		font-weight: bold;
	}
</style>
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header"> <i class="fa fa-file-text-o"></i>Les rapports </h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-home"></i><a href=""> Acceuil</a> </li>
			<li><i class="fa fa-home"></i><a href=""> Rapports</a> </li>
			<li><i class="fa fa-home"></i><a href=""> Liste</a> </li>
		</ol>
	</div>
</div>


{{-------------------}}
<div class="panel panel-default">

<div class="panel-heading">
	<b><i class="fa fa-list"></i> Les details </b>
	<a href="#" class="pull-right" id="show-class-info"><i class="fa fa-plus"></i>  </a>

</div>
<div class="panel-body" style="padding-bottom: 4px">
	<b></b>
<div class="show-student-info">


	</div>

</div>
 </div>


@include('classes.classPopup')
@endsection
@section('script')
@include('script.scriptClassPopup')
<script type="text/javascript">
$(document).on('click','#class-edite',function(e){
	e.preventDefault();
	var id_classe =$(this).data('id');
	$.get("{{route('EtudiantList')}}",{id_classe:id_classe},function(data){
		$('.show-student-info').empty().append(data);

	})

})
</script>
@endsection
