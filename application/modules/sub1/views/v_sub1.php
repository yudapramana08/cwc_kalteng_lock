  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">SUB 1</h4>
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
                <a data-toggle="modal" data-target="#Modalinsert" title='tambah Data' class='btn btn-info btn-sm'>
                  <font style="color: white;"><i class="fa fa-plus" aria-hidden="true"></i> Tambah data</font>
                </a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Matrix</th>
                      <th>Sub 1</th>
                      <th>Aktif</th>
                      <th>aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($data->result_array() as $i) : ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td>
                          <?php
                          $kat = $this->m_utama->kategoriById($i['id_kategori']);

                          echo $kat['kategori'];
                          ?></td>
                        <td><?php echo $i['sub']; ?></td>
                        <td><?php echo $i['aktif']; ?> </td>
                        <td>
                          <a href="#" type="button" title="edit" data-toggle="modal" class='btn btn-info btn-sm' data-target="#Modaledit<?php echo $i['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          |
                          <a onclick="return confirm('Yakin Hapus ?')" class='btn btn-danger btn-sm' title='Hapus Data' data-toggle="tooltip" href='<?php echo base_url() . 'sub1/hapus/' . $i['id'] ?>'>
                            <i class="fa fa-trash" aria-hidden="true"></i>
                          </a>

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

                                <form action="<?php echo base_url() . 'sub1/updatesub1' ?>" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <div class="row">

                                      <div class="col-sm-8"><input type="hidden" class="form-control id" name="id" value="<?php echo $i['id']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">Kategori<span class="text-red">*</span></label>
                                      <div class="col-sm-7">
                                        <select class="form-control select2" name="kategori" id="<?php echo 'kategori-edit' . $no; ?>">
                                          <option value="<?php echo $kat['id'] ?>"><?php echo $kat['kategori']; ?></option>

                                          <?php $sql = $this->m_utama->kategori();
                                          foreach ($sql->result() as $x) {
                                          ?>
                                            <option value="<?php echo $x->id ?>"><?php echo $x->kategori; ?></option>

                                          <?php } ?>
                                        </select>
                                        <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load1" style="display:none;" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">Sub 1 <span class="text-red">*</span></label>
                                      <div class="col-sm-7"><input type="text" class="form-control" name="sub1" value="<?php echo $i['sub']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">aktif <span class="text-red">*</span></label>
                                      <div class="col-sm-7">
                                        <select class="form-control" name="aktif">
                                          <option value="<?php echo $i['aktif']; ?>"><?php echo $i['aktif']; ?></option>
                                          <option value="Y">Y</option>
                                          <option value="T">T</option>

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
                      </div>
                      <!-- modal edit close -->


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
      <div id="Modalinsert" class="modal fade" role="dialog" style="display:none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h3 class="modal-title">insert data</h3>
            </div>
            <div class="modal-body">

              <form action="<?php echo base_url() . 'sub1/insertsub1' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-left">Kategori<span class="text-red">*</span></label>
                    <div class="col-sm-7">
                      <select class="form-control select2" name="kategori" id="kategori">
                        <?php $sql = $this->m_utama->kategori();
                        foreach ($sql->result() as $x) {
                        ?>
                          <option value="<?php echo $x->id ?>"><?php echo $x->kategori; ?></option>

                        <?php } ?>
                      </select>
                      <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load1" style="display:none;" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-left">Sub 1 <span class="text-red">*</span></label>
                    <div class="col-sm-7"><input type="text" class="form-control" name="sub1" required></div>
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
    </div>
    <!-- modal insert close -->
  </div>
  <!-- ./wrapper -->