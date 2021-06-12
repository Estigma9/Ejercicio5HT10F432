<?php 
   
    $equipo1 = array(null, null);
    $equipo2 = array(null, null);
    

    $equipo1[0] = $_GET['fin1']; 
    $equipo1[1] = $_POST['golesFin1'];
    $equipo2[0] = $_GET['fin2']; 
    $equipo2[1] = $_POST['golesFin2']; 
   

    if ($equipo1[1] == $equipo2[1]) {
        echo "<br>";
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo1[1] < $equipo2[1]) {
            echo "<br>";
            echo "El CAMPEÓN del torneo es: " . $equipo2[0];        
        }
        else {
            echo "<br>";
            echo "El CAMPEÓN del torneo es: " . $equipo1[0];      
        }
    }

?>


