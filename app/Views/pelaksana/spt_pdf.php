<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ; $dataspt['data'][0]->spt_nomor;?></title>
  <style>
    @page {
      /* size: 22; */
      margin-top: 1.5cm;
      /* margin-left: 2cm;
      margin-right: 2cm; */
      margin-bottom: 1.5cm;
    }

      #header, #footer {
      position: fixed;
      left: 0;
      right: 0;
      color: #aaa;
      font-size: 0.9em;
    }
    #footer {
        bottom: 0;
        
    }
    .page-number {
      text-align: right;
    }

    /* .page-number:before {
      content: "BKAD Asahan";
    } */

    .page-break {
      page-break-before: auto;
      page-break-after: auto;
      page-break-inside: avoid;
      /* border: 0; */
    }
    .card {
      /* border: 1px solid black; */
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      /* width: 816px;
      height: 1096px; */
      border-radius: 5px;
      padding: 37px;
    }
    

    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    img {
      border-radius: 5px 5px 0 0;
      width: 100%;
      height: 100px;
      padding-bottom: 10px

    }

    .cardttd{
       /* border: 1px solid black; */
      /* box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2); */
      /* transition: 0.3s; */
      /* width: 100%; */
      /* height: 1096px; */
      border-radius: 5px;
      padding: 37px;
      /* float: inline-end; */
    }

    .container {
      padding: 2px 20px;

    }
    
    #surat{
      /* border: 1px solid black; */
      font-family: Arial, Helvetica, sans-serif;
      /* width: 100%; */
      /* height: auto; */
      text-align: center;
      font-size: small;
      padding: 0px 10px;
    }
    /* td {
      border: 1px solid black;
    } */
    #judulsurat {
      text-align: center;
      font-weight: bold;
      font-size: large;
      text-decoration: underline;
    }
    #isinomor {
      text-align: center;
      font-size: medium;
      padding-bottom: 10px;
      
    }
    #isisurat {
      text-align: justify;
      vertical-align: top;
      padding-bottom: 5px;
      padding-top: 5px;
      
    }
    #isisuratpej {
      text-align: justify;
      vertical-align: top;
      /* padding-bottom: 0px; */
    }
    #isisuratpejt {
      text-align: center;
      vertical-align: top;
      /* padding-bottom: 0px; */
    }
    #isisuratno {
      text-align: right;
      vertical-align: top;
    }
    #isiberita {
      text-align: justify;
      vertical-align: top;
      padding-bottom: 10px;
    }
    #isipenutup {
      text-align: justify;
      vertical-align: top;
      padding-bottom: 10px;
    }
    #ttd{
      text-align: justify;
      /* padding-top: 20px; */
      padding-bottom: 0px;
    }
    #ttdan {
      text-align: right;
      vertical-align: top;
    }
    
    
    
  </style>
</head>
<body>
  <!-- <div class="card"> -->
    <div id="footer">
      <div class="page-number"></div>
    </div>
        
    <div class="container">
      <img src="<?= $imageSrc ?>">
      <table id="surat">
        <tr>
          <td colspan="11" id="judulsurat" >SURAT TUGAS</td>
        </tr>
        <tr>
          <td colspan="11" id='isinomor'>
            <?php if (empty($spt['data'][0]->spt_nomor)) : ?>
              Nomor : 800.1.11.1/
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/BKAD/
              &nbsp;&nbsp;&nbsp;&nbsp;/<?= session('tahun'); ?>
            <?php else : ?>
              Nomor : <?= $spt['data'][0]->spt_nomor ?>
            <?php endif ?>
          </td>
        </tr>
        <?php 
        $dasar = $dataspt['data'][0]->spt_dasar;
        if ($dasar) : ?>
        <tr>
          <td colspan="2" id="isisurat">Dasar</td>
          <td id="isisurat" width="4%">:</td>
          <td colspan="8" id="isisurat"><?= $spt['data'][0]->spt_dasar ?></td>
        </tr>
        <?php endif ?>
        
        <tr><td></td></tr>
        <tr>
          <td colspan="11" id="isisurat"><strong><center>MEMERINTAHKAN</center></strong></td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat">Kepada :</td>
        </tr>
        <?php 
        if ($spt['jumlah'] > 1) {
                $no = 1;
            } else $no="";
        foreach ($spt['data'] as $key => $value) : 
        ?>
        <tr class="page-break">
          <td id="isisuratno"></td>
          <td id="isisuratno"></td>
          <td id="isisuratpej" width="5%"><?= $no++; ?>.</td>
          <td id="isisuratpej" width="30%">Nama</td>
          <td >:</td>
          <td colspan="6" id="isisuratpej" ><?= $value->pegawai_nama; ?></td>
        </tr>
        <tr class="page-break">
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej">NIP</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pegawai_nip; ?></td>
        </tr>
        <tr class="page-break">
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej">Pangkat/ Golongan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pangkat_nama; ?>(<?= $value->pangkat_gol; ?>)</td>
        </tr>
        <tr class="page-break">
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej">Jabatan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pegawai_jabatan; ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class = "page-break">
          <td colspan="11" id="isisurat">Untuk :</td>
        </tr>
        <tr>
          <td id="isiberita" width="5%">1.</td>
          <td colspan="10" id="isiberita"><?= $dataspt['data'][0]->spt_uraian; ?> ke <?= $dataspt['data'][0]->spt_tempat; ?>, di <?= $dataspt['data'][0]->lokasiperjadin_nama; ?> pada tanggal <?= date('d F Y',strtotime($dataspt['data'][0]->spt_mulai)); ?> s.d <?= date('d F Y',strtotime($dataspt['data'][0]->spt_berakhir)); ?>.</td>
        </tr>
        <tr>
          <td id="isiberita">2.</td>
          <td colspan="10" id="isiberita">Setelah selesai melaksanakan tugas dimaksud agar melaporkan hasilnya kepada Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan.</td>
        </tr>
        <tr>
          <td colspan="11" id="isipenutup">Demikian Surat Perintah ini diperbuat, untuk dilaksanakan dengan penuh tanggung jawab</td>
        </tr>
      </table>
      <!-- <div class="cardttd"> -->
      <table id="surat" class="page-break">
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd" width="50%">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </td>
          <td id="ttd" width="25%">Dikeluarkan di</td>
          <td id="ttd" width="5%">:</td>
          <td id="ttd" width="20%" >Kisaran</td>
        </tr>
        <tr>
          <td id="ttd" ></td>
          <td id="ttd"  >Pada Tanggal</td>
          <td id="ttd" >:</td>
          <td id="ttd" >
            <?php if(!empty($spt['data'][0]->spt_tgl)) : ?>
              <?= date('d F Y',strtotime($spt['data'][0]->spt_tgl)); ?>
            <?php endif;?>
          </td>
        </tr>
        <tr><td><br></td></tr>
        <?php if($dataspt['data'][0]->pejabat_kode == "PLH") { ?>
          <tr>
            <td id="ttdan"><?= $dataspt['data'][0]->pejabat_kode; ?>. &nbsp;</td>
            <td colspan="3" id="ttd">Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</td>
          </tr>
          <tr>
          <td id="ttdan" ></td>
            <td colspan="3" id="ttd" ></td>
          </tr>
          <?php } elseif($dataspt['data'][0]->pejabat_kode == "PLT") { ?>
          <tr>
            <td id="ttdan"><?= $dataspt['data'][0]->pejabat_kode; ?>. &nbsp;</td>
            <td colspan="3" id="ttd"><b>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</b></td>
          </tr>
          <tr>
          <td id="ttdan" ></td>
            <td colspan="3" id="ttd" ></td>
          </tr>
          <?php } elseif($dataspt['data'][0]->pejabat_kode == "Kaban") { ?>
          <tr>
            <td id="ttdan"></td>
            <td colspan="3" id="ttd"><b>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</b></td>
          </tr>
          <tr>
          <td id="ttdan" ></td>
            <td colspan="3" id="ttd" ></td>
          </tr>
        <?php } else { ?>
          <tr>
            <td id="ttdan"><b>An.</b></td>
            <td colspan="3" id="ttd"><b>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan<b></td>
          </tr>
          <tr>
          <td id="ttdan"></td>
          <td colspan="3" id="ttd" ><b><?= $dataspt['data'][0]->pejabat_namajabatan; ?></b></td>
          </tr>
        <?php } ?>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd"><b><?= $dataspt['data'][0]->pejabat_nama; ?></b></td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" ><b><?= $dataspt['data'][0]->pejabat_pangkat; ?></b></td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" ><b>Nip.<?= $dataspt['data'][0]->pejabat_nip; ?></b></td>
        </tr>
      </table>
    </div>
  <!-- </div> -->
  <!-- </div> -->
  <script>
  window.addEventListener("load", window.print());
</script>
</body>
</html>