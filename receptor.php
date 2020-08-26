<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $tipId = $_REQUEST["tipId"];
        $id = $_REQUEST["id"];
        $nombres = $_REQUEST["nombres"];
        $apell = $_REQUEST["apell"];
        $genero = $_REQUEST["genero"];
        $fNac = $_REQUEST["fNac"];
        $numHijos = $_REQUEST["numHijos"];

        if ($apell == "" || $fNac == "" || $genero == "" || $id == "" || $nombres == "" || $numHijos == "" || $tipId == "") {
            ?>
            <span style="color:red;">Todos los datos son requeridos, alguno fue enviado como null</span>
            <?php
            exit(0);
        }
        if ($numHijos < 0) {
            ?>
            <span style="color:red;">El valor ingresado para la variable "numero de hijos" no es correcto</span>
            <?php
            exit(0);
        }
        $born = new DateTime($fNac);
        $hoy = new DateTime('now');
        $edad = $born->diff($hoy);
        ?>
        <span>Los datos ingresados en el formulario pertenecen a <b><em><?php echo $nombres . " " . $apell ?> </em></b> identificado con  <b><em> <?php echo $tipId . " # " . $id ?> </em></b>, perteneciente al genero <b><em> <?php echo $genero ?> </em></b>, con fecha de nacimiento <b><em> <?php echo $fNac ?> </em></b>, tiene <b><em> <?php echo $numHijos ?> </em></b> hijos y cuya edad es  <b><em><?php echo $edad->y ?> </em></b> </span>


    </body>
</html>


