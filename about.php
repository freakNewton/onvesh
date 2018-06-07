<?php
	session_start();
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
		require 'nav_login.html';
	}
	else{
		require 'navigation.html';
	}
?>
    <!DOCTYPE html>
    <center>
        <h1>ABOUT</h1>
        <h2>ON-VESH</h2>
        <p>ON-VESH is an abbreviation for ONLINE ANVESH.<br> It is an Application and Website designed for the students of VIVEKANAND EDUCATION SOCIETY POLYTECHNIC so that they can book tickets and register for the Events in their college fest(ANVESH).<br> It is easy and relaible and each and ever student can book his / her tickets within few minutes.</p>
        <h1>ABOUT US</h1>
        <h2>Designers</h2>
        <p>This is an final year project created by four student of CM6G.</p>
        <p>1.PRIYESH SHARMA (05).</p>
        <p>2.NISARG SHAH (09).</p>
        <p>3.PRAGALBH PATIL (36).</p>
        <p>4.NIKHIL KHANEJA (50).</p>
    </center>
    </body>
