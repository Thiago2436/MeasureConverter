<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Measurement Conversion</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body class="dark-mode">
	<div id="main-content">
      <h1>Conversor De Medidas </h1>
      <ul id="measurement-types">
         <li><a href="length.php">Tamanho E Distancia</a></li>
         <li><a href="area.php">Area</a></li>
         <li><a href="volume.php">Volume e Capacidade</a></li>
         <li><a href="mass.php">Massa e Peso</a></li>
         <li><a href="speed.php">Velocidade</a></li>
         <li><a href="temperature.php">Temperatura</a></li>
      </ul>
	</div>
    <button id="dark-mode-toggle" onclick="toggleDarkMode()">Toggle dark mode</button>

    <script>
    function toggleDarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    }
    </script>

    <p> Thiago Martins e Martins</p>
    <a href="https://github.com/Thiago2436"> GitHub.
</body>
</html>
