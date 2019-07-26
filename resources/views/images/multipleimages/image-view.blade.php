<!DOCTYPE html>
<html>
<head>
	<title>Drag and Drop</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.4.7/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.4/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
		.main-section {
			margin: 0 auto;
			padding: 20px;
			margin-top: 100px;
			background-color: #fff;
			box-shadow: 0px 0px 20px #c1c1c1;
		}
	</style>
	
</head>
<body class="bg-info">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-sm-12 col-11 main-section">
				<h1 class="text-center">Multiple Image Upload</h1>
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="form-group">
					<input type="file" id="file-1" name="file" multiple class="file" data-overwrite-initial="false" data-min-file-count="2">
				</div>
			</div>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.4/js/fileinput.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.0.4/themes/fa/theme.js"></script>
<script type="text/javascript">
		$('#file-1').fileinput({
			theme:'fa',
			uploadUrl:"/image-submit",
			uploadExtraData:function () {
				return{
					_token:$("input[name='_token']").val()
				};
			},

			allowedFileExtensions:['jpg','png','gif','jpeg'],
			overwriteInitial:false,
			maxFileSize:2000,
			maxFileNum:8,
			slugCallback:function(filename) {
				return filename.replace('(','_').replace(']','_');
			}
		});
	</script>
</body>
</html>