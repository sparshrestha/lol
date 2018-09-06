<?php
	if(isset($_POST['submit'])){
		$name = $_POST['scf_name'];
		$mailFrom = $_POST['scf_email'];
		$message = $_POST['scf_message'];

		$txt="<html><body><h2>Hi, You have received a new mail from website contact form</h2><br>
		    <h2>Full Name: </h2>".$name."<br>
		    <h2>Email: </h2>".$mailFrom."<br>
		    <h2>Full Message: </h2>".$message."</body></html>";

        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        $headers[] = 'To: Sparsh <sparsh@yarsa.io>';
        $headers[] = 'From: '.$name.'<'.$mailFrom.'>'."\r\n";
        
		$mailTo = "sparsh@yarsa.io";
		mail($mailTo, $name, $txt, implode("\r\n", $headers), '-fsparsh@yarsa.io');
	}
?>