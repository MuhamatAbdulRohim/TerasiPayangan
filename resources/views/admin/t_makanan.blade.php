@include('admin.header_sidebar')

<!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Makanan
            <small>tambah makanan</small>
          </h1>
        </section>

        <section class="content">
        <div class="row">
            <!-- left column -->
        <div class="col-md-6">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Form Makanan</h3>
          </div><!-- /.box-header -->
          <!-- form start -->
          <form class="form-horizontal" action="adm_t_makanan" method="POST" enctype="multipart/form-data">
              {{csrf_field()}}
            <div class="box-body">
              <div class="form-group">
                <label class="col-sm-2 control-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" name="product_name" class="form-control" placeholder="Makanan" required>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Kategori</label>
              	<div class=" col-sm-10">
                  <select name="category_id" class="form-control ">
                    <option value="1">Aneka Mie</option>
                    <option value="2">Indonesian Food</option>
                    <option value="3">Chinese Food</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-2 control-label">Harga</label>
                <div class="col-sm-10">
                <div class="input-group">
                    <span class="input-group-addon">Rp.</span>
                    <input type="number" name="unit_price" class="form-control" placeholder="1000 (Tanpa tanda .)" required>
                </div>
                </div>
              </div>
              <!-- <div class="form-group">
                <label class="col-sm-2 control-label">Deskripsi</label>
                <div class="col-sm-10">
                      <textarea class="form-control" rows="3" placeholder="Deskripsi makanan..."></textarea>
                </div>
              </div> -->
              <div class="form-group">
                <label class="col-sm-2 control-label">Gambar</label>
                <div class="col-sm-10">
                  <input type="file" name="image_url" id="exampleInputFile" required>
                  <p class="help-block">* Silahkan pilih gambar yang sesuai.</p>
                </div>
              </div>
            </div><!-- /.box-body -->
            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Tambah</button>
              <button type="reset" class="btn btn-warning">Batal</button>
            </div><!-- /.box-footer -->
          </form>
          </div><!-- /.box -->
          </div>
        </div>
        </section><!-- /.Left col -->
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
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
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