<?php
include("setting.php");
session_start();
if(!isset($_SESSION['sid']))
{
	header("location:index.php");
}
$sid=$_SESSION['sid'];
$a=mysqli_query($set,"SELECT * FROM students WHERE sid='$sid'");
$b=mysqli_fetch_array($a);
$name=$b['name'];
$pass=$b['password'];
//Init
$d=0;
$i=0;
$s=0;
$c=0;

// q1
$q1=($_POST['q1']);
if($q1=='d'){
	$d=$d+1;
}
if($q1=='i'){
	$i=$i+1;
}
if($q1=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q2
$q2=($_POST['q2']);
if($q2=='d'){
	$d=$d+1;
}
if($q2=='i'){
	$i=$i+1;
}
if($q2=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q3
$q3=($_POST['q3']);
if($q3=='d'){
	$d=$d+1;
}
if($q3=='i'){
	$i=$i+1;
}
if($q3=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q4
$q4=($_POST['q4']);
if($q4=='d'){
	$d=$d+1;
}
if($q4=='i'){
	$i=$i+1;
}
if($q4=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q5
$q5=($_POST['q5']);
if($q5=='d'){
	$d=$d+1;
}
if($q5=='i'){
	$i=$i+1;
}
if($q5=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}



// q6
$q6=($_POST['q6']);
if($q6=='d'){
	$d=$d+1;
}
if($q6=='i'){
	$i=$i+1;
}
if($q6=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}



// q7
$q7=($_POST['q7']);
if($q7=='d'){
	$d=$d+1;
}
if($q7=='i'){
	$i=$i+1;
}
if($q7=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q8
$q8=($_POST['q8']);
if($q8=='d'){
	$d=$d+1;
}
if($q8=='i'){
	$i=$i+1;
}
if($q8=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q9
$q9=($_POST['q9']);
if($q9=='d'){
	$d=$d+1;
}
if($q9=='i'){
	$i=$i+1;
}
if($q9=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q10
$q10=($_POST['q10']);
if($q10=='d'){
	$d=$d+1;
}
if($q10=='i'){
	$i=$i+1;
}
if($q10=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q11
$q11=($_POST['q11']);
if($q11=='d'){
	$d=$d+1;
}
if($q11=='i'){
	$i=$i+1;
}
if($q11=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q12
$q12=($_POST['q12']);
if($q12=='d'){
	$d=$d+1;
}
if($q12=='i'){
	$i=$i+1;
}
if($q12=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q13
$q13=($_POST['q13']);
if($q13=='d'){
	$d=$d+1;
}
if($q13=='i'){
	$i=$i+1;
}
if($q13=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}


// q14
$q14=($_POST['q14']);
if($q14=='d'){
	$d=$d+1;
}
if($q14=='i'){
	$i=$i+1;
}
if($q14=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q15
$q15=($_POST['q15']);
if($q15=='d'){
	$d=$d+1;
}
if($q15=='i'){
	$i=$i+1;
}
if($q15=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}
// q16
$q16=($_POST['q16']);
if($q16=='d'){
	$d=$d+1;
}
if($q16=='i'){
	$i=$i+1;
}
if($q16=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q17
$q17=($_POST['q17']);
if($q17=='d'){
	$d=$d+1;
}
if($q17=='i'){
	$i=$i+1;
}
if($q17=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q18
$q18=($_POST['q18']);
if($q18=='d'){
	$d=$d+1;
}
if($q18=='i'){
	$i=$i+1;
}
if($q18=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}

// q19
$q19=($_POST['q19']);
if($q19=='d'){
	$d=$d+1;
}
if($q19=='i'){
	$i=$i+1;
}
if($q19=='s'){
	$s=$s+1;
}
else{
	$c=$c+1;
}
$maxi = max($c,$i,$d,$s);
if ($maxi==$c){
	echo 'c';
}
if ($maxi==$d){
	echo 'd';
}
if ($maxi==$i){
	echo 'i';
}
if ($maxi==$s){
	echo 's';
}
else{
	echo 'sss';
}


?>
<!DOCTYPE html >
<html >
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
ORIENTATION</span><br /></div>
<br />

<div align="center">
<div id="wrapper">
<br />
<br />

<span class="SubHead">Repondez au quiz</span>

<form method="post" action="">
<table cellpadding="3" cellspacing="3" class="table" align="center">
<!-- qestion 1 -->
<tr>
<td>
<p style='color:white;'>1. Les gens m'encouragent souvent à :</p>
  <input type="radio" id="html" name="q1" value="d" required>
  <label style='color:white;' for="html">Ralentir</label><br>
  <input type="radio" id="css" name="q1" value="i" required>
  <label style='color:white;' for="css">Écouter</label><br>
  <input type="radio" id="javascript" name="q1" value="s" required>
  <label style='color:white;'  for="javascript">Me dépêcher</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q1" value="c" required>
  <label style='color:white;' for="javascript">Essayer quelque chose de nouveau</label>
  </td>
  
<!-- qestion 2 -->
<td>
<p style='color:white;'>2. S'il y a quelque chose que je veux vraiment,<br> je serai susceptible de :</p>
  <input type="radio" id="html" name="q2" value="d" required>
  <label style='color:white;' for="html">Travailler pour l’avoir</label><br>
  <input type="radio" id="css" name="q2" value="i" required>
  <label style='color:white;' for="css">La demander
</label><br>
  <input type="radio" id="javascript" name="q2" value="s" required>
  <label style='color:white;'  for="javascript">Économiser pour l’avoir
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q2" value="c" required>
  <label style='color:white;' for="javascript">Planifier pour l’avoir
</label>
  </td>
</tr>



<!-- qestion 3 -->
<tr>
<td>
<p style='color:white;'>3. Je n’aime pas :</p>
  <input type="radio" id="html" name="q3" value="d" required>
  <label style='color:white;' for="html">Me faire dire quoi faire
</label><br>
  <input type="radio" id="css" name="q3" value="i" required>
  <label style='color:white;' for="css">Faire la même chose tout le temps</label><br>
  <input type="radio" id="javascript" name="q3" value="s" required>
  <label style='color:white;'  for="javascript">Les changements soudains</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q3" value="c" required>
  <label style='color:white;' for="javascript">Faire des erreurs
</label>
  </td>
<!-- qestion 4 -->
<td>
<p style='color:white;'>4. Mon choix serait de :</p>
  <input type="radio" id="html" name="q4" value="d" required>
  <label style='color:white;' for="html">Avoir une responsabilité</label><br>
  <input type="radio" id="css" name="q4" value="i" required>
  <label style='color:white;' for="css">Être aventureux/euse</label><br>
  <input type="radio" id="javascript" name="q4" value="s" required>
  <label style='color:white;'  for="javascript">Aider les autres</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q4" value="c" required>
  <label style='color:white;' for="javascript">Faire les choses bien</label>
  </td>
</tr><br> <br> 



<!-- qestion 5 -->
<tr>
<td>
<p style='color:white;'>5. Quand je fais quelque chose, j’ai tendance à :
</p>
  <input type="radio" id="html" name="q5" value="d" required>
  <label style='color:white;' for="html">Le faire rapidement</label><br>
  <input type="radio" id="css" name="q5" value="i" required>
  <label style='color:white;' for="css">Le remettre à plus tard</label><br>
  <input type="radio" id="javascript" name="q5" value="s" required>
  <label style='color:white;'  for="javascript">Demander de l’aide aux autres</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q5" value="c" required>
  <label style='color:white;' for="javascript">Travailler jusqu’à ce que ce soit parfait</label>
  </td>

<!-- qestion 6 -->

<td>
<p style='color:white;'>6. Lorsque je suis contrarié(e), j’ai tendance à :</p>
  <input type="radio" id="html" name="q6" value="d" required>
  <label style='color:white;' for="html">Me fâcher</label><br>
  <input type="radio" id="css" name="q6" value="i" required>
  <label style='color:white;' for="css">Bouder</label><br>
  <input type="radio" id="javascript" name="q6" value="s" required>
  <label style='color:white;'  for="javascript">Être triste</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q6" value="c" required>
  <label style='color:white;' for="javascript">M’enfermer, me taire
</label>
  </td>
</tr>

<!-- qestion 7 -->
<tr>
<td>
<p style='color:white;'>7. Je veux :
</p>
  <input type="radio" id="html" name="q7" value="d" required>
  <label style='color:white;' for="html">Faire les choix moi-même</label><br>
  <input type="radio" id="css" name="q7" value="i" required>
  <label style='color:white;' for="css">Faire partie d’un groupe </label><br>
  <input type="radio" id="javascript" name="q7" value="s" required>
  <label style='color:white;'  for="javascript">Faire ce qui plaira aux autres</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q7" value="c" required>
  <label style='color:white;' for="javascript">Suivre les règles</label>
  </td>

<!-- qestion 8 -->
<td>
<p style='color:white;'>8. Je pense que les règles :</p>
  <input type="radio" id="html" name="q8" value="d" required>
  <label style='color:white;' for="html">Ont besoin d’être contestées
</label><br>
  <input type="radio" id="css" name="q8" value="i" required>
  <label style='color:white;' for="css">Sont ennuyeuses
</label><br>
  <input type="radio" id="javascript" name="q8" value="s" required>
  <label style='color:white;'  for="javascript">Sécurisent</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q8" value="c" required>
  <label style='color:white;' for="javascript">Rendent les choses justes
</label>
  </td>
</tr>


<!-- qestion 9 -->
<tr>
<td>
<p style='color:white;'>9. Quand je suis avec des amis, j'ai tendance à :
</p>
  <input type="radio" id="html" name="q9" value="d" required>
  <label style='color:white;' for="html">Les diriger</label><br>
  <input type="radio" id="css" name="q9" value="i" required>
  <label style='color:white;' for="css">Les encourager</label><br>
  <input type="radio" id="javascript" name="q9" value="s" required>
  <label style='color:white;'  for="javascript">Les aider
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q9" value="c" required>
  <label style='color:white;' for="javascript">Planifier pour eux
</label>
  </td>


<!-- qestion 10 -->

<td>
<p style='color:white;'>10. Quand il s'agit de ma chambre ou de mon espace :
</p>
  <input type="radio" id="html" name="q10" value="d" required>
  <label style='color:white;' for="html">Reste en dehors !
</label><br>
  <input type="radio" id="css" name="q10" value="i" required>
  <label style='color:white;' for="css">C’est en désordre
</label><br>
  <input type="radio" id="javascript" name="q10" value="s" required>
  <label style='color:white;'  for="javascript">Ça change rarement
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q10" value="c" required>
  <label style='color:white;' for="javascript">C’est organisé
</label>
  </td>
</tr>

<!-- qestion 11 -->
<tr>
<td>
<p style='color:white;'>11. J'ai tendance à être très :</p>
  <input type="radio" id="html" name="q11" value="d" required>
  <label style='color:white;' for="html">Compétitif/ve
</label><br>
  <input type="radio" id="css" name="q11" value="i" required>
  <label style='color:white;' for="css">Bavard(e)
</label><br>
  <input type="radio" id="javascript" name="q11" value="s" required>
  <label style='color:white;'  for="javascript">Amical(e)
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q11" value="c" required>
  <label style='color:white;' for="javascript">Observateur/trice
</label>
  </td>

<!-- qestion 12 -->
<td>
<p style='color:white;'>12. Pour être honnête, parfois je peux être aussi :</p>
  <input type="radio" id="html" name="q12" value="d" required>
  <label style='color:white;' for="html">Autoritaire
</label><br>
  <input type="radio" id="css" name="q12" value="i" required>
  <label style='color:white;' for="css">Distrait(e)
</label><br>
  <input type="radio" id="javascript" name="q12" value="s" required>
  <label style='color:white;'  for="javascript">Indécis(e)
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q12" value="c" required>
  <label style='color:white;' for="javascript">Pointilleux/euse
</label>
  </td>
  </tr>
<!-- qestion 13 -->
<tr>
<td>
<p style='color:white;'>13. Les gens me voient souvent comme quelqu’un de :
</p>
  <input type="radio" id="html" name="q13" value="d" required>
  <label style='color:white;' for="html">Sérieux/euse
</label><br>
  <input type="radio" id="css" name="q13" value="i" required>
  <label style='color:white;' for="css">Joyeux/euse
</label><br>
  <input type="radio" id="javascript" name="q13" value="s" required>
  <label style='color:white;'  for="javascript">Calme
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q13" value="c" required>
  <label style='color:white;' for="javascript">Prudent(e)
</label>
  </td>

<!-- qestion 14 -->
<td>
<p style='color:white;'>14. En groupe, j'ai tendance à :</p>
  <input type="radio" id="html" name="q14" value="d" required>
  <label style='color:white;' for="html">Prendre la responsabilité
</label><br>
  <input type="radio" id="css" name="q14" value="i" required>
  <label style='color:white;' for="css">Parler</label><br>
  <input type="radio" id="javascript" name="q14" value="s" required>
  <label style='color:white;'  for="javascript">Aider les autres
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q14" value="c" required>
  <label style='color:white;' for="javascript">Écouter</label>
  </td>
</tr>


<!-- qestion 15 -->
<tr>
<td>
<p style='color:white;'>15. Je peux être :
</p>
  <input type="radio" id="html" name="q15" value="d" required>
  <label style='color:white;' for="html">Ennuyé(e)
</label><br>
  <input type="radio" id="css" name="q15" value="i" required>
  <label style='color:white;' for="css">Distrait(e)
</label><br>
  <input type="radio" id="javascript" name="q15" value="s" required>
  <label style='color:white;'  for="javascript">Patient(e)
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q15" value="c" required>
  <label style='color:white;' for="javascript">Réfléchi(e)
</label>
  </td>

<!-- qestion 16 -->
<td>
<p style='color:white;'>16. Je suis au top quand :
</p>
  <input type="radio" id="html" name="q16" value="d" required>
  <label style='color:white;' for="html">Je prends une responsabilité
</label><br>
  <input type="radio" id="css" name="q16" value="i" required>
  <label style='color:white;' for="css">Je peux être avec les autres
</label><br>
  <input type="radio" id="javascript" name="q16" value="s" required>
  <label style='color:white;'  for="javascript">J’aide quelqu’un d’autre 
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q16" value="c" required>
  <label style='color:white;' for="javascript">Je fais quelque chose pour laquelle je suis
doué(e)
</label>
  </td>
</tr>



<!-- qestion 17 -->
<tr>
<td>
<p style='color:white;'>17. Quand je suis confronté(e) à quelque chose de <br>nouveau, je :
</p>
  <input type="radio" id="html" name="q17" value="d" required>
  <label style='color:white;' for="html">Suis capable de comprendre
</label><br>
  <input type="radio" id="css" name="q17" value="i" required>
  <label style='color:white;' for="css">Saute dedans sans hésiter
</label><br>
  <input type="radio" id="javascript" name="q17" value="s" required>
  <label style='color:white;'  for="javascript">Prends mon temps
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q17" value="c" required>
  <label style='color:white;' for="javascript">Pose des questions
</label>
</td>
<!-- qestion 18 -->
<td>
<p style='color:white;'>18. Je termine ce que je commence :</p>
  <input type="radio" id="html" name="q18" value="d" required>
  <label style='color:white;' for="html">Si nécessaire 
</label><br>
  <input type="radio" id="css" name="q18" value="i" required>
  <label style='color:white;' for="css">Parfois</label><br>
  <input type="radio" id="javascript" name="q18" value="s" required>
  <label style='color:white;'  for="javascript">Avec du temps
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q18" value="c" required>
  <label style='color:white;' for="javascript">Dans les temps
</label>
  </td>
</tr>


<!-- qestion 19 -->
<tr>
<td>
<p style='color:white;'>19. Je dis les choses :
</p>
  <input type="radio" id="html" name="q19" value="d" required>
  <label style='color:white;' for="html">Telles que je les sens 
</label><br>
  <input type="radio" id="css" name="q19" value="i" required>
  <label style='color:white;' for="css">Pour faire rire les autres
</label><br>
  <input type="radio" id="javascript" name="q19" value="s" required>
  <label style='color:white;'  for="javascript">Pour que les autres se sentent bien
</label><br> 
  <input style='margin-left:13px;' type="radio" id="javascript" name="q19" value="c" required>
  <label style='color:white;' for="javascript">Après avoir eu le temps de réfléchir
</label>
  </td>
</tr>
<br> <br> 

<tr><td colspan="2" align="center"><input type="submit" value="Afficher mon resultat" class="fields" /></td></tr>
</table>
</form>
<br />
<br />
<a href="kb/empr.php" class="link">Retour</a>
<br />
<br />

</div>
</div>
</body>
</html>