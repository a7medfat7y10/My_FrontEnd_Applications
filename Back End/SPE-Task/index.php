<?php
$dsn = 'mysql:host=localhost;dbname=spe_task';
$user = 'root';
$pass = '';
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
);
try{
	$db  = new PDO($dsn, $user , $pass , $options);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		$Name=$_POST['Name'];
		$Telephone=$_POST['Telephone'];
		$EMail=$_POST['EMail'];
		$message=$_POST['message'];
        $q = "INSERT INTO `spe_form` (`id`, `Name`, `EMail`, `Telephone`,`message` ) VALUES (NULL, '$Name', '$EMail', '$Telephone', '$message')";
        $db->exec($q);
	}


}
catch(PDOException $e) {
	echo 'Failed' . $e->getMessage();
};
?>	

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!-- IE Meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile Meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SPE Task</title>
    <!-- Bootstrap library -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- normalize library  for good reset-->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- font-awesome icons library -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Main Css File -->
    <link rel="stylesheet" href="css/Style.css">
    <!-- to Edit in Bootstrap Css File -->
    <link rel="stylesheet" href="css/BootstrapEdits.css">
    
    <!-- to open Html5 Elements in Internet Expolrer -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <div class="back-photo">
            <!--start form-->
            <div class="form">
                <form id="recruit" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">                                      
                       <div class="form-group">
                           <label class="" for="name"><i class="far fa-user"></i> Full Name...</label>
                           <input class="form-control" type="text" id="name" name="Name" onkeyup="preventSC(this)" required/>				    
                       </div>
                       <br>
                       
                       <div class="form-group">
                           <label class="" for="phone"><i class="fas fa-mobile-alt"></i> Phone Number...</label>
                           <input class="form-control" type="number" name="Telephone" id="phone" onblur="phoneVal();" required/>
                           <span id="validPhone" style="color:red;"></span>
                       </div>
                       <br>
                       <div class="form-group">
                           <label class="" for="email"><i class="fas fa-envelope"></i> Email...</label>
                           <input class="form-control" type="email" name="EMail" id="email" onblur=" emailVal();" required/>
                           <span id="validemail" style="color:red;"></span>
                       </div>
                       <br>
                       <div class="form-group">
                           <label class="" for="message"><i class="fas fa-envelope-open"></i> Message...</label>
                           <textarea class="form-control"  id="message" name="message" required></textarea>
                       </div>
                       <div class="form-group">
                        <input class="btn btn-block" type="submit" value="Submit" id="submit">
                    </div>

   
               </form>
                                   <?php
            $result=$db->query("SELECT * FROM `spe_form`;");
            $res = $result->fetchAll();
            $count = $result->rowCount();

            echo "<table class='table table-bordered  ' >";
            echo "<thead  >";
            echo "<tr>";
            echo "<th>" . "ID" . "</th>";
            echo "<th>" . "Name" . "</th>";
            echo "<th>" . "Phone" . "</th>";
            echo "<th>" . "Email" . "</th>";
            echo "<th>" . "Message" . "</th>";      
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
            foreach($res as $row){
            echo "<tr>";          
            echo "<td>".$row['id']."</td>"; 
            echo "<td>".$row['Name']."</td>";
            echo "<td>".$row['EMail']."</td>"; 
            echo "<td>".$row['Telephone']."</td>";
            echo "<td>".$row['message']."</td>"; 
            echo "</tr>";    
            }
            echo "</tbody>";
            echo "</table>";
        ?>
            </div>
            <!--end form-->
        </div>



        




<!-- jquery library -->
<script src="js/jquery-3.2.0.min.js"></script>
<!-- bootstrap library -->
<script src="js/bootstrap.min.js"></script>
<!-- Main JavaScript File -->
<script src="js/MyJSFunc.js"></script>
</body>
</html>