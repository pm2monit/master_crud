<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $userdata->nama; ?></p>
        <!-- Status -->
        <a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">

      <li class="header">LIST MENU <?php echo $userdata->username; ?></li>
      <!-- Optionally, you can add icons to the links -->

      <?php if($userdata->username == 'admin') { ?>
      <li <?php if ($page == 'home') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>

      <li <?php if ($page == 'pegawai') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Pegawai'); ?>">
          <i class="fa fa-user"></i>
          <span>Data Pegawai</span>
        </a>
      </li>

      <li <?php if ($page == 'posisi') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Posisi'); ?>">
          <i class="fa fa-briefcase"></i>
          <span>Data Posisi</span>
        </a>
      </li>

      <li <?php if ($page == 'list_user') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Home/list_user'); ?>">
          <i class="fa fa-user"></i>
          <span>Data User</span>
        </a>
      </li>

      <li class="header">LIST MENU RAKYAT JELATA</li>
      <!-- <hr /> -->
    <?php } ?>

    <?php if($userdata->username == 'production' || $userdata->username == 'admin' || $userdata->username == 'admin2') { ?>
      <li <?php if ($page == 'production') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Production'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Production</span>
        </a>
      </li>
    <?php } ?>
    <?php if($userdata->username == 'inventory' || $userdata->username == 'admin' || $userdata->username == 'admin2') { ?>
      <li <?php if ($page == 'inventory') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Production'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Inventory</span>
        </a>
      </li>
    <?php } ?>
    <?php if($userdata->username == 'purchasing' || $userdata->username == 'admin' || $userdata->username == 'admin2') { ?>
      <li <?php if ($page == 'purchasing') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Production'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Purchasing</span>
        </a>
      </li>
    <?php } ?>
    <?php if($userdata->username == 'admin' || $userdata->username == 'finance' || $userdata == 'admin2') { ?>
      <li <?php if ($page == 'finance') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Finance'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Finance</span>
        </a>
      </li>
    <?php } ?>
      <li <?php if ($page == 'logout') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('Auth/logout'); ?>">
          <i class="fa fa-location-arrow"></i>
          <span>Logout</span>
        </a>
      </li>



    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
