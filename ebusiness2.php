<?php


session_start();
$fullNameValue = "";
$totalValue2 = "";
$Password = "";
/* create a session variable for the mobile number
 * 
 */
$totalValue = $_POST['txtTotal'];
        $_SESSION['txtName'] = $fullNameValue;
        $_SESSION['txtTotal'] = $totalValue2;
        $_SESSION['txtEmail'] = $Email;
        
        /*
         * alloate the session variable to a textbox
         * 
         */
        
        ?>
        
        <!DOCTYPE html>
        <html>
            
            <head>
                <title>eBusiness2</title>
                        <style>
           body {
  background: url(back5.jpeg);
  background-repeat: no-repeat;
  background-size: 100%;
  height: 100%;
  overflow: hidden;

  
}
input[type=text] {
  width: 60px;
  -webkit-transition: width .35s ease-in-out;
  transition: width .35s ease-in-out;
}
input[type=text]:focus {
  width: 250px;
}
.previous {
  background-color: #f1f1f1;
  color: black;
}
table {
     border: 2px solid white;
}
td {
    color:white
}

        </style>
            </head>
        <body>
        <div class="form">
            <form name="Details" method="post" action="ebus3.php">
                
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b></b></td>
                            <td><b>Enter in your details below</b></td>
                        </tr>
                        <tr>
                            <td>Name</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                         <tr>
                            <td>E-Mail</td>
                            <td><input type="text" id="txtEmail" name="txtEmail" value="" required/></td>
                        </tr>
                         <tr>
                            <td>Password</td>
                            <td><input type="password" id="txtPassword" name="txtPassword" value="" required/></td>
                        </tr>
                         <tr>
                            
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value="<?php echo $totalValue;?>"/></td>
                        </tr>
                        
                    </table>
                </center>
                <center>
                    
                    <input type="submit" name="btnContinue" id="btnContinue" onclick="" value="Proceed with purchase"/>
                <a href="ebus1.php" class="previous">&laquo; Back</a>



            </form>
                
        </html>            