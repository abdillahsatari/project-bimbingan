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
              <h3 class="box-title">List Mahasiswa</h3>
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
                  <i class="fa fa-plus-square"></i> Daftar Dosen
                </a>
              </div>
            </div>
            <br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Nip</th>
                  <th>Password</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
                <tr>
                  <td>Abdllah Satari Rahim</td>
                  <td>D42114516</td>
                  <td>md5 Encrypted Password</td>
                  <td>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw  fa-edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-remove"></i></button>
                  </td>
                </tr>
              </tbody>
            </table>
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
                      <div style="margin-left: 35px; margin-right: 5%;">
                          <div class="form-group">
                            <label>Nama Mahasiswa</label>
                            <input type="text" class="form-control" placeholder="Nama Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Nim</label>
                            <input type="text" class="form-control" placeholder="Nim Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Departemen</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Departemen Teknik Informatika</option>
                              <option>Departemen Teknik Elektro</option>
                              <option>Departemen Teknik Sipil</option>
                              <option>Departemen Teknik Mesin</option>
                              <option>Departemen Teknik Industri</option>
                              <option>Departemen Teknik Perkapalan</option>
                              <option>Departemen Teknik Arsitektur</option>
                            </select>
                          </div>
                          <div class="form-group">
                            <label>Angkatan</label>
                            <input type="text" class="form-control" placeholder="Program Studi Mahasiswa">
                          </div>
                          <div class="form-group">
                            <label>Password</label>
                            <input type="text" class="form-control" placeholder="Password">
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
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>