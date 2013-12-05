<div data-role="content">

<h1>Classement :</h1>

<h3>Dvonn</h3>

<h3>Invers</h3>

<h3>Gipf</h3>

<h3>Tzaar</h3>

<h3>Yinsh</h3>

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

</div>






