<?php 
function templates( string $template ,array $data=[]){
    extract($data);
    require "template/$template.php";
}
?>