<?php
// $error="";
$x="";
$y="";
$result="";
// the  isset method  to call the function only when the buttons are clicked
if (isset($_POST['operation'])){
    //I am accessing whatever the user inputs by means of the super global $_POST, then stroring in $x and $y
    $x=$_POST['num1'];
    $y=$_POST['num2'];
    $operation=$_POST['operation'];

    switch($operation)
    {
        case 'add':
            $result= $x+$y;
            break;
        case 'sub':
             $result= $x-$y;
               break;
         case 'prod':
            $result= $x*$y;
                break;
        case 'divi':
            $result= $x/$y;
                break;
        // default :
        //    echo  "Invalid Operation";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title> Simple Calculator</title>

</head>
<body>
<!-- ?=$_SERVER['PHP_SELF']? -->
    <form action="calcProcessor.php" method="POST" name="">
        <h2><?= $error ?></h2>
       <label for="txt1"> Enter First Number </label> :
       <input id= "txt1" type="text" name="num1" required><br> <br>
       <label for="txt2"> Enter Second Number </label>
       <input id="txt2" type="text" name="num2" required><br> <br>
       <!-- <label for="rslt"> Result: </label>       
       <input id= "rslt"  name="result" value= "<?=$result ?>" disabled ><br> <br> -->
       <input type=submit value= "add" name="operation">
       <input type=submit value= "sub" name="operation">
       <input type=submit value= "prod" name="operation">
       <input type=submit value= "divi" name="operation">
       

    </form>
</body>

</html>
