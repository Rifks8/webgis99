@extends('layout.main')

@section('title', 'SMK Negeri Tangsel')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
<div class="container">
	<div class="row">
		<h1 class="mt-4 text-center" style="font-family:georgia">Daftar SMK Negeri di Tangerang Selatan</h1>
        <div class="div-col-6">
		<a href="{{ url('/mapsmk') }}" class="btn btn-primary my-4">Cek di Maps</a>
        </div>
        <table class="table mb-5">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Sekolah</th>
                    <th scope="col" class="text-center">Alamat Sekolah</th>
                    <th scope="col">Zonasi</th>

                    <th scope="col">Detail</th>
                </tr>
            </thead>
            <tbody>
            @foreach( $smk as $smkn )            
                <tr>
                    <th scope="row" class="table-danger">{{ $loop->iteration }}</th>
                    <td class="table-secondary">{{ $smkn->nama }}</td>        
                    <td class="table-primary">{{ $smkn->alamat }}</td>
                    <td class="table-info"><b>{{ $smkn->keterangan }}</b></td>
                    <td class="table-info">
                        <a href="/smk/{{ $smkn->id }}"><span class="badge bg-info">Klik disini</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
	</div>
</div>
</div>
@endsection