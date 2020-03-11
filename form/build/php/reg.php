<?php


$link = mysqli_connect('localhost', 'i78technology_rsvp', 'MR100%pro','i78technology_smartvalley');
 
// Check connection
if($link == false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$name = mysqli_real_escape_string($link, $_POST['name']);
$gender = mysqli_real_escape_string($link, $_POST['gender']);
$dob = mysqli_real_escape_string($link, $_POST['dob']);
$uni_id = mysqli_real_escape_string($link, $_POST['uni_id']);
$smart_id = mysqli_real_escape_string($link, $_POST['smart_id']);
$batch = mysqli_real_escape_string($link, $_POST['batch']);
$startup = mysqli_real_escape_string($link, $_POST['startup']);
$interest = mysqli_real_escape_string($link, $_POST['interest']);
$b=implode($interest);
$github = mysqli_real_escape_string($link, $_POST['github']);
$linkedin = mysqli_real_escape_string($link, $_POST['linkedin']);
$twitter = mysqli_real_escape_string($link, $_POST['twitter']);
$fb = mysqli_real_escape_string($link, $_POST['fb']);
$myweb = mysqli_real_escape_string($link, $_POST['myweb']);
$p1 = mysqli_real_escape_string($link, $_POST['p1']);
$p2 = mysqli_real_escape_string($link, $_POST['p2']);
$address = mysqli_real_escape_string($link, $_POST['address']);
$contact_1 = mysqli_real_escape_string($link, $_POST['contact_1']);
$contact_2 = mysqli_real_escape_string($link, $_POST['contact_2']);
$email = mysqli_real_escape_string($link, $_POST['email']);
$bio = mysqli_real_escape_string($link, $_POST['bio']);
$file = mysqli_real_escape_string($link, $_POST['file']);

// attempt insert query execution
$sql = "INSERT INTO svcv (name, gender, dob, uni_id, smart_id, batch, startup, interest, github, linkedin, twitter, fb, myweb, p1, p2, address, contact_1, contact_2, email, bio, file) VALUES ('$name', '$gender', '$dob', '$uni_id', '$smart_id', '$batch', '$startup', '$b', '$github', '$linkedin', '$twitter', '$fb', '$myweb', '$p1', '$p2', '$address', '$contact_1', '$contact_2', '$email', '$bio', '$file')";

if(mysqli_query($link, $sql)){
	 header("Location: ../../submission_successful#?return_id=78956545");
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>