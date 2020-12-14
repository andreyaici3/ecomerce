<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="pull-left image">
        <img src="<?= base_url() ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <p><?= $this->userdata->name ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Sedang Aktif</a>
        </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
        <input type="text" name="q" class="form-control" autocomplete="off" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
        </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href=""><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-th"></i>
                <span>Data Utama</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="<?= base_url('dashboard/produk') ?>"><i class="fa fa-circle-o"></i> Produk</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Kategori</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Pembeli</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Keuangan</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
                <span class="label label-primary pull-right">4</span>
               
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Saldo Pembeli</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Keuangan</a></li>
                <li><a href=""><small class="label pull-right bg-green">Hot</small><i class="fa fa-circle-o"></i> Konfirmasi Pembayaran</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Pembayaran Otomatis</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-print"></i>
                <span>Laporan</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>               
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Laporan Keuangan</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Laporan Penjualan</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Laporan Pelanggan</a></li>                
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-gears"></i>
                <span>Pengaturan</span>
                <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>               
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i> Meta Data</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i> Toko</a></li>              
            </ul>
        </li>

        <li><a href="<?= base_url('outadmin') ?>"><i class="fa fa-sign-out"></i> <span>Log Out</span></a></li>

    </ul>
    </section>
    <!-- /.sidebar -->