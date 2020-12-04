<?
 if(isset($_REQUEST['submit']))
{
 if(isset($_REQUEST['breads']))
{
$breads=$_REQUEST['breads'];
}
echo "No. of Breads - ".$breads."<br/>";

 if(isset($_REQUEST['vadas']))
{
$vadas=$_REQUEST['vadas'];
}
echo "No. of Vadas - ".$vadas."<br/>";
 if(isset($_REQUEST['samosa']))
{
$samosa=$_REQUEST['samosa'];
}
echo "No. of Samosa - ".$samosa."<br/>";


 if(isset($_REQUEST['vp_cost']))
{
$vp_cost=$_REQUEST['vp_cost'];
}
echo "Vadapav cost - ".$vp_cost."<br/>";
 if(isset($_REQUEST['sp_cost']))
{
$sp_cost=$_REQUEST['sp_cost'];
}
echo "Samosapav cost - ".$sp_cost."<br/>";

//Case: sp greater than vp
if($sp_cost>$vp_cost)
{
	$br=$breads/2;
	$br=(int)$br;
	if($br>=$samosa){
		$sp_amount=  $sp_cost*$samosa;	
echo "Samosapav sale amount - ".$sp_amount."<br/>";
$br_aftersp=$br-$samosa;	
 $br_aftersp=(int)$br_aftersp;
if($br_aftersp>=$vadas){
		$vp_amount=  $vp_cost*$vadas;	
echo "Vadapav sale amount - ".$vp_amount."<br/>";			
}	else {
	
			$vp_amount=  $vp_cost*$br_aftersp;
echo "Vadapav sale amount - ".$vp_amount."<br/>";			
}
	}
	else{
		 $br=(int)$br;
		$sp_amount=  $sp_cost*$br;	
echo "Samosapav sale amount - ".$sp_amount."<br/>";	
//After SP no breads
echo "Vadapav sale amount -  0";	
	}

} elseif ($vp_cost>$sp_cost) {
	
//Case: vp greater than sp
	$br=$breads/2;
	$br=(int)$br;
	if($br>=$vadas){
		$vp_amount=  $vp_cost*$vadas;	
echo "Vadapav sale amount - ".$vp_amount."<br/>";
$br_aftervp=$br-$vadas;	
 $br_aftervp=(int)$br_aftervp;
if($br_aftervp>=$samosa){
		$sp_amount=  $vp_cost*$samosa;	
}	else {
	
			$sp_amount=  $sp_cost*$br_aftervp;
echo "Samosapav sale amount - ".$sp_amount."<br/>";			
}
	}
	else{
		 $br=(int)$br;
		$vp_amount=  $vp_cost*$br;	
echo "Vadapav sale amount - ".$vp_amount."<br/>";	
//After VP no breads
echo "Samosapav sale amount -  0";	
	}
}	else {
//Case: vp equals to sp
	$br=$breads/2;
	$br=(int)$br;
	$total_samosa_vada=$vadas+$samosa;
	if($br>=$total_samosa_vada){
		$sp_vp=$total_samosa_vada*$vp_cost;
				if($sp_vp>0){
		echo "Sale amount - ".$sp_vp."<br/>";
				}		
	} else {
		$sp_vp=$br*$vp_cost;
		if($sp_vp>0){
		echo "Sale amount - ".$sp_vp."<br/>";		
		}		
	}
}
}
?>		
			
			
			<form method="post" action="" name="rest_form" onSubmit="return validate();">
				<div style="padding:0 0 25px 0;">
					<label for="breads">No. of Breads </label>
					<input type="number" class="inputs" name="breads" id="breads" maxlength="20" required />
				</div>									
				
				<div style="padding:0 0 25px 0;">
					<label for="vadas">No. of Vadas</label>
					<input type="number" class="inputs" name="vadas" id="vadas" maxlength="20" required />
				</div>
				
				<div style="padding:0 0 25px 0;">
					<label for="samosa">No. of Samosa</label>
					<input type="number" class="inputs" name="samosa" id="samosa" maxlength="20" required />
				</div>



				<div style="padding:0 0 25px 0;">
					<label for="vp_cost">Vadapav cost</label>
					<input type="number" class="inputs" name="vp_cost" id="vp_cost" maxlength="20" required />
				</div>

				<div style="padding:0 0 25px 0;">
					<label for="sp_cost">Samosapav cost</label>
					<input type="number" class="inputs" name="sp_cost" id="sp_cost" maxlength="20" required />
				</div>				
				<div style="padding:0 0 25px 0;">
					<input type="submit" name="submit" value="submit" class="sbtn btn yellow" id="submit"/>
				</div>
			</form>
