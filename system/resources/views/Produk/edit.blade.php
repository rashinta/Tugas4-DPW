@extends('Template.base')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        Tambah Data Produk
                    </div>
                    <div class="card-body">
                         <form action="{{url('Produk')}}" method="post">
                            @csrf
                            @method("post")
                            <div class="form-grup">
                                <label for="" class="control-label">Nama</label>
                                <input type="text" class="form-control" name="nama" value="{{$produk->nama}}">
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Deskripsi</label>
                                        <input type="text" class="form-control" name="Deskripsi" value="{{$produk->Deskripsi}}">
                                    </div>
                                </div>
                            <div class="col-md-3">
                                <div class="form-grup">
                                        <label for="" class="control-label">Harga</label>
                                        <input type="text" class="form-control" name="Harga" value="{{$produk->Harga}}" value="{{$produk->harga}}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-grup">
                                        <label for="" class="control-label">Stok</label>
                                        <input type="text" class="form-control" name="Stok" value="{{$produk->Stok}}">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-dark float-right mt-3"><i class="fa fa-save"> Simpan</i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection