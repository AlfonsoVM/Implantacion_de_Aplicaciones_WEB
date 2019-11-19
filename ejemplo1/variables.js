//debugger

//console.log("mensaje");
/*//console.log("numero");

var mensaje = "Texto de mensaje."; // Se puede utilizar antes
let numero = 0; // Solo se puede acceder a partir de aquí.
const dni = '70123123A';
console.log(mensaje);
console.log(numero);
console.log(dni);
// Error;
dni = '23234324A';
*/

//variables globales
const TEXTO = "un texto global";
console.log(TEXTO);
if(true)
{
    const TEXTOLOCAL = "un texto local";
    console.log(TEXTOLOCAL);
    console.log(TEXTO);
}
// Error:
console.log(TEXTOLOCAL);
console.log(TEXTO);