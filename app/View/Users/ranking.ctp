<div data-role="content">

<h1>Classement :</h1>
<h3>Dvonn</h3>
Non implementé
<h3>Invers</h3>
Non implementé
<h3>Gipf</h3>
Non implementé
<h3>Tzaar</h3>
Non implementé
<h3>Yinsh</h3>
Votre ELO :
<?php
$rang=$ranked;
echo $rang;
echo '</br>';
echo '</br>';
?>
<u><b>Classement : </b></u>
</br>
<?php
foreach ($user as $u):
echo($u["User"]['username']);
echo ' : ';
echo($u["User"]['elo_yinsh']);
echo '</br>';
endforeach;
unset($u);
?>
<h3>Zertz</h3>
Non implementé
</div>






