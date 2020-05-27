
<div class="box">
  <!-- <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-posisi"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <div class="col-md-3">
        <a href="<?php echo base_url('Posisi/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-posisi"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div>
  </div> -->
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Username</th>
          <th>Nama</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          foreach ($listuser as $dataUser) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $dataUser->username; ?></td>
              <td><?php echo $dataUser->nama; ?></td>
              <td class="text-center" style="min-width:230px;">
                <!-- <button class="btn btn-warning update-dataPosisi" data-id="<?php echo $dataUser->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                <button class="btn btn-danger konfirmasiHapus-posisi" data-id="<?php echo $dataUser->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button> -->
                <a href="<?php echo base_url('Home/detailuser?id=' . $dataUser->id); ?>" class="btn btn-info detail-dataPosisi"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
              </td>
            </tr>
            <?php
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
</div>
