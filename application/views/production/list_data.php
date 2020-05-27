<?php
  foreach ($dataProduction as $data) {
    ?>
    <tr>
      <td><?php echo $data->nama_produk; ?></td>
      <td><?php echo $data->deskripsi_produk; ?></td>
      <td><?php echo $data->stok; ?></td>
      <td><?php echo $data->date_insert; ?></td>
      <td><?php echo $data->date_update; ?></td>

      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataProduction" data-id="<?php echo $data->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-production" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>
