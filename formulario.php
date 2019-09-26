<?php
        if(@$_POST['check']!=NULL){
            echo $_POST['nombre'];
            echo "<br>";
            echo $_POST['apellido'];
            echo "<br>";
            echo $_POST['ciudad'];
            echo "<br>";
            echo $_POST['contraseña'];
            echo "<br>";
            print $_POST['check']; 
        }
        else echo 'Marca la casilla<br><a href="index.html">Volver atras</a>';
    ?>

        
        