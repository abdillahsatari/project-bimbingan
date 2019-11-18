<div class="content-wrapper">
  <style type="text/css">
      th{
          text-align: center;
      }
      td{
          text-align: center;
      }
  </style>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header with-border">
            <div>
              <!-- <br> -->
              <h3 class="box-title">Daftar Judul Penelitian</h3>
              <div class="box-tools pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-info dropdown-toggle" data-toggle="dropdown">Jenjang Strata
                    <span class="fa fa-caret-down"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Jenjang S1</a></li>
                    <li><a href="#">Jenjang S2</a></li>
                    <li><a href="#">Jenjang S2</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <!-- Date and time range -->
                <a class="btn btn-sm btn-social btn-google" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-plus-square"></i> Judul Baru
                </a>
              </div>
            </div>
            <br>
            <div class="media-scroll">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nim</th>
                    <th>Nama</th>
                    <th>Judul Penelitian</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa1</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa</td>
                    <td>
                      <button type="button" class="btn btn-primary"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td>D42114516</td>
                    <td>Abdllah Satari Rahim</td>
                    <td>Judul Penelitian Mahasiswa</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                      <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.box-body -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Form Tambah Judul Penelitian</h4>
                </div>
                <div class="modal-body">
                  <div class="row">
                    <form role="form">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" placeholder="Nama Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Nim</label>
                            <input type="text" class="form-control" placeholder="Nim Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Program Studi</label>
                            <input type="text" class="form-control" placeholder="Program Studi Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Jurusan</label>
                            <input type="text" class="form-control" placeholder="Jurusan">
                          </div>
                          <div class="form-group">
                            <label>Judul Penelitian</label>
                            <textarea class="form-control" rows="5" placeholder="Judul Penelitian..."></textarea>
                          </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>Tgl Ujian:</label>

                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" class="form-control pull-right" id="datepicker">
                          </div>
                          <!-- /.input group -->
                        </div>
                        <div class="form-group">
                          <label>Pembimbing I</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Dosen1</option>
                            <option>Dosen 1</option>
                            <option>Dosen 2</option>
                            <option>Dosen 3</option>
                            <option>Dosen 4</option>
                            <option>Dosen 5</option>
                            <option>Dosen 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Pembimbing II</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Dosen1</option>
                            <option>Dosen 1</option>
                            <option>Dosen 2</option>
                            <option>Dosen 3</option>
                            <option>Dosen 4</option>
                            <option>Dosen 5</option>
                            <option>Dosen 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penguji I</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Dosen1</option>
                            <option>Dosen 1</option>
                            <option>Dosen 2</option>
                            <option>Dosen 3</option>
                            <option>Dosen 4</option>
                            <option>Dosen 5</option>
                            <option>Dosen 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penguji II</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Dosen1</option>
                            <option>Dosen 1</option>
                            <option>Dosen 2</option>
                            <option>Dosen 3</option>
                            <option>Dosen 4</option>
                            <option>Dosen 5</option>
                            <option>Dosen 6</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Penguji III</label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Dosen1</option>
                            <option>Dosen 1</option>
                            <option>Dosen 2</option>
                            <option>Dosen 3</option>
                            <option>Dosen 4</option>
                            <option>Dosen 5</option>
                            <option>Dosen 6</option>
                          </select>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                  <button type="button" class="btn btn-primary">Tambahkan</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
          <!-- /.modal -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>