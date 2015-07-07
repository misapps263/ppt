<?php 
 error_reporting('E_notice'); //session_start();
//$contador=$_SESSION["contador"];
$ppt=array("piedra","papel","tijera");
$opt=array(
"piedra"=>"tijera",
"papel"=>"piedra",
"tijera"=>"papel"
);
$a='j1';
$b='j2';
echo('<!--jugador1 envia '.$_POST['j1'].'<br>-->');
echo('<!--jugador2 envia '.$_POST['j2'].'<br>-->');

$j1=$_POST['j1'];
//$j2=$_POST['j2'];
$j2=$ppt[rand(0,2)];


$c1=$opt['$j1'];
$c2=$opt['$j2'];


$mensaje="";

$j1counter=$_POST['$j1counter'];

if($j2==$c1){/*echo('<h2>GANO!!!!!!!!!!!</h2>'.$_POST[j2].'=='.$opt[$j1].'<br>');*/$res="gana";}
else{/*echo('<h2>PIERDES!!!!!!</h2>');*/

$res="pierde";};
//if($_POST[j2]==$opt[$j1]){echo('GANO!!!!!!!!!!!'.$_POST[j2].'=='.$opt[$j1].'<br>');}
if($c1==$c2){/*echo('<h2>EMPATE!!!!!!!</h2>');*/$res="empate"; }
switch($res){
						 case "empate":$mensaje="<h2>EMPATE!!!!!!!</h2>";$contador+=1;break;
						 case "gana":$mensaje="<h2>GANA!!!!!!!</h2>";$contador+=1;break;
						 case "pierde":$mensaje="<h2>PIERDES!!!!!!!</h2>";$contador+=1;$j2counter++;break;
default:echo('<h2>JUEGA!!!!!!!</h2>');break;

}

//foreach($opt as $v=>$gana){echo($v.' gana a '.$gana.'<br>');}




print<<<HERE

<div class="jconte">
<div class="j1">
<p>JUGADOR 1 escoje $j1 </p>
<p>JUGADOR 1 total $j1counter puntos.</p>
<img alt="$j1"  src="img/j1$j1.jpg" />
</div>
<div class="j2">
<p>JUGADOR 2 escoje $j2</p> 
<p>JUGADOR 2 total $j2counter puntos</p>
<img alt="$j2"  src="img/j2$j2.jpg" />
</div>
</div>

<form action="" method="post">
<div class="mensaje">
$mensaje
</div>
jugador1
<input type="hidden" name="j1counter" />
<select name="j1" id="j1">
<option value="$j1" class="ulti">$j1</option>
<option value="piedra">Piedra</option>
<option value="papel">Papel</option>
<option value="tijera">Tijera</option>
</select>

<input type="submit" value="...123 ¡ YA!"/>
</form>

HERE;




 ?>
