<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">

        <span class="brand-text font-weight-light">
            <center>


                <font style="color: #50c7ef !important; font-size: 35px;font-weight: bold;font-family: 'Pacifico', cursive;">
                    <i class="fa fa-ravelry fa-beat"></i>
                    CWC
                </font>

            </center>
        </span>
        <span class="brand-text font-weight-light">
            <center>
                <h6></h6>
            </center>
        </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar ">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?php echo config_item('base_url') ?>assets/gambar_admin/infomed.png" class="img-circle elevation-4" alt="User Image">
            </div>
            <div class="info">
                <font color="white">
                    <a href="#" class="d-block"><b></i> <?php echo $_SESSION['username']; ?> <i class="spinner-grow spinner-grow-sm text-success">
                            </i></b></a>

                </font>

            </div>

        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <?php
                $menu = $this->m_utama->menu_admin();
                foreach ($menu->result() as $x) {
                    if ($x->submenu == 'Y') { ?>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <font color="white"><i class="<?php echo $x->nama_ikon; ?>"></i>
                                    <p>
                                        <?php echo $x->main_menu; ?>

                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </font>
                            </a>
                            <ul class="nav nav-treeview">


                                <?php
                                $submenu = $this->m_utama->submenu_admin($x->id);
                                foreach ($submenu->result() as $y) { ?>
                                    <li class="nav-item ml-3">
                                        <a href="<?php echo site_url() . $y->link; ?>" class="nav-link ">
                                            <font color="white"> <i class="<?php echo $y->ikon_sub; ?>"></i>
                                                <p><?php echo $y->nama_sub; ?></p>
                                            </font>
                                        </a>
                                    </li>
                                <?php } ?>
                            </ul>
                        </li>
                    <?php } else {  ?>
                        <li class="nav-item">
                            <a href="<?php echo site_url() . $x->link; ?>" class="nav-link">
                                <font color="white"> <i class="<?php echo $x->nama_ikon; ?>"></i>
                                    <p>
                                        <?php echo $x->main_menu; ?>
                                    </p>
                                </font>
                            </a>
                        </li>
                <?php
                    }
                } ?>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>