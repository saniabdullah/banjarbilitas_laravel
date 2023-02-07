@extends('layouts/appLayout')

@section('content')

@if (session('success'))
    <div class="alert alert-success text-center">
        {{ session('success') }}
    </div>
@endif

<div>
    <div class="flex flex-col items-center pt-6 sm:justify-center sm:pt-0">
      <div class="create pb-8 my-32 w-full px-6 py-4 bg-gray-50 shadow-md sm:rounded-lg">
          <h2>Profile</h2>
          <form action="{{ route('profile-page-update', $user->id) }}" method="post">
            @csrf
            @method('PUT')
              <div class='form__gawian'>
                    <div class='gawian__kategori'>
                        <label
                            class="block text-sm font-medium text-gray-700 undefined"
                        >Nama Depan</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="nama_depan"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ old('nama_depan', $user->nama_depan) }}"  
                            />
                        </div>
                        <label
                            class="block text-sm font-medium text-gray-700 undefined"
                        >Nama Belakang</label>
                        <div class="flex flex-col items-start">
                            <input 
                                type="text" 
                                name="nama_belakang"
                                class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                value="{{ old('nama_belakang', $user->nama_belakang) }}"    
                            />
                        </div>
                        <label
                            class="block text-sm font-medium text-gray-700 undefined"
                        >Jenis Kelamin</label>
                        <div class="flex flex-col items-start">
                                <input 
                                    type="text" 
                                    name="jenis_kelamin"
                                    class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{ old('jenis_kelamin', $user->jenis_kelamin) }}"  
                                    
                                />
                        </div>
                    </div>
                    <div class='gawian__kategori'>
                        <label
                            class="block text-sm font-medium text-gray-700 undefined"
                        >Email</label>
                        <div class="flex flex-col items-start">
                                <input 
                                    type="text" 
                                    name="email"
                                    class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{ old('email', $user->email) }}"  
                                    disabled
                                />
                        </div>
                        <label
                            class="block text-sm font-medium text-gray-700 undefined"
                        >Tanggal Lahir</label>
                        <div class="flex flex-col items-start">
                                <input 
                                    type="date" 
                                    name="tanggal_lahir"
                                    class="block w-full mt-1 border-slate-500 px-2 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}"    
                                />
                        </div>
                    </div>
              </div>
              <button type="submit">Save</button>
          </form>
      </div>
    </div>
</div>

@endsection