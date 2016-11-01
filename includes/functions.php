<?php
session_start();

function setFlash($message, $type = 'danger') {
	$_SESSION['flash'] = array(
		'message' => $message,
		'type'	  => $type
	);
}

function flash() {
	if (isset($_SESSION['flash'])) {
		echo '<span class="text-' . $_SESSION["flash"]["type"] . '">' . $_SESSION["flash"]["message"] . '</span>';
		unset($_SESSION['flash']);
	}
}