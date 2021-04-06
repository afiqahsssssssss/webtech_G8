
  <?php if(!empty($successMessage)) { ?>
<div id="success-message">
  <?php echo $successMessage; ?>
</div>
<?php } ?>
<?php
class Wallet {
    public $totalbalance = 0;
    }

    function totalbalance($reload) {

        $totalbalance += $reload;

        echo "<h> Balance : " . $totalbalance ."</h>";
      }

if(isset($_POST['calculate'])){
    if (!isset($_POST['reload'])) {
        return 'Please enter your reload amount';
        exit();
      }

      $reload = filter_var(htmlentities(floatval($_POST['reload'])),FILTER_SANITIZE_NUMBER_FLOAT);
}
?>


<div id="error-message"></div>

<form id="frmStripePayment" action="" method="post">
  <div class="field-row">
      <label>Enter your preferred amount</label> <span id="reload-amount"
          class="info"></span><br>
          <input type="number"  id="reload" name="reload"min="10" step="10" max="1000" required>
          <br>
          Min reload amount is RM 10
        </div><br>

  </div>

    <div class="field-row">
        <label>Card Holder Name</label> <span id="card-holder-name-info"
            class="info"></span><br> <input type="text" id="name"
            name="name" class="demoInputBox" required>
    </div>
    <div class="field-row">
        <label>Email</label> <span id="email-info" class="info"></span><br>
        <input type="text" id="email" name="email" class="demoInputBox" required>
    </div>
    <div class="field-row">
        <label>Card Number</label> <span id="card-number-info"
            class="info"></span><br> <input type="text" id="card-number"
            name="card-number" class="demoInputBox" required>
    </div>
    <div class="field-row">
        <div class="contact-row column-right">
            <label>Expiry Month / Year</label> <span id="userEmail-info"
                class="info"></span><br> <select name="month" id="month"
                class="demoSelectBox" required>
                <option value="08">01</option>
                <option value="09">02</option>
                <option value="10">03</option>
                <option value="11">04</option>
                <option value="12">05</option>
                <option value="08">06</option>
                <option value="09">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select> <select name="year" id="year"
                class="demoSelectBox" required>
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
        </div>
        <br>
        <div class="contact-row cvv-box">
            <label>CVC</label> <span id="cvv-info" class="info"></span><br>
            <input type="text" name="cvv" id="cvv"
                class="demoInputBox cvv-input" required>
        </div>
    </div>
    <div>

            <form method="POST" action="index.php">
              <input type="submit" name="reload_now" value="Reload Now">
            </form>
    </div>
</form>
