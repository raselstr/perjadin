<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<title>Printed document</title>

<style type="text/css">

body {
  font-family: sans-serif;
  font-size: 10pt;
	/* background: #eee; */
}

div.absolute {
	/* border: 2px dotted green; */
	position: absolute;
	padding: 0.5em;
	text-align: center;
	/* vertical-align: middle; */
}
div.card{
  /* border: 1px solid black; */
  width: 98%;
}
table.tabel1{
  /* position: relative; */
  width: 100%;
  border-collapse: collapse;
  border: 1pt solid black; 
  
}
table.ttd{
  padding-top : 15px;
  width: 100%;
  border-collapse: collapse;
  /* border: 1pt solid black;  */
  
}
table.tabel2 {
  /* position: relative; */
  width: 100%;
  border-collapse: collapse;
  padding-bottom: 10px;
  /* border: 1pt solid black;  */
}
table.tabel2 th {
  font-size: large;
}
table.tabel1 td{
  /* position: absolute; */
  /* border: 1px solid black; */
  vertical-align: top;
  
}
table.tabel2 td{
  /* position: absolute; */
  /* border: 1px solid black; */
  text-align: center;
  padding: 0px;
}

table.tabel1,.isi {
  border: 1px solid black;
}
.no {
  text-align: center;
}
.bawah {
  border-bottom: 1px solid black;
}
.kiri {
  border-left: 1px solid black;
}
th,td {
  padding: 2pt 5px;
}
table.ttd td{
  padding: 0px;
}
.pengikut {
  font-size:x-small;
}

</style>
  
</head>

<body>
	<!--
<div class="absolute" style="left: 20px; right: 20px;">
  left/right
</div>-->

<div class="absolute" style="top: 0px; left: 0px;">
  <img src="<?= $imageSrc ?>" width="95%">
</div>
<div class="card absolute" style="top:130px;left:0px">
  <table class="tabel2">
    <tr>
      <td></td>
      <td width="25%">Lembar ke : ...................</td>
    </tr>
    <tr>
      <th colspan="2"><u>SURAT PERJALANAN DINAS (SPD)</u></th>
    </tr>
    <tr>
      <td colspan="2">Nomor : 800.1.11.1/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SPPD/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/2023</td>
    </tr>
  </table>
  <table class="tabel1">
    <tr>
      <td width="4%" class="isi no">1.</td>
      <td colspan="2" class="isi">Pejabat Berwenang yang memberikan Perintah</td>
      <td colspan="6" class="isi">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
    </tr>
    <tr>
      <td rowspan="2" class="isi no">2.</td>
      <td rowspan="2" colspan="2" class="isi">Nama/ NIP Pegawai yang melaksanakan Perjalanan Dinas</td>
      <td colspan="2" width="30%">Nama</td>
      <td width=2%>:</td>
      <td colspan="3" >RASEL RASEL  RASEL  RASEL  RASEL  RASEL  RASEL  </td>
      <tr>
        <td colspan="2" class="bawah">NIP</td>
        <td class="bawah">:</td>
        <td colspan="3" class="bawah">12345</td>
      </tr>
    </tr>
    <tr>
      <td rowspan="3" class="isi no">3.</td>
      <td width="3%">a.</td>
      <td width=40%>Pangkat dan Golongan</td>
      <td width="3%" class="kiri">a.</td>
      <td colspan="5">Penata Muda</td>
    </tr>
    <tr>
      <td>b.</td>
      <td>Jabatan/ Instansi</td>
      <td class="kiri">b.</td>
      <td colspan="5">Staf Staf Staf Staf Staf Staf Staf Staf StafStaf Staf Staf Staf Staf Staf Staf Staf Staf Staf  </td>
    </tr>
    <tr>
      <td>c.</td>
      <td>Tingkat Biaya Perjalanan Dinas</td>
      <td class="kiri">c.</td>
      <td colspan="5"></td>
    </tr>
    <tr>
      <td class="isi no">4.</td>
      <td colspan="2" class="isi">Maksud Perjalanan Dinas</td>
      <td colspan="6" class="isi">Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
        Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
        Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas Konsultas 
      </td>
    </tr>
    <tr>
      <td  class="isi no">5.</td>
      <td  class="isi" colspan="2">Alat Angkut yang dipergunakan</td>
      <td  class="isi" colspan="6">Angkutan Umum</td>
    </tr>
    <tr>
      <td rowspan="2" class="isi no">6.</td>
        <td>a.</td>
        <td>Tempat Berangkat</td>
        <td class="kiri">a.</td>
        <td  colspan="5">Kisaran</td>
      </tr>
      <tr>
        <td class="bawah">b.</td>
        <td class="bawah">Tempat Tujuan</td>
        <td class="bawah kiri">b.</td>
        <td colspan="5" class="bawah">Medan</td>
      </tr>
    <tr>
      <td  rowspan="3"  class="isi no">7.</td>
        <td>a.</td>
        <td>Lamanya Perjalanan Dinas</td>
        <td class="kiri">a.</td>
        <td  colspan="5" >2 (Dua) Hari</td>
      </tr>
      <tr>
        <td>b.</td>
        <td>Tanggal Berangkat</td>
        <td class="kiri">b.</td>
        <td colspan="5">23 Oktober 2023</td>
      </tr>
      <tr>
        <td>c.</td>
        <td>Tanggal harus kembali/tiba diTempat baru*)</td>
        <td class="kiri">c.</td>
        <td colspan="5">26 Oktober 2023</td>
      </tr>
    <tr>
      <td  rowspan="3" class="isi no">8.</td>
        <td  colspan="8" class="isi">Pengikut :</td>
      </tr>
      <tr>
        <th colspan="2" class="isi">Nama</td>
        <th colspan="3" class="isi">Pangkat</td>
        <th colspan="3" class="isi">Jabatan</td>
      </tr>
      <tr>
        <td class="bawah pengikut">a.</td>
        <td class="bawah pengikut">Nama dan Nip Pengikut</td>
        <td colspan="3" class="isi pengikut">Pembina Utama Muda TK. I</td>
        <td colspan="3" class="isi pengikut">Jabatan PengikutPengikutPeng ikutPengikut</td>
      </tr>
    <tr>
      <td rowspan="3" class="isi no">9.</td>
        <td colspan="8" class="isi">Pembebanan Anggaran</td>
      </tr>
      <tr>
        <td>a.</td>
        <td>Instansi</td>
        <td colspan="6" class="kiri">BKAD KAB. ASAHAN</td>
      </tr>
      <tr>
        <td  class="custome">b.</td>
        <td  class="custome">Akun</td>
        <td  colspan="6" class="kiri"></td>
      </tr>
    <tr>
      <td  class="isi" class="isi">10.</td>
      <td  class="isi" colspan="8">
        Keterangan Lain-lain
        <p>
      </td>
    </tr>
    <tr>
      <td colspan="9">*) Coret yang tidak perlu</td>
    </tr>
  </table>

  <table class="ttd" >
    <tr>
      <td id="ttd" width="50%">
        &nbsp;
      </td>
      <td id="ttd">Dikeluarkan di</td>
      <td id="ttd" width="2%">:</td>
      <td id="ttd" width = "30%">Kisaran</td>
    </tr>
    <tr>
      <td id="ttd"></td>
      <td id="ttd">Pada Tanggal</td>
      <td id="ttd">:</td>
      <td id="ttd"><?= $spt[0]->spt_tgl; ?></td>
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