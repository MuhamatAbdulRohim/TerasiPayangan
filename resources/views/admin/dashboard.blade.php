@include('admin.header_sidebar')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>
                    Beranda
                    <small>Statistik</small>
                </h3>
            </div>
            <div class="col-lg-6">
                <h3>
                    Beranda
                    <small>Atur Slider</small>
                </h3>
            </div>
        </div>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <section>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>{{$data [1]}}</h3>
                                    <p>New Orders</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="adm_pesanan" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>{{$data [0]}}</h3>
                                    <p>User Registrations</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="adm_pelanggan" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <div class="row"> <!-- kolom -->
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>{{$data [2]}}</h3>
                                    <p>Ordered</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="adm_pesanan_terima" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-6 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>{{$data [3]}}</h3>
                                    <p>Order Cancel</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="adm_pesanan_tolak" class="small-box-footer">More info <i
                                            class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div><!-- ./col -->
                    </div>
                </div>
            </section>
            <section>
                <div class="col-lg-6">
                    <div class="col-sm-12">
                        <div class="box box-warning">
                            <section>
                                <form action="/adm_dash/1" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="box-header">
                                                <h4 class="box-title">Gambar 1</h4>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="file" name="file_1" required>
                                                    <p class="help-block">Silahkan pilih gambar yang sesuai.</p>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" name="submit" class="btn btn-primary">Update
                                                </button>
                                                <button type="reset" class="btn btn-warning">Batal</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{asset('/slider/1.jpg')}}" height="145dp" width="150dp"
                                                 style="padding: 5px; padding-top: 18px">
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="box box-warning">
                            <section>
                                <form action="/adm_dash/2" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="box-header">
                                                <h4 class="box-title">Gambar 2</h4>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="file" name="file_2" required>
                                                    <p class="help-block">Silahkan pilih gambar yang sesuai.</p>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" name="submit" class="btn btn-primary">Update
                                                </button>
                                                <button type="reset" class="btn btn-warning">Batal</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{asset('/slider/2.jpg')}}" height="145dp" width="150dp"
                                                 style="padding: 5px; padding-top: 18px">
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="box box-warning">
                            <section>
                                <form action="/adm_dash/3" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="box-header">
                                                <h4 class="box-title">Gambar 3</h4>
                                            </div>
                                            <br>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <input type="file" name="file_3" required>
                                                    <p class="help-block">Silahkan pilih gambar yang sesuai.</p>
                                                </div>
                                            </div>
                                            <div class="box-footer">
                                                <button type="submit" name="submit" class="btn btn-primary">Update
                                                </button>
                                                <button type="reset" class="btn btn-warning">Batal</button>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="{{asset('/slider/3.jpg')}}" height="145dp" width="150dp"
                                                 style="padding: 5px; padding-top: 18px">
                                        </div>
                                    </div>
                                </form>
                            </section>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

@include('admin.footer')

<!-- jQuery 2.1.4 -->
<script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{asset('plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/knob/jquery.knob.js')}}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- datepicker -->
<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/app.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>

</body>
</html>
