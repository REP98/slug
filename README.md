# SV Slug
Generador de Slug php

## Instalación

<p>Puede instalarlo con composer usando </p>
`composer require rep98/slug`
<p>Para su uso ejecute es muy sencillo solo invoque la función `SvSlug` y listo</p>

```php
$str = "El niño juega carro con su pelota";
echo SvSlug($str);
/* Return -->
 *	el-nino-juega-carro-con-su-pelota
 */
```

## Configuración
Es simple de usar y configurar cuenta con pocas opciones

```php
/* SlugsOptions */
$SlugsOptions = [
	"delimiter" => '-', // Separador
	"limit" => -1, // Limite de Caracteres
	"lowercase" => true, // Slugs en minusculas
	"replacements" => [], // Paramentros extras a reemplazar del Slugs
	"transliterate" => true, // Traducir literales del texto
	"unique" => false // Generar Slug únicos esta opción usa Sqlite3
]
```

|  Opciones      | Descripción                                            | Defaults    |
|----------------|--------------------------------------------------------|-------------|
|  delimiter     | Se usa para estableces el separador de los slugs       | (String)"-" |
|  limit         | Limita el número de caracteres del Slug                | (int) -1    |
|  lowercase     | Permite establecer los Slug en minusculas              | (Bool) true |
|  replacements  | Conjunto clave => valor para reemplazar en el Slug     | (Array) []  |
|  transliterate | Ayuda a traducir y reemplazar caracteres correctamente | (Bool) true |
|                | Como los Acentos u carateres de otras nacionalidades   |             |
|  unique        | Se utiliza para generar slug únicos si su sistema usa  | (Bool) true |
|                | Base de datos no use esta opcion ya que usa SqlLite    |             |
|                | para almacenar y verificar si es único o no            |             |

