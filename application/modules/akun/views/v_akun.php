  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">DATA AKUN</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!--               <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li> -->
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <?php if ($this->session->flashdata('sukses')) { ?>
          <script>
            swal("Good job!", "<?php echo $this->session->flashdata('sukses'); ?>", "success");
          </script>
        <?php } else if ($this->session->flashdata('error')) { ?>
          <script>
            swal("Upss..!!", "<?php echo $this->session->flashdata('error'); ?>", "error");
          </script>
        <?php }  ?>
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <?php if ($_SESSION['akses'] == '2') { ?>
                  <a data-toggle="modal" data-target="#Modaladd" title='tambah Data' class='btn btn-info btn-sm'>
                    <font style="color: white;"><i class="fa fa-user-plus" aria-hidden="true"></i> Tambah data</font>
                  </a>

                <?php } ?>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Hak Akses</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($data->result_array() as $i) : ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $i['username']; ?></td>
                        <td>***********</td>
                        <td><?php echo $i['akses']; ?></td>
                        <td>




                          <a href="#" type="button" data-toggle="modal" class='btn btn-info btn-sm' data-target="#Modaledit<?php echo $i['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>


                          <?php if ($_SESSION['akses'] == '1') { ?>
                            <?php if ($i['username'] != 'Superadmin') { ?>
                              | <a onclick="return confirm('Yakin Hapus ?')" class='btn btn-danger btn-sm' title='Hapus Data' data-toggle="tooltip" href='<?php echo site_url() . 'akun/hapusakun/' . $i['id'] ?>'>
                                <i class="fa fa-trash" aria-hidden="true"></i>
                              </a>

                          <?php }
                          }  ?>
                        </td>

                      </tr>


                      <!-- modal edit -->
                      <div class="example-modal">
                        <div id="Modaledit<?php echo $i['id']; ?>" class="modal fade" role="dialog" style="display:none;">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h3 class="modal-title">Edit data</h3>
                              </div>
                              <div class="modal-body">

                                <form action="<?php echo site_url() . 'akun/updateakun' ?>" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-8"><input type="hidden" class="form-control" name="userold" value="<?php echo $i['username']; ?>" required></div>

                                      <div class="col-sm-8"><input type="hidden" class="form-control id" name="id" value="<?php echo $i['id']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-4 control-label text-left">Username <span class="text-red">*</span></label>
                                      <?php if ($i['username'] == 'Superadmin') { ?>
                                        <div class="col-sm-8"><input type="text" class="form-control username" name="username" value="<?php echo $i['username']; ?>" id="username" readonly></div>
                                    </div>
                                  <?php } else { ?>
                                    <div class="col-sm-8"><input type="text" class="form-control username" name="username" value="<?php echo $i['username']; ?>" id="username"></div>
                                  </div>
                                <?php } ?>

                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <label class="col-sm-4 control-label text-left">Password </label>
                                  <div class="col-sm-8"><input type="text" class="form-control" name="password"></div>
                                </div>
                              </div>

                              <div class="form-group">
                                <div class="row">
                                  <label class="col-sm-4 control-label text-left">Akses <span class="text-red">*</span></label>
                                  <div class="col-sm-8">
                                    <?php if ($_SESSION['akses'] <= 2) { ?>
                                      <select class="form-control" name="akses">

                                        <option value="<?php echo $i['akses']; ?>"><?php echo $i['akses']; ?></option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                      <?php } else { ?>
                                        <select class="form-control" name="akses" readonly>

                                          <option value="<?php echo $i['akses']; ?>"><?php echo $i['akses']; ?></option>

                                        <?php } ?>

                                        </select>
                                  </div>
                                </div>
                              </div>


                              <div class="modal-footer">
                                <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- modal edit close -->
              </div>

            <?php

                    endforeach; ?>
            </tbody>
            <tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
    </section>





    <!-- modal insert -->
    <div class="example-modal">
      <div id="Modaladd" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">Tambah data</h3>
            </div>
            <div class="modal-body">
              <form action="<?php echo site_url() . 'akun/tambahakun' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label text-left">Username <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="username" placeholder="Username" required></div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label text-left">Password <span class="text-red">*</span></label>
                    <div class="col-sm-8"><input type="text" class="form-control" name="password" placeholder="password" required></div>
                  </div>
                </div>

                <div class=" form-group">
                  <div class="row">
                    <label class="col-sm-4 control-label text-left">Akses <span class="text-red">*</span></label>
                    <div class="col-sm-8">
                      <select class="form-control" name="akses">
                        <option value="3">3</option>

                      </select>
                    </div>
                  </div>
                </div>



                <div class="modal-footer">
                  <button id="nosave" type="button" class="btn btn-danger pull-left" data-dismiss="modal">Batal</button>
                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div><!-- modal insert close -->


  </div>
  <!-- ./wrapper -->