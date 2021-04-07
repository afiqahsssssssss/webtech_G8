
<?php
$balance= 500;
if (isset($_POST['submit'])) {
  // $balance = $_POST['bal'];
  $typoftrans = $_POST['amount'];
  $topup = $_POST['rm'];
  $date = $_POST['datetrans'];

  if($typoftrans <= 1)
  $balance= $topup + $balance + 0.5 ;

  else {
  $balance  = $topup + $balance;
  }
  // if (isset($_POST['amount'])) {


// if (isset($_POST['rm'])) {
//   $topup = $_POST['rm'];
//
// if (isset($_POST['datetrans'])){
//  $date = $_POST['datetrans'];

$users = array (

  array("Topup", $topup),
  array("Date",$date),
  array("Remaining balance",$balance),

);

echo $users[0][0].": RM" .$users[0][1]."<br>";
echo $users[1][0].": " .$users[1][1]."<br>";
echo $users[2][0].": RM" .$users[2][1]."<br>";
// echo $users[3][0].": " .$users[3][1]."<br>";
}

elseif (isset($_POST['submit2'])) {
  // $balance2 = $_POST['bal2'];
  $payment = $_POST['pay'];
  $date2 = $_POST['datetrans2'];
  $time = $_POST['timetrans'];
  if ($time >= '12:00' && $time <= '14:00' )
  {
    // $dis = 0;
    $balance = $balance - ($payment * 0.90) ;
  }
  else {

    $balance = $balance - $payment;
  }

  $data = array (
    // array("Balance","500"),
    array("Payment", $payment),
    array("Date",$date2),
    array("Time",$time),
    array("Remaining balance",$balance),

  );
  echo $data[0][0].": RM" .$data[0][1]."<br>";
  echo $data[1][0].": " .$data[1][1]."<br>";
  echo $data[2][0].": " .$data[2][1]."<br>";
  echo $data[3][0].": RM" .$data[3][1]."<br>";
  // echo $data[4][0].". " .$data[4][1]."<br>";

}
 ?>
