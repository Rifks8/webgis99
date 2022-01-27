@extends('layout.main')

@section('title', 'Maps SMK')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
		<h1 class="my-4 text-center">Peta SMK Negeri Kota Tangerang Selatan</h1>
		</div>	
		<div class="col-8 offset-2">
        <div class="alert alert-info col-8 offset-2" role="alert">
			<p class="text-center">Silahkan klik titik merah pada map untuk melihat detail sekolah dan zona sekolah.</p>
        </div>		
            <a href="/smk" class="btn btn-danger mb-3">Kembali</a>
            <!-- <table class='table'>
            <thead class='table-dark'>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Long</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $mapsmk as $mapsmk )
                <tr>
                    <th scope="row">{{ $loop -> iteration }}</th>
                    <td>{{ $mapsmk -> lat }}</td>
                    <td>{{ $mapsmk -> lng }}</td>
                </tr>
            @endforeach
            </tbody> 
        </table>-->
        </div>
		<div class="col-6 offset-1">
		<div id="map" style="height: 500px; width: 950px;">
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
            //marker pertama (SMKN 7)
            const myLatLng = { lat: {{ $mapsmk->lat }}, lng: {{ $mapsmk->lng }} };
            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: { lat: -6.283522, lng: 106.711296 },            
        });        

        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
    });

    //marker pertama (SMKN 7)
    const konten99 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 7 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Ciputat Timur</b></p>" +
    "</div>" +
    "</div>";
    const infowindow99 = new google.maps.InfoWindow({
        content: konten99,
    });
    const marker99 = new google.maps.Marker({
        position: { lat: -6.282802, lng: 106.751414 },
        map,
        title: "SMKN 1",
    });
        marker99.addListener("click", () => {
        infowindow99.open(map, marker99);
    });

    //marker kedua (SMKN 1)
    const konten = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 1 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Serpong</b></p>" +
    "</div>" +
    "</div>";
    const infowindow = new google.maps.InfoWindow({
        content: konten,
    });
    const marker = new google.maps.Marker({
        position: { lat: -6.31953, lng: 106.698874 },
        map,
        title: "SMKN 1",
    });
        marker.addListener("click", () => {
        infowindow.open(map, marker);
    });

    //marker ketiga (SMKN 2)
    const konten2 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 2 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Pondok Aren</b></p>" +
    "</div>" +
    "</div>";
    const infowindow2 = new google.maps.InfoWindow({
        content: konten2,
    });
    const marker2 = new google.maps.Marker({
        position: { lat: -6.258500, lng: 106.706323 },
        map,
        title: "SMKN 2",
    });
        marker2.addListener("click", () => {
        infowindow2.open(map, marker2);
    });

    //marker keempat (SMKN 3)
    const konten3 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 3 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Setu</b></p>" +
    "</div>" +
    "</div>";
    const infowindow3 = new google.maps.InfoWindow({
        content: konten3,
    });
    const marker3 = new google.maps.Marker({
        position: { lat: -6.354608, lng: 106.687158 },
        map,
        title: "SMKN 3",
    });
        marker3.addListener("click", () => {
        infowindow3.open(map, marker3);
    });

    //marker kelima (SMKN 4)
    const konten4 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 4 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Setu</b></p>" +
    "</div>" +
    "</div>";
    const infowindow4 = new google.maps.InfoWindow({
        content: konten4,
    });
    const marker4 = new google.maps.Marker({
        position: { lat: -6.291130, lng: 106.696510 },
        map,
        title: "SMKN 4",
    });
        marker4.addListener("click", () => {
        infowindow4.open(map, marker4);
    });

    //marker keenam (SMKN 5)
    const konten5 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 5 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Pamulang</b></p>" +
    "</div>" +
    "</div>";
    const infowindow5 = new google.maps.InfoWindow({
        content: konten5,
    });
    const marker5 = new google.maps.Marker({
        position: { lat: -6.331705, lng: 106.708813 },
        map,
        title: "SMKN 5",
    });
        marker5.addListener("click", () => {
        infowindow5.open(map, marker5);
    });

    //marker ketujuh (SMKN 6)
    const konten6 = 
    '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMKN 6 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Serpong Utara</b></p>" +
    "</div>" +
    "</div>";
    const infowindow6 = new google.maps.InfoWindow({
        content: konten6,
    });
    const marker6 = new google.maps.Marker({
        position: { lat: -6.267768, lng: 106.669466 },
        map,
        title: "SMKN 6",
    });
        marker6.addListener("click", () => {
        infowindow6.open(map, marker6);
    });

}
    </script>
  </head>
  <body>
    <div id="map"></div>
        <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly&language=id"
                async>
            </script>
            </div>	
	    <br>    	
	</div>
</div>
</div>

@endsection