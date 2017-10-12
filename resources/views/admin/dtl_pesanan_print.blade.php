<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Depot Mawar | Invoice</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('fontawesome/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/font-awesome.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    Depot Mawar.
                    <?php $mydate = getdate(date("U")); ?>
                    <small class="pull-right"><?php echo "$mydate[weekday], $mydate[mday] $mydate[month] $mydate[year]";?></small>
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                Dari:
                <address>
                    <strong>Depot Mawar.</strong><br>
                    Jalan Gajah Mada No. 29<br>
                    Jember.<br>
                    Telepon: 085299994444<br>
                    Email: depotmawar@gmail.com
                </address>
            </div><!-- /.col -->
            @foreach($data [0] as $dat)
                <div class="col-sm-4 invoice-col">
                    Kepada:
                    <address>
                        <strong>{{$dat->name}}</strong><br>
                        {{$dat->address}}<br>
                        {{$dat->handphone}}<br>
                    </address>
                </div><!-- /.col -->
                <div class="col-sm-4 invoice-col">
                    <b>Invoice {{$dat->invoice}}</b><br>
                    <br>
                    <b>No. Pesanan:</b> {{$dat->order_id}}<br>
                    <!-- <b>Payment Due:</b> 2/22/2014<br> -->
                    <b>ID Akun:</b> {{$dat->member_id}}
                </div><!-- /.col -->
            @endforeach
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Product ID</th>
                        <th>Product</th>
                        <th>Harga Satuan</th>
                        <th>Jumlah</th>
                        <th>Catatan</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data [1] as $dat)
                        <tr>
                            <td>{{$dat->product_id}}</td>
                            <td>{{$dat->product_name}}</td>
                            <td>{{$dat->unit_price}}</td>
                            <td>{{$dat->quantity}}</td>
                            <td>{{$dat->note}}</td>
                            <td>Rp. <?php $subtotal = $dat->unit_price * $dat->quantity; echo $subtotal?></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <br>
        <hr>
        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Tanggal Kirim : <?php echo "$mydate[mday] $mydate[month] $mydate[year]" ?></p>
                <div class="table-responsive">
                    <table class="table">
                        @foreach($data [0] as $dat)
                            <tr>
                                <th style="width:50%">Total Harga:</th>
                                <td>Rp. {{$dat->total_price-8000}}</td>
                            </tr>
                            <tr>
                                <th>Ongkir</th>
                                <td>Rp. 8000</td>
                            </tr>
                            <tr>
                                <th>Total Pembayaran:</th>
                                <td>Rp. {{$dat->total_price}} </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- ./wrapper -->

<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
</body>
</html>
