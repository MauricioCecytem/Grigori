<div class="cont-crear-alumno">
    <a href="?pag=alumnos"><button type="button">Volver</button></a>
    <form class="form-crear-alumno" action="../Funciones/Generales/agregar_alumno.php" method="post">
        <h2>Datos personales</h2>
        <label for="nombre_alumno">Nombre: </label><input required="required" type="text" name="nombre_alumno">
        <label for="ap_alumno">Apellido paterno: </label><input required="required" type="text" name="ap_alumno">
        <label for="am_alumno">Apellido materno: </label><input required="required" type="text" name="am_alumno">
        <label for="sexo_alumno">Sexo: </label>
        <select required="required" name="sexo_alumno">
            <option value="">Seleccione una opci&oacute;n</option>
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <label for="fdn_alumno">Fecha nacimiento: </label><input required="required" type="date" name="fdn_alumno">
        <label for="curp_alumno">CURP: </label><input required="required" type="text" name="curp_alumno">
        <label for="edociv_alumno">Estado civil: </label><input type="text" name="edociv_alumno">
        <h2>Direcci&oacute;n</h2>
        <label for="entidad_alumno">Entidad: </label><input required="required" type="text" name="entidad_alumno">
        <label for="municipio_alumno">Municipio: </label><input required="required" type="text" name="municipio_alumno">
        <label for="localidad_alumno">Localidad: </label><input type="text" name="localidad_alumno">
        <label for="colonia_alumno">Colonia: </label><input required="required" type="text" name="colonia_alumno">
        <label for="calle_alumno">Calle: </label><input required="required" type="text" name="calle_alumno">
        <label for="noext_alumno">No. Exterior: </label><input type="text" name="noext_alumno">
        <label for="noint_alumno">No. Interior: </label><input type="text" name="noint_alumno">
        <label for="entca1_alumno">Entre la calle: </label><input type="text" name="entca2_alumno">
        <label for="entca2_alumno">Y la calle: </label><input type="text" name="entca2_alumno">
        <label for="referencias_alumno">Referencias: </label><input type="text" name="referencias_alumno">
        <label for="cp_alumno">C&oacute;digo postal: </label><input required="required" type="text" name="cp_alumno">
        <h2>Informaci&oacute;n de contacto</h2>
        <label for="telfijo_alumno">Telefono fijo: </label><input required="required" type="text" name="telfijo_alumno">
        <label for="telcel_alumno">Telefono celular: </label><input type="text" name="telcel_alumno">
        <label for="ecorreo_alumno">Correo electronico: </label><input required="required" type="text" name="ecorreo_alumno">
        <label for="red1_alumno">Red social: </label><input type="text" name="red1_alumno">
        <label for="red2_alumno">Red social: </label><input type="text" name="red2_alumno">
        <h2>Datos tutor</h2>
        <label for="nombre_tutor_alumno">Nombre: </label><input required="required" type="text" name="nombre_tutor_alumno">
        <label for="ap_tutor_alumno">Apellido paterno: </label><input required="required" type="text" name="ap_tutor_alumno">
        <label for="am_tutor_alumno">Apellido materno: </label><input required="required" type="text" name="am_tutor_alumno">
        <h2>Otros</h2>
        <label for="grupo_alumno">Grupo: </label>
        <select required="required" name="grupo_alumno">
            <option value=""></option>
            <option value=""></option>
        </select>
        <button type="submit">Guardar</button>
    </form>
</div>
