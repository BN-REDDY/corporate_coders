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
echo "Load on 1st minute - ".$firstload."<br/>";

 if(isset($_REQUEST['secondload']))
{
$secondload=$_REQUEST['secondload'];
}
echo "Load on 2nd minute - ".$secondload."<br/>";

 if(isset($_REQUEST['thirdload']))
{
$thirdload=$_REQUEST['thirdload'];
}
echo "Load on 3rd minute - ".$thirdload."<br/>";

 if(isset($_REQUEST['fourthload']))
{
$fourthload=$_REQUEST['fourthload'];
}
echo "Load on 4th minute - ".$fourthload."<br/>";
 if(isset($_REQUEST['fifthload']))
{
$fifthload=$_REQUEST['fifthload'];
}
echo "Load on 5th minute - ".$fifthload."<br/>";

if($secondload>50){
$tn=round((2*$servers)+1);
}
else {
$tn=round($servers/2);	
}
if($thirdload>50){
$tn=round((2*$tn)+1);
}
else {
$tn=round($tn/2);	
}
if($fourthload>50){
$tn=round((2*$tn)+1);
}
else {
$tn=round($tn/2);	
}
if($fifthload>50){
$tn=round((2*$tn)+1);
}
else {
$tn=round($tn/2);	
}
echo "At the end of 5 minutes of, The no. of servers is  ". $tn."<br/>";
}
?>

			<form method="post" action="" name="rest_form" onSubmit="return validate();">
				<div style="padding:0 0 25px 0;">
					<label for="servers">No. of servers </label>
					<input type="number" class="inputs" name="servers" id="servers" maxlength="20" required />
				</div>									
				
				<div style="padding:0 0 25px 0;">
					<label for="vadas">Load on 1st minute</label>
					<input type="number" class="inputs" name="firstload" id="firstload" maxlength="20" required />
				</div>
				
				<div style="padding:0 0 25px 0;">
					<label for="samosa">Load on 2nd minute</label>
					<input type="number" class="inputs" name="secondload" id="secondload" maxlength="20" required />
				</div>



				<div style="padding:0 0 25px 0;">
					<label for="vp_cost">Load on 3rd minute</label>
					<input type="number" class="inputs" name="thirdload" id="thirdload" maxlength="20" required />
				</div>

				<div style="padding:0 0 25px 0;">
					<label for="sp_cost">Load on 4th minute</label>
					<input type="number" class="inputs" name="fourthload" id="fourthload" maxlength="20" required />
				</div>

				<div style="padding:0 0 25px 0;">
					<label for="sp_cost">Load on 5th minute</label>
					<input type="number" class="inputs" name="fifthload" id="fifthload" maxlength="20" required />
				</div>				
				
				<div style="padding:0 0 25px 0;">
					<input type="submit" name="submit" value="submit" class="sbtn btn yellow" id="submit"/>
				</div>
			</form>
