<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @section('title', 'INI TAMBAH DATA SMAN')
        </h2>
    </x-slot>

    <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    @section('subtitle', 'DATA SMAN NI BOS')
                    <div class="p-6">
                        <div class="flex items-center">
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-400"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">Tambah Data SMAN</div>
                        </div>

                        <!-- <div class="ml-12">
                            <div class="mt-2 text-sm text-gray-500 mb-8">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi accusantium minus, magni quasi doloremque quam facilis quisquam cum, temporibus libero consequuntur quibusdam totam sunt adipisci earum velit ratione voluptas minima.
                            </div>
                        </div> -->

                        
                            <div class="md:grid md:grid-cols-3 md:gap-6">
                                <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <p class="mt-1 text-sm text-gray-600">
                                    This information will be displayed publicly so be careful what you share.
                                    </p>
                                    <a href="/datasma"><button class="my-8 bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                                        Kembali 
                                    </button>
                                    </a>
                                </div>
                                </div>
                                <div class="mt-5 md:mt-0 md:col-span-2">
                                    <form action="/datasma/create" method="post">
                                        @csrf
                                        <div class="shadow sm:rounded-md sm:overflow-hidden">
                                            <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                                <div class="grid grid-cols-3 gap-6">
                                                    <div class="col-span-3 sm:col-span-2">
                                                        <label for="nama" class="block text-sm font-medium text-gray-700">
                                                            Nama Sekolah SMA
                                                        </label>
                                                        <div class="mt-1 flex rounded-md shadow-sm">                                            
                                                            <input type="text" name="nama" id="nama" class="@error ('nama') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                            @error('nama')
                                                                <div class="alert alert-danger">
                                                                    <p class="text-red-500 text-xs italic">Silahkan isi field nama.</p>
                                                                </div>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="alamat" class="block text-sm font-medium text-gray-700">
                                                        Alamat sekolah
                                                    </label>
                                                    <div class="mt-1">
                                                        <textarea id="alamat" name="alamat" rows="3" class="@error ('alamat') is-invalid @enderror shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"></textarea>
                                                        @error('alamat')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Silahkan isi field alamat.</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="zona" class="block text-sm font-medium text-gray-700">
                                                        Zona sekolah
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="zona" id="zona" class="@error ('zona') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                        @error('zona')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div>
                                                    <label for="website" class="block text-sm font-medium text-gray-700">
                                                        Website sekolah
                                                    </label>
                                                    <div class="mt-1 flex rounded-md shadow-sm">
                                                        <span class="inline-flex items-center px-3 rounded-l-md border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm">
                                                            http://
                                                        </span>
                                                        <input type="text" name="website" id="website" class="@error ('website') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="www.example.com">
                                                        @error('website')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="latitude" class="block text-sm font-medium text-gray-700">Latitude (Garis lintang)</label>
                                                        <input type="text" name="latitude" id="latitude" autocomplete="given-name" class="@error ('latitude') is-invalid @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        @error('latitude')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                            </div>
                                                        @enderror
                                                    </div>

                                                    <div class="col-span-6 sm:col-span-3">
                                                        <label for="longitude" class="block text-sm font-medium text-gray-700">Longitude (Garis Bujur)</label>
                                                        <input type="text" name="longitude" id="longitude" autocomplete="family-name" class="@error ('longitude') is-invalid @enderror mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                        @error('longitude')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div>
                                                    <label class="block text-sm font-medium text-gray-700" for="foto">
                                                        Foto
                                                    </label>
                                                    <div class="mt-1">
                                                        <input type="text" name="foto" id="foto" class="@error ('foto') is-invalid @enderror focus:ring-indigo-500 focus:border-indigo-500 flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder=".JPG / .PNG / .SVG">
                                                        @error('foto')
                                                            <div class="alert alert-danger">
                                                                <p class="text-red-500 text-xs italic">Please fill out this field.</p>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>

                                            
                                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                    <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    Tambah
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                    </div>             
                </div>
            </div>
        </div>
    </div>
</x-app-layout>