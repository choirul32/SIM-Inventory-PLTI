@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Small boxes (Stat box) -->
<div class="row" style="color: white">
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\User::count() }}</h3>

                <p>Users</p>
            </div>
            <div class="icon">
                <i class="ion ion-person"></i>
            </div>
            <a href="/user" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\Category::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Category</p>
            </div>
            <div class="icon">
                <i class="fa fa-list"></i>
            </div>
            <a href="{{ route('categories.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\Product::count() }}</h3>
                <p>Product</p>
            </div>
            <div class="icon">
                <i class="fa fa-cubes"></i>
            </div>
            <a href="{{ route('products.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\Supplier::count() }}<sup style="font-size: 20px"></sup></h3>

                <p>Vendor</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{ route('suppliers.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
</div>



<div class="row" style="color: white">
    
    
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\Product_Masuk::count() }}</h3>

                <p>Product In</p>
            </div>
            <div class="icon">
                <i class="fa fa-plus"></i>
            </div>
            <a href="{{ route('productsIn.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-black-custom">
            <div class="inner">
                <h3>{{ \App\Product_Keluar::count()  }}</h3>

                <p>Product Out</p>
            </div>
            <div class="icon">
                <i class="fa fa-minus"></i>
            </div>
            <a href="{{ route('productsOut.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <!-- ./col -->
    <div id="container" class=" col-xs-6"></div>
</div>


<div class="box">
    <div class="box-header">
        <h3 class="box-title">Product Keluar Paling Banyak</h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="products-table" class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>Spesifikasi</th>
                <th>Kategori Barang</th>
                <th>Jumlah Barang</th>
                <th>Spesifikasi</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach ($p_keluar as $item)
                <tr>
                    <th>{{ $item->product_id }}</th>
                    <th>{{ $item->lokasi }}</th>
                    <th>{{ $item->qty }}</th>
                    <th>{{ $item->tanggal }}</th>
                    <th>Spesifikasi</th>
                    <th></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- /.box-body -->
</div>

@endsection

@section('top')
@endsection
