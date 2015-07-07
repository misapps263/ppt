<?php 
 error_reporting('E_notice');
if(filter_has_var(INPUT_POST,"H")){
unset($H);
$opt=array(
"piedra"=>"tijera",
"papel"=>"piedra",
"tijera"=>"papel"
);
$a=j1;
$b=j2;
echo('<!--jugador1 envia '.$_POST[j1].'<br>-->');
echo('<!--ugador2 envia '.$_POST[j2].'<br>-->');

$j1=$_POST[j1];
$j2=$_POST[j2];
//echo('j1='.$j1.'<br>j2='.$j2);
//echo('<br>//////////<br>');
$c1=$opt[$j1];
$c2=$opt[$j2];
//echo($j1.' _gana '.$c1.'<br>');
//echo($j2.' _gana '.$c2.'<br>');

//echo('<br>//////////<br>');
//echo('$ j2 vale ->'.$j2.'<br>');
//echo('$ c2 vale ->'.$c2.'<br>');
//echo('$ j1 vale ->'.$j1.'<br>');
//echo('$ c1 vale ->'.$c1.'<br>');

if
($j2==$c1){/*echo('<h2>GANO!!!!!!!!!!!</h2>'.$_POST[j2].'=='.$opt[$j1].'<br>');*/$res="gana";}
else{/*echo('<h2>PIERDES!!!!!!</h2>');*/

$res="pierde";};
//if($_POST[j2]==$opt[$j1]){echo('GANO!!!!!!!!!!!'.$_POST[j2].'=='.$opt[$j1].'<br>');}
if($c1==$c2){/*echo('<h2>EMPATE!!!!!!!</h2>');*/$res="empate"; }
switch($res){
						 case "empate":echo('<h2>EMPATE!!!!!!!</h2>');break;
						 case gana:echo('<h2>GANA!!!!!!!</h2>');break;
						 case pierde:echo('<h2>PIERDE!!!!!!!</h2>');break;
default:echo('<h2>JUEGA!!!!!!!</h2>');break;

}

//foreach($opt as $v=>$gana){echo($v.' gana a '.$gana.'<br>');}

if(filter_has_var(INPUT_POST,"H")){
print<<<HERE

<form action="" method="post">
jugador1
<input type="hidden" name="H" />
<select name="j1" id="j1">
<option value="piedra">Piedra</option>
<option value="papel">Papel</option>
<option value="tijera">Tijera</option>
</select>
fugador2
<select name="j2" id="j2">
<option value="piedra">Piedra</option>
<option value="papel">Papel</option>
<option value="tijera">Tijera</option>
</select>
<input type="submit" />
</form>


HERE;

}

}else{

print<<<HERE

<form action="" method="post">
jugador1
<input type="hidden" name="H" />
<select name="j1" id="j1">
<option value="piedra">Piedra</option>
<option value="papel">Papel</option>
<option value="tijera">Tijera</option>
</select>
fugador2
<select name="j2" id="j2">
<option value="piedra">Piedra</option>
<option value="papel">Papel</option>
<option value="tijera">Tijera</option>
</select>
<input type="submit" />
</form>

HERE;

}


 ?>
