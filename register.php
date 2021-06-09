<?php
include("setting.php");
$name=$_POST['name'];
$email=$_POST['email'];
$sem=$_POST['sem'];
$branch=$_POST['branch'];
$sid=$_POST['sid'];
$pas=md5($_POST['pass']);
if($name==NULL || $email==NULL || $sem==NULL || $branch==NULL || $sid==NULL || $_POST['pass']==NULL)
{
	//
}
else
{
	$a=mysqli_query($set,"SELECT * FROM students WHERE email='$email'");
	$b=mysqli_fetch_array($a);
	$ema=$b['email'];
	if($ema==$email){
		$msg="Cet email existe deja";
	}
	else
	{
		$sql=mysqli_query($set,"INSERT INTO students(sid,name,branch,sem,password,email) VALUES('$sid','$name','$branch','$sem','$pas','$email')");
		if($sql)
		{
			$code = 'Beyourself_'.rand(5, 15000000);
			$sqls=mysqli_query($set,"INSERT INTO codes(user,code,status) VALUES('$email','$code',0)");
			if($sqls){
			$msg="Compte créé avec succès, Veuillez vous connecter maintenant";
			}
		}
		else
		{
			$msg="L'utilisateur est déjà inscris";
		}	
	}

}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Application de Gestion de Bibliothèque</title>
<link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="banner">
<span style="font-size:26px;text-align:center;display: block;padding-top: 23px;" class="head">MIEUX CONNAÎTRE LA
PERSONNALITÉ DE NOS
ENFANTS POUR UNE MEILLEUR
ORIENTATION</span><br />
</div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />
<span class="SubHead">Créer un Avenir Où Tu vas…</span><br>
<span class="SubHead">FORMATIONS ET COACHING PROFESSIONNEL</span><br>
<span class="SubHead">
Pour enfants, adolescents et adultes.</span><br>
<br />
<br />
<form method="post" action="">
<table border="0" cellpadding="4" cellspacing="4" class="table">
<span class="SubHead">Inscription</span>
<tr><td colspan="2" align="center" class="msg"><a href='index.php'><?php echo $msg;?></a></td></tr>
<tr><td class="labels">Nom : </td><td><input type="text" name="name" class="fields" placeholder="Entrer le nom complet" required="required" size="25" /></td></tr>
<tr><td class="labels">Email du parent : </td><td><input type="email" name="email" class="fields" placeholder="Entrer l'Email " required="required" size="25" /></td></tr>
<tr><td class="labels">Age : </td>
<td>
<select name="sem" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Selectionnez la trange d'âge - -</option>
<option style="color:black" value="3">Moins de 3 ans</option> 
<option style="color:black" value="5">Moins de 5 ans</option>
<option style="color:black" value="8">Moins de 8 ans</option>
<option style="color:black" value="12">Moins de 12 ans</option>
<option style="color:black" value="15">Moins de 15 ans</option>
<option style="color:black" value="20">Plus de 20 ans</option>
</select>
</td></tr>

<tr><td class="labels">Pays </td>
<td>
<select name="branch" class="fields" required>
<option value="" disabled="disabled" selected="selected">- - Selectionnez le pays - -</option>
<option style="color:black" value="Cameroun">Cameroun</option>
<option style="color:black" value="Etranger">Etranger</option>

</select>
</td></tr>
<tr><td class="labels">Pseudo: </td><td><input type="text" name="sid" class="fields" placeholder="Entrer le pseudo" required="required" size="25" /></td></tr>
<tr><td class="labels">Mot de passe: </td><td><input type="password" name="pass" class="fields" placeholder="Entrer le mot de passe" required="required" size="25" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="Inscription" class="fields" /></td></tr>
</table>
</form><br />
<br />
<a href="index.php" class="link">Retour</a>
<br />
<br />

</div>
</div>
</body>
</html>