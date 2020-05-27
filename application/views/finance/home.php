<div class="msg" style="display:none;">
  <?php echo @$this->session->flashdata('msg'); ?>
</div>

<div class="box">
  <div class="box-header">
    <div class="col-md-6" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-finance"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
    <div class="col-md-6">
        <a href="<?php echo base_url('Finance/export'); ?>" class="form-control btn btn-default"><i class="glyphicon glyphicon glyphicon-floppy-save"></i> Export Data Excel</a>
    </div>
    <!-- <div class="col-md-3">
        <button class="form-control btn btn-default" data-toggle="modal" data-target="#import-finance"><i class="glyphicon glyphicon glyphicon-floppy-open"></i> Import Data Excel</button>
    </div> -->
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Tgl Transaksi</th>
          <th>Deskripsi</th>
          <th>Debit</th>
          <th>Kredit</th>
          <th>Saldo</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-finance">

      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_finance; ?>

<div id="tempat-modal"></div>

<?php show_my_confirm('konfirmasiHapus', 'hapus-dataFinance', 'Hapus Data Ini?', 'Ya, Hapus Data Ini'); ?>
<?php
  // $data['judul'] = 'Pegawai';
  // $data['url'] = 'Pegawai/import';
  // echo show_my_modal('modals/modal_import', 'import-pegawai', $data);
?>
