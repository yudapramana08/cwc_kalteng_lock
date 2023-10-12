  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark">Data</h4>
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
                <a href="<?php echo base_url() . 'data/tambahdata/' ?>" title='tambah Data' class='btn btn-info btn-sm'>
                  <i class="fa fa-plus fa-beat" aria-hidden="true"></i> Tambah data
                </a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="all_data" class="table table-bordered table-striped" style="width:100%">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Date</th>
                      <th>Agent</th>
                      <th>Call status</th>
                      <th>Caller number</th>
                      <th>Caller type</th>
                      <th>Caller name</th>
                      <th>Account No</th>
                      <th>Card No</th>
                      <th>Blank call</th>
                      <th>Inquiry</th>
                      <th>Kategori</th>
                      <th>Jenis komplain</th>
                      <th>Perihal pengaduan</th>
                      <th>Feedback</th>
                      <th>aksi</th>
                  </thead>
                </table>
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

  <!-- jQuery -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Select2 -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/select2/js/select2.full.min.js"></script>
  <!-- InputMask -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/moment/moment.min.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
  <!-- date-range-picker -->
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo config_item('base_url') ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


  <script>
    $(document).ready(function() {
      $('#all_data').DataTable({
        "responsive": true,
        "autoWidth": false,

        ajax: {

          url: '<?php echo site_url() . 'data/data_json' ?>',
          dataSrc: ''
        },
        columns: [{
            "data": "no"
          },
          {
            "data": "date"
          },
          {
            "data": "agent"
          },
          {
            "data": "call_status"
          },
          {
            "data": "caller_number"
          },
          {
            "data": "caller_type"
          },
          {
            "data": "caller_name"
          },
          {
            "data": "account_no"
          },
          {
            "data": "card_no"
          },
          {
            "data": "blank_call"
          },
          {
            "data": "inquiry"
          },
          {
            "data": "kategori"
          },
          {
            "data": "jenis_komplain"
          },
          {
            "data": "perihal_pengaduan"
          },
          {
            "data": "feedback"
          },
          {
            "data": "aksi"
          }
        ]
      });
    });
  </script>