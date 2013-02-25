<?php


/*
	In your account, set the 'Direct HTTP server-to-server request ' to 'Always online'
	and the two fields to the URL of the is page

	This page will actually update the order, the customer will never see this page
*/

require "BarclaycardEpdq.class.php";

$barclaycardEpdq = new BarclaycardEpdq();
$barclaycardEpdq->handleResponse($_REQUEST, true);

?>