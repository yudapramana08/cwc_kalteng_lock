<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">TAMBAH DATA</h4>
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
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Success!</strong> <?php echo $this->session->flashdata('sukses'); ?>
                </div>
            <?php } else if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong>Error!</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>
            <?php }  ?>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">

                            <form action="<?php echo base_url() . 'data/insert_data' ?>" method="post" enctype="multipart/form-data">

                                <table class='table table-condensed table-bordered'>
                                    <tbody>
                                        <tr>
                                            <th scope='row'>Call Status</th>
                                            <td>
                                                <select name='call_status' class='form-control select2' required>
                                                    <option value="SUCCES">SUCCES</option>
                                                    <option value="ABANDON">ABANDON</option>
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th width='120px' scope='row'>Caller number</th>
                                            <td><input type='text' class='form-control' name='caller_number' required></td>
                                        </tr>
                                        <tr>
                                            <th width='120px' scope='row'>Caller type</th>
                                            <td><input type='text' class='form-control' name='caller_type' value="Customer" required></td>
                                        </tr>
                                        <tr>
                                            <th width='120px' scope='row'>Caller name</th>
                                            <td><input type='text' class='form-control' name='caller_name' required></td>
                                        </tr>
                                        <tr>
                                            <th width='120px' scope='row'>Account No</th>
                                            <td><input type='text' class='form-control' name='account_no'></td>
                                        </tr>
                                        <tr>
                                            <th width='120px' scope='row'>Card No</th>
                                            <td><input type='text' class='form-control' name='card_no'></td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Blank Call </th>
                                            <td>
                                                <select name='blank_call' class='form-control select2' required>
                                                    <option value="NO">NO</option>
                                                    <option value="YES">YES</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Inquiry</th>
                                            <td>
                                                <select name='inquiry' class='form-control select2' required>
                                                    <option value="NO">NO</option>
                                                    <option value="YES">YES</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Kategori</th>
                                            <td>
                                                <select name='kategori' id="kategori" class='form-control' required>
                                                    <?php $sql = $this->m_utama->kategori();
                                                    foreach ($sql->result() as $x) {
                                                    ?>
                                                        <option value="<?php echo $x->id ?>"><?php echo $x->kategori; ?></option>

                                                    <?php } ?>
                                                </select>
                                                <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load1" style="display:none;" />

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Sub1</th>
                                            <td>
                                                <select class="form-control" name="sub1" id="sub1">
                                                    <option value="" selected>--PILIH--</option>

                                                </select>
                                                <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load2" style="display:none;" />

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Sub2</th>
                                            <td>
                                                <select class="form-control" name="sub2" id="sub2">
                                                    <option value="" selected>--PILIH--</option>

                                                </select>
                                                <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load3" style="display:none;" />

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Sub3</th>
                                            <td>
                                                <select class="form-control" name="sub3" id="sub3">
                                                    <option value="" selected>--PILIH--</option>
                                                </select>
                                                <img src="<?php echo config_item('base_url') ?>/assets/loading.gif" width="35" id="load4" style="display:none;" />

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Perihal pengaduan</th>
                                            <td> <textarea name="perihal" class="texteditor" id="editor-perihal" required></textarea></td>
                                        </tr>
                                        <tr>
                                            <th scope='row'>Feedback</th>
                                            <td> <textarea name="feedback" class="texteditor" id="editor" required></textarea></td>
                                        </tr>


                                    </tbody>
                                </table>
                                <div class='box-footer'>
                                    <a href='<?php echo base_url() . 'data' ?>'><button type='button' class='btn btn-default '>Cancel</button></a>

                                    <button type='submit' name='submit' class='btn btn-info pull-right'>Tambahkan</button>

                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    </section>




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

            $("#sub2").html(' ');
            $("#sub3").html(' ');
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
            $("#sub2").html(' ');

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

        $("#sub2").on("change", function() {
            $("#sub3").html(' ');

            $("img#load3").show();
            var sub2 = $(this).val();
            $.ajax({
                type: "POST",
                dataType: "html",
                url: "<?php echo base_url('data/ajax_subkategori2'); ?>",
                data: "sub2=" + sub2,
                success: function(msg) {
                    $("#sub3").html(msg);
                    $("img#load3").hide();
                    $("#sub3").select2();
                }
            });
        });

    });
</script>
<script>
    CKEDITOR.replace('editor', {
        height: 400

    });
    CKEDITOR.replace('editor-perihal', {
        height: 100

    });
</script>