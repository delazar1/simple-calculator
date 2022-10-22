<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Calculutor</title>

  <link rel="stylesheet" type="text/css" href="style.css">

  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>

  <h2>Calculator</h2>

  <div class="container">
    <form action="index.php" method="post">
      <label for="nbr1">Number 1</label>
      <input type="text" id="nbr1" name="number1" placeholder="Enter number">

      <label for="nbr2">Number 2</label>
      <input type="text" id="nbr2" name="number2" placeholder="Enter number">

      <label for="operator">Operator</label>
      <select id="operator" name="operator" value="Choose an operator ">
        <option value="addition">Addition</option>
        <option value="subtraction">Subtraction</option>
        <option value="multiplication">Multiplication</option>
        <option value="division">Division</option>
      </select>
  
      <input type="submit" name="validation" value="CALCULATE">
    </form>

    <?php
        if(isset($_POST['validation'])){
        if ( is_numeric ($_POST['number1']) AND is_numeric ($_POST['number2'])) {
          switch($_POST['operator'])
          {
              case "addition":
                  $add = $_POST['number1'] + $_POST['number2'];
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Result: ".$add."</h3>";
                  break;
              case "subtraction":
                  $sou = $_POST['number1'] - $_POST['number2'];
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Result: ".$sou."</h3>";
                  break;
              case "multiplication":
                  $mul = $_POST['number1'] * $_POST['number2'];
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Result: ".$mul."</h3>";
                  break;
              case "division":
                  $div = $_POST['number1'] / $_POST['number2'];
                  echo "<hr style='margin-top:8%;'><h3 style='color:rgb(11, 160, 93); font-size: 35px; margin-left:22%;'>Result: ".$div."</h3>";
                  break;
              
          }
       }
       elseif( is_string($_POST['number1']) AND is_string($_POST['number2']) ){
         echo "<hr style='margin-top:8%;'><h3 style='color:red; font-size: 35px; margin-left:4%;'>Invalid value !</h3>";
       }
      }
    ?>

  </div>

</body>
</html>