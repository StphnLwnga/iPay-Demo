<?php 
	include('includes/header.php'); 

	$cbk = file_get_contents("response.log");
	
	$callback = str_ireplace("callback = ", "", $cbk);
	
	$fp = fopen($cbk, "rb");
	$status = stream_get_contents($fp, -1, -1);
	fclose($fp);
	
	parse_str($callback);
	
	$params = array(
		"id: "=> $id, 
		"ivm :"=> $ivm, 
		"qwh :"=> $qwh, 
		"afd :"=> $afd, 
		"poi :"=> $poi, 
		"uyt :"=> $uyt, 
		"ifd :"=> $ifd
	);
?>
<div class="offset-sm-4 col-sm-4">
	<?php
		foreach ($params as $key=> $param) {
			echo '<p class="text-center">'.$key.$param.'<br></p>';
		}
	
	if($status) {
		echo '<h4 class="text-center text-secondary">Payment Verified</h4>';
	} else {
		echo '<h4 class="text-center text-secondary">Payment Not Verified!</h4>';
	}
	?>
</div>

<?php include('includes/footer.php'); ?>

