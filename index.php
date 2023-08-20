<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-500BUHEmvpQ+11W4y57PTFmhCaXp0ML5d60M1M7uH2+nquivzIebhndo] K28anvf" crossorigin="anonymous">
<link rel="stylesheet" href="Style.css" />
<link rel="shortcut icon" href="logo.ico" />
<title>Control de PC</title>
</head>
<body>
<header>
  <div class="Logo">
    <img class="logo" src="Logo.png" alt="Logo">
  </div>
  <h1 class="logo-nombre">Biblioteca Virtual de Aragua</h1>
  <div class="redes-container">
      <ul>
        <li><a href="https://www.facebook.com/SoyBVA" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="https://www.instagram.com/soybva_/" class="instagram"><i class="fab fa-instagram"></i></a></li>
        <li><a href="https://twitter.com/SoyBva" class="twitter"><i class="fab fa-twitter"></i></a></li>
      </ul>
  </div>
</header>
    <nav>
    <a href="datos.php" class="nav-link">- Registro Diario</a>
    <a href="tabla.php" class="nav-link">- Tabla de Datos</a>
    </nav>
<center>
  <h1>Control de computadoras</h1>
  <!-- Sección de la computadora 1 -->
  <div class="fx-block">
  <h2>Computadora 1</h2>
  <img class="img-pc" src="computadora.png" alt="icono de pc">
    <div class="toggle">
      <div>
        <input type="checkbox" id="toggles" onclick="toggleComputer(1)" checked>
        <div data-unchecked="On" data-checked="Off"></div>
      </div>
    </div>
    <br>
    <span id="computer-1-status">Estado:</span>
    <br>
    <label for="computer-1-timer">Temporizador:</label>
  <input type="number" id="computer-1-timer" min="0">
  <button class="startchronometer" onclick="startTimer(1)">Iniciar</button>
  </div>

  <!-- Sección de la computadora 2 -->
  <div class="fx-block">
  <h2>Computadora 2</h2>
  <img class="img-pc" src="computadora.png" alt="icono de pc">
    <div class="toggle">
      <div>
        <input type="checkbox" id="toggles" onclick="toggleComputer(2)" checked>
        <div data-unchecked="On" data-checked="Off"></div>
      </div>
    </div>
    <br>
    <span id="computer-2-status">Estado:</span>
    <br>
    <label for="computer-2-timer">Temporizador:</label>
  <input type="number" id="computer-2-timer" min="0">
  <button class="startchronometer" onclick="startTimer(2)">Iniciar</button>
  </div>
  
  
  <!-- Sección de la computadora 3 -->
<div class="Seccione-generales"></div>
  <div class="fx-block">
  <h2>Computadora 3</h2>
  <img class="img-pc" src="computadora.png" alt="icono de pc">
    <div class="toggle">
      <div>
        <input type="checkbox" id="toggles" onclick="toggleComputer(3)" checked>
        <div data-unchecked="On" data-checked="Off"></div>
      </div>
    </div>
    <br>
    <span id="computer-3-status">Estado:</span>
    <br>
    <label for="computer-3-timer">Temporizador:</label>
  <input type="number" id="computer-3-timer" min="0">
  <button class="startchronometer" onclick="startTimer(3)">Iniciar</button>
  </div>
  
  
  <!-- Sección de la computadora 4 -->
  <div class="fx-block">
  <h2>Computadora 4</h2>
  <img class="img-pc" src="computadora.png" alt="icono de pc">
    <div class="toggle">
      <div>
        <input type="checkbox" id="toggles" onclick="toggleComputer(4)" checked>
        <div data-unchecked="On" data-checked="Off"></div>
      </div>
    </div>
    <br>
    <span id="computer-4-status">Estado:</span>
    <br>
    <label for="computer-4-timer">Temporizador:</label>
  <input type="number" id="computer-4-timer" min="0">
  <button class="startchronometer" onclick="startTimer(4)">Iniciar</button>
  </div>
</div>
</center>

<footer>
  <img class="logo" src="Logo.png" alt="logo">
  <h5>AV. SUCRE. EDIF. BIBLIOTECA VIRTUAL. N°26 PISO PB. LOCAL S/N URB. SAN ISIDRO. MARACAY EDO. ARAGUA - VENEZUELA</h5>
  <div class="redes-container">
    <ul>
      <li><a href="https://www.facebook.com/SoyBVA" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://www.instagram.com/soybva_/" class="instagram"><i class="fab fa-instagram"></i></a></li>
      <li><a href="https://twitter.com/SoyBva" class="twitter"><i class="fab fa-twitter"></i></a></li>
    </ul>
</div>
</footer>
    <script src="scripts.js"></script> 
</body>
</html>