<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Display</title>
</head>

<body bgcolor="#FFFF99" leftmargin=700  topmargin="100">

<?php
/*	echo $_POST["name"]."爱";
	echo $_POST["suggestion"];
	echo "你喜欢的运动是:";
*/	
	$Sport='';
	for ($i=0;$i<count($_POST["sport"]);$i++){
//		echo $_POST["sport"][$i]." ";
		$Sport .= $_POST["sport"][$i]." ";
	}

?>



<font size="+1">
<table width=20% height=10% border="1">	
<tr bordercolor="#000033">
	<td valign="center" width="200" height="40" align="right">姓名:</td>
    <td valign="center" width="400" height="30" align="left"> <?php  echo $_POST["name"]; ?> </td>
</tr>

<tr bordercolor="#000099">
	<td valign="center" width="200" height="40" align="right">建议:</td>
    <td valign="center" width="400" height="20" align="left"> <?php  echo $_POST["suggestion"]; ?> </td>
</tr>

<tr bordercolor="#000099">
	<td valign="center" width="200" height="40" align="right">水果:</td>
    <td valign="center" width="400" height="20" align="left"> <?php  echo $_POST["fruit"]; ?> </td>
</tr>

<tr bordercolor="#000099">
	<td valign="center" width="200" height="40" align="right">运动:</td>
    <td valign="center" width="400" height="20" align="left"> <?php  echo $Sport; ?> </td>
</tr>

<tr bordercolor="#000099">
	<td valign="center" width="200" height="40" align="right">城市:</td>
    <td valign="center" width="400" height="20" align="left"> <?php  echo $_POST["city"]; ?> </td>
</tr>
</table>
</font>

</body>
</html>
