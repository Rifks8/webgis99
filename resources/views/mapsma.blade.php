@extends('layout.main')

@section('title', 'Maps SMA')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
		<h1 class="my-4 text-center">Peta SMA Negeri Kota Tangerang Selatan</h1>
		</div>	
		<div class="col-8 offset-2">
      <div class="alert alert-info col-8 offset-2" role="alert">
			  <p class="text-center">Silahkan klik titik merah pada map untuk melihat detail sekolah dan zona sekolah.</p>
      </div>
            <a href="/sma" class="btn btn-danger mb-3">Kembali</a>            
    </div>

            <!-- <table class='table'>
            <thead class='table-dark'>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Lat</th>
                    <th scope="col">Long</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $mapsma as $mapsma )
                <tr>
                    <th scope="row">{{ $loop -> iteration }}</th>
                    <td>{{ $mapsma -> lat }}</td>
                    <td>{{ $mapsma -> lng }}</td>
                </tr>
            @endforeach
            </tbody> 
        </table>-->

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

            //marker pertama (SMAN 3 diambil dari db) + blom ada infowindow
            function initMap() {            
            const myLatLng = { lat: {{ $mapsma->lat }}, lng: {{ $mapsma->lng }} };
            // const myLatLng = { lat: -6.32753, lng: 106.710403 };
            const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: { lat: -6.283522, lng: 106.711296 },
                        
        });      

        new google.maps.Marker({
        position: myLatLng,
        map,
        title: "Hello World!",
      });

      //marker pertama
      const contentString99 =
            '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h3 id="firstHeading" class="firstHeading">SMAN 3 Tangsel</h3>' +
            '<div id="bodyContent">' +
            "<p><b>Zona : Pamulang</b></p>" +
            "</div>" +
            "</div>";
          const infowindow99 = new google.maps.InfoWindow({
          content: contentString99,
        });
        const marker99 = new google.maps.Marker({
        position: { lat: -6.32753, lng: 106.710403 },
        map,
        title: "SMAN 3",
      });
        marker99.addListener("click", () => {
        infowindow99.open(map, marker99);
      });

          //marker kedua
          const contentString =
            '<div id="content">' +
            '<div id="siteNotice">' +
            "</div>" +
            '<h3 id="firstHeading" class="firstHeading">SMAN 1 Tangsel</h3>' +
            '<div id="bodyContent">' +
            "<p><b>Zona : Ciputat</b></p>" +
            "</div>" +
            "</div>";
          const infowindow = new google.maps.InfoWindow({
          content: contentString,
        });
        const marker = new google.maps.Marker({
        position: { lat: -6.308734, lng: 106.745777 },
        map,
        title: "SMAN 1",
      });
        marker.addListener("click", () => {
        infowindow.open(map, marker);
      });

  //marker ketiga
  const marker1 = new google.maps.Marker({
    position: { lat: -6.345574, lng: 106.672882 },
    map,
    title: "SMAN 2",
  });

  const contentString1 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 2 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Setu</b></p>" +
    "</div>" +
    "</div>";
  const infowindow1 = new google.maps.InfoWindow({
    content: contentString1,
  });

  marker1.addListener("click", () => {
    infowindow1.open(map, marker1);
  });

  //marker keempat (SMAN 4, SMAN 3 udah kepanggil dari db)
  const marker2 = new google.maps.Marker({
    position: { lat: -6.288038, lng: 106.745095 },
    map,
    title: "SMAN 4",
  });

  const contentString2 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 4 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Ciputat</b></p>" +
    "</div>" +
    "</div>";
  const infowindow2 = new google.maps.InfoWindow({
    content: contentString2,
  });

  marker2.addListener("click", () => {
    infowindow2.open(map, marker2);
  });

  //marker kelima
  const marker3 = new google.maps.Marker({
    position: { lat: -6.250124, lng: 106.709018 },
    map,
    title: "SMAN 5",
  });

  const contentString3 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 5 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Pondok Aren</b></p>" +
    "</div>" +
    "</div>";
  const infowindow3 = new google.maps.InfoWindow({
    content: contentString3,
  });

  marker3.addListener("click", () => {
    infowindow3.open(map, marker3);
  });

  //marker keenam
  const marker4 = new google.maps.Marker({
    position: { lat: -6.337511, lng: 106.733918 },
    map,
    title: "SMAN 6",
  });

  const contentString4 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 6 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Pamulang</b></p>" +
    "</div>" +
    "</div>";
  const infowindow4 = new google.maps.InfoWindow({
    content: contentString4,
  });

  marker4.addListener("click", () => {
    infowindow4.open(map, marker4);
  });

  //marker ketujuh
  const marker5 = new google.maps.Marker({
    position: { lat: -6.256908, lng: 106.661897 },
    map,
    title: "SMAN 7",
  });

  const contentString5 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 7 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Serpong Utara</b></p>" +
    "</div>" +
    "</div>";
  const infowindow5 = new google.maps.InfoWindow({
    content: contentString5,
  });

  marker5.addListener("click", () => {
    infowindow5.open(map, marker5);
  });

    //marker kedelapan
    const marker6 = new google.maps.Marker({
    position: { lat: -6.314183, lng: 106.769849 },
    map,
    title: "SMAN 8",
  });

  const contentString6 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 8 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Serpong Utara</b></p>" +
    "</div>" +
    "</div>";
  const infowindow6 = new google.maps.InfoWindow({
    content: contentString6,
  });

  marker6.addListener("click", () => {
    infowindow6.open(map, marker6);
  });

    //marker kesembilan
    const marker7 = new google.maps.Marker({
    position: { lat: -6.313530, lng: 106.716758 },
    map,
    title: "SMAN 9",
  });

  const contentString7 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 9 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Ciputat</b></p>" +
    "</div>" +
    "</div>";
  const infowindow7 = new google.maps.InfoWindow({
    content: contentString7,
  });

  marker7.addListener("click", () => {
    infowindow7.open(map, marker7);
  });

    //marker kesepuluh
    const marker8 = new google.maps.Marker({
    position: { lat: -6.281903, lng: 106.722533 },
    map,
    title: "SMAN 10",
  });

  const contentString8 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 10 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Ciputat</b></p>" +
    "</div>" +
    "</div>";
  const infowindow8 = new google.maps.InfoWindow({
    content: contentString8,
  });

  marker8.addListener("click", () => {
    infowindow8.open(map, marker8);
  });

    //marker kesebelas
    const marker9 = new google.maps.Marker({
    position: { lat: -6.294407, lng: 106.696161 },
    map,
    title: "SMAN 11",
  });

  const contentString9 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 11 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Ciputat</b></p>" +
    "</div>" +
    "</div>";
  const infowindow9 = new google.maps.InfoWindow({
    content: contentString9,
  });

  marker9.addListener("click", () => {
    infowindow9.open(map, marker9);
  });

    //marker keduabelas
    const marker10 = new google.maps.Marker({
    position: { lat: -6.306662, lng: 106.667883 },
    map,
    title: "SMAN 12",
  });

  const contentString10 = 
  '<div id="content">' +
    '<div id="siteNotice">' +
    "</div>" +
    '<h3 id="firstHeading" class="firstHeading">SMAN 12 Tangsel</h3>' +
    '<div id="bodyContent">' +
    "<p><b>Zona : Serpong</b></p>" +
    "</div>" +
    "</div>";
  const infowindow10 = new google.maps.InfoWindow({
    content: contentString10,
  });

  marker10.addListener("click", () => {
    infowindow10.open(map, marker10);
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
</div
@endsection