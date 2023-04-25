<?php

require_once('functions.php');

$from_value = '';
$from_unit = '';
$to_unit = '';
$to_value = '';

if(isset($_POST['submit'])) {
  $from_value = $_POST['from_value'];
  $from_unit = $_POST['from_unit'];
  $to_unit = $_POST['to_unit'];
  
  $to_value = convert_length($from_value, $from_unit, $to_unit);
}

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Convert Length</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
  </head>
  <body class="dark-mode">

    <div id="main-content">

      <h1>Tamanho E Distancia</h1>
  
      <form action="" method="post">
        
        <div class="entry">
          <label>From:</label>&nbsp;
          <input type="number" name="from_value" value="<?php echo $from_value; ?>" />&nbsp;
          <select name="from_unit">
            <option value="meters"<?php if($from_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="millimeters"<?php if($from_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($from_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="kilometers"<?php if($from_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
            <option value="inches"<?php if($from_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($from_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($from_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($from_unit == 'miles') { echo " selected"; } ?>>miles</option>
          </select>
        </div>
        
        <div class="entry">
          <label>To:</label>&nbsp;
          <input type="number" name="to_value" value="<?php echo float_to_string($to_value); ?>" readonly />&nbsp;
          <select name="to_unit">
            <option value="meters"<?php if($to_unit == 'meters') { echo " selected"; } ?>>meters</option>
            <option value="millimeters"<?php if($to_unit == 'millimeters') { echo " selected"; } ?>>millimeters</option>
            <option value="centimeters"<?php if($to_unit == 'centimeters') { echo " selected"; } ?>>centimeters</option>
            <option value="kilometers"<?php if($to_unit == 'kilometers') { echo " selected"; } ?>>kilometers</option>
            <option value="inches"<?php if($to_unit == 'inches') { echo " selected"; } ?>>inches</option>
            <option value="feet"<?php if($to_unit == 'feet') { echo " selected"; } ?>>feet</option>
            <option value="yards"<?php if($to_unit == 'yards') { echo " selected"; } ?>>yards</option>
            <option value="miles"<?php if($to_unit == 'miles') { echo " selected"; } ?>>miles</option>
          </select>
          
          <input type="submit" name="submit" value="Converter !" />          
        </div>

      </form>
  
      <br />
      <br>
      <p>Thiago Martins</p>
      <p id="return-link" ><a href="index.php">Return to menu</a></p>
      
    </div>
    <button id="dark-mode-toggle" onclick="toggleDarkMode()">Toggle dark mode</button>

    <script>
    function toggleDarkMode() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    }
    </script>
  </body>
</html>