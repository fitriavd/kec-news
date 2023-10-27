<!--Counter Inbox-->
<!--Counter Inbox-->
<?php
$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
$jum_pesan = $query->num_rows();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Pengguna</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/1665873309294.png' ?>">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php
        $query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
        $jum_pesan = $query->num_rows();
        ?>
        <header class="main-header">

            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">Berita</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">ADMINISTRATOR</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->
                        <li class="dropdown messages-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope-o"></i>
                                <span class="label label-success"><?php echo $jum_pesan; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="header">Anda memiliki <?php echo $jum_pesan; ?> pesan</li>
                                <li>
                                    <!-- inner menu: contains the actual data -->
                                    <ul class="menu">
                                        <?php
                                        $inbox = $this->db->query("SELECT tbl_inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM tbl_inbox WHERE inbox_status='1' ORDER BY inbox_id DESC LIMIT 5");
                                        foreach ($inbox->result_array() as $in) :
                                            $inbox_id = $in['inbox_id'];
                                            $inbox_nama = $in['inbox_nama'];
                                            $inbox_tgl = $in['tanggal'];
                                            $inbox_pesan = $in['inbox_pesan'];
                                        ?>
                                            <li>
                                                <!-- start message -->
                                                <a href="<?php echo base_url() . 'admin/inbox' ?>">
                                                    <div class="pull-left">
                                                        <img src="<?php echo base_url() . 'assets/images/user_blank.png' ?>" class="img-circle" alt="User Image">
                                                    </div>
                                                    <h4>
                                                        <?php echo $inbox_nama; ?>
                                                        <small><i class="fa fa-clock-o"></i>
                                                            <?php echo $inbox_tgl; ?></small>
                                                    </h4>
                                                    <p><?php echo $inbox_pesan; ?></p>
                                                </a>
                                            </li>
                                            <!-- end message -->
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li class="footer"><a href="<?php echo base_url() . 'admin/inbox' ?>">Lihat Semua Pesan</a>
                                </li>
                            </ul>
                        </li>

                        <?php
                        $id_admin = $this->session->userdata('idadmin');
                        $q = $this->db->query("SELECT * FROM tbl_pengguna WHERE pengguna_id='$id_admin'");
                        $c = $q->row_array();
                        ?>
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="<?php echo base_url() . 'assets/images/' . $c['pengguna_photo']; ?>" class="user-image" alt="">
                                <span class="hidden-xs"><?php echo $c['pengguna_nama']; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="<?php echo base_url() . 'assets/images/' . $c['pengguna_photo']; ?>" class="img-circle" alt="">

                                    <p>
                                        <?php echo $c['pengguna_nama']; ?>
                                        <?php if ($c['pengguna_level'] == '1') : ?>
                                            <small>Administrator</small>
                                        <?php else : ?>
                                            <small>Author</small>
                                        <?php endif; ?>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <a href="<?php echo base_url() . 'administrator/logout' ?>" class="btn btn-default btn-flat">Sign out</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <li>
                            <a href="<?php echo base_url() . '' ?>" target="_blank" title="Lihat Website"><i class="fa fa-globe"></i></a>
                        </li>
                    </ul>
                </div>

            </nav>
        </header>