<?php
$do = isset($_GET['do']) ? $_GET['do'] :"error";
//**************************************************
	$dns     = 'mysql:host=localhost;dbname=spes9317_db;charset=utf8mb4';
	$userdb  = 'spes9317_it';
	$passdb  = 'SPESuez2020';
	$option  = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );



// $dns     = 'mysql:host=localhost;dbname=contact_form';
// $userdb  = 'root';
// $passdb  = '';
// $option  = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );


try {$con = new PDO($dns , $userdb , $passdb , $option );
    $con->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);}
catch(PDOEception $e ) {echo "databace problem" . $e->getMassage(); }
///////////////////////////////////////////////////




/**************************************************** */
/******************** insert ************************* */
/**************************************************** */
if ($do == "insert") {

    $name       = isset($_POST['name']) ? $_POST['name'] : "" ;
    $email      = isset($_POST['email']) ? $_POST['email'] : "" ;
    $phone      = isset($_POST['phone']) ? $_POST['phone'] : "" ;
    $message    = isset($_POST['message']) ? $_POST['message'] : "" ;

    $stmt = $con->prepare('INSERT INTO  contact_form(name,email,phone,message )
    VALUES ( :zname,  :zemail, :zphone, :zmessage)');
    $stmt->execute(array( "zname"=>$name, "zemail"=> $email,"zphone"=>$phone, "zmessage"=> $message));
    $count = $stmt->rowCount();


    if ($count > 0) {
        echo "<div class='alert text-light'>Thank you, We recieved your message </div>";
        exit();
    }else{
        echo "<div class='alert text-light'>Try again, Please ! </div>";
    }
}
/**************************************************** */
/******************** fetch ************************* */
/**************************************************** */
elseif ($do == "data") {
	$stmt = $con->prepare("SELECT * FROM contact_form");
	$stmt->execute();
	$rows = $stmt->fetchAll();
	?>
	<table class="main-table text-center table table-bordered">
		<tr>
			<th>#Id</th>
			<th>Name</th>
			<th>email</th>
			<th>phone</th>
			<th>message</th>
			<th>time</th>
		</tr>	<?php
		foreach ($rows as $row ){  ?>
			<tr>
				<td><?php echo $row['id'] ;?></td>
				<td><?php echo $row['name'] ;?></td>
				<td><?php echo $row['email'] ;?></td>
				<td><?php echo $row['phone'] ;?></td>
				<td><?php echo $row['message'] ;?></td>
				<td><?php echo $row['date'] ;?></td>
			</tr><?php
		}	?>
    </table> 
    <style>
        th,td ,table {
          border:1px solid;
          padding:5px;  
        }
    </style> <?php 

/**************************************************** */
/******************** fetch ************************* */
/**************************************************** */
}else{

	echo "Page not found 404";
	
	header('Location: http://spesusc.com/');
	
    die();

}