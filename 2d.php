<html>
<head>
 <title>Perhitungan Harga Kost</title>
</head>
<body>
<center>
 <form method="post" action="" target="_self">
    <table border="1">
      <tr>
        <td colspan="2" align="center"><b>PERHITUNGAN HARGA KOST</b></td>
      </tr>
        <td width="116">Tipe Kamar</td>
        <td width="174"><select name="tipe">
                           <option value="A">A. [2x3 m]</option>
                           <option value="B">B. [3x3 m]</option>
                           <option value="C">C. [4x3 m]</option>
                        </select>
        </td>
      <tr>
        <td>Air</td>
        <td><input name="rb_air" type="radio" value="PDAM">Air PDAM<br>
            <input name="rb_air" type="radio" value="Tanah">Air Tanah</td>
      </tr>
      <tr>
        <td>Fasilitas</td>
        <td><input name="cb_telepon" type="checkbox" value="Y">Telepon<br>
            <input name="cb_televisi" type="checkbox" value="Y">Televisi<br>
            <input name="cb_komputer" type="checkbox" value="Y">Komputer<br>
            <input name="cb_rice" type="checkbox" value="Y">Rice Cooker</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="Kirim" value="Hitung">
            <input type="reset" name="submit2" value="Reset"></td>
      </tr>
    </table>

 </form>
  <?php
  error_reporting(0);
  $tipe = $_POST['tipe'];
  $rb_air = $_POST['rb_air'];
  $cb_televisi = $_POST['cb_televisi'];
  $cb_komputer = $_POST['cb_komputer'];
  $cb_telepon = $_POST['cb_telepon'];
  $cb_rice = $_POST['cb_rice'];
  $submit = $_POST['Kirim'];
  ?>
     <?php
     if($submit)//Jika tombol submit di klik
     {
     ?>
        <hr>
           <table border="1">
             <tr><td colspan="2"align="center">HASIL PERHITUNGAN</td></tr>
             <tr bgcolor="silver"><td colspan="2" align="center">Kamar</td></tr>

			 <tr><td>			 
              <?php
                 if($tipe=="A")
                 {
                   $luas="2 x 3 m";
                   $harga=200000;
                 }
                 else
                 if($tipe=="B")
                 {
                   $luas="3 x 3 m";
                   $harga=250000;
                 }
                 else
                 if($tipe=="C")
                 {
                   $luas="4 x 3 m";
                   $harga=300000;
                 }
                 echo $luas;//menuliskan luas
			   ?>
			   
			     </td>
				 <td align=right>Rp.
                   
			  <?php 
				echo number_format($harga,0,",",".");?></td></tr>
                 <tr bgcolor="silver"><td align="center" colspan="2">Jenis Air</td></tr>
                 <tr><td>Air PDAM <? echo $rb_air;?></td><td align="right">Rp.
              <?php
                if($rb_air=="PDAM")
                   $rb_air=20000;
                else
                if($rb_air=="Tanah")
                   $rb_air=15000;
                echo number_format($rb_air,0,",",".");//menuliskan air
               ?></td></tr>
              <?php
                if(($cb_telepon=="Y")or($cb_televisi=="Y")or($cb_komputer=="Y")or($cb_rice=="Y"))
                echo "<tr bgcolor=silver>
                <td align=center colspan=2>Fasilitas-Fasilitas</td></tr>";
                if($cb_telepon=="Y")
                    {
                       $cb_telepon=20000;
                       echo "<tr><td>Telepon</td><td align=right>Rp. ".
                       number_format($cb_telepon,0,",",".")."</td></tr>";
                    }
                if($cb_televisi=="Y")
                    {
                       $cb_televisi=30000;
                       echo "<tr><td>Televisi</td><td align=right>Rp. ".
                       number_format($cb_televisi,0,",",".")."</td></tr>";
                    }
                if($cb_komputer=="Y")
                    {
                       $cb_komputer=60000;
                       echo "<tr><td>Komputer</td><td align=right>Rp. ".
                       number_format($cb_komputer,0,",",".")."</td></tr>";
                    }
                if($cb_rice=="Y")
                    {
                       $cb_rice=5000;
                       echo "<tr><td>Rice Cooker</td><td align=right>Rp. ".
                       number_format($cb_rice,0,",",".")."</td></tr>";
                    }
					
                         $total=$harga+$rb_air+$cb_telepon+$cb_televisi+$cb_komputer+$cb_rice;
                         echo "<tr bgcolor=silver><td>TOTAL</td><td align=right><b>Rp. ".
                         number_format($total,0,",",".")."</b></td></tr>";
              ?>
    </table>
     <?php
      }
     ?>

</body>
</html>
