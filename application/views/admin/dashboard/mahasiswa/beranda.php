<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Dashboard
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?=base_url('assets/')?>dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">Abdillah Satari Rahim</h3>

              <p class="text-muted text-center">D42114516</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Departemen Teknik Informatika</b>
                </li>
                <li class="list-group-item">
                  <b>Strata 1</b>
                </li>
                <li class="list-group-item">
                  <b>2014</b>
                </li>
              </ul>

              <!-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Info!</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i>Judul Penelitian</strong>

              <p class="text-muted">
                Implementasi Teknologi Progressive Web Application Menggunakan Framework Angular Pada Sistem Monitoring Energi Listrik
              </p>

              <hr>

              <strong><i class="fa fa-group margin-r-5"></i>Pembimbing</strong>

              <p class="text-muted">
              Dr. Amil Ahmad Ilham, S.T., M.IT. <br>
              Dr. Eng. Zulkifli Tahir, S.T., M.Sc.
              </p>

              <hr>

              <strong><i class="fa fa-group margin-r-5"></i>Penguji</strong>

              <p class="text-muted">
              Prof. Dr. Ir. Andani, S.T., M.T.<br>
              Adnan, S.T., M.T., Ph.D<br>
              Dr. Wardi, S.T., M.Eng.
              </p>

              <!-- <hr> -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
              <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputDosenPengarah" class="col-sm-2 control-label">Dosen Pengarah</label>
                    <div class="col-sm-10">
                      <select class="form-control select2">
                        <option selected="selected">Pembimbing 1</option>
                        <option>Pembimbing 2</option>
                        <option>Penguji 1</option>
                        <option>Penguji 2</option>
                        <option>Penguji 3</option>
                      </select>
                    </div>
                  </div> 
                  <div class="form-group">
                    <label for="inputActivity" class="col-sm-2 control-label">Jenis Kegiatan</label>
                    <div class="col-sm-10">
                      <select class="form-control select2">
                        <option selected="selected">Konsultasi Tugas Akhir</option>
                        <option>Revisi Penulisan Skripsi</option>
                        <option>Ganti Judul Skripsi</option>
                        <option>Pengajuan Jadwal Ujian Hasil</option>
                        <option>Pengajuan Jadwal Ujian Skripsi</option>
                        <option>Seminar Hasil</option>
                        <option>Seminar Skripsi</option>
                      </select>
                    </div>
                  </div>  
                  <div class="form-group">
                    <label for="inputDateActivity" class="col-sm-2 control-label">Tgl Kegiatan</label>

                    <div class="date col-sm-10">
                      <input type="text" class="form-control" id="datepicker" placeholder="Tgl Pelaksanaan">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputDescription" class="col-sm-2 control-label">Deskripsi</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputDescription" placeholder="Deskripsi Kegiatan"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
                <!-- /.post -->

              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          10 Feb. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                      <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                      <div class="timeline-body">
                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                        quora plaxo ideeli hulu weebly balihoo...
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-user bg-aqua"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

                      <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request
                      </h3>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

                      <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                      <div class="timeline-body">
                        Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood!
                      </div>
                      <div class="timeline-footer">
                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-green">
                          3 Jan. 2014
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-camera bg-purple"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

                      <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                      <div class="timeline-body">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                        <img src="http://placehold.it/150x100" alt="..." class="margin">
                      </div>
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <li>
                    <i class="fa fa-clock-o bg-gray"></i>
                  </li>
                </ul>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Username">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="col-sm-2 control-label">Username</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="inputName" placeholder="Password">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Nama Lengkap">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox">Edit My Profile
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>