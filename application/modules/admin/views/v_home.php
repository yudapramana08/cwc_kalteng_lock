  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">DASHBOARD</h1>
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

              <!-- /.card-header -->
              <div class="card-body">
                <!-- Main content -->
                <section class="content">
                  <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                      <div class="col-lg-3 col-6">

                        <!-- small box -->
                        <div class="small-box" style="background: #FFF5EE;">
                          <div class="inner">
                            <h3><?php echo $this->m_utama->count_data()->num_rows(); ?></h3>


                            <p>Data input</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-tasks"></i>
                          </div>
                          <a href="<?php echo site_url() . 'data' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>

                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background: #E6E6FA;">

                          <div class="inner">
                            <h3><?php echo $this->m_utama->count_call_success()->num_rows(); ?></h3>


                            <p>Call Succes</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-rocket"></i>

                          </div>
                          <a href="<?php echo site_url() . 'data' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background: #FFA07A;">

                          <div class="inner">
                            <h3><?php echo $this->m_utama->count_call_abandon()->num_rows(); ?></h3>


                            <p>Call Abandon</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-times"></i>

                          </div>
                          <a href="<?php echo site_url() . 'data' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                      <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box" style="background: #B0E0E6;">

                          <div class="inner">
                            <h3><?php echo $this->m_utama->data_user_agent()->num_rows(); ?></h3>

                            <p>Agent</p>
                          </div>
                          <div class="icon">
                            <i class="fas fa-users"></i>

                          </div>
                          <a href="<?php echo site_url() . 'akun' ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                      </div>
                      <!-- ./col -->
                    </div>
                    <!-- /.row -->
                    <!-- Main row -->
                    <div class="row">
                      <!-- Left col -->

                      <!-- /.Left col -->
                      <!-- right col (We are only adding the ID to make the widgets sortable)-->
                      <section class="col-lg-6 connectedSortable">
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="fas fa-chart-pie mr-1"></i>
                              Top 10 pengaduan bulan ini
                            </h3>

                          </div>
                          <div class="card-body">
                            <div class="tab-content p-0">
                              <table class="table table-bordered table-striped" id="pengaduan">
                                <thead>
                                  <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Perihal Pengaduan</th>
                                    <th scope="col">Jumlah</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php $sql = $this->m_utama->count_keluhan();
                                  $no = 1;
                                  foreach ($sql->result() as $x) {
                                  ?>
                                    <tr>
                                      <th scope="row"><?php echo $no++; ?></th>
                                      <td><?php echo $x->jenis_komplain; ?></td>
                                      <td><?php echo $x->jum; ?></td>
                                    </tr>
                                  <?php } ?>
                                </tbody>
                              </table>

                            </div>
                          </div>
                      </section>


                      <section class="col-lg-6 connectedSortable">
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card">
                          <div class="card-header">
                            <h3 class="card-title">
                              <i class="fas fa-chart-line mr-1"></i>
                              Data input bulan ini
                            </h3>

                          </div><!-- /.card-header -->
                          <div class="card-body">
                            <div class="tab-content p-0">
                              <!-- Morris chart - Sales -->
                              <div class="chart" style="position: relative; height: 290px;">
                                <canvas id="lineChart"></canvas>
                              </div>

                            </div>
                          </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                      </section>



                      <!-- right col -->
                    </div>
                    <!-- /.row (main row) -->
                  </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
    </section>

    <!-- /.control-sidebar -->
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


  <script src="<?php echo config_item('base_url') ?>/assets/plugins/chart.js/Chart.min.js"></script>
  <style>
    .buttons-pdf {
      background-color: #3498db;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 1px 5px;
      position: relative;
    }

    .buttons-excel {
      background-color: #56D961;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 1px 5px;
      position: relative;
    }

    .buttons-pdf::before {
      content: "\f1c1";
      font-family: FontAwesome;
    }

    .buttons-excel::before {
      content: "\f1c3";
      font-family: FontAwesome;
    }


    .buttons-pdf:hover {
      background-color: #3FD2E2;
    }

    .buttons-excel:hover {
      background-color: #3FD2E2;
    }

    .buttons-pdf span {
      display: none;
    }

    .buttons-excel span {
      display: none;
    }
  </style>
  <script>
    $(document).ready(function() {
      $('#pengaduan').DataTable({
        // script untuk membuat export data 
        dom: 'Bfrtip',
        buttons: [
          'excel', 'pdf'
        ],
        "responsive": true,
        "autoWidth": false,

        pageLength: 10

      });
    });
  </script>
  <?php
  $last_date = date('t');
  $sql = $this->m_utama->grafik_data();


  $no = 1;
  for ($i = 1; $i <= $last_date; $i++) {
    $data[$i] = 0;
    $tanggal[$i] = $no;
    $no++;
  }

  foreach ($sql->result() as $x) {
    $data[$x->tgl] = $x->jum;
  }





  ?>
  <script>
    //line
    var ctxL = document.getElementById("lineChart").getContext('2d');
    var myLineChart = new Chart(ctxL, {
      type: 'line',
      data: {
        labels: [<?php
                  for ($i = 1; $i <= $last_date; $i++) {
                    echo '"' . $tanggal[$i] . '",';
                  } ?>],
        datasets: [{
          label: "Data",
          data: [<?php
                  for ($i = 1; $i <= $last_date; $i++) {
                    echo $data[$i] . ',';
                  } ?>],
          backgroundColor: [
            'rgb(135, 206, 235)',
          ],
          borderColor: [
            'rgb(100, 149, 237)',
          ],
          borderWidth: 2
        }]
      },
      options: {
        responsive: true
      }
    });
  </script>