
<!DOCTYPE html

<?php
$x="";
$y="";
$result="";
//the  isset method  to call the function only when the buttons are clicked
//the  isset method  to call the function only when the buttons are clicked
if (isset($_POST['operation'])){
    //I am accessing whatever the user inputs by means of the super global $_POST, then stroring in $x and $y
    $x=$_POST['num1'];
    $y=$_POST['num2'];
    $operation=$_POST['operation'];
    if (is_numeric($x) && is_numeric($y))
    {
        //using the switch case statement to calculate
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

     }else{
         $error ="Please Enter a valid Input";
     }
     echo $error;

    
}
?>
<html>
<head>
      <title>
      </title>
</head>
<body>
<label for="rslt"> Result: </label>       
<input id= "rslt"  name="result" value= "<?=$result?>" disabled ><br> <br>
<!-- <a href="simpleCalcultator.php">Back</a> -->
</body>

</html>