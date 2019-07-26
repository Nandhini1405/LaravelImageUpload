@extends('images.layout.master')


@section('content')
<div class="row"> 
	<div id="mycarousel" class="carousel slide" data-ride="carousel">
	  	<div class="carousel-inner" role="listbox">
	  		@foreach ($images as $key=>$image)
	    	<div class="item {{ ($key==0)?'active':'' }}">
	    		<div class="container">
		        <img src="{{ asset('images/' . $image->getFilename()) }}" >
			 	<div class="overlay"></div>
			    <div class="button" >
			    	<a href="" class="btn btn-outline-warning"> Delete </a>&nbsp;
			    	<a id="download" href="" download="a.jpeg" target="_blank">Download</a>

			    </div>
			    </div>	
		    </div>
		      @endforeach
	  	</div>
	</div>
</div>

@endsection

