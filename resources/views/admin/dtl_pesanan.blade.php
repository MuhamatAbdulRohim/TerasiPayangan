@include ('admin.header_sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            @foreach($data [0] as $dat)
                <?php $order_id = $dat->order_id; ?>
                Invoice
                <small> {{$dat->invoice}}</small>
            @endforeach
        </h1>
        <!-- <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Examples</a></li>
          <li class="active">Invoice</li>
        </ol> -->
    </section>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    Depot Mawar.
                    <?php $mydate = getdate(date("U")); ?>
                    <small class="pull-right"><?php echo "$mydate[weekday], $mydate[mday] $mydate[month] $mydate[year]"; ?></small>
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

        <div class="row">
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

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">

                @if($data[2]->order_status != 'ditolak')
                <a href="/adm_dtl_pesanan_print/{{$order_id}}" target="_blank" class="btn btn-success pull-right">
                    <i class="fa fa-print"></i>&nbsp;&nbsp;Cetak</a>
                @endif
                <!-- <button class="btn btn-success pull-right"><i class="fa fa-print"></i> Cetak</button> -->
                <!-- <button class="btn btn-primary /pull-right" style="margin-right: 5px;"><i class="fa fa-download"></i> Generate PDF</button> -->
            </div>
        </div>
    </section><!-- /.content -->
    <div class="clearfix"></div>
</div><!-- /.content-wrapper -->

@include('admin.footer')

<!-- jQuery 2.1.4 -->
<script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>