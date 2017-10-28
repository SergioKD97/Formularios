<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Datos Usuario</title>
    </head>
    <body>
        
        <?php
        $equipo="Madrid";
        $entrenador="Zizu";
        ?>
        
        <form action="equipo1.php?equipo=<?php echo $equipo ?>&entrenador=<?php echo $entrenador ?>" method="POST">
            Introduzca su nombre: <input name="nombre" type="text" value="PACO">
            <br>
            <br>
            Introduzca su teléfono: <input name="telefono" type="text" value="666666999">
            <br>
            <br>
            Introduzca su e-mail: <input name="e-mail" type="email" value="paco@gmail.com">
            <input type="submit" name="enviar">
                
            
        </form>

    </body>
</html>
