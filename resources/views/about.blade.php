@extends('layout.main')

@section('title', 'About this web')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
	<div class="container">
		<div class="row g-3">
			<h1 class="text-center">{{ $nama }} Website</h1>	
				<div class="progress">
					<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
				</div>
			<div class="col-sm-6 col-md-5 offset-1 my-3">
      			<div class="alert alert-info" role="alert">
				<p class="fs-5 text-black">Wesbite ini dibuat oleh Arief Kusumo, seorang mahasiswa semester 8 yang sedang 
				menyelesaikan tugas akhir skripsi di Universitas Gunadarma Kampus Karawaci. Wesbite ini dibuat dengan
				menggunakan framework PHP Laravel versi 8 dengan Framework CSS Bootstrap dan Tailwind.</p>
				</div>
      		</div>
      		<div class="col-6 col-md-6 my-3">
      			<div class="card bg-warning" style="width: 25rem; height: 16rem;">					
					<div class="card-body">
						<h4 class="card-title"><strong>Punya pertanyaan?</strong></h4>						
						<p class="card-text fs-5">Tanyakan pada kami dengan klik tombol pesan atau icon sosial media dibawah ini.</p>    
						<a href="/pesan/create">						
						<button class="btn btn-info">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
							<path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
						</svg> Kirim pesan
						</button>
					</a>
					<p></p>
					<a class="btn btn-success" onclick="window.open('https://wa.me/6285883298511', '_blank');" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
						<path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
					</svg> Whatsapp
					</a>
					</div>
				</div>
      		</div>			
			<div class="col-md-6 offset-md-3 mb-3">
				<div class="alert alert-success" role="alert">
				<p class="fs-5 text-black">Bila anda berkenan menjadi responden untuk mengisi penelitian User Acceptance Test (UAT) saya 
					silahkan menuju link berikut. Terima kasih..
				</p>
				<a onclick="window.open('https://forms.gle/CnsBCWkknrW8PoB29', '_blank');" target="_blank" class="btn btn-primary">Penelitian UAT</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection