<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

<title><?= $title; $sptkaban['data'][0]->sppd_nomor ?></title>

<style type="text/css">
@page {
  /* size: 22; */
	margin-top: 1.5cm;
  margin-left: 2cm;
  margin-right: 2cm;
  margin-bottom: 1.5cm;
}

  #header, #footer {
  position: fixed;
  left: 0;
	right: 0;
	color: #aaa;
	font-size: 0.9em;
}

#header {
  top: 0;
	border-bottom: 0.1pt solid #aaa;
}

#footer {
  bottom: 0;
  /* border-top: 0.1pt solid #aaa; */
 
}

.page-number {
  text-align: right;
}

/* .page-number:before {
  content: "hal : " counter(page);
} */

.page-break {
  page-break-before: auto;
  page-break-after: auto;
  page-break-inside: avoid;
  /* border: 0; */
}

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
  border: 1px solid black;
  width: 94%;
}
table.tabel1{
  /* position: relative; */
  margin-top:10px;
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
  margin-top: 120px;
  width: 100%;
  border-collapse: collapse;
  padding-bottom: 10px;
 
  /* border: 1pt solid black;  */
}
.kanan {
  text-align: right;
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
  /* text-align: center; */
  padding: 0px;
}
.rata_kanan{
  text-align: right;
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
  /* border: 1pt solid black;  */
}
.pengikut {
  font-size:x-small;
}
.ttdan {
      text-align: right;
      vertical-align: top;
      padding-right: 5px;
    }
.kananttd {
  text-align: right;
}
table.tabel3{
  /* position: relative; */
  width: 100%;
  border-collapse: collapse;
  
}
table.tabel3.author {
  text-align: right;
}

</style>
  
</head>

<body>
  <!-- <div id="header">
  <table class="tabel3">
    <tr>
      <td>SPPD BKAD Kab. Asahan</td>
      <td class = "author" width=25%>IT BKAD Kab. Asahan</td>
    </tr>
  </table>
</div> -->

<div id="footer">
  <div class="page-number"></div>
</div>
<div class="absolute" style="top:-5px;left:0px;">
  <img src="<?= $imageSrc ?>" width="100%">
</div>
<!-- <div class="card " style="top:165px;left:20px;position:relative;"> -->
  <table class="tabel2">
    <tr>
      <td width="50%"></td>
      <td>Lembar ke&nbsp;&nbsp; </td>
      <td width="35%"> : ...................</td>
    </tr>
    <tr>
      <td></td>
      <td>Kode No&nbsp;&nbsp; </td>
      <td width="25%"> : ...................</td>
    </tr>
    <tr>
      <td></td>
      <td>Nomor&nbsp;&nbsp; </td>
      <td colspan="2">
        <?php if(empty($spt['data'][0]->sppd_nomor)) : ?>
          : 800.1.11.1/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/SPD/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<?= session('tahun'); ?>
          <?php else : ?>
            : <?= $spt['data'][0]->sppd_nomor; ?>
            <?php endif ?>
          </td>
        </tr>
        <tr>
          <td>&nbsp;</td><td></td><td></td>
        </tr>
    <tr>
      <th colspan="3"><u>SURAT PERJALANAN DINAS (SPD)</u></th>
    </tr>
      
    
  </table>
  <table class="tabel1">
    <tr>
      <td width="4%" class="isi no">1.</td>
      <td colspan="2" class="isi">Pengguna Anggaran/ Kuasa Pengguna Anggaran</td>
      <td colspan="6" class="isi">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
    </tr>
    <tr>
      <td rowspan="2" class="isi no">2.</td>
      <td rowspan="2" colspan="2" class="isi">Nama/ NIP Pegawai yang melaksanakan Perjalanan Dinas</td>
      <td colspan="2" width="15%">Nama</td>
      <td width=2%>:</td>
      <td colspan="3" ><?= $utama[0]->pegawai_nama; ?></td>
      <tr>
        <td colspan="2" class="bawah">NIP</td>
        <td class="bawah">:</td>
        <td colspan="3" class="bawah"><?= $utama[0]->pegawai_nip; ?></td>
      </tr>
    </tr>
    <tr>
      <td rowspan="3" class="isi no">3.</td>
      <td width="3%">a.</td>
      <td width=40%>Pangkat dan Golongan</td>
      <td width="3%" class="kiri">a.</td>
      <td colspan="5"><?= $utama[0]->pangkat_nama; ?> (<?= $utama[0]->pangkat_gol; ?>)</td>
    </tr>
    <tr>
      <td>b.</td>
      <td>Jabatan/ Instansi</td>
      <td class="kiri">b.</td>
      <td colspan="5"><?= $utama[0]->pegawai_jabatan; ?></td>
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
      <td colspan="6" class="isi"><?= $sptkaban['data'][0]->spt_uraian; ?> ke <?= $sptkaban['data'][0]->spt_tempat; ?> di <?= $sptkaban['data'][0]->lokasiperjadin_nama ?></td>
    </tr>
    <tr>
      <td  class="isi no">5.</td>
      <td  class="isi" colspan="2">Alat Angkut yang dipergunakan</td>
      <td  class="isi" colspan="6"><?= $sptkaban['data'][0]->spt_transport; ?></td>
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
        <td colspan="5" class="bawah"><?= $sptkaban['data'][0]->lokasiperjadin_nama ?></td>
      </tr>
    <tr>
      <td  rowspan="3"  class="isi no">7.</td>
        <td>a.</td>
        <td>Lamanya Perjalanan Dinas</td>
        <td class="kiri">a.</td>
        <td  colspan="5" ><?= $sptkaban['data'][0]->spt_lama ?> (<?= $terbilang ?>) Hari</td>
      </tr>
      <tr>
        <td>b.</td>
        <td>Tanggal Berangkat</td>
        <td class="kiri">b.</td>
        <td colspan="5"><?= date('d F Y',strtotime($sptkaban['data'][0]->spt_mulai)) ?></td>
      </tr>
      <tr>
        <td>c.</td>
        <td>Tanggal harus kembali/tiba diTempat baru*)</td>
        <td class="kiri">c.</td>
        <td colspan="5"><?= date('d F Y',strtotime($sptkaban['data'][0]->spt_berakhir)) ?></td>
      </tr>
    <tr>
      <?php if($jlhpengikut == 0){$row = 2;}else{$row = 2 + $jlhpengikut;} ?>
      <td  rowspan="<?= $row; ?>" class="isi no">8.</td>
        <td  colspan="8" class="isi">Pengikut :</td>
      </tr>
      <tr>
        <th colspan="2" class="isi">Nama</td>
        <th colspan="3" class="isi">Tanggal Lahir</td>
        <th colspan="3" class="isi">Keterangan</td>
      </tr>
      <?php $no = "a"; foreach ($pengikut as $key => $value) : ?>
        <tr>
          <td class="bawah pengikut"><?= $no++; ?>.</td>
          <td class="bawah pengikut"><?= $value->pegawai_nama; ?> - <?= $value->pegawai_nip; ?></td>
          <td colspan="3" class="isi pengikut no"><?= date('d-m-Y', strtotime($value->pegawai_tgllahir)); ?></td>
          <td colspan="3" class="isi pengikut"><?= $value->pegawai_jabatan; ?></td>
        </tr>
      <?php endforeach; ?>
  <!-- </table>
  <table class="tabel1">   -->
        
    <tr class="page-break">
      <td rowspan="3" class="isi no ">9.</td>
        <td colspan="8" class="isi">Pembebanan Anggaran</td>
      </tr>
      <tr>
        <td>a.</td>
        <td>SKPD</td>
        <td colspan="6" class="kiri">BKAD KAB. ASAHAN</td>
      </tr>
      <tr>
        <td>b.</td>
        <td>Kode Rekening</td>
        <td colspan="6" class="kiri bawah"></td>
      </tr>
    <tr>
      <td  class="isi" class="isi">10.</td>
      <td  class="isi" colspan="8">
        Keterangan Lain-lain
        
      </td>
    </tr>
    
    <tr>
      <td colspan="9">*) Coret yang tidak perlu</td>
    </tr>
  </table>
  <!-- <br> -->
<!-- </div>-->
<!-- <div class="page-break"></div> -->
<!-- <div class="card page-break" > -->
  <table class="ttd page-break" >
    <tr class="page-break">
      <td id="ttd" width="50%">&nbsp;</td>
      <td id="ttd">&nbsp;</td>
      <td id="ttd" width="2%">&nbsp;</td>
      <td id="ttd" width = "30%">&nbsp;</td>
    </tr>
    <tr class="page-break">
      <td id="ttd" width="50%">
        &nbsp;
      </td>
      <td id="ttd">Dikeluarkan di</td>
      <td id="ttd" width="2%">:</td>
      <td id="ttd" width = "30%">Kisaran</td>
    </tr>
    <tr class="card page-break">
      <td id="ttd"></td>
      <td id="ttd">Pada Tanggal</td>
      <td id="ttd">:</td>
      <td id="ttd">
        <?php if(!empty($spt['data'][0]->spt_tgl)) : ?>
          <?= date('d F Y',strtotime($spt['data'][0]->spt_tgl)); ?>
          <?php endif;?>
      </td>
    </tr>
    <tr><td><br></td></tr>
    <?php if($sptkaban['data'][0]->pejabat_kode == "PLH") { ?>
      <tr>
        <td class="ttd ttdan"><?= ucwords(strtolower($sptkaban['data'][0]->pejabat_kode)); ?>. &nbsp;</td>
        <td colspan="3" id="ttd"><strong>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</strong></td>
      </tr>
      <tr>
      <td id="ttdan" ></td>
        <td colspan="3" id="ttd" ></td>
      </tr>
    <?php } elseif($sptkaban['data'][0]->pejabat_kode == "PLT") { ?>
      <tr>
        <td class="ttd ttdan"><?= ucwords(strtolower($sptkaban['data'][0]->pejabat_kode)); ?>. &nbsp;</td>
        <td colspan="3" id="ttd"><strong>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</strong></td>
      </tr>
      <tr>
      <td id="ttdan" ></td>
        <td colspan="3" id="ttd" ></td>
      </tr>
      <?php } elseif($sptkaban['data'][0]->pejabat_kode == "Kaban") { ?>
      <tr>
        <td class="ttd ttdan"></td>
        <td colspan="3" id="ttd"><strong>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</strong></td>
      </tr>
      <tr>
      <td class="ttdan" ></td>
        <td colspan="3" id="ttd" ></td>
      </tr>
      <?php } else { ?>
      <tr>
        <td class="ttdan"><b>An.  &nbsp;</b></td>
        <td colspan="3" id="ttd"><strong>Kepala Badan Keuangan dan Aset Daerah Kabupaten Asahan</strong></td>
      </tr>
      <tr>
      <td class="ttdan" ></td>
        <td colspan="3" id="ttd" ><b><?= $sptkaban['data'][0]->pejabat_namajabatan; ?></b></td>
      </tr>
    <?php } ?>
    <tr><td><br></td></tr>
    <tr><td><br></td></tr>
    <tr><td><br></td></tr>
    <tr>
      <td id="ttd"></td>
      <td colspan="3" id="ttd"><b><?= $sptkaban['data'][0]->pejabat_nama; ?></b></td>
    </tr>
    <tr>
      <td id="ttd"></td>
      <td colspan="3" id="ttd" ><b><?= $sptkaban['data'][0]->pejabat_pangkat; ?></b></td>
    </tr>
    <tr>
      <td id="ttd"></td>
      <td colspan="3" id="ttd" ><b>Nip.<?= $sptkaban['data'][0]->pejabat_nip; ?></b></td>
    </tr>
  </table>
</div>
<script>
  window.addEventListener("load", window.print());
</script>
</body>

</html>