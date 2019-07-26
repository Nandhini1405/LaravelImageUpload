@extends('images.layout.master')


@section('content')
	<div class="col-lg-offset-4 col-lg-4">
		<center><h1>Upload Image</h1></center>
		<form method="post" id="formImgInp" action="{{route('images.add')}}" enctype="multipart/form-data">
			{{ csrf_field() }}
			<input type="hidden" name="token" value="{{csrf_token()}}"/>
			<input type="file" name="image" id="image"/><br>
			<input type="submit"/>
		</form>
	</div>
@endsection