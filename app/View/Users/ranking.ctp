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
<center><u><b>Votre ELO :</u> </b>
<?php
$rang=$ranked;
echo ' ';
echo $rang;
echo '</center>';
echo '</br>';
?>
<center><u><b>Classement : </b></u></center>
</br>
<table class='tt' id='list'>
<tbody>
<tr><td>Joueur</td><td>ELO</td></tr>
<?php
foreach ($user as $u):
echo '<tr>';
echo '<td>';
echo '<center>';
echo($u["User"]['username']);
echo '</center>';
echo '</td>';
echo '<td>';
echo '<center>';
echo($u["User"]['elo_yinsh']);
echo '</center>';
echo '</td>';
echo '<tr>';
endforeach;
?>
</tbody>
</table>

<h3>Zertz</h3>
Non implementé
</div>



