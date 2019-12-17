<?php
	session_start();
	header('Content-Type: text/html; charset=utf-8');

	$db=new mysqli("localhost","root","root1234","math");
	$db->set_charset("utf8");

	function mq($sql) {
		global $db;
		return $db->query($sql);
	}
?>
