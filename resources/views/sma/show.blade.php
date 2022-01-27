@extends('layout.main')

@section('title', 'Detail Sekolah')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
		<h1 class="mt-4">Detail Sekolah</h1>
        <div class="col">		
            <div class="card">
                <img src="{{ asset('img/'.$sma->foto) }}" class="card-img-top" height="300">
                <div class="card-body">
                    <h5 class="card-title">{{ $sma->nama }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Zona Sekolah = {{ $sma->keterangan }}</h6>
                    <p class="card-text">{{ $sma->alamat }}</p>
                    <a href="{{ $sma->website }}" class="card-link btn btn-primary"
                    onclick="window.open('{{ $sma->website }}','_blank');" target="_blank">Website resmi</a>
                    <a href="/rutesma/{{ $sma->id }}" class="btn btn-info">Cek rute sekolah</a>
                    <a href="/sma" class="card-link btn btn-danger">Kembali</a>
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
            const myLatLng = { lat: {{ $sma->lat }}, lng: {{ $sma->lng }} };
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
  
    <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
        <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly&language=id"
            async
        ></script>
        </div>
    </div>
    <br>
</div>
</div>
@endsection