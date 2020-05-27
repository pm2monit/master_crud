<div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <h3 style="display:block; text-align:center;">Update Data Produk</h3>

  <form id="form-update-produk" method="POST">
    <input type="hidden" name="id" value="<?php echo $dataProduction->id; ?>">
    <input type="hidden" name="date_update" value="<?php echo date('yy-m-d'); ?>">
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Nama Produk" name="nama_produk" aria-describedby="sizing-addon2" value="<?php echo $dataProduction->nama_produk; ?>">
    </div>
    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Deskripsi Produk" name="deskripsi_produk" aria-describedby="sizing-addon2" value="<?php echo $dataProduction->deskripsi_produk; ?>">
    </div>

    <div class="input-group form-group">
      <span class="input-group-addon" id="sizing-addon2">
        <i class="glyphicon glyphicon-user"></i>
      </span>
      <input type="text" class="form-control" placeholder="Stok" name="stok" aria-describedby="sizing-addon2" value="<?php echo $dataProduction->stok; ?>">
    </div>

    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
      </div>
    </div>
  </form>
</div>
