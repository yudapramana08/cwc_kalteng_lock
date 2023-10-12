  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">SUB 3</h4>
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
                      <th>Sub 3</th>
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
                          $sub2 = $this->m_utama->sub2ById($i['id_sub2']);
                          $sub1 = $this->m_utama->sub1ById($sub2['id_sub1']);
                          $kat = $this->m_utama->kategoriById($sub1['id_kategori']);

                          echo $kat['kategori'] . '->' . $sub1['sub'] . '->' . $sub2['sub'];
                          ?></td>
                        <td><?php echo $i['sub']; ?></td>
                        <td><?php echo $i['aktif']; ?> </td>
                        <td>
                          <a href="#" type="button" title="edit" data-toggle="modal" class='btn btn-info btn-sm' data-target="#Modaledit<?php echo $i['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                          |
                          <a onclick="return confirm('Yakin Hapus ?')" class='btn btn-danger btn-sm' title='Hapus Data' data-toggle="tooltip" href='<?php echo base_url() . 'sub3/hapus/' . $i['id'] ?>'>
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

                                <form action="<?php echo base_url() . 'sub3/updatesub3' ?>" method="post" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <div class="row">

                                      <div class="col-sm-8"><input type="hidden" class="form-control id" name="id" value="<?php echo $i['id']; ?>" required></div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">Kategori<span class="text-red">*</span></label>
                                      <div class="col-sm-7">
                                        <select class="form-control" name="kategori" id="<?php echo 'kategori-edit' . $no; ?>">
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
                                      <label class="col-sm-3 control-label text-left">Sub 1<span class="text-red">*</span></label>
                                      <div class="col-sm-7">
                                        <select class="form-control" name="sub1" id="<?php echo 'sub1-edit' . $no; ?>">
                                          <option value="<?php echo $sub1['id'] ?>"><?php echo $sub1['sub']; ?></option>

                                        </select>
                                        <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load1" style="display:none;" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">Sub 2</label>

                                      <div class="col-sm-7">
                                        <select class="form-control" name="sub2" id="<?php echo 'sub2-edit' . $no; ?>">
                                          <option value="<?php echo $sub2['id'] ?>"><?php echo $sub2['sub']; ?></option>

                                        </select>
                                        <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load2" style="display:none;" />
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <label class="col-sm-3 control-label text-left">Sub 3 <span class="text-red">*</span></label>
                                      <div class="col-sm-7"><input type="text" class="form-control" name="sub3" value="<?php echo $i['sub']; ?>" required></div>
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

              <form action="<?php echo base_url() . 'sub3/insertsub3' ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-left">Kategori<span class="text-red">*</span></label>
                    <div class="col-sm-7">
                      <select class="form-control" name="kategori" id="kategori">
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
                    <label class="col-sm-3 control-label text-left">Sub 1<span class="text-red">*</span></label>
                    <div class="col-sm-7">
                      <select class="form-control" name="sub1" id="sub1">
                        <option></option>
                      </select>
                      <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load2" style="display:none;" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-left">Sub 2<span class="text-red">*</span></label>
                    <div class="col-sm-7">
                      <select class="form-control" name="sub2" id="sub2">
                        <option></option>
                      </select>
                      <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load3" style="display:none;" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <label class="col-sm-3 control-label text-left">Sub 3 <span class="text-red">*</span></label>
                    <div class="col-sm-7"><input type="text" class="form-control" name="sub3" required></div>
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



  <script src="<?php echo config_item('base_url') ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Select2 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- DataTables -->
  <!-- InputMask -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>

  <script src="<?php echo config_item('base_url') ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo config_item('base_url') ?>/assets/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo config_item('base_url') ?>/assets/dist/js/demo.js"></script>


  <!-- Jquery, Bootstrap dan Typehead -->
  <script src="<?php echo config_item('base_url') ?>/assets/dist/typeahead/js/jquery.min.js"></script>

  <script src="<?php echo config_item('base_url') ?>/assets/dist/typeahead/js/bootstrap.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/dist/typeahead/js/bootstrap3-typeahead.min.js"></script>

  <script src="<?php echo config_item('base_url') ?>/assets/dist/typeahead/js/handlebars.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/dist/typeahead/js/typeahead.bundle.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/dist/js/select2.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {


      $("#kategori").on("click", function() {

        $("#sub2").html('');
        $("img#load1").show();
        var kategori = $(this).val();
        $.ajax({
          type: "POST",
          dataType: "html",
          url: "<?php echo base_url('data/ajax_kategori'); ?>",
          data: "kategori=" + kategori,
          success: function(msg) {
            $("#sub1").html(msg);
            $("img#load1").hide();

            // Inisialisasi Select2 pada select#sub1-edit

            $("#sub1").select2();

            // Pilih opsi pertama dalam select#sub1-edit
            $("#sub1").val($("#sub1option:first").val()).trigger("change.select2");
          }
        });
      });


      $("#sub1").on("change", function() {
        $("#sub2").html('');

        $("img#load2").show();
        var sub1 = $(this).val();
        $.ajax({
          type: "POST",
          dataType: "html",
          url: "<?php echo base_url('data/ajax_subkategori'); ?>",
          data: "sub1=" + sub1,
          success: function(msg) {
            $("#sub2").html(msg);
            $("img#load2").hide();

            // Inisialisasi Select2 pada select#sub2-edit + x
            $("#sub2").select2();
          }
        });
      });

      let no = <?php echo $no; ?>;
      ////////////////// EDIT /////////////////////
      for (let x = 1; x <= no; x++) {

        $("#kategori-edit" + x).on("click", function() {

          $("select#sub2-edit" + x).html('');
          $("img#load1").show();
          var kategori = $(this).val();
          $.ajax({
            type: "POST",
            dataType: "html",
            url: "<?php echo base_url('data/ajax_kategori'); ?>",
            data: "kategori=" + kategori,
            success: function(msg) {
              $("select#sub1-edit" + x).html(msg);
              $("img#load1").hide();

              // Inisialisasi Select2 pada select#sub1-edit

              $("select#sub1-edit" + x).select2();

              // Pilih opsi pertama dalam select#sub1-edit
              $("select#sub1-edit" + x).val($("select#sub1-edit" + x + " option:first").val()).trigger("change.select2");
            }
          });
        });


        $("#sub1-edit" + x).on("change", function() {
          $("select#sub2-edit" + x).html('');

          $("img#load2").show();
          var sub1 = $(this).val();
          $.ajax({
            type: "POST",
            dataType: "html",
            url: "<?php echo base_url('data/ajax_subkategori'); ?>",
            data: "sub1=" + sub1,
            success: function(msg) {
              $("select#sub2-edit" + x).html(msg);
              $("img#load2").hide();

              // Inisialisasi Select2 pada select#sub2-edit + x
              $("select#sub2-edit" + x).select2();
            }
          });
        });



      }



      ///////////////// EDIT /////////////////////


    });
  </script>