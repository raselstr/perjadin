<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <base href="<?= base_url('templates'); ?>/">

    
</head>
<body>
    
    
                <table id="tes" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th rowspan="2" class="align-middle text-center">No</th>
                      <th rowspan="2" class="align-middle text-center">Pejabat Pemberi Tugas</th>
                      <th colspan="3" class="align-middle text-center">Data Perjalanan Dinas</th>
                      <th rowspan="2" class="align-middle text-center">Transportasi yang digunakan</th>
                      <th rowspan="2" class="align-middle text-center">Tanggal dibuat</th>
                      <th rowspan="2" class="align-middle text-center">Pelaksana</th>
                      <th rowspan="2" class="align-middle text-center">aksi</th>
                    </tr>
                    <tr>
                      <th class="align-middle text-center">Uraian Perjalanan</th>
                      <th class="align-middle text-center">Lama Perjalanan</th>
                      <th class="align-middle text-center">Tempat Tujuan</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                      $no = 1;
                      foreach ($spt as $key => $value) { ?>
                        <tr>
                          <td class="align-middle text-center"><?= $no++ ?></td>
                          <td class="align-middle"><?= $value->spt_pjb_tugas ?></td>
                          <td class="align-middle"><?= $value->spt_uraian ?></td>
                          <td class="align-middle text-center"><?= $value->spt_lama ?></td>
                          <td class="align-middle"><?= $value->spt_tujuan ?></td>
                          <td class="align-middle"><?= $value->spt_transport ?></td>
                          <td class="align-middle text-center"><?= $value->updated_at ?></td>
                          <td class="align-middle text-center">
                              <a href="<?= site_url('spt/pelaksana/'.$value->spt_id); ?>" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a></td>
                          <td class="align-middle text-center">
                            <a href="<?= site_url('spt/edit/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-info"><i class="fas fa-pencil-alt"></i></a>
                            <a href="<?= site_url('spt/remove/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-danger tombol-hapus"><i class="fas fa-trash-alt"></i></a>
                            <a href="<?= site_url('spt/show/'.$value->spt_id); ?>" class="btn btn-icon btn-sm btn-warning"><i class="fas fa-info-circle"></i></a>
                            <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-lg" onclick="detail(<?= $value->spt_id; ?>)">Detail</button> -->
                          </td>
                        </tr>
                      <?php } ?>
                  </tbody>
                </table>




</body>
</html>

