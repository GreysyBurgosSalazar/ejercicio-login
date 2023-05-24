# Clase PeticionREST

Clase para procesar los datos de una petición REST.

Se debe especificar que fragmento de la URL es el último de la URL base, a
partir del cual comienza el path de la petición a la API. Por ejemplo, en la
petición:

`GET https://www.dominio.com/api/v3/recurso/2/?param1=34`

El procesamiento sería:

````
$peticion = new PeticionREST('v3');
$peticion->recurso(); // devolverá 'recurso'
$peticion->parametrosQuery(); // devolverá ['param1' => 34]
````

  * [Constructor](#constructor)
  * [Métodos públicos](#métodos-públicos)
    * [recurso()](#recurso)
    * [parametrosPath()](#parametrospath)
    * [parametrosQuery()](#parametrosquery)
    * [parametrosPost()](#parametrospost)
    * [parametrosBody()](#parametrosbody)

## Constructor

Crea un nuevo objeto `PeticionREST`

#### Argumentos

`$separador`

Tipo: `string`

Fragmento de la URL a partir del cual comienza el path de la petición a
la API. Habitualmente es la versión de la API. Por defecto v1.0

#### Ejemplos

````
$peticion = new PeticionREST();

$peticion = new PeticionREST('v2.4');

$peticion = new PeticionREST('api');

````

## Métodos públicos

### recurso()

#### Devuelve

`string` Recurso solicitado en la petición.

#### Ejemplos

````
// GET https://www.dominio.com/api/v3/recurso/2/?param1=34

$peticion = new PeticionREST('v3');
$peticion->recurso(); // devolverá 'recurso'
````

### parametrosPath()

#### Devuelve

`string[]` Array con los parámetros del path, a partir del recurso solicitado.

#### Ejemplos

````
// GET https://www.dominio.com/api/v3/recurso/1/categoria/?param1=34

$peticion = new PeticionREST('v3');
$peticion->parametrosPath(); // devolverá ["1", "categoria"]
````

### parametrosQuery()

#### Devuelve

`array` Array asociativo con los parámetros de la query.

#### Ejemplos

````
// GET https://www.dominio.com/api/v3/recurso/2/?param1=34&param2=valor

$peticion = new PeticionREST('v3');
$peticion->parametrosQuery(); // devolverá ['param1' => 3, 'param2' => 'valor']
````

### parametrosPost()

#### Devuelve

`array` Array asociativo con los parámetros del body de la petición con formato
de formulario.

#### Ejemplos

````
// POST https://www.dominio.com/api/v3/recurso/2/?param1=34
// Content-Type: application/x-www-form-urlencoded
// Payload: param1=valor1&param2=valor2

$peticion = new PeticionREST('v3');
$peticion->parametrosPost(); // devolverá ['param1' => 'valor1', 'param2' => 'valor2']
````

### parametrosBody()

#### Devuelve

`mixed` Parámetros incluidos en el body de la petición.
El tipo concreto de datos dependerá de como estén formados al enviarse la
petición.

#### Ejemplos

````
// GET https://www.dominio.com/api/v3/recurso/2/?param1=34
// Content-Type: application/json
// Body: ["valor1","valor2"]

$peticion = new PeticionREST('v3');
$peticion->parametrosBody(); // devolverá ['valor1', 'valor2']
````

````
// GET https://www.dominio.com/api/v3/recurso/2/?param1=34
// Content-Type: application/json
// Body: {"param1":"valor1","param2":"valor2"}

$peticion = new PeticionREST('v3');
$peticion->parametrosBody(); // devolverá ['param1' => 'valor1', 'param2' => 'valor2']
````