<?php
	$name=$_POST['name'];
	$email=$_POST['email'];
	$institute=$_POST['institute-name'];
	$mobile=$_POST['number'];
	$event=$_POST['event'];
	$message="Name : ".$name."\n\nInstitute : ".$institute."\n\nEmail : ".$email."\n\nMobile : ".$mobile;
	$returnmessage="Dear ".$name."\nYou have Successfully Registered for";
	$header = "From:abhiyantran@nitsikkim.ac.in\r\n";
	$recciver="b130011cs@nitsikkim.ac.in,";
	switch($event) {
		case 1:
				$subject="Registration for Hackthon";
				$receiver=$recciver."b130023cs@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Hackthon.Best of luck for the Event.";
					$returnsubject="Registered for Hackthon";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 2:
				$subject="Registration for Codeit";
				$receiver="b130011cs@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Codeit.Best of luck for the Event.";
					$returnsubject="Registered for Codeit";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 3:
				$subject="Registration for Oscilloscope Drawing";
				$receiver=$recciver."b130062@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Oscilloscope Drawing.Best of luck for the Event.";
					$returnsubject="Registered for Oscilloscope Drawing";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 4:
				$subject="Registration for Circuit Debugging";
				$receiver=$recciver."b130044@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Circuit Debugging.Best of luck for the Event.";
					$returnsubject="Registered for Circuit Debugging";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;						
		case 5:
				$subject="Registration for Rat Race";
				$receiver=$recciver."b130048@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Rat Race.Best of luck for the Event.";
					$returnsubject="Registered for Rat Race";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 6:
				$subject="Registration for Line Follower";
				$receiver=$recciver."b130048@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Line Follower.Best of luck for the Event.";
					$returnsubject="Registered for Line Follower";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;				
		case 7:
				$subject="Registration for Bridge it";
				$receiver=$recciver."b130070@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Bridge it.Best of luck for the Event.";
					$returnsubject="Registered for Bridge it";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 8:
				$subject="Registration for AutoCad";
				$receiver=$recciver."b130065@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  AutoCad.Best of luck for the Event.";
					$returnsubject="Registered for AutoCad";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 9:
				$subject="Registration for Debate";
				$receiver=$recciver."b130053cs@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Debate.Best of luck for the Event.";
					$returnsubject="Registered for Debate";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 10:
				$subject="Registration for Trashbar";
				$receiver=$recciver."b130064@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Trashbar.Best of luck for the Event.";
					$returnsubject="Registered for Trashbar";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 11:
				$subject="Registration for Tech-Quiz";
				$receiver=$recciver."johnyforever222@gmail.com";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Tech-Quiz.Best of luck for the Event.";
					$returnsubject="Registered for Tech-Quiz";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 12:
				$subject="Registration for Tresure Hunt";
				$receiver=$recciver."b130056@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Treasure Hunt.Best of luck for the Event.";
					$returnsubject="Registered for Treasure Hunt";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 13:
				$subject="Registration for NFS";
				$receiver=$recciver."b130019cs@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					$error="Sorry there was some problem while submitting your Registration Form.";
					include "error.php";
					exit();
				}
				else{
					$returnmessage=$returnmessage."  NFS.Best of luck for the Event.";
					$returnsubject="Registered for NFS";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 14:
				$subject="Registration for Counter Strike";
				$receiver=$recciver."b130035cs@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					header("Location: error.php");
					exit();
				}
				else{
					$returnmessage=$returnmessage."  Counter Strike.Best of luck for the Event.";
					$returnsubject="Registered for Counter Strike";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 15:
				$subject="Registration for MMM Fingers";
				$receiver=$recciver."b130014@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){
					header("Location: error.php");
					exit();
				}
				else{
					$returnmessage=$returnmessage."  MMM Fingers.Best of luck for the Event.";
					$returnsubject="Registered for Mmm Fingers";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		case 16:
				$subject="Registration for 2048";
				$receiver=$recciver."b130014@nitsikkim.ac.in";
				if(!mail($receiver,$subject,$message,$header)){   
					header("Location: error.php");
					exit();
				}
				else{
					$returnmessage=$returnmessage."  2048.Best of luck for the Event.";
					$returnsubject="Registered for 2048";
					mail($email,$returnsubject,$returnmessage,$header);
				}
				break;
		default:
																								
	}
	
	header("Location: thanks.php");
		exit();
?>
