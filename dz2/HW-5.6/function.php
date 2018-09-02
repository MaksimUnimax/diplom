<?php
session_start();
function GetTest($dir,$NumbTest) {
	$list = array_slice(scandir($dir), 2);
	foreach ($list as $numb => $test) {
				$number = $NumbTest - 1;
				$fileName = $list[$number];
				$fileJs = file_get_contents("tests/$fileName");
			    return json_decode($fileJs,true);
	}
}

function GetListTest($dir) {
	return array_slice(scandir($dir), 2);
}

function AssignSession ($dirLog) {
	$fileJs = file_get_contents("$dirLog/logins.json");
		$file = json_decode($fileJs,true);
			foreach ($file as $key => $value) {
				if ($value["login"] == $_POST["login"] && $value["password"] == $_POST["pass"]) {
					return "True";
				}	
			}	
}

 function CheckGuest() {
 	if (!empty($_SESSION["login"] && (empty($_SESSION["pass"] && empty($_POST["pass"]))))) {
		return "True";
	}
}
 function CheckUser() {
 	if (!empty($_SESSION["login"] && empty(!$_SESSION["pass"]))) {
		return "True";
	}
}
?>