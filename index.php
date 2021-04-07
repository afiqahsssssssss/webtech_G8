<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    </style>
    <meta charset="utf-8">
    <title>e-Wallet Management System</title>
  </head>
  <body>
        <h1>E-Wallet Management System</h1>

        <table><td>

<fieldset>
        <form class="" action="" method="post">
          <h1>Topup</h1>


          <label for="Topup">Topup: </label>
          <input type="radio" name="rm" value="10" required>RM10
          <input type="radio" name="rm" value="20">RM20
          <input type="radio" name="rm" value="50">RM50
          <input type="radio" name="rm" value="100">RM100

          <br><br>

          <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans" required>

          <br><br>

          <label for="amount">Type of payment:</label>
          <input type="radio" name="amount" value="1" required>Credit Card
          <input type="radio" name="amount" value="2">Debit Card

          <br><br>

        <label for ="name">Card Holder Name</label>
        <input type="text" id="name" required>

        <br><br>

        <label for="Card Number"> Card Number </label>
        <input type="text" id="card-number" required>

        <br><br>

        <label for="Expiry Date ">Expiry Month / Year</label>
        <select name="month" id="month" required>
                <option value="00"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="01">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
        </select> <select name="year" id="year" required>
                <option value="00"></option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
            </select>

        <br><br>

        <label for="CVC">CVC</label>
        <input type="text" name="cvv" id="cvv" required>

        <br><br>Top up with Credit Card will get <b>RM 0.50</b> cash back
        <br><br>

        <input type="submit" name="submit" value="Topup">


        </form>

      </fieldset></td>
<td>
        <br><br>

        <fieldset>
          <form class="" action="" method="post">
          <h1>Payment</h1>

          <!-- <label for="balance">Balance: </label> -->
          <!-- <input type="number" name="bal2" > -->


          <label for="Payment">Payment: </label>
          <input type="number" name="pay" value="">

          <br><br>

          <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans2" required>

          <br><br>
          <label for="Time of transaction"> Time of transaction: </label>
          <input type="time" name="timetrans" value="">

          <br><br>Discount of <b>10%</b> only peak hours
          <br><br>  <b>12 - 2pm</b>
          <br><br>

          <input type="submit" name="submit2" value="Pay">

        </form>
        </fieldset>
  </body>
  <br><br>

</td></table>
  <fieldset>


  <?php
  $balance=500;
  echo "Balance : RM" .$balance."<br>";

  include "view.php";


   ?>

     </fieldset>
</html>

    </style>
    <meta charset="utf-8">
    <title>e-Wallet Management System</title>
  </head>
  <body>
        <h1>E-Wallet Management System</h1>

        <table><td>

<fieldset>
        <form class="" action="" method="post">
          <h1>Topup</h1>


          <label for="Topup">Topup: </label>
          <input type="radio" name="rm" value="10" required>RM10
          <input type="radio" name="rm" value="20">RM20
          <input type="radio" name="rm" value="50">RM50
          <input type="radio" name="rm" value="100">RM100

          <br><br>

          <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans" required>

          <br><br>

          <label for="amount">Type of payment:</label>
          <input type="radio" name="amount" value="1" required>Credit Card
          <input type="radio" name="amount" value="2">Debit Card

          <br><br>

        <label for ="name">Card Holder Name</label>
        <input type="text" id="name" required>

        <br><br>

        <label for="Card Number"> Card Number </label>
        <input type="text" id="card-number" required>

        <br><br>

        <label for="Expiry Date ">Expiry Month / Year</label>
        <select name="month" id="month" required>
                <option value="00"></option>
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="01">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
        </select> <select name="year" id="year" required>
                <option value="00"></option>
                <option value="21">2021</option>
                <option value="22">2022</option>
                <option value="23">2023</option>
                <option value="24">2024</option>
                <option value="25">2025</option>
                <option value="26">2026</option>
                <option value="27">2027</option>
                <option value="28">2028</option>
                <option value="29">2029</option>
                <option value="30">2030</option>
            </select>

        <br><br>

        <label for="CVC">CVC</label>
        <input type="text" name="cvv" id="cvv" required>

        <br><br>Top up with Credit Card will get <b>RM 0.50</b> cash back
        <br><br>

        <input type="submit" name="submit" value="Topup">


        </form>

      </fieldset></td>
<td>
        <br><br>

        <fieldset>
          <form class="" action="" method="post">
          <h1>Payment</h1>

          <!-- <label for="balance">Balance: </label> -->
          <!-- <input type="number" name="bal2" > -->


          <label for="Payment">Payment: </label>
          <input type="number" name="pay" value="">

          <!-- <br><br> -->

          <!-- <label for="date of transaction"> Date of Transaction </label>
          <input type="date" name="datetrans2"> -->

          <br><br>

          <label for="Time of transaction"> Time of transaction: </label>
          <input type="time" name="timetrans" value="">

          <br><br>Discount of <b>10%</b> only peak hours
          <br><br>  <b>12 - 1pm</b>
          <br><br>

          <input type="submit" name="submit2" value="Pay">

        </form>
        </fieldset>
  </body>
  <br><br>

</td></table>
  <fieldset>


  <?php
  echo "<h1>Account</h1>";
  echo "BALANCE: RM500<br>";

  include "view.php";


   ?>

     </fieldset>
</html>
