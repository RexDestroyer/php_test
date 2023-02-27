<?php

if(isset($_POST['auto-leave_community'])){
  $check1 = intval($_POST['auto-leave_community']);
} else {
  $check1 = "0";
}
if (isset($_POST['auto-docked'])) {
  $check2 = intval($_POST['auto-docked']);
} else {
  $check2 = "0";
}
if (isset($_POST['auto-docked_engaged'])) {
  $check3 = intval($_POST['auto-docked_engaged']);
} else {
  $check3 = "0";
}
if (isset($_POST['end-park'])) {
  $check4 = intval($_POST['end-park']);
} else {
  $check4 = "0";
}
if (isset($_POST['end-docked'])) {
  $check5 = intval($_POST['end-docked']);
} else {
  $check5 = "0";
}
if (isset($_POST['end-docked_engaged'])) {
  $check6 = intval($_POST['end-docked_engaged']);
} else {
  $check6 = "0";
}

// $check1 = $_POST['auto-leave_community'];
// $check2 = $_POST['auto-docked'];
// $check3 = $_POST['auto-docked_engaged'];
// $check4 = $_POST['end-park'];
// $check5 = $_POST['end-docked'];
// $check6 = $_POST['end-docked_engaged'];

$a1 = $_POST['a-b'];
$a2 = $_POST['a-m'];
$a3 = $_POST['a-t'];
$a4 = $_POST['t-b'];
$a5 = $_POST['t-m'];
$a6 = $_POST['t-t'];
$a7 = $_POST['t-l'];


echo "

<h2>test 1</h2>
<br><br>
$check1<br>
$a1<br>
$a2<br>
$a3<br>
$check2<br>
$check3<br><br>

<h2>test2</h2>
<br><br>
$a4<br>
$a5<br>
$a6<br>
$a7<br><br>

<h2>test3</h2>
<br><br>
$check4<br>
$check5<br>
$check6<br><br>

";



?>
