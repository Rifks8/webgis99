<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @section('title', 'Data SMAN')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('subtitle', 'DATA SMAN NI BOS')
                <div class="p-6">
                    <div class="flex items-center">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                        <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Data SMAN</div>
                    </div>


                    <div class="ml-12">
                        <div class="mt-2 text-sm text-gray-500 mb-8">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusantium minus, magni quasi doloremque quam facilis quisquam cum, temporibus libero consequuntur quibusdam totam sunt adipisci earum velit ratione voluptas minima.
                        </div>
                        <a href="/datasma/create">
                            <button class="mb-8 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Tambah data</button>
                        </a>

                    @if (session('tambah'))
                        <div class="mb-8 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            {{ session('tambah') }}
                        </div>
                    @endif

                    @if (session('hapus'))
                        <div class="mb-8 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            {{ session('hapus') }}
                        </div>
                    @endif
                    
                    @if (session('ubah'))
                        <div class="mb-8 shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">
                            {{ session('ubah') }}
                        </div>
                    @endif

                        <table class="border-collapse border border-green-800 table-fixed">
                            <thead>
                                <tr>
                                    <th class="w-1/8 border-4 border-black bg-gray-300">#</th>
                                    <th class="w-1/4 border-4 border-black bg-gray-300">Nama</th>
                                    <th class="w-1/2 border-4 border-black bg-gray-300">Alamat</th>
                                    <th class="w-1/8 border-4 border-black bg-gray-300">Zona</th>
                                    <th class="w-1/8 border-4 border-black bg-gray-300">Foto</th>
                                    <th class="w-1/8 border-4 border-black bg-gray-300">Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach( $sma as $sman )
                                <tr>
                                    <th class="border-4 border-green-600 text-lg" style="">{{ $loop -> iteration }}</th>
                                    <td class="border-4 border-red-600 text-lg">{{ $sman -> nama }}</td>
                                    <td class="border-4 border-blue-600">{{ $sman -> alamat }}</td>
                                    <td class="border-4 border-pink-600 text-lg">{{ $sman -> keterangan }}</td>
                                    <td class="border-4 border-pink-600"><img src="{{ asset('img/'.$sman -> foto) }}" class="card-img-top" height="300"></td>
                                    <td class="border-4 border-yellow-600">
                                        <a href="/datasma/{{ $sman->id }}/edit">
                                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Ubah</button>
                                        </a>
                                        <form action="/datasma/{{ $sman -> id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                            <button type="submit" class="bg-red-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Hapus</button>
                                        </form>
                                    </td>
                                </tr>                                
                            @endforeach    
                            </tbody>
                        </table>

                        <a href="/dashboard">
                            <div class="mt-3 flex items-center text-sm font-semibold text-indigo-700">
                                <div>Kembali ke dashboard</div>

                                <div class="ml-1 text-indigo-500">
                                    <svg viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>             
            </div>
        </div>
    </div>
</x-app-layout>
