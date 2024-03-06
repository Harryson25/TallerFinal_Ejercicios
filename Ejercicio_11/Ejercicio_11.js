function determinarnumero(numero) {
    if (numero > 0) {
        return "positivo";
    } else if (numero < 0) {
        return "negativo";
    } else {
        return "cero";
    }
}


console.log(determinarnumero(1));
console.log(determinarnumero(0));
console.log(determinarnumero(-1));