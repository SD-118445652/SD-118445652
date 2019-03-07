<!DOCTYPE html>
<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <title>Ebusiness 1</title>
        <link rel="stylesheet" href="main.css" type="text/css" />
        
        <style>
           body {
  background: url(back5.jpeg);
  background-repeat: no-repeat;
  background-size: 100%;
  height: 100%;
  overflow: hidden;

  
}
button {
    background-color: lightgreen;
    color: black;
}
.previous {
  background-color: #f1f1f1;
  color: black;
}
table {
    border: 2px solid white;
}
div {
    color: white;
    font-size: 18px;
}
.previous {
  background-color: #f1f1f1;
  color: black;

        </style>
    </head>
        <body>
        <div class="form">
            <form id="form" name="intCalc" method="post" action="ebusiness2.php">
        <h1>Service Calculator</h1>   
        <hr/>
        <center>
            <table cellspacing="10">
                <tr>
                    <td><b>Service</b></td>
                </tr>
                <tr>
                    <td>BlockChain</td>
                    <td><input type="radio" id="BlockChain" name="rdoGroup" value="1000" required /></td>
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="10">
            <tr>
                    <td><b></b></td>
                    <td><b>Amount</b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                </tr>
                <tr>
                    <td>Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
       
        <br />
            <center>
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            <a href="Consulting Services.html" class="previous">&laquo; Back</a>



<script>
function goBack() {
  window.history.back();
}
</script>

        </center>
            </form>
        </div>
       
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var argSubTotal = parseFloat(document.getElementById('txtSubTot').value);
                    var BlockChain = parseFloat(document.getElementById('BlockChain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                   
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('BlockChain').checked) {
                        document.intCalc.txtSubTot.value = BlockChain;
                        argSubTotal = BlockChain;
                        calcDiscVatTotal(argSubTotal);
                       
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings;
                        argSubTotal = AutonomousThings;
                        calcDiscVatTotal(argSubTotal);
                       
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        argSubTotal = ImmersiveExperience;
                        calcDiscVatTotal(argSubTotal);
                    }
                }
               
                //function for calculationg the values//
                function calcDiscVatTotal(parmSubTotal) {
                    var subTotal = parseFloat(parmSubTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);   
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                   
                    //Inserting them into the correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
               
                function AmountClear() {
                  
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVAT").value="";
                document.getElementById("txtTotal").value="";
                
                }
 
            </script>
    </body>
    </html>