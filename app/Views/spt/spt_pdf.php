<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    /* div {
      border: 1px solid black; */
      /* background-color: lightblue; */
      /* padding: 50px;
      margin: auto;
    } */
    img {
      width: 90%;
      height: 120px;
      padding: 20px;
    }
    #surat{
      font-family: Arial, Helvetica, sans-serif;
      width: 100%;
    }
    #judulsurat {
      text-align: center;
      font-weight: bold;
      font-size: x-large;
      text-decoration: underline;
    }
    #isinomor {
      text-align: center;
      font-size: medium;
    }
    #isisurat td .col {
      text-align: left;
      
    }
    
  </style>
</head>
<body>
  <table id="surat">
    <tr>
      <td><img src="<?= base_url(); ?>/images/kop.png" ></td>
    </tr>
    <tr>
      <td id="judulsurat">SURAT TUGAS</td>
    </tr>
    <tr>
      <td id='isinomor'>Nomor : 800.1.11.1/...../BKAD/    /2023</td>
    </tr>
    <tr>
      <td id=isisurat class="col">Dasar</td>
      <td id=isisurat>:</td>
      <td id=isisurat>Surat</td>

    </tr>
  </table>
</body>
</html>