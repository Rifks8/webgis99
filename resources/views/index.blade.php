@extends('layout/main')

@section('title', 'Sistem Informasi Geografis')

@section('container')
<div class="text-white" style="background-image:url({{url('img/shape-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <h1 class="mt-3 text-center text-primary">Sistem Informasi Geografis</h1>            
                <h3 class="text-center text-success">SMA dan SMK Negeri di Tangerang Selatan</h3> -->                

				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner mb-3">
						<div class="carousel-item active">
							<img class="d-block w-100" src="{{ asset('img/sman1.jpg') }}" alt="First slide" height="500">
							<!-- <div class="carousel-caption d-none d-md-block">
								<h5>My Caption Title (1st Image)</h5>
								<p>The whole caption will only show up if the screen is at least medium size.</p>
							</div> -->
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ asset('img/smkn2.jpg') }}" alt="Second slide" height="500">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="{{ asset('img/sman12.jpg') }}" alt="Third slide" height="500">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<h1 class="mt-3 text-center text-success">Sistem Informasi Geografis</h1>            
                <h3 class="text-center text-success">SMA dan SMK Negeri di Tangerang Selatan</h3>
				
				<p class="text-center fs-4">Zonasi adalah merupakan jalur yang diperuntukan untuk siswa yang berdomisili 
				di wilayah zonasi yang ditetapkan pemerintah daerahnya. Domisili tersebut harus berdasarkan 
				alamat pada kartu keluarga atau dokumen resmi lainnya. Jalur ini juga mengakomodir pagi siswa 
				penyandang disabilitas. Jumlah peserta didik diterima paling sedikit adalah 50% (sembilan 
				puluh persen) dari daya tampung sekolah.</p>
				
                <!-- <p align="justify">Website ini menyediakan lokasi / tempat SMA (Sekolah Menengah Atas) Negeri dan
				SMK (Sekolah Menengah Kejuruan) Negeri di Kota Tangerang Selatan</p> -->
				<!-- <img src="{{ asset('img/indo.jpg') }}" class="rounded mx-auto d-block" height="300"> -->
                <!-- <h5 class="text-center mt-3">Perbedaan kebijakan sistem zonasi tahun 2018 dengan tahun 2019</h5> -->
			</div>
			<!-- <div class="table-responsive">
				<table class="table table-bordered">
  					<thead>
    					<tr>
      						<th style="font-family:georgia" scope="col" class="table-active text-white text-center">Permendikbud No. 51 Tahun 2018</th>
      						<th style="font-family:georgia" scope="col" class=" table-active text-white text-center">Permendikbud No. 44 Tahun 2019</th>
    					</tr>
  					</thead>
  					<tbody>
    					<tr>
      						<td class="table-success">Jalur zonasi minimal 80%</td>
      						<td class="table-success">Jalur zonasi minimal 50%</td>			
    					</tr>
    					<tr>
      						<td class="table-primary">Jalur prestasi maksimal 15%</th>
      						<td class="table-primary">Jalur afirmasi minimal 15%</td>
    					</tr>
    					<tr>
      						<td class="table-secondary">Jalur perpindahan orangtua/wali maksimal 5%</th>
      						<td class="table-secondary">Jalur perpindahan orangtua/wali maksimal 5%</td>
    					</tr>
    					<tr>
      						<td class="table-info">-------------------------------------------------</th>
      						<td class="table-info">Jika ada sisa kuota, jalur prestasi dapat dibuka, bisa berdasarkan 
							  prestasi akademik dan non-akademik lainnya. Jalur ini, maksimal 30%</td>
    					</tr>
  					</tbody>
				</table>
			</div> -->

			<div class="row mb-3">
				<div class="col-sm-6">
					<div class="card bg-info">
					<div class="card-body">
						<h5 class="card-title">Kuota Penerimaan PPDB berdasarkan Permendikbud No. 44 Tahun 2019</h5>
						<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
						<ol>
							<li>Jalur zonasi minimal 50%</li>
							<li>Jalur afirmasi minimal 15%</li>									
							<li>Jalur perpindahan orangtua/wali maksimal 5%</li>
							<li>Jika ada sisa kuota, jalur prestasi dapat dibuka, bisa berdasarkan 
							  prestasi akademik dan non-akademik lainnya. Jalur ini, maksimal 30%</li>
						</ol>
						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="card bg-danger">
					<div class="card-body">
						<h5 class="card-title">Fitur-fitur dalam webssite SIG ini :</h5>
						<!-- <p class="card-text">With supporting text below as a natural lead-in to additional content.</p> -->
						<ol>
							<li>Melihat lokasi sekolah</li>
							<li>Menghitung jarak (km) rumah dengan sekolah</li>									
							<li>Rute arah jalan dari rumah ke sekolah</li>
							<li>Prediksi poin zonasi yang didapat untuk masuk ke salah satu sekolah</li>
						</ol>
						<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
					</div>
					</div>
				</div>
			</div>

			<!-- <div class="col-12">
				<div class="card bg-info col-6" style="width: 25rem;">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="card-link">Card link</a>
						<a href="#" class="card-link">Another link</a>
					</div>
				</div>
				<div class="card text-white bg-info col-6" style="width: 25rem;">
					<div class="card-header">
						<p>Yang dapat anda lakukan dalam website ini :</p>
					</div>
					<div class="card-body bg-secondary">
						<ol>
							<li>Melihat lokasi sekolah</li>
							<li>Menghitung jarak (km) rumah dengan sekolah</li>									
							<li>Rute arah jalan dari rumah ke sekolah</li>
							<li>Prediksi poin zonasi yang didapat untuk masuk ke salah satu sekolah</li>
						</ol>
					</div>
				</div>
			</div> -->
            
            <!-- <div class="row">
			    <div class="col-md-4 offset-md-2">
				    <div class="card text-dark bg-warning mb-3" style="width: 18rem;">
  					    <div class="card-body">
    					    <h5 class="card-title">SMA Negeri</h5>
    					    <h6 class="card-subtitle mb-2 text-muted">Kota Tangerang Selatan</h6>
    					    <p class="card-text">SMAN 1 - SMAN 12</p>
    					    <a href="{{ url('/sma') }}" class="btn btn-info">Lihat Daftar</a>
    					    <a href="{{ url('/mapsma') }}" class="btn btn-danger">Maps</a>
  					    </div>
				    </div>
			    </div>
			    <div class="col-md-4">
    				<div class="card text-dark bg-info mb-3" style="width: 18rem;">
  					    <div class="card-body">
        					<h5 class="card-title">SMK Negeri</h5>
    					    <h6 class="card-subtitle mb-2 text-muted">Kota Tangerang Selatan</h6>
    					    <p class="card-text">SMKN 1 - SMKN 7</p>
    					    <a href="{{ url('/smk') }}" class="btn btn-warning">Lihat Daftar</a>
    					    <a href="{{ url('/mapsmk') }}" class="btn btn-danger">Maps</a>
							<br>
  					    </div>
				    </div>
			    </div>
		    </div> -->
        </div>
    </div>
</div>
@endsection    