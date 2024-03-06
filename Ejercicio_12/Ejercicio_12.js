var colorOriginal = document.body.style.backgroundColor;

function cambiarColor(color) {
  document.body.style.backgroundColor = color;
}

function restaurarColor() {
  document.body.style.backgroundColor = colorOriginal;
}

//Este ejercicio lo hize en codepen