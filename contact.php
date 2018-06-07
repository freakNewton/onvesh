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
        <h1>CONTACT US</h1>
    </center>
    <center>
        <p>If you want to give us any suggestion or feedback on our application or website you can do so through e-mail.</p>
    </center>
    <center>
        <p>1.PRIYESH SHARMA (sharmapriyesh2@gmail.com).</p>
    </center>
    <center>
        <p>2.NISARG SHAH (nsshah1099@gmail.com).</p>
    </center>
    <center>
        <p>3.PRAGALBH PATIL (pragalbha77@gmail.com).</p>
    </center>
    <center>
        <p>4.NIKHIL KHANEJA (nikhilkhaneja002@gmail.com).</p>
    </center>
    </body>
