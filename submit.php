<?php 
include('src/MailChimp.php');
use \DrewM\MailChimp\MailChimp;
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];


$MailChimp = new MailChimp('82dbf490b8ea5b991d4b9892128727b0-us3');

$list_id = '29b27041f9';

$result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => $email ,
				'merge_fields' => ['FNAME'=>$fname, 'LNAME'=>$lname],
				'status'        => 'subscribed',
			]);

if ($MailChimp->success()) { ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
  <div>
  	<div class="container-fluid">
  		<div class="row justify-content-center">
  			<div class="col-md-4 text-center">
  				<p>We have successfully saved your details</p>
  				<p>Thank You</p>
  			</div>
  		</div>
  	</div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>





<?php } else {
	echo $MailChimp->getLastError();
}

?>
