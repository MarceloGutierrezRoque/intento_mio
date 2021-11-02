<?php
	if (isset($_SESSION['SMS_true'])) {
		$_sms = $_SESSION['SMS_true'];
		unset($_SESSION['SMS_true']);
		$_inf = $_SESSION['inf'];
		unset($_SESSION['inf']);
	}
	if (isset($_SESSION['SMS_false'])) {
		$_sms = $_SESSION['SMS_false'];
		unset($_SESSION['SMS_false']);
	}