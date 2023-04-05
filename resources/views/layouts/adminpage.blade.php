@extends('layouts.app')
@section('content')
<div class="p-3" >
    <div class="bg-white">
        <div class="row m-0 py-2 bg-secondary-subtle">
                <a class="col text-center mx-auto text-black" href="/product"  id="tUbahWarna" style="text-decoration:none">Produk</a>
                <a class="col text-center mx-auto text-black" href="/category" id="tUbahWarna" style="text-decoration:none">Kategori</a>
        </div>
        @yield('mainContent')
    </div>
</div>
@endsection