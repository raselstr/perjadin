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
    
    
    
  </style>
</head>
<body>
  <!-- <div class="card"> -->
    <div class="container">
      <img src="<?= base_url(); ?>/images/kop.png" >
      <table id="surat">
        <tr>
          <td colspan="11" id="judulsurat" >SURAT TUGAS</td>
        </tr>
        <tr>
          <td colspan="11" id='isinomor'>Nomor : 800.1.11.1/...../BKAD/    /2023</td>
        </tr>
        <tr>
          <td colspan="2" id="isisurat" width="20%">Dasar</td>
          <td id="isisurat">:</td>
          <td colspan="8" id="isisurat" width="80%">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat">Yang bertandatangan di bawah ini :</td>
          
          
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td> 
          <td id="isisuratpej"></td> 
          <td colspan="2" id="isisuratpej">Nama</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">nama pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">NIP</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">nip pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Pangkat/ Golongan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">pangkat/gol pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Jabatan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">Jabatan pemberi tugas</td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat"><strong><center>MEMERINTAHKAN</center></strong></td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat">Kepada :</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratno"></td>
          <td id="isisuratpej">1.</td>
          <td colspan="2" id="isisuratpej">Nama</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej" >nama pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">NIP</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">nip pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Pangkat/ Golongan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">pangkat/gol pemberi tugas</td>
        </tr>
        <tr>
          <td id="isisuratno"></td>
          <td id="isisuratpej"></td>
          <td id="isisuratpej"></td>
          <td colspan="2" id="isisuratpej">Jabatan</td>
          <td >:</td>
          <td colspan="5" id="isisuratpej">Jabatan pemberi tugas</td>
        </tr>
        <tr>
          <td colspan="11" id="isisurat">Untuk :</td>
        </tr>
        <tr>
          <td id="isiberita">1.</td>
          <td colspan="10" id="isiberita">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</td>
        </tr>
        <tr>
          <td id="isiberita">2.</td>
          <td colspan="10" id="isiberita">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</td>
        </tr>
        <tr>
          <td colspan="11" id="isipenutup">Demikian Surat Perintah ini diperbuat, untuk dilaksanakan dengan penuh tanggung jawab</td>
        </tr>
      </table>
      <!-- <div class="cardttd"> -->
      <table id="surat" >
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd" width="50%" hidden>
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
          <td id="ttd"  >tanggal</td>
        </tr>
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd">KEPALA BADAN KEUANGAN DAN ASET DAERAH KABUPATEN ASAHAN</td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" >Sekretaris</td>
        </tr>
        <tr><td><br></td></tr>
        <tr><td><br></td></tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd">nama kaban/ sekretaris</td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" >pangkat</td>
        </tr>
        <tr>
          <td id="ttd"></td>
          <td colspan="3" id="ttd" >nip</td>
        </tr>
      </table>
    </div>
  <!-- </div> -->
  <!-- </div> -->
</body>
</html>