# Reglas para Agentes de IA

## Estilo de Código

*   **Nomenclatura:** Todas las variables y nombres de funciones deben seguir la convención camelCase.
    *   *Ejemplo:* `let miVariable = 'valor';`
    *   *Ejemplo:* `function miFuncion() { ... }`

*   **Documentación:** Todo bloque de código, incluyendo funciones, clases y métodos, debe estar precedido por un bloque de documentación explicativo. Se debe utilizar el formato `/** ... */` para la documentación.
    *   *Ejemplo:*
        ```javascript
        /**
         * @summary Breve descripción de la función.
         * @param {tipo} nombreDelParametro - Descripción del parámetro.
         * @returns {tipo} Descripción de lo que retorna la función.
         */
        function miFuncion(nombreDelParametro) {
          // cuerpo de la función
        }
        ```