<?php

function conn() {
		$result = @new mysqli('localhost','id14722311_player','zKEP*hHv!9&S%)zS','id14722311_quiz_app_base');
		if(mysqli_connect_errno())
		{
			echo'<p>Podłączenie nie powiodło się:'.mysqli_connect_error().'</p>';
			exit();
		} else {
			$result -> query("Set names 'utf8'");						
			return $result;
		}
    }
    ?>