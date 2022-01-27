@extends('layout.main')

@section('title', 'Form Pertanyaan')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
        <div class="col-md-6 offset-md-3">
        <h2 class="my-4 text-center">Form Pertanyaan</h2>
        @if (session('status'))
            <div class="alert alert-info" role="alert">
                {{ session('status') }}
            </div>
        @endif
            <form method="post" action="/pesan/create">
                @csrf
                <div class="form-row">
                    <div class="form-group col my-3">
                        <label for="nama">Nama</label>
                        <input name="nama" type="nama" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="Masukkan Nama">
                    @error('nama')
                        <div class="alert alert-danger" role="alert">
                            <p>Silahkan isi field nama.</p>
                        </div>
                    @enderror
                    </div>
                    <div class="form-group col my-3">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="Masukkan Email">
                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            <p>Silahkan isi field email.</p>
                        </div>
                    @enderror
                    </div>
                    <div class="form-group col my-3">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" cols="30" rows="5" class="form-control mb-2"></textarea>
                    </div>                    
                </div>                                 
                <p>*Pertanyaan anda akan dibalas melalui email anda, silahkan cek email secara berkala. Terima Kasih</p>                
                <a href="/about" class="btn btn-outline-danger">Kembali</a>
                <button type="submit" class="btn btn-outline-primary my-2">Kirim</button>
            </form>
            <br>
            <br>
        </div>
        <!-- <div class="col-md-2">
            <img src="{{ asset('img/question.gif') }}" alt="" width="250">
        </div> -->
    </div>
</div>
</div>
@endsection