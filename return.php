<?php

/*
	In your account, set the 'HTTP redirection in the browser' 4 fields to the URL of the is page

	This is the page the customer will see, it should show then a success or fail message
*/

require "BarclaycardEpdq.class.php";

$barclaycardEpdq = new BarclaycardEpdq();

$success = false;
if($barclaycardEpdq->handleResponse($_REQUEST, false)){
	$success = true;
} else {
	$msg = $barclaycardEpdq->getFailReason();
	$showWarning = $barclaycardEpdq->mWarning;
}

?>
<html>
<body>
	<h1>Payment response page</h1>

	<?php if($success){ ?>
		<p>Woot, payment OK</p>
	<?php } else { ?>
		<p>Dang, something went wrong</p>
		<p><?php echo $msg ?>
	<?php } ?>
</body>
</html>
