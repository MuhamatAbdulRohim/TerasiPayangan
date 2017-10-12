@extends('member.master')

@section('content')

    <div class="main">
        <div class="container">
            <div class="row mt-80">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs font-alt" role="tablist">
                        <li class="active"><a href="#description" data-toggle="tab"><span
                                        class="icon-tools-2"></span>Data Pesanan</a></li>
                        <li><a href="#data-sheet" data-toggle="tab"><span class="icon-tools-2"></span>Pengaturan</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="description">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nomer Invoice</th>
                                        <th>Waktu Pesan</th>
                                        <th>Total Harga</th>
                                        <th>Status Pesanan</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no = 0;?>
                                    @foreach($orders as $order)
                                        <?php $no = $no + 1;?>
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$order->invoice}}</td>
                                            <td>{{$order->order_date_only}}</td>
                                            <td>{{$order->total_price}}</td>
                                            @if($order->order_status == 'diterima')
                                                <td><a href="/member/pay/{{$order->order_id}}"
                                                       class="btn btn-sm btn-primary">Upload Bukti Pembayaran</a></td>
                                                <td>
                                            @elseif($order->order_status == 'ditolak')
                                                <td>
                                                    <button class="btn btn-sm btn-danger">Pesanan Anda Ditolak</button>
                                                </td>
                                            @elseif($order->order_status == 'menunggu')
                                                <td>
                                                    <button class="btn btn-sm btn-warning">Menunggu Respon Admin
                                                    </button>
                                                </td>
                                            @else
                                                <td>
                                                    <button class="btn btn-sm btn-success">Transaksi Sukses</button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    {!! $orders->render() !!}
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="data-sheet">
                            <form action="/action_page.php">
                                <div class="form-group">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" placeholder="Nama Anda"
                                           name="nama" value="{{$data_member->name}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Alamat</label>
                                    <textarea class="form-control" name="alamat"
                                              placeholder="Alamat Anda">{{$data_member->address}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="noHp">Nomor Handphone</label>
                                    <input type="text" id="noHp" class="form-control" placeholder="Nomor Handphone Anda"
                                           name="noHp" value="{{$data_member->handphone}}">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter email"
                                           name="email" value="{{$data_member->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" class="form-control" id="username" placeholder="Enter Username"
                                           name="username" value="{{$data_user->username}}">
                                </div>
                                <div class="form-group">
                                    <label for="pwd">Password:</label>
                                    <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                           name="password">
                                </div>
                                <button type="submit" class="btn btn-success" style="float: right !important;">Ubah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection