<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <span>Formulario <b><em>PHP/HTML</em></b></span>
        <form action="receptor.php" method="get">
            <p>
                <label for="tipId">Seleccione el tipo de identificación:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
                <select name="tipId"  id="tipId" required>
                    <option value="TI" >Targeta de identidad</option> 
                    <option value="CC" selected>Cedula de ciudadania</option>
                    <option value="CE" >Cedula de extrangeria</option>
                </select><br></p>
            <p>
                <label for="id">Numero de identificación:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
                <input type="text" required id="id" name="id"><br>
            </p>
            <p>
                <label for="nombres">Nombres:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
                <input type="text" required id="nombres" name="nombres"><br>
            </p>
            <p>
                <label for="apell">Apellidos:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
                <input type="text" required id="apell" name="apell"><br>
            </p>
            <p>
                <label for="genero">Seleccione tipo de genero:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
                <input type="radio" id="masculino" name="genero" value="masculino">
                <label for="masculino" >Masculino</label><br>
                <input type="radio" required id="femenino" name="genero" value="femenino">
                <label for="femenino">Femenino</label><br>
                <input type="radio" required id="otro" name="genero" value="otro">
                <label for="otro">Otro</label>
            </p>
            <p>
            <label for="fNac">Fecha de nacimiento:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
            <input type="date" id="fNac" name="fNac" value="fNac" required>
            </p>
            <p>
            <label for="numHijos">Numero de hijos:<abbr title="Este campo es obligatorio" aria-label="required">*</abbr></label><br>
            <input type="number" id="numHijos" name="numHijos" value="numHijos" min="0" required>
            </p>
          
                <p><button type="submit">Enviar formulario</button></p>
          
        </form>
    </body>
</html>
