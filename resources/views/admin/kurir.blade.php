@include('admin.header_sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kurir
            <small>tabel kurir</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <!-- <h3 class="box-title">Hover Data Table</h3> -->
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>No. Pesanan</th>
                                <th>Nama Pemesan</th>
                                <th>Alamat Pesanan</th>
                                <th>No. Telepon</th>
                                <th>Harga</th>
                                <th>Ppn (10%)</th>
                                <th>Total Bayar</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $no = 0; ?>
                            @foreach($data as $dat)
                                <?php $no++; ?>
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$dat->order_id}}</td>
                                    <td>{{$dat->name}}</td>
                                    <td>{{$dat->address}}</td>
                                    <td>{{$dat->handphone}}</td>
                                    <?php $sub = $dat->total_price; $ppn = $sub * 0.1; $tot = $sub + $ppn; ?>
                                    <td>{{$sub}}</td>
                                    <td>{{$ppn}}</td>
                                    <td>{{$tot}}</td>
                                    <td>
                                        <?php if ($dat->order_status == 0) { ?>
                                        <form action="/adm_kurir/update" method="post">
                                            {{csrf_field()}}
                                            <input type="hidden" name="orderID" value="{{$dat->order_id}}">
                                            <button type="submit" class="btn btn-primary">
                                                <i class="fa fa-lg fa-check-square-o"></i>
                                            </button>
                                        </form>
                                        <?php } else { ?>
                                        <button type="button" class="btn btn-success">
                                            <i class="fa fa-lg fa-check-square-o"></i>
                                        </button>
                                        <?php }?>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div>
    </section>
</div>

@include('admin.footer')


<!-- jQuery 2.1.4 -->
<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
</body>
</html>



