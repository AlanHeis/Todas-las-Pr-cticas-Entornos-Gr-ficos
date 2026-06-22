```
# 3a)
- `<a href="http://www.google.com.ar">Click aquí para ir a Google</a>`.
Abre Google en la misma pestaña.
- `<a href="http://www.google.com.ar" target="_blank">Click aquí para ir a Google</a>`.
Abre Google pero en una nueva pestaña. Por el target="_blank"
- `<a href="http://www. google.com.ar" type="text/html" hreflang="es" charset="utf-8" rel="help">`.
Abre Google y se ve igual que el primero pero, este, agrega metadatos como tipo de contenido, idooma, relación del link y codificación.
- `<a href="#">Click aquí para ir a Google</a>`.
No lleva a ninguna página externa, te manda al inicio de la misma. Se usa mucho como placeholder. 
- `<a href="#arriba">Click aquí para volver arriba</a>`.
Busca el elemento con id="arriba" y te lleva a esa parte en específico.
- `<a name="arriba" id="arriba"></a>`.
Permite que el link anterior funcione. 
# 3b)
- `<p><img src="im1.jpg" alt="imagen1" /><a href="http://www.google.com.ar">Click aquí</a></p>`
Ingresa una imagen y un link a google.
- `<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> Click aquí</p>`
Primero el link a google, luego la imagen.
- `<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" />Click aquí</a></p>`
Forma un bloque único donde tanto la imagen como el texto son clickeables.
- `<p><a href="http://www.google.com.ar"><img src="im1.jpg" alt="imagen1" /></a> <a href="http://www.google.com.ar">Click aquí</a></p>`
Son 2 enlaces separados para el mismo destino, la imagen y el texto son independientes.
# 3c)

<ul>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ul>
Lista no ordenada.

<ol>
<li>xxx</li>
<li>yyy</li>
<li>zzz</li>
</ol>
Lista ordenada.

<ol>
<li>xxx</li>
</ol>
Lista ordenada que muestra xxx.
<ol>
<li value="2">yyy</li>
lista ordenada donde el ítem yyy se enumera como 2.
</ol>
<ol>
<li
value="3">zzz</li>
<ol>
Lista ordenada donde el ítem zzz se enumera como 3.

<blockquote>
<p>1. xxx<br />
2. yyy<br />
3. zzz</p>
</blockquote>
Crea una sangría de bloque.

# 3d)
<table border="1" width="300">
<tr>
<th>Columna 1</th>
<th>Columna 2</th>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
Es una tabla que tiene 2 columnas y 4 celdas.

<table border="1" width="300">
<tr>
<td><div align="center"><strong>Colum
na1</strong></div></td>
<td><div align="center"><strong>Columna
2</strong></div></td>
</tr>
<tr>
<td>Celda 1</td>
<td>Celda 2</td>
</tr>
<tr>
<td>Celda 3</td>
<td>Celda 4</td>
</tr>
</table>
Es una tabla con 2 columnas alineadas en el centro.

# 3e)
<table width="200">
<caption>
Título
</caption>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">
&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
El título no es parte de la tabla, este flota sobre la tabla. Tiene 2 columnas con 3 filas cada una. 

<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
El título si está adetro de la tabla y ocupa 3 3 columnas. 

# 3f)
<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2" bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
El titulo ocupa 3 columnas, la 2da fila tiene un celda que ocupa 2 filas, la 3er fila son 2 celdas. La tabla es asimétrica.

<table width="200">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td colspan="2"
bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
<td bgcolor="#dddddd">&nbsp;</td>
</tr>
</table>
El título ocupa 3 columnas, la 2da fila tiene una celda que ocupa 2 columnas y otra celda normal, la 3er fila tiene 3 celdas normales.

# 3g)
<table width="200" border="1">
<tr>
<td colspan="3"><div
align="center">Título</div></td>
</tr>
<tr>
<td colspan="2"rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
La tabla tiene borde de 1 pixel. El título tambien ocupa 3 columnas, la 2da fila ocupa 2 columnas y 2 filas. En la 3er fila, el width no es útil ya que el roswpan de arriba ajusta la estructura. 

<table width="200" border="1" cellpadding="0"
cellspacing="0">
<tr>
<td colspan="2"><div
align="center">Título</div></td>
</tr>
<tr>
<td rowspan="2">&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td width="50%">&nbsp;</td>
</tr>
</table>
El espacio entre el contenido y los bordes de la celda son eliminados. El título esta vez abarca 2 columnas, la celda con rowspan ocupa la altura de las 2 filas inferiores izquierda, las otras 2 celdas se apilan a la derecha.

# 3h)
<form id="form1" name="form1" action="procesar.php" method="post" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu1" name="usu1" value="xxx" /><br />
Clave: <input type="password" id="clave1" name="clave1" value="xxx" />
</fieldset>
<input type="submit" id="boton1" name="boton1" value="Enviar" />
</form>
Es un formulario que envia los datos con el método POST al archivo procesar.php y se abre en una nueva pestaña. fielset y legend, agrupan visualmente los cmapos de usu y pw y los inputs ya tienen valores predeterminados.

<form id="form2" name="form2" action="" method="get" target="_blank">
LOGIN<br />
<label>Usuario: <input type="text" id="usu2" name="usu2" /></label><br />
<label>Clave: <input type="text" id="clave2" name="clave2" /></label><br />
<input type="submit" id="boton2" name="boton2" value="Enviar" />
</form>
Es un formulario que envia los datos con el método GET. la etiqueta label asocia los textos de Usuario y Clave con sus respectivos campos de entrada. 

<form id="form3" name="form3" action="mailto:xx@xx.com” enctype=text/plain method="p
ost" target="_blank">
<fieldset>
<legend>LOGIN</legend>
Usuario: <input type="text" id="usu3" name="usu3" /><br />
Clave: <input type="password" id="clave3" name="clave3" />
</fieldset>
<input type="reset" id="boton3" name="boton3" value=
"Enviar" />
</form>
Es un formulario configurado para enviar datos por correo electrónico al presionar el boton Enviar. Parece haber un error por el tipo reset, el boton enviar no va a enviar los datos.

# 3i)
<label>Botón 1
<button type="button" name="boton1" id="boton1">
<img src="logo.jpg" alt="Botón con imagen " width="30" height="20" /><br />
<b>CLICK AQUÍ</b></button></label>
Es un botón personalizado que contiene una imagen y un texto en negrita dentro del mismo. 

<label>Botón 2
<input type="button" name="boton2" id="boton2" value="CLICK AQUÍ" />
</label>
Es un botón estándar de formulario creado mediante un input. Tiene menos diseño con respecto al otro, el value muestra solo texto plano.

# 3j)
<p><label><input type="radio" name="opcion" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion" id="Y" value="Y" />Y</label></p>
Crea un grupo de botones de opción vinculados entre si mediante el atributo opcion. Si se elige una opcion, la otra se desmarca.

<p><label><input type="radio" name="opcion1" id="X" value="X" />X</label><br />
<label><input type="radio" name="opcion2" id="Y" value="Y" />Y</label></p>
En este, cada botón tiene nombres diferentes. Al no tener el mismo nombre, no se los reconoce como del mismo grupo por lo que se los puede seleccionar a la vez, rompiendo la loógica.

# 3j)
<select name="lista">
<optgroup label="Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label="Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
Es un menú desplegable estándar. El usuario solo puede seleccionar una opción a la vez. El optgroup organiza las opciones bajo las categorías caso 1 y caso 2, las cuales no se pueden seleccionar, son encabezados visuales.

<select name="lista[]" multiple="multiple">
<optgroup label=" Caso 1">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
<optgroup label=" Caso 2">
<option>Mayo</option>
<option>Junio</option>
</optgroup>
</select>
Crea un selector de lita que permite seleccionar multiples opciones a la vez. Los valores seleciconados se envían como un arreglo al servidor. Tambien usa optgroup para organizar las oopciones. 











