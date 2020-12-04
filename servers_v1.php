<?
 if(isset($_REQUEST['submit']))
{
 if(isset($_REQUEST['servers']))
{
$servers=$_REQUEST['servers'];
}
echo "No. of Servers - ".$servers."<br/>";


 if(isset($_REQUEST['firstload']))
{
$firstload=$_REQUEST['firstload'];
}
echo "Load - ".$firstload."<br/>";

							$load=explode(",",$firstload);
							array_shift($load);
							//print_r ($load);
							foreach ($load as $value) {
//echo $value."<br/>";
if($value>50){
	 $servers=round((2*$servers)+1);
} else{
	 $servers=round($servers/2);
}
							}
	echo "No. of servers". $servers;						
	}
 

?>

			<form method="post" action="" name="rest_form" onSubmit="return validate();">
				<div style="padding:0 0 25px 0;">
					<label for="servers">No. of servers </label>
					<input type="number" class="inputs" name="servers" id="servers" maxlength="20" required />
				</div>									
				
				<div style="padding:0 0 25px 0;">
					<label for="vadas">Load </label> Enter load like this: 30,78,90,45,23,120
					<input type="text" class="inputs" name="firstload" id="firstload" required />
				</div>
				
			
				
				<div style="padding:0 0 25px 0;">
					<input type="submit" name="submit" value="submit" class="sbtn btn yellow" id="submit"/>
				</div>
			</form>
