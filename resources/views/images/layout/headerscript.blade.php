<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ auth()->user()->transport_name }} | College</title>
    <link rel="icon" href="{{ url('/assets/img/greefi.jpg') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/bootstrap.min.css') }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/assets/css/home.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/AdminLTE.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/_all-skins.min.css') }}">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="{{ url('/assets/js/datatable/dataTables.bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/js/datatable/responsive.bootstrap.min.css') }}">
    <script src="{{ url('/assets/js/jquery-2.2.3.min.js') }}"></script>
    <script src="{{ url('/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('/assets/js/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('/assets/js/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ url('/assets/js/datatable/dataTables.bootstrap.min.js') }}"></script>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="{{asset('css/dropzone.css') }}" rel="stylesheet">
    <script src="{{ asset('js/dropzone.jss') }}"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
    "use strict";
function dragNdrop(event) {
    var fileName = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("preview");
    var previewImg = document.createElement("img");
    previewImg.setAttribute("src", fileName);
    preview.innerHTML = "";
    preview.appendChild(previewImg);
}
function drag() {
    document.getElementById('uploadFile').parentNode.className = 'draging dragBox';
}
function drop() {
    document.getElementById('uploadFile').parentNode.className = 'dragBox';
}
    </script>
            
</head>