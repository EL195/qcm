<?php
include("setting.php");
session_start();
if(isset($_SESSION['sid']))
{
	header("location:home.php");
}
$sid=mysqli_real_escape_string($set,$_POST['sid']);
$pass=mysqli_real_escape_string($set,$_POST['pass']);

if($sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$p=md5($pass);
	$sql=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid' AND password='$p'");
	if(mysqli_num_rows($sql)==1)
	{
		$_SESSION['sid']=$_POST['sid'];
		header("location:./kb/empr.php");
	}
	else
	{
		$s1="SELECT * FROM suspendu WHERE sid='$sid' AND password='$pass'";
		echo $s1;
		$s1=mysqli_query($set,$s1);
		
		if(mysqli_num_rows($s1)==1)
	{	$_SESSION['sid']=$_POST['sid'];
		$_SESSION['sid']=$_POST['sid'];
		header("location:./kb/block1.php");
	}
	else
	{
	$msg="Les coordonnés saisi sont icorrectes ";}
	}
}
?>
<!DOCTYPE html >
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application de Gestion de Bibliothèque</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span style="text-align:center;display: block;padding-top: 23px;" class="head">MIEUX CONNAÎTRE LA
PERSONNALITÉ DE NOS
ENFANTS POUR UNE MEILLEUR
ORIENTATION</span><br />
</div>
<br />
<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Connexion</span>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<tr><td colspan="2" align="center" class="msg"><?php echo $msg;?></td></tr>
<tr><td class="labels">Pseudo: </td><td><input type="text" name="sid" class="fields" size="25" placeholder="Entrez votre identifiant" required="required" /></td></tr>
<tr><td class="labels">Mot de passe : </td><td><input type="password" name="pass" class="fields" size="25" placeholder="Entrer le mot de passe" required="required" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Connexion" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="register.php" class="link">Nouveau ?</a>
<br />
<a href="admin.php" class="link">Connexion admin</a>

<br />
<br />

</div>
</div>
</body>
</html>