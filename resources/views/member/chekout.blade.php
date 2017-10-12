@extends('member.master')

@section('content')

    <div class="main">
        <div class="container">
            <div class="row mt-80">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Produk</th>
                                <th>Nama Produk</th>
                                <th>Harga Perunit</th>
                                <th>Qty</th>
                                <th>Total Harga</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; ?>
                            @foreach($cartItems as $item)
                                <tr>
                                    <td>{{$no+1}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->price}}</td>
                                    <td>{{$item->qty}}</td>
                                    <td>{{$item->qty*$item->price}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr/>
                <div class="col-md-12">
                    <h4 class="font-alt">Rincian Pembayaran</h4>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Rincian</th>
                                        <th>Total (Rp.)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Total Harga Produk</td>
                                        <td>{{Cart::subtotal(0,'','')}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Ongkos Kirim</td>
                                        <td>8.000</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total Bayar</b></td>
                                        <td><b>{{Cart::subtotal(0,'','')+8000}}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <a href="#" class="btn btn-success" style="float: right !important;">Chekout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer navbar-fixed-bottom bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <p class="copyright font-alt">&copy; 2017&nbsp;<a href="index.html">TitaN</a>, All Rights
                            Reserved</p>
                    </div>
                    <div class="col-sm-6">
                        <div class="footer-social-links"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                        class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a
                                    href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

@endsection