<?php
require_once ("header.php"); 
require_once("bd.php");
?>

<div class="content">

<table align="center" cellpadding="20" height="400"> <tr> <td colspan="5" >
	<td>
<a href="obzorhotels.php?Id_city=1"> <input type="submit" width=300 class="great_btn"  name="submit" value="<?php print $array['VINNUTSIA'] ?>"/></a> <br>
<a href="obzorhotels.php?Id_city=2"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['DNIPROPETROVSK'] ?> "/></a><br>
<a href="obzorhotels.php?Id_city=3"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['DONETSK'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=4"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['ZITOMUR'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=5"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['ZAPORIZZA'] ?>" /></a> <br>
<a href="obzorhotels.php?Id_city=6"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['IVANOFRANKIVSK'] ?>"/></a><br>
<a href="obzorhotels.php?Id_city=7"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['KYIV'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=8"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['KIROVOGRAD'] ?>" /></a><br></td>
<td>
<a href="obzorhotels.php?Id_city=9"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['LUGANSK'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=10"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['LUTSK'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=11"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['LVIV'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=12"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['MUKOLAIV'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=13"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['ODESA'] ?>" /></a> <br>
<a href="obzorhotels.php?Id_city=14"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['POLTAVA'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=15"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['RIVNE'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=16"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['SIMFEROPOL'] ?>"/></a><br></td>
<td>
<a href="obzorhotels.php?Id_city=17"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['SUMY'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=18"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['TERNOPOIL'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=19"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['UJGOROD'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=20"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['HARKIV'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=21"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['HERSON'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=22"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['HMELNUTSKUJ'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=23"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['CHERKASSY'] ?>"/> </a> <br>
<a href="obzorhotels.php?Id_city=24"><input type="submit" width=300 class="great_btn" name="submit" value="<?php print $array['CHERNIGIV'] ?>"/> </a><br>
<a href="obzorhotels.php?Id_city=25"><input type="submit" width=300 class="great_btn" name="submit" value=" <?php print $array['CHERNIVCI'] ?>"/> </a> <br>
</td></tr></table>
</div>

<?php
include_once ("footer.php");
?>