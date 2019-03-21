<?php include ('includes/header.php'); ?>


<div class="offset-sm-3 col-sm-9">
	<form method="POST" action="https://payments.ipayafrica.com/v3/ke">
	
		<?php
			$fields = array(
				"live"=> "0",
				"oid"=> "999",
				"ttl"=> "2200",
				"tel"=> "254712545678",
				"eml"=> "example@example.com",
				"vid"=> "demo",
				"curr"=> "KES",
				"cbk"=> $_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"],
				"crl"=> "0"
			);
                
			$datastring =  $fields['live'].$fields['oid'].$fields['ttl'].$fields['tel']
				.$fields['eml'].$fields['vid'].$fields['curr'].$fields['cbk'].$fields['crl'];
				
			$hashkey ="demoCHANGED";
					
			$generated_hash = hash_hmac('sha1',$datastring , $hashkey);
				
			foreach($fields as $key=> $val) {
				echo '
					<div class="form-group row">
    				<label for="'.$key.'" class="col-sm-2 col-form-label">'.$key.': </label>
    				<div class="col-sm-8">
      				<input type="text" readonly class="form-control-plaintext" 
 	     			id="'.$key.'" name="'.$key.'" value="'.$val.'">
  	  			</div>
  				</div>
  			';
			}
		?>
	
		<div class="form-group row">
			<label for="hsh" class="col-sm-2 col-form-label">Hash ID:</label>
			<div class="col-sm-8">
				<input type="text" class="form-control" readonly name="hsh" 
				id="hsh" value="<?php echo $generated_hash;?>"/>
			</div>
		</div>
	
		<div class="form-group row">
			<div class="offset-sm-4 col-sm-4">
				<input type="submit" name="submit" class="btn btn-block btn-success">
			</div>
		</div>
	</form>
</div>

<?php include('includes/footer.php'); ?>

