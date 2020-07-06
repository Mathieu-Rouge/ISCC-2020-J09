<?php

$extension= array('png', 'jpg', 'jpeg');
$taille_maxi=2097152;
$taille= filesize($_FILES ['avatar']['tmp_name']);

if($taille>$taille_maxi)
{
    echo'<p>Le fichier est trop gros.</p>';
}
if(!in_array($extension))
{
    echo'<p>Vous pouvez uploader un fichier de type png, jpg ou jpeg.</p>';
}
if(str_len($var_nom)<4)
{
    echo'<p>Le nom est trop court, minimum 4 caractères.</p>';
}
?>