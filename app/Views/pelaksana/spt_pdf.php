<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
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
      /* border-radius: 5px; */
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
    
        
    <div class="container">
      <img src="<?= $imageSrc ?>">
      <table id="surat">
        <tr>
          <td colspan="11" id="judulsurat" >SURAT TUGAS</td>
        </tr>
        <tr>
          <td colspan="11" id='isinomor'>
            Nomor : 800.1.11.1/
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/BKAD/
            &nbsp;&nbsp;&nbsp;&nbsp;/2023
          </td>
        </tr>
        <?php 
        $dasar = $spt[0]->spt_dasar;
        if ($dasar) : ?>
        <tr>
          <td colspan="2" id="isisurat" width="20%">Dasar</td>
          <td id="isisurat">:</td>
          <td colspan="8" id="isisurat" width="80%"><?= $spt[0]->spt_dasar ?></td>
        </tr>
        <?php endif ?>
        <tr>
          <td colspan="11" id="isisurat">Yang bertandatangan di bawah ini :</td>
          
          
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td> 
          <td id="isisuratpej"></td> 
          <td colspan="2" id="isisuratpej">Nama</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $spt[0]->pejabat_nama; ?></td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">NIP</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $spt[0]->pejabat_nip; ?></td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Pangkat/ Golongan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $spt[0]->pejabat_pangkat; ?></td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Jabatan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $spt[0]->pejabat_namajabatan; ?></td>
        </tr>
        <tr><td></td></tr>
        <tr>
          <td colspan="11" id="isisurat"><strong><center>MEMERINTAHKAN</center></strong></td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat">Kepada :</td>
        </tr>
        <?php 
        if ($pelaksana > 1) {
                $no = 1;
            } else $no="";
        foreach ($spt as $key => $value) : 
        ?>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratno"></td>
          <td id="isisuratpej"><?= $no++; ?>.</td>
          <td colspan="2" id="isisuratpej">Nama</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej" ><?= $value->pegawai_nama; ?></td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">NIP</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pegawai_nip; ?></td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Pangkat/ Golongan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pangkat_nama; ?>(<?= $value->pangkat_gol; ?>)</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Jabatan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej"><?= $value->pegawai_jabatan; ?></td>
        </tr>
        <?php endforeach; ?>
        <tr>
          <td colspan="11" id="isisurat">Untuk :</td>
        </tr>
        <tr>
          <td id="isiberita">1.</td>
          <td colspan="10" id="isiberita"><?= $spt[0]->spt_uraian; ?></td>
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
      <table id="surat" >
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
          <td id="ttd"  ><?= $spt[0]->spt_tgl; ?></td>
        </tr>
        <tr><td><br></td></tr>
        <?php if($spt[0]->pejabat_id <> "Kepala Dinas") { ?>
          <tr>
            <td id="ttdan">An.</td>
            <td colspan="3" id="ttd">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
          </tr>
          <tr>
          <td id="ttdan" ></td>
            <td colspan="3" id="ttd" ><?= $spt[0]->pejabat_namajabatan; ?></td>
          </tr>
        <?php } else { ?>
          <tr>
            <td id="ttdan"></td>
            <td colspan="3" id="ttd">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
          </tr>
          <tr>
          <td id="ttdan" ></td>
            <td colspan="3" id="ttd" ></td>
          </tr>
        <?php } ?>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd"><?= $spt[0]->pejabat_nama; ?></td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" ><?= $spt[0]->pejabat_pangkat; ?></td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" >NIP.<?= $spt[0]->pejabat_nip; ?></td>
        </tr>
      </table>
    </div>
  <!-- </div> -->
  <!-- </div> -->
  
</body>
</html>