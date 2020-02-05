<?php
	require_once('utility.php');
        $db_host = "localhost";
        $db_user = "mlm1034";
        $db_pass = "mysqlpassword";
<<<<<<< HEAD
        $db_name = "mlm10394343234";
=======
        $db_name = "mlm1039411111110000";
=======
        $db_name = "mlm1039411110033300";
>>>>>>> 8ce728eb6cbcf5158ed4eddcb899c90d9399acbc

>>>>>>> a238e5456d0554f9091ed1ddbfe94750165e7e60
        // Instantiate the mySQLi object
        ###->
        $mysqli= new mysqli($db_host,$db_user,$db_pass,$db_name);
        // Check connection
        if ( $mysqli->connect_error ) {
                echo "Connection failed: " . $mysqli->connect_error;
                exit;
        }
	if(!empty($_POST['submit'])){
		if(isset($_POST['empid'])){
			if($_POST['empid']=='1234567890'){
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
