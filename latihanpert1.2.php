<?php
$A =123; //variable global
function Test(){
    global $A;//mengambil variable global ke dalam fungsi
    echo"Nilai A dalam fungsi = $A\n";
}
Test();
echo "Nilai A luar fungsi =$A \n";
?>