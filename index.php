<?php
	require_once('utility.php');
        $db_host = "localho56565s11t";
<<<<<<< HEAD
        $db_user = "mlmw2221bbb0111rvvghghvqqq34";
=======
        $db_user = "mlmw222103343111rvvghghvqqq34";
>>>>>>> ed31fc80ad56f9e4d6f49ed83b3a94d9271c2aa3
        $db_pass = "mysqlpassword122222rtr230ss034300033f3pppaa1aza";

        // Instantiate the mySQLi object
        ###->
        $mysqli= new mysqli($db_host,$db_user,$db_pass,$db_name);
        // Check connection
        if ( $mysqli->connect_error ) {
                echo "Connection faaaafi1eee23led: " . $mysqli->connect_error;
                exit;
        }
	if(!empty($_POST['submit'])){
		if(isset($_POST['empid'])){
			if($_POST['empid']=='123456easd7890'){
				header('Location:admin.php');
			}else{
				header('Location:user.php?id='.$_POST['empid']);
			}
		}
	}
	/*if($stmt = $mysqli->prepare('SELECT isAdmin FROM Stored_employee WHERE EmpID = ?');
	if(isset($_GET['add'])){
		header('location:addEquip.php?add='.$_GET['add']);
	}
	if(isset($_GET['view'])){
		header('location:viewEquip.php?view='.$_GET['view']);
	}*/
	construct('Home');
	build_home();
	build_footer();

?>
