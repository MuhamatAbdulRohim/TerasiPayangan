
@include('admin.header_sidebar')

       <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Makanan
            <small>tabel daftar makanan</small>
          </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-10">
              <div class="box box-success">
                <div class="box-header">
                  <h3 class="box-title">Daftar Makanan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Nama Makanan</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php $i=0; ?>
                    @foreach($data as $makanan)
                        <?php $i++; ?>
                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$makanan->product_name}}</td>
                        <td>{{$makanan->kecategory->category}}</td>
                        <td>{{$makanan->unit_price}}</td>
                        <td>
                          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{$makanan->product_id}}">
                            <i class="fa fa-edit"></i>
                          </button>
                          <a href="adm_t_makanan/{{$makanan->product_id}}/delete" type="button" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                          </a>
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

<!-- Modal -->
@foreach($data as $makan)
<div class="modal fade" id="myModal{{$makan->product_id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data Makanan</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="adm_t_makanan/{{$makan->product_id}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('PUT')}}
                    <div class="box-body">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="product_name" class="form-control" value="{{$makan->product_name}}" placeholder="Makanan" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Kategori</label>
                            <div class=" col-sm-10">
                                <select name="category_id" class="form-control">
                                    @if($makan->category_id == 1)
                                        <option value="1" selected>Aneka Mie</option>
                                        <option value="2">Indonesian Food</option>
                                        <option value="3">Chinese Food</option>
                                    @elseif($makan->category_id == 2)
                                        <option value="1">Aneka Mie</option>
                                        <option value="2" selected>Indonesian Food</option>
                                        <option value="3">Chinese Food</option>
                                    @elseif($makan->category_id == 3)
                                        <option value="1">Aneka Mie</option>
                                        <option value="2">Indonesian Food</option>
                                        <option value="3" selected>Chinese Food</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Harga</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon">Rp.</span>
                                    <input type="number" name="unit_price" class="form-control" value="{{$makan->unit_price}}" placeholder="1000 (Tanpa tanda .)" required>
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
                                <input type="file" name="image_url" id="exampleInputFile">
                                <p class="help-block">* Silahkan pilih gambar yang sesuai. Jika tidak diisi menggunakan gambar lama</p>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Perbarui</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('plugins/fastclick/fastclick.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/app.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
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



