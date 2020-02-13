<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tarif Adjustment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	th {text-align : center;}
    td {text-align : center;
    }
  </style>
</head>
<body>

<div class="container">
  <center> <h2>PENETAPAN</h2> </center>
  <center><p>PENYESUAIAN TARIF TENAGA LISTRIK(TARIFF ADJUSTMENT)</p></center>     
 <table class="table table-bordered" >

                  <thead>
                  	<tr>
                      <th scope="col" rowspan="2">NO<br><br></th>
                      <th scope="col"  rowspan="2">GOL TARIF<br><br></th>
                      <th scope="col"  rowspan="2">BATAS DAYA<br><br></th>
                      <th scope="col"  colspan="2">REGULER</th>
                      <th scope="col" rowspan="2" width="130px">PRA BAYAR (Rp/kWh)<br><br></th>
                     </tr>
                     <tr>
                     	  <th style="display:none;"></th>
                          <th style="display:none;"></th>
                          <th style="display:none;"></th>
                          <th width="130px">BIAYA BEBAN<br>(Rp/kVA/bulan)</th>
                          <th>BIAYA PEMAKAIAN<br>DAN BIAYA kVArh</th>
                          <th style="display:none;"></th>
                       </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>R-1/TR</td>
                      <td>1300 VA</td>
                      <td>*)</td>
                      <td>1467,28</td>
                      <td>1467,28</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>R-1/TR</td>
                      <td>2200 VA</td>
                      <td>*)</td>
                      <td>1467,28</td>
                       <td>1467,28</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>R-2/TR</td>
                      <td>3500 VA s.d 5500 VA</td>
                      <td>*)</td>
                      <td>1467,28</td>
                       <td>1467,28</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>R-3/TR</td>
                      <td>6600 VA ke atas</td>
                      <td>*)</td>
                      <td>1467,28</td>
                       <td>1467,28</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>B-2/TR</td>
                      <td>6600 VA s.d 200 kVA</td>
                      <td>*)</td>
                      <td>1467,28</td>
                       <td>1467,28</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>B-3/TM</td>
                      <td>di atas 200 kVA</td>
                      <td>**)</td>
                      <td>Blok WBP = K x 1035,78<br/>Blok LWBP =  1035,78<br/>kVArh =  1114,74 **** )</td>
                       <td>-</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>I-3/TM</td>
                        <td>di atas 200 kVA</td>
                        <td>**)</td>
                        <td>Blok WBP = K x 1035,78<br/>Blok LWBP =  1035,78<br/>kVArh =  1114,74 **** )</td>
                         <td>-</td>
                      </tr>
                      <tr>
                        <td>8</td>
                        <td>I-4/TT</td>
                        <td>3000 kVA ke atas</td>
                        <td>***)</td>
                        <td>Blok WBP dan<br/>Blok LWBP =  996,74<br/>kVArh =  996,74   **** )</td>
                        <td>-</td>
                      </tr>
                      <tr>
                        <td>9</td>
                        <td>P-1/TR</td>
                        <td>6600 VA s.d 200 kVA</td>
                        <td>*)</td>
                        <td>1467,28</td>
                        <td>1467,28</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>P-2/TM</td>
                        <td>di atas 200 kVA</td>
                        <td>**)</td>
                        <td>Blok WBP = K x 1035,78<br/>Blok LWBP =  1035,78<br/>kVArh =  1114,74 **** )</td>
                         <td>-</td>
                      </tr>
                      <tr>
                        <td>11</td>
                        <td>P-3/TR</td>
                        <td>-</td>
                        <td>*)</td>
                        <td>1467,28</td>
                         <td>1467,28</td>
                      </tr>
                      <tr>
                        <td>10</td>
                        <td>L/TR, TM, TT</td>
                        <td>-</td>
                        <td>-</td>
                        <td>1467,28</td>
                        <td>-</td>
                      </tr>

                  </tbody>
                </table>

<h><b>Catatan : </b></h><br/>
<p>*) &emsp;&emsp;Diterapkan Rekening Minimum (Rm):<br/>
    &emsp;&emsp;&emsp;RM1 = 40 (Jam Nyala) x Daya Tersambung (kVA) x Biaya Pemakaian.<br/>
   **)&emsp;&emsp;Diterapkan Rekening Minimum (RM):<br/>
    &emsp;&emsp;&emsp;RM2 = 40 (Jam Nyala) x Daya Tersambung (kVA) x Biaya Pemakaian LWBP.<br/>
    &emsp;&emsp;&emsp;Jam Nyala : kWh per bulan dibagi dengan kVA tersambung.<br/>
   ***) &emsp; Diterapkan Rekening Minimum (RM):<br/>
    &emsp;&emsp;&emsp;RM3 = 40 (Jam Nyala x Daya Tersambung (kVA) x Biaya Pemakaian LWBP dan WBP.<br/>
    &emsp;&emsp;&emsp;Jam Nyala : kWh per bulan dibagi dengan kVA tersambung.<br/>
   ****)&emsp; Biaya kelebihan pemakaian daya reaktif (kVarh) dikenakan dalam hal faktor daya rata-rata setiap bulan<br/>
    &emsp;&emsp;&emsp; kurang dari 0.85 (delapan puluh lima per seratus)<br/>
   K&emsp;&emsp;:Faktor perbandingan antara harga WBP dan LWBP sesuai dengan karakteristik beban sistem kelistrikan<br/>
    &emsp;&emsp;&emsp;setempat (1,4 ≤ K ≤ 2) , ditetapkan oleh Direksi  Perusahaan Perseroan (Persero) PT Perusahaan Listrik<br/>
    &emsp;&emsp;&emsp;Negara<br/>
   WBP&emsp;: Waktu Beban Puncak<br/>
   LWBP&emsp;: Luar Waktu Beban Puncak
</p>


</div>

</body>
</html>