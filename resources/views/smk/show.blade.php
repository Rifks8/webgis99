@extends('layout.main')

@section('title', 'Detail Sekolah')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
		<h1 class="mt-4">Detail Sekolah</h1>
        <div class="col">		
            <div class="card">
                <img src="{{ asset('img/'.$smk->foto) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title">{{ $smk->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Zona Sekolah = {{ $smk->keterangan }}</h6>
                    <p class="card-text">{{ $smk->alamat }}</p>
                    <a href="{{ $smk->website }}" class="card-link btn btn-primary" 
                    onclick="window.open('{{ $smk->website }}','_blank');" target="_blank">Website resmi</a>
                    <a href="/rutesmk/{{ $smk->id }}" class="btn btn-info">Cek rute sekolah</a>
                    <a href="/smk" class="card-link btn btn-danger">Kembali</a>
                </div>
            </div>
	    </div>
        <div id="map" style="height: 450px; width: 550px;">
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
                <style type="text/css">
                    /* Always set the map height explicitly to define the size of the div
                    * element that contains the map. */
                    #map {
                    height: 100%;
                    }

                    /* Optional: Makes the sample page fill the window. */
                    html,
                    body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                    }
                </style>
            <script>
            let map;

            function initMap() {
            const myLatLng = { lat: {{ $smk->lat }}, lng: {{ $smk->lng }} };
            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: myLatLng,
        });
        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
    });
}
    </script>
  </head>
  <body>
    <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly"
            async
        ></script>
        </div>
    </div>
    <br>
</div>
</div>
@endsection