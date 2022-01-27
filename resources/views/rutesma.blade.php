@extends('layout.main1')

@section('title', 'Rute Sekolah')

@section('container')

<div class="container">
<h2>Rute Sekolah {{ $sma -> nama }}</h2>
<h4>Silahkan Geser Titik A ke posisi rumah anda</h4>
<a href="/sma">
  <button class="btn btn-danger my-3">Kembali</button>
</a>
<button class="btn btn-info" onClick="window.location.reload();">Refresh</button>
<small>*Silahkan klik tombol refresh untuk mengukur ulang</small>
<p>Tabel simulasi nilai zonasi</p>
  <table class="table table-bordered">
    <thead class="table-dark">
      <tr>
        <th scope="col" class="text-center">Jarak (KM)</th>
        <th scope="col" class="text-center">Nilai Zonasi (Sementara)</th>
        <th scope="col" class="text-center">Hasil</th>
      </tr>
    </thead>
    <tbody>
      <tr class="bg-info">
        <th scope="row"><b>< 100 meter</b></th>
        <td><b>10-99</b></td>
        <td><b>Lolos</b></td>
      </tr>
      <tr class="bg-warning">
        <th scope="row"><b>< 500 meter</b></th>
        <td><b>100-499</b></td>
        <td><b>50% Lolos</b></td>
      </tr>
      <tr class="bg-danger">
        <th scope="row"><b>> 500 meter</b></th>
        <td><b>> 500</b></td>
        <td><b>Tidak Lolos</b></td>
      </tr>
    </tbody>
  </table>
        <head>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
            <style type="text/css">
      #right-panel {
        font-family: "Roboto", "sans-serif";
        line-height: 30px;
        padding-left: 10px;
      }

      #right-panel select,
      #right-panel input {
        font-size: 15px;
      }

      #right-panel select {
        width: 100%;
      }

      #right-panel i {
        font-size: 12px;
      }

      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      #map {
        height: 100%;
        float: left;
        width: 63%;
        height: 100%;
      }

      #right-panel {
        float: right;
        width: 34%;
        height: 100%;
      }

      .panel {
        height: 100%;
        overflow: auto;
      }
    </style>
    
            <script>
      function initMap() {
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 5,
          center: { lat: -6.283522, lng: 106.711296 },
        });
        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer({
          draggable: true,
          map,
          panel: document.getElementById("right-panel"),
        });
        directionsRenderer.addListener("directions_changed", () => {
          computeTotalDistance(directionsRenderer.getDirections());
        });
        displayRoute(
          "Stasiun Rawa Buntu",
          "{{ $sma -> nama }}",
          directionsService,
          directionsRenderer
        );
      }

      function displayRoute(origin, destination, service, display) {
        service.route(
          {
            origin: origin,
            destination: destination,
            // waypoints: [
            //   { location: "Bekasi" },
            //   { location: "Cibubur" },
            // ],
            travelMode: google.maps.TravelMode.DRIVING,
            avoidTolls: true,
          },
          (result, status) => {
            if (status === "OK" && result) {
              display.setDirections(result);
            } else {
              alert("Could not display directions due to: " + status);
            }
          }
        );
      }

      function computeTotalDistance(result) {
        let total = 0;
        const myroute = result.routes[0];

        if (!myroute) {
          return;
        }

        for (let i = 0; i < myroute.legs.length; i++) {
          total += myroute.legs[i].distance.value;
        }
        total = total / 1000;
        document.getElementById("total").innerHTML = total + " km";
      }
    </script>
  </head>
  </div>
  <body>
    <div id="map"></div>
    <div id="right-panel">
    <button class="btn btn-lg btn-success" disabled>Total Jarak : <span id="total"></span></button>
    </div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1MgLuZuyqR_OGY3ob3M52N46TDBRI_9k&callback=initMap&libraries=&v=weekly&language=id"
      async
    ></script>
  </body>
        </div>
    </div>
    <br>
</div>
@endsection