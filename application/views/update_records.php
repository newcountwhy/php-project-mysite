<!DOCTYPE html>
<html>
<head>
<title>Registration form</title>
</head>

<body>
 <?php
  $i=1;
  foreach($data as $row)
  {
  ?>
	<form method="post">
    <table width="600" border="1" cellspacing="5" cellpadding="3", style="Width: 60%;margin:auto" style="background:#E0D2EB1">
  <tr >
    <td width="230">Username </td>
    <td width="329"><input type="text" name="usernme" value="<?php echo $row->username; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your Email </td>
    <td><input type="text" name="email" value="<?php echo $row->email; ?>"/></td>
  </tr>
  <tr>
    <td>Enter Your description </td>
    <td><input type="text" name="description" value="<?php echo $row->description; ?>"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
	<input style="background:#DEC4F1" type="submit" name="update" value="Update Records"/></td>
  </tr>
</table>
	</form>
	<?php } ?>
</body>
</html>