var numero1 = parseFloat(prompt("Primer número:"));
var numero2 = parseFloat(prompt("Segundo número:"));

var mayor;

if (numero1 > numero2) {
    mayor = numero1;
} else if (numero2 > numero1) {
    mayor = numero2;
} else {
    mayor = "Los números son iguales";
}

console.log("El número  mayor es: " + mayor);
