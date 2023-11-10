<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
  <!-- <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
  <title>Document</title>
  <style>
    .container {
      border: 1px solid black;
      padding: 10px 20px;
      /* text-align: center; */
    }
    .rangka {
      /* border: 1px solid black; */
      font-family: Arial, Helvetica, sans-serif;
      /* text-align: center; */
      font-size:smaller;
      width: 100%;
      
    }
    .img {
      text-align: center;
    }
    .lembar {
      text-align: right;
      padding : 10px;
    }
    .jdl {
      text-align: center;
      padding: 0px;
      font-size: large;
    }
    .nojdl {
      text-align: center;
      padding-bottom: 20px ;
    }
    
    .table1 {
      position: absolute;
      font-family:Arial, Helvetica, sans-serif;
      color: #232323;
      font-size:smaller;
      border-collapse: collapse;

    /* table-layout: fixed; */
    
  }
  
  .table1, .isi {
    border-left: 1px solid black;
    border-top: 1px solid black;
    border-right: 1px solid black;
    border-bottom: 1px solid black;

    padding: 3px 5px;
    vertical-align: top;
    }
    .table1, .custome {
      /* border-right: 0px; */
      padding: 3px 5px;
      vertical-align: top;
    } 
    .table1 .custome2 {
      border-left: 1px solid black;
      padding: 3px 5px;
      vertical-align: top;
    } 
    .table1 .custome3  {
      border-top: 1px solid black;
      /* border-left: 1px solid black; */
      padding: 3px 5px;
      vertical-align: top;
    } 
    .table1 .left  {
      /* border-top: 1px solid black; */
      border-left: 1px solid black;
      padding: 3px 5px;
      vertical-align: top;
    }
    .table1 th {
      background-color: grey;
      color:black;
    }
    .ttd {
      font-family:Arial, Helvetica, sans-serif;
      color: #232323;
      font-size:smaller;
      border-collapse: collapse;
    }
  

  </style>
</head>
<body>
  <div class="container">
    <table class="rangka">
      <tr class="img">
        <td colspan="7"><img src="<?= $imageSrc ?>" width="95%"></td>
      </tr>
      <tr>
        <td colspan="7" class="lembar">Lembar ke : ...................</td>
      </tr>
      <tr>
        <th colspan="7" class="jdl"><u>SURAT PERJALANAN DINAS (SPD)</u></th>
      </tr>
      <tr>
        <td colspan="7" class="nojdl">Nomor : 800.1.11.1/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SPPD/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2023</td>
      </tr>
    </table>
    <table class = "table1" >
      <tr>
        <td  class="isi">1.</td>
        <td  class="isi" colspan="2" width="40%">Pejabat Berwenang yang memberikan Perintah</td>
        <td  class="isi" colspan="4">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
      </tr>
      <tr>
        <td  rowspan="2"  class="isi" class="isi">2.</td>
        <td  rowspan="2" class="custome" colspan="2">Nama/ NIP Pegawai yang melaksanakan Perjalanan Dinas</td>
        <td  class="custome2" colspan="2">Nama</td>
        <td  class="custome" width="1%">:</td>
        <td  class="custome" width="35%">RASEL RASEL RASEL RASEL RASEL RASEL </td>
        <tr>
          <td  class="custome2" colspan="2">NIP</td>
          <td  class="custome">:</td>
          <td  class="custome">12345</td>
        </tr>
      </tr>
      <tr>
        <td  rowspan="4"  class="isi" class="isi">3.</td>
        <tr>
          <td  class="custome3">a.</td>
          <td  class="custome3">Pangkat dan Golongan</td>
          <td  class="custome3 left" width="4%">a.</td>
          <td  colspan="3" class="custome3 " >Penata Muda</td>
        </tr>
        <tr>
          <td  class="custome">b.</td>
          <td  class="custome">Jabatan/ Instansi</td>
          <td  class="custome left">b.</td>
          <td  colspan="3" class="custome">Staf Staf Staf Staf Staf Staf Staf Staf StafStaf Staf Staf Staf Staf Staf Staf Staf Staf Staf  </td>
        </tr>
        <tr>
          <td  class="custome">c.</td>
          <td  class="custome">Tingkat Biaya Perjalanan Dinas</td>
          <td  class="custome left">c.</td>
          <td  colspan="3" class="custome"></td>
        </tr>
      </tr>
      <tr>
        <td  class="isi" class="isi">4.</td>
        <td  class="isi" colspan="2">Maksud Perjalanan Dinas</td>
        <td  class="isi" colspan="4">Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
          Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
          Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
        </td>
      </tr>
      <tr>
        <td  class="isi" class="isi">5.</td>
        <td  class="isi" colspan="2">Alat Angkut yang dipergunakan</td>
        <td  class="isi" colspan="4">Angkutan Umum</td>
      </tr>
      <tr>
        <td  rowspan="3"  class="isi" class="isi">6.</td>
        <tr>
          <td  class="custome">a.</td>
          <td  class="custome">Tempat Berangkat</td>
          <td  class="custome3 left">a.</td>
          <td  colspan="3" class="custome">Kisaran</td>
        </tr>
        <tr>
          <td  class="custome">b.</td>
          <td  class="custome">Tempat Tujuan</td>
          <td  class="custome2 left">b.</td>
          <td  colspan="3" class="custome">Medan</td>
        </tr>
      </tr>
      <tr>
        <td  rowspan="4"  class="isi" class="isi">7.</td>
        <tr>
          <td  class="custome3">a.</td>
          <td  class="custome3">Lamanya Perjalanan Dinas</td>
          <td  class="custome3 left">a.</td>
          <td  colspan="3" class="custome3">2 (Dua) Hari</td>
        </tr>
        <tr>
          <td  class="custome">b.</td>
          <td  class="custome">Tanggal Berangkat</td>
          <td  class="custome left">b.</td>
          <td  colspan="3" class="custome">23 Oktober 2023</td>
        </tr>
        <tr>
          <td  class="custome">c.</td>
          <td  class="custome">Tanggal harus kembali/ tiba di Tempat baru *)</td>
          <td  class="custome left">c.</td>
          <td  colspan="3" class="custome">26 Oktober 2023</td>
        </tr>
      </tr>
      <tr>
        <td  rowspan="4"  class="isi" class="isi">8.</td>
        <tr>
          <td  colspan="6" class="isi">Pengikut :</td>
        </tr>
        <tr>
          <th  colspan="2" class="isi ">Nama</td>
          <th  colspan="3"class="isi">Pangkat</td>
          <th  class="isi">Jabatan</td>
        </tr>
        <tr>
          <td  class="custome">a.</td>
          <td  class="custome">Nama dan Nip Pengikut</td>
          <td  colspan="3" class="isi">Pangkat Pengikut</td>
          <td  class="isi">Jabatan Pengikut</td>
        </tr>
      </tr>
      <tr>
        <td  rowspan="4"  class="isi" class="isi">9.</td>
        <tr>
          <td  colspan="2" class="isi">Pembebanan Anggaran</td>
        </tr>
        <tr>
          <td  class="custome">a.</td>
          <td  class="custome">Instansi</td>
          <td  colspan="4" class="custome3 left">BKAD KAB. ASAHAN</td>
        </tr>
        <tr>
          <td  class="custome">b.</td>
          <td  class="custome">Akun</td>
          <td  colspan="4" class="custome2"></td>
        </tr>
      </tr>
      <tr>
        <td  class="isi" class="isi">10.</td>
        <td  class="isi" colspan="6">
          Keterangan Lain-lain
          <p>
        </td>
      </tr>
      <tr>
        <td  class="isi" colspan="7">*) Coret yang tidak perlu</td>
      </tr>
    </table>
    
    
    <table class="ttd" >
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
          <td colspan="3" id="ttd"><b><?= $spt[0]->pejabat_nama; ?></b></td>
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
</body>
</html>