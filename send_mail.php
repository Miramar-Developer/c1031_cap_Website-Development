<?php
$to = 'gareth@miramar-group.co.uk';

$subject = 'CAPTEC contact form';

$headers = "From: " . strip_tags($_POST['email']) . "\r\n";
$headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$message = "<table cellpadding=\"5\" cellspacing=\"0\" style=\"font-family:Arial, sans-serif; font-size:12px\" width=\"100%\">
    <tr style=\"background:#eaeaea\">
		<td width=\"40%\">Name: </td>
		<td width=\"60%\">".$_POST['name']."</td>
	</tr>
    <tr style=\"background:white\">
    	<td width=\"40%\">Email: </td>
		<td width=\"60%\">".$_POST['email']."</td>
	</tr>
    <tr style=\"background:#eaeaea\">
        <td width=\"40%\">Message: </td>
        <td width=\"60%\">".$_POST['message']."</td>
	</tr>
</table>";


if( $_POST['valid'] == "yes") {
	mail($to, $subject, $message, $headers);
	echo 'ok';
} else {
	echo 'error';
}

?>