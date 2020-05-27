<?php
  foreach ($dataFinance as $data) {
    ?>
    <tr>
      <td><?php echo $data->date_insert; ?></td>
      <td><?php echo $data->keterangan; ?></td>
      <td><?php echo number_format($data->debit); ?></td>
      <td><?php echo number_format($data->kredit); ?></td>
      <td><?php echo number_format($data->saldo); ?></td>
      <td class="text-center" style="min-width:230px;">
        <button class="btn btn-warning update-dataFinance" data-id="<?php echo $data->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
        <button class="btn btn-danger konfirmasiHapus-finance" data-id="<?php echo $data->id; ?>" data-toggle="modal" data-target="#konfirmasiHapus"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
      </td>
    </tr>
    <?php
  }
?>
