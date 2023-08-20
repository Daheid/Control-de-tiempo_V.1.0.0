// Objeto para almacenar el estado de cada computadora
let estados = {
  1: true,
  2: true,
  3: true,
  4: true
};

// Función para cambiar el estado de una computadora
function toggleComputer(numero) {
  // Cambiar el estado de la computadora
  estados[numero] = !estados[numero];

  // Actualizar el texto del elemento que muestra el estado
  let estadoTexto = estados[numero] ? 'Estado: Encendido' : 'Estado: Apagado';
  document.getElementById(`computer-${numero}-status`).textContent = estadoTexto;

  // Actualizar los atributos data-unchecked y data-checked del div
  let dataUnchecked = estados[numero] ? 'On' : 'Off';
  let dataChecked = estados[numero] ? 'Off' : 'Off';
  let divs = document.querySelectorAll(`.fx-block .toggle div div`);
  divs[numero - 1].setAttribute('data-unchecked', dataUnchecked);
  divs[numero - 1].setAttribute('data-checked', dataChecked);
}


/*Temporizadores */

// Objeto para almacenar los temporizadores de cada computadora
let timers = {
  1: null,
  2: null,
  3: null,
  4: null
};

// Función para iniciar el temporizador de una computadora
function startTimer(numero) {
  // Obtener el tiempo elegido por el usuario
  let tiempo = document.getElementById(`computer-${numero}-timer`).value;

  // Si el tiempo es válido, iniciar el temporizador
  if (tiempo > 0) {
    // Cancelar el temporizador anterior si existe
    if (timers[numero]) {
      clearTimeout(timers[numero]);
    }

    // Iniciar el temporizador
    timers[numero] = setTimeout(() => {
      // Mostrar una alerta cuando el tiempo se agote
      alert(`Tiempo agotado para la computadora ${numero}`);
    }, tiempo * 60000);
  }
}




// Obtener la fecha y hora actuales
let ahora = new Date();
let dia = ahora.getDate();
let mes = ahora.getMonth() + 1;
let anio = ahora.getFullYear();
let horas = ahora.getHours();
let minutos = ahora.getMinutes();

// Asegurarse de que el día y el mes tengan dos dígitos
if (dia < 10) {
  dia = '0' + dia;
}
if (mes < 10) {
  mes = '0' + mes;
}

// Asegurarse de que las horas y los minutos tengan dos dígitos
if (horas < 10) {
  horas = '0' + horas;
}
if (minutos < 10) {
  minutos = '0' + minutos;
}

// Establecer los valores de los campos de entrada
document.getElementById('fecha').value = `${anio}-${mes}-${dia}`;
document.getElementById('hora-sistema').value = `${horas}:${minutos}`;



//Tabla de muestra de formulario

/*
// Selecciona el formulario y la tabla
const form = document.querySelector('form');
const table = document.querySelector('#tabla-registros');

// Agrega un evento 'submit' al formulario
form.addEventListener('submit', (event) => {
// Evita que el formulario se envíe y recargue la página
  event.preventDefault();

// Guarda los valores de la fecha y la hora en el almacenamiento local
localStorage.setItem('fecha', form.fecha.value);
localStorage.setItem('hora', form.hora.value);

// Crea una nueva fila para la tabla
  const newRow = table.insertRow(1);

// Agrega celdas a la fila y establece su contenido
  newRow.insertCell(0).textContent = form.nombre.value;
  newRow.insertCell(1).textContent = form.apellido.value;
  newRow.insertCell(2).textContent = form.cedula.value;
  newRow.insertCell(3).textContent = form.telefono.value;
  newRow.insertCell(4).textContent = form.email.value;
  newRow.insertCell(5).textContent = form.hora.value;
  newRow.insertCell(6).textContent = form.fecha.value;
  newRow.insertCell(7).textContent = form.observacion.value;

  // Limpia los campos de entrada que quieres limpiar
  form.nombre.value = '';
  form.apellido.value = '';
  form.cedula.value = '';
  form.telefono.value = '';
  form.email.value = '';
  form.observacion.value = '';
});

*/