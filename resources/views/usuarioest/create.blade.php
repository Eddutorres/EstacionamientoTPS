Formulario de cracion de usarios estacionamientos


<form action="{{ url('/usuarioest') }}" method="post">
@csrf

<label for="Rut"> Rut</label>
<input type="text" name="Rut" id="Rut">
<br>
<label for="Nombre1"> Primer Nombre</label>
<input type="text" name="Nombre1" id="Nombre1">
<br>
<label for="Nombre2"> Segundo Nombre</label>
<input type="text" name="Nombre2" id="Nombre2">
<br>
<label for="Apellido1"> Primer Apellido</label>
<input type="text" name="ApPaterno" id="ApPaterno">
<br>
<label for="Apellido2"> Segundo Apellido</label>
<input type="text" name="ApMaterno" id="ApMaterno">
<br>
<label for="Telefono"> Teléfono</label>
<input type="text" name="Telefono" id="Telefono">
<br>
<label for="Email"> Email</label>
<input type="text" name="Email" id="Email">
<br>
<label for="Empresa"> Empresa</label>
<input type="text" name="Empresa" id="Empresa">
<br>

<input type="submit" value="Guardar">


</form>