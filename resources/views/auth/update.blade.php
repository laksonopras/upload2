@extends('layouts.app')
@section('content')
<div class="p-3" >
    <div class="row">
        <div class="mx-2 col-2 border border-0 card bg-primary p-3 ">
            @if($user->photo)
            <img src="{{ asset('storage/'.$user->photo) }}" class="img-fluid">
            @else
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            @endif
                <h3 class="bg-success mt-3 text-center">{{ Auth::user()->name }}</h3>
            @if($user->photo)
                <a class="btn btn-danger text-center" href="/deletePhoto">Hapus Foto</a>
            @endif
        </div>
        <div class="mx-2 p-3 col border border-0 card bg-white">
            <h1>Edit Your Profile</h1>
            <form class="mt-3" action="/update" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <table style="width: 100%">
                    <tbody>
                        <tr>
                            <td ><label for="inputEmail" class="form-label">Email address</label></td>
                            <td>
                                <input type="email" class="form-control my-1 @error('email') is-invalid @enderror" id="inputEmail" placeholder="{{ $user->email }}" name="email" disabled>
                                @error('email')
                                    <div id="emailHelp" class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 25%"><label for="inputUsername" class="form-label">Username</label></td>
                            <td>
                                <input type="text" class="form-control my-1 @error('name') is-invalid @enderror" id="inputUsername" placeholder="" name="name" VALUE="{{$user->name}}">
                                @error('name')
                                    <div id="nameHelp" class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 25%"><label for="inputPhotoProfile" class="form-label">Photo Profile</label></td>
                            <td>
                                <input type="file" class="form-control my-1 @error('photo') is-invalid @enderror" id="inputPhotoProfile" placeholder="" name="photo">
                                @error('photo')
                                    <div id="photoHelp" class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>    
                <button type="submit" class="btn btn-primary my-2 d-flex ms-auto">Ubah Data</button>
            </form>
        </div>
    </div>
</div>
@endsection