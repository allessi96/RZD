<?php
$rooms = array(
	'room1' => array(array(150,350),array(150,70)),
	'room2' => array(array(200,350),array(200,420),array(350,420),array(350,420)),
	'room3' => array(array(150,350),array(150,140),array(400,140),array(400,140)),
);
if(isset($_POST['id'])){
	echo json_encode($rooms[$_POST['id']]);
}
?>