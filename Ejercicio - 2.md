# 2a)
Sección del documento: se puede colocar en cualquier parte.

Efecto: es un comentario. No se muestra en la página web, es para que el programador deje notas, indicacones o aclaraciones del código.

Elementos y etiquetas: no es un elemento HTML, es una estructura de comentario.

Atributos: no posee atributos.

Obligatorio? no.

# 2b)
Sección del documento: se coloca dentro del `<body>`.

Efecto: crea un bloque contenedor. Se utiliza para agrupar elementos y luego poder darle estilo o manipularlo.

Elementos y etiquetas: 
- Apertura: `<div>`.
- Cierre: `</div>`.

Atributos:
- Nombre: id.
- Valor: "bloque1".

Obligatorio? ni el div ni el id son obligatorios pero suelen ser muy utilizados.

# 2c)
Sección del documento: se coloca dentro del `<body>`.

Efecto: inserta una imagen en la página; aunque el src está vacío, por lo tanto, la imagen no se mostrará correctamente.

Elementos y etiquetas: 
- Elemento: `<img>` 

Es un elemento vacío, no tiene etiqueta de cierre.

Atributos: 

- src=""
- Nombre: src
- Valor: "".
Obligatorio? Sí, indica la ruta de la imagen.

- alt="lugar imagen".
Obligatorio? Sí, texto alternativo si no carga la imagen.

- id="im1"  y  name="im1".
Obligatorios? No, son identificadores únicos.

- width="32"  y height="32".
Obligatorios? No, son el ancho y alto en píxeles.

- longdesc="detalles.htm".
Obligatorio? No, es un enlace a una descripción larga, está en desuso en HTML5.

# 2d) 
Sección del documento: se coloca dentro del `<head>`

Efecto: define metadatos, sirven para buscadores y configuración. No se ven en la página.

Elementos y etiquetas: 
- Elemento: `<meta>`

Es un elemento vacío.

Atributos:
- name="keywords".
Tipo de metadato.
- lang="es".
Idioma.
- content="casa, compra, venta, alquiler". 
Contenido de palabras clave.
 
- http-equiv="expires".
Indica fecha de expiración del documento.
- content="16-Sep-2019 7:49 PM".
Fecha de expiración.

Obligatorios? ninguno es obligatorio estrictamente, pero content es necesario para que tenga sentido. 

# 2e) 
Sección del documento: se coloca dentro del `<body>`

Efecto: crea un enlace a otra página.

Elementos y etiquetas: 

- Apertura: `<a>`
- Cierre: `</a>`

Atributos:
- href="http://www.e-style.com.ar/resumen.html".
Dirección del enlace.
- type="text/html".
Tipo de contenido.
-  hreflang="es".
Idioma del recurso.
- charset="utf-8".
Codificación de caracteres.
- rel="help"
Relación del enlace con el documento.

Obligatorio? El único obligatorio es el primero, el href.

# 2f)
Sección del documento: se coloca dentro del `<body>`

Efecto: crea una tabla con un título arriba, las columnas A, B y C, las filas 1º, 2º y celdas vacías (&nbsp)

Elementos y etiquetas: 

`<table>` -> tabla completa.

`<caption>` -> título de la tabla.

`<tr>` -> fila.

`<th>` -> celda de encabezado.

`<td>` -> celda normal.

Atributos: 
- width="200".
Define el ancho de la tabla.
- summary="Datos correspondientes al ejercicio vencido".
Describe la tabla.
- align="top".
Posición del titulo.
- scope="col".
Indica encabezado de columna.
- scope="row".
Indica encabezado de fila.

Obligatorio?

`<table>`, `<tr>`, `<td`> --> son obligatorios.

`<caption>`, scope, width, align, summary  --> no son obligatorios.

