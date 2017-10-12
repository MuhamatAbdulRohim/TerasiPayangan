@extends('member.master')

@section('content')

    <div class="main">
        <div class="container">
            <div class="row mt-80">
                <div class="col-md-12">
                    <form action="/member/pay/{{$order->order_id}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" class="form-control" id="name" placeholder="Nama Anda" name="nama" readonly="" value="{{$data_member->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Alamat Pengiriman</label>
                            <textarea class="form-control" name="alamat" placeholder="Alamat Anda" readonly="">{{$data_member->address}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="noHp">Nomor Handphone</label>
                            <input type="text" id="noHp" class="form-control" placeholder="Nomor Handphone Anda"
                                   name="noHp" readonly="" value="{{$data_member->handphone}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Rincian Pembayaran</label>
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
                                        <td>{{$order->total_price-8000}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total Ongkos Kirim</td>
                                        <td>8.000</td>
                                    </tr>
                                    <tr>
                                        <td><b>Total Bayar</b></td>
                                        <td><b>{{$order->total_price}}</b></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="bukti">Upload Bukti Pembayaran</label>
                            <input type="file" id="bukti"
                                   name="bukti">
                        </div>
                        <button type="submit" class="btn btn-success" style="float: right !important;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <hr/>
        <footer class="footer bg-dark">
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