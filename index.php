<?php
$isEnabled = true;
$isOwner = true;
if ($isEnabled && $isOwner){
    echo 'acces a la recette valider';
}
else{
    echo "acces a la recette interdite";
}