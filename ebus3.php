<!DOCTYPE>
<html>
    <head>
                <style>
           body {
  background: url(back5.jpeg);
  background-repeat: no-repeat;
  background-size: 100%;
  height: 100%;
  overflow: hidden;

}
.previous {
  background-color: #f1f1f1;
  color: black;
}
div {
    color: white;
    font-size: 18px;
}
.styles {
    border : white 5px solid;
}
        </style>
    </head>
    <body>
        
        <!-- //strating the session to get the session variable from last page -->
        
    
    
    <center>
<div class="styles">
    <center>
<?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$Email = $_POST['txtEmail'];

echo "The name is :".$fullNameValue.".";
echo "<br></br>";

echo " E-Mail :".$Email.".";
echo "<br></br>";
echo "The total value is $: ".$totalValue2.".";

?>
    </div>
        <div>
        <br>
        <a href="ebusiness2.php" class="previous">&laquo; Back</a>
        </div>

</center>
</body>
</html

