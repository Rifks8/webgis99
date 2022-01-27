@extends('layout.main')

@section('title', 'SMA Negeri Tangsel')

@section('container')
<div style="background-image:url({{url('img/shape-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <h1 class="mt-4 text-center" style="font-family:georgia">Daftar SMA Negeri di Tangerang Selatan</h1>
            <div class="div-col-6">
                <a href="{{ url('/mapsma') }}" class="btn btn-primary my-3">Cek di Maps</a>
            </div>
            <table class="table">
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
                @foreach( $sma as $sman )
                    <tr>
                        <th scope="row" class="table-danger">{{ $loop -> iteration }}</th>
                        <td class="table-secondary">{{ $sman -> nama }}</td>
                        <td class="table-primary">{{ $sman -> alamat }}</td>
                        <td class="table-info"><b>{{ $sman -> keterangan }}</b></td>                    
                        <td class="table-info">
                            <a href="/sma/{{ $sman->id }}"><span class="badge bg-info">Klik disini</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection