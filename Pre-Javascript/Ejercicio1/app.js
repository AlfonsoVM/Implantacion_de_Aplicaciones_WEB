function Area(base, altura) {
    return base*altura;
}
function Perimetro(base, altura) {
    return base*2+altura*2;
}

var base = 12;
var altura = 10;
var perimetro, area;
perimetro = Perimetro(base,altura);
area = Area(base,altura);
console.log("El perímetro del rectángulo es "+perimetro);
console.log(`El perímetro del rectángulo es ${perimetro}`);

console.log("El área del rectángulo es "+area);
console.log(`El área del rectángulo es ${area}`);
