@extends('layouts.adminpage')
@section('mainContent')
<div class="p-3" id="product">  
    <h1 class="text-center fw-bold">Daftar Produk</h1>
    <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#addProduct">Tambah Produk</button>
    <table class="table mt-3">
        <thead>
            <tr>
                <th scope="col">Kode Menu</th>
                <th scope="col">Kategori</th>
                <th scope="col">Produk</th>
                <th scope="col">Stok</th>
                <th scope="col">Harga</th>
                <th scope="col">Diskon</th>
                <th scope="col" colspan="3">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product['id'] }}</td>
                    <td>{{ $product['category']->category }}</td>
                    <td>{{ $product['product_name'] }}</td>
                    <td>{{ $product['stock'] }}</td>
                    <td>{{ $product['price'] }}</td>
                    <td>{{ $product['discount'] }}</td>
                    <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#viewProduct{{$product['id']}}">lihat</a>
                        <div class="modal fade " id="viewProduct{{$product['id']}}" tabindex="-1"  aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body p-3">
                                        <div class="row">
                                            <div class="col-3 d-flex align-items-center" ">
                                                <img src="{{ asset('storage/'.$product->product_pict) }}" class="img-fluid">
                                            </div>
                                            <div class="col py-3">
                                                <table style="width: 100%;">
                                                    <tr>
                                                        <td class="py-3">Nama Produk</td>
                                                        <td>{{ $product['product_name'] }}</td>
                                                    </tr>
                                                    <tr ">
                                                        <td class="py-4">Kategori</td>
                                                        <td>{{ $product->category->category}}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Stok</td>
                                                        <td>{{ $product['stock'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Harga</td>
                                                        <td>{{ $product['price'] }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="py-3">Diskon</td>
                                                        <td>{{ $product['discount'] }}</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td>
                        <a class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#editProduct{{$product['id']}}">ubah</a>
                        <div class="modal fade" id="editProduct{{$product['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="/product/edit/{{ $product['id'] }}"method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="modal-body">
                                            <table style="width: 100%;">
                                                <tr>
                                                    <td>Nama Produk</td>
                                                    <td><input class="form-control my-3 @error('product_name') is-invalid @enderror" type="text" placeholder="{{ $product['product_name'] }}" name="product_name">
                                                        @error('product_name')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Kategori</td>
                                                    <td>
                                                        <select class="form-select" name="category_id">
                                                            @foreach($categories as $category)
                                                                <option value="{{ $category['id']}}">{{ $category['category']}}</option>
                                                            @endforeach
                                                        </select> 
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Stok</td>
                                                    <td><input class="form-control my-3 @error('stock') is-invalid @enderror" type="text" placeholder="{{ $product['stock'] }}" name="stock">
                                                        @error('stock')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Harga</td>
                                                    <td><input class="form-control my-3 @error('price') is-invalid @enderror" type="text" placeholder=" {{ $product['price'] }} " name="price">
                                                        @error('price')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Diskon</td>
                                                    <td><input class="form-control my-3 @error('discount') is-invalid @enderror" type="text" placeholder=" {{ $product['discount'] }} " name="discount">
                                                        @error('discount')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 25%"><label for="inputProductPict" class="form-label">Foto Produk</label></td>
                                                    <td>
                                                        <input type="file" class="form-control my-1 @error('product_pict') is-invalid @enderror" id="inputProductPict" placeholder="Foto Produk" name="product_pict">
                                                        @error('product_pict')
                                                            <div class="form-text">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td><a class="btn btn-danger" href="/product/delete/{{ $product['id'] }}" >hapus</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="addProduct" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Produk</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="/product/add"method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <table style="width: 100%;">
                        <tr>
                            <td>Nama Produk</td>
                            <td><input class="form-control my-3 @error('product_name') is-invalid @enderror" type="text" required placeholder="Nama Produk" name="product_name" aria-describedby="nameHelp">
                                @error('product_name')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{ $category['id']}}">{{ $category['category']}}</option>
                                    @endforeach
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><input class="form-control my-3 @error('stock') is-invalid @enderror" type="text" required placeholder="Stok" name="stock">
                                @error('stock')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><input class="form-control my-3 @error('price') is-invalid @enderror" type="text" required placeholder="harga" name="price">
                                @error('price')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>Diskon</td>
                            <td><input class="form-control my-3 @error('discount') is-invalid @enderror" type="text" required placeholder="diskon" name="discount">
                                @error('discount')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 25%"><label for="inputProductPict" class="form-label">Foto Produk</label></td>
                            <td>
                                <input type="file" class="form-control my-1 @error('product_pict') is-invalid @enderror" id="inputProductPict" placeholder="Foto Produk" name="product_pict"required>
                                @error('product_pict')
                                    <div class="form-text">{{ $message }}</div>
                                @enderror
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambahkan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection