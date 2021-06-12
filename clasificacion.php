<?php 
    $semifinales = array(null);
    $i = 0;

    $equipo1 = array(null, null);
    $equipo2 = array(null, null);
    $equipo3 = array(null, null);
    $equipo4 = array(null, null);
    $equipo5 = array(null, null);
    $equipo6 = array(null, null);
    $equipo7 = array(null, null);
    $equipo8 = array(null, null);

    $equipo1[0] = $_POST['equipo1']; 
    $equipo1[1] = $_POST['goles1'];
    $equipo2[0] = $_POST['equipo2']; 
    $equipo2[1] = $_POST['goles2']; 
    $equipo3[0] = $_POST['equipo3']; 
    $equipo3[1] = $_POST['goles3']; 
    $equipo4[0] = $_POST['equipo4']; 
    $equipo4[1] = $_POST['goles4']; 
    $equipo5[0] = $_POST['equipo5']; 
    $equipo5[1] = $_POST['goles5']; 
    $equipo6[0] = $_POST['equipo6']; 
    $equipo6[1] = $_POST['goles6']; 
    $equipo7[0] = $_POST['equipo7']; 
    $equipo7[1] = $_POST['goles7']; 
    $equipo8[0] = $_POST['equipo8']; 
    $equipo8[1] = $_POST['goles8']; 

    if ($equipo1[1] == $equipo2[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo1[1] < $equipo2[1]) {
            $semifinales[$i] = $equipo2[0];
            $i = $i + 1;
            //array_push($semifinales, $equipo2[0]);
        }
        else {
            $semifinales[$i] = $equipo1[0];
            $i = $i + 1;
        }
    }

    if ($equipo3[1] == $equipo4[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo3[1] < $equipo4[1]) {
            $semifinales[$i] = $equipo4[0];
            $i = $i + 1;
        }
        else {
            $semifinales[$i] = $equipo3[0];
            $i = $i + 1;
        }
    }

    if ($equipo5[1] == $equipo6[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo5[1] < $equipo6[1]) {
            $semifinales[$i] = $equipo6[0];
            $i = $i + 1;
        }
        else {
            $semifinales[$i] = $equipo5[0];
            $i = $i + 1;
        }
    }

    if ($equipo7[1] == $equipo8[1]) {
        echo "Ingrese un resultado que no sea empate.";
    }
    else {
        if ($equipo7[1] < $equipo8[1]) {
            $semifinales[$i] = $equipo8[0];
            $i = $i + 1;
        }
        else {
            $semifinales[$i] = $equipo7[0];
            $i = $i + 1;
        }
    }

    $semifinalista1 = $semifinales[0];
    $semifinalista2 = $semifinales[1];
    $semifinalista3 = $semifinales[2];
    $semifinalista4 = $semifinales[3];

?>

<form action="semifinales.php? 
    semi1=<?php echo $semifinalista1?>
    &semi2=<?php echo $semifinalista2?>
    &semi3=<?php echo $semifinalista3?>
    &semi4=<?php echo $semifinalista4?>" method="post">

    <h1>Esta es la semifinal, no hay empates</h1>

    <?php echo $semifinalista1 . ": ";?>
    <input type="int" name = "golesSemi1" value="">
    <p>   Vs.  </p>
    <?php echo $semifinalista2 . ": ";?>
    <input type="int" name = "golesSemi2" value="">

    <br><br>
    <p>--------------------------------</p>
    <br><br>

    <?php 
        echo $semifinalista3 . ": ";
    ?>
    <input type="int" name = "golesSemi3" value=""> 
    <p>  Vs. </p>

    <?php 
        echo $semifinalista4 . ": ";
    ?>
    <input type="int" name = "golesSemi4" value=""> 
    <br><br>
    <input value="¡Vamos a la Final!" type="submit">

</form>





