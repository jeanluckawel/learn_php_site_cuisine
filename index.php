<?php
$isEnabled = true;
$isOwner = false;
$isAdmin = true;
if ($isEnabled && $isOwner ||$isAdmin){
    echo 'acces a la recette valider';
}
else{
    echo "acces a la recette interdite";
}