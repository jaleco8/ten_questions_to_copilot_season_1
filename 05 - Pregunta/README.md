# ¿Cómo usar async await con Array.map en TypeScript?

## GitHub Copilot

Para usar <strong>async/await</strong> con <strong>Array.map</strong> en <strong>TypeScript</strong>, puedes hacer lo siguiente:

1. Define una función <strong>async</strong> que realizará la operación que deseas en cada elemento del array.
2. Usa <strong>Array.map</strong> para crear un nuevo array con los resultados de la función async.
3. Usa <strong>Promise.all</strong> para esperar a que todas las promesas se resuelvan.

### Aquí te dejo un ejemplo de cómo hacerlo:

![](./snippets/asyncAwaitArrayMap.png)

En este ejemplo, la función <strong>asyncOperation</strong> realiza una operación simple de multiplicar el elemento por 2. Luego, en la función <strong>main</strong>, usamos <strong>Array.map</strong> para crear un nuevo array con los resultados de la función <strong>asyncOperation</strong>. Finalmente, usamos <strong>Promise.all</strong> para esperar a que todas las promesas se resuelvan y obtenemos el resultado final.

### Como puedo manejar los errores cuando estoy usando async/await con Array.map en TypeScript

Para manejar los errores cuando estás usando <strong>async/await</strong> con <strong>Array.map</strong> en <strong>TypeScript</strong>, puedes envolver el código dentro de un bloque <strong>try/catch</strong>. De esta manera, puedes capturar cualquier error que se produzca durante la ejecución de la función asíncrona y manejarlo de forma adecuada.

### Aquí te dejo un ejemplo de cómo hacerlo:

![](./snippets/asyncAwaitArrayMap2.png)

En este ejemplo, envolvemos el código dentro de un bloque <strong>try/catch</strong> tanto en la función <strong>asyncOperation</strong> como en la función <strong>main</strong>. En la función <strong>asyncOperation</strong>, capturamos cualquier error que se produzca durante la ejecución de la función y lo manejamos imprimiendo un mensaje de error en la consola y devolviendo un valor predeterminado (<strong>0</strong> en este caso).

En la función <strong>main</strong>, envolvemos el código dentro de un bloque <strong>try/catch</strong> para capturar cualquier error que se produzca durante la ejecución de las promesas. Si se produce un error, lo manejamos imprimiendo un mensaje de error en la consola.

Es importante tener en cuenta que, al manejar los errores de esta manera, la ejecución del código no se detendrá si se produce un error en una de las promesas. En su lugar, se manejará el error y se continuará con la ejecución del resto de las promesas.

### Para usar el código que les comparto, sigue estos pasos:
 - Crea un archivo <strong>TypeScript</strong> con el código que compartí y guárdalo con el nombre que quieras ejemplo <strong>question_5.ts</strong>
 - Crea un archivo <strong>tsconfig.json</strong> con el código que compartí en la misma carpeta que está question_5.ts
 - Abre una terminal en la carpeta donde guardaste el archivo TypeScript y ejecuta el comando <strong>tsc</strong>. Esto compilará el archivo TypeScript y generará un archivo <strong>JavaScript</strong> con el mismo nombre <strong>(question_5.js)</strong>.
 - Puedes ejecutar con <strong>Node.js</strong> usando el comando <strong>node question_5.js</strong>. 

## Historia
Async y Await son estándar desde ECMAScript 8 (2017).
Await tiene algunos problemas en la versión ECMAScript 8 (2017).
Será corregido en ECMAScript 9 (2018)

TypeScript fue publicado en octubre de 2012, después de dos años de desarrollo por parte de Microsoft.

TypeScript 0.9, lanzado en 2013, agregó soporte para genéricos. La versión 1.0 de TypeScript fue publicada en la conferencia de desarrolladores Build de Microsoft en 2014.

En julio de 2014, el equipo de desarrollo de TypeScript anunció un nuevo compilador que era 5 veces más rápido al actual. Inicialmente estaba alojado en CodePlex, luego lo movieron a GitHub.

El 22 de septiembre de 2016, se lanzó TypeScript 2.0. Esta versión introdujo varias características, entre ellas la capacidad de evitar la asignación a nulo de las variables.
