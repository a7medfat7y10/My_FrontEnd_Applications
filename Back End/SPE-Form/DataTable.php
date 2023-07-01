<?php

 $dsn = 'mysql:host=localhost; dbname=Spe_task'; // dsn = data source name ----- dbname = database name
	$user = 'root';
	$password = '';
	$options = array(

					PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

				);


	try{

		$con = new PDO($dsn, $user, $password, $options); // Connection code
		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


	}

	catch(PDOException $e){
		echo 'failed ' . $e->getMessage();
	}
	
	
	$result=$con->query("SELECT * FROM `Spe_recruit_2`;");
  $res = $result->fetchAll();
$count = $result->rowCount();

 echo "<div id='title' >" . "Recruitment" . "</div>" ;
     
     
      echo "<table class='table table-bordered table-striped ' >";
      echo "<thead  >";
      echo "<tr>";
      echo "<th>" . "ID" . "</th>";
      echo "<th>" . "Name" . "</th>";
      echo "<th>" . "Faculty" . "</th>";
      echo "<th>" . "Department" . "</th>";
      echo "<th>" . "Academic Year" . "</th>";
      echo "<th>" . "Phone" . "</th>";
      echo "<th>" . "Email" . "</th>";
      echo "<th>" . "Profile" . "</th>";
      echo "<th>" . "Feedback" . "</th>";

      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";



foreach($res as $row){
echo "<tbody>";
echo "<tr>";          
echo "<td>".$row["id"]."</td>"; 
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["faculty"]."</td>"; 
echo "<td>".$row["Depart"]."</td>";
echo "<td>".$row["Academic"]."</td>"; 
echo "<td>".$row["Telephone"]."</td>";
echo "<td>".$row["EMail"]."</td>";
echo "<td>".$row["Profile"]."</td>"; 
echo "<td>".$row["feedback"]."</td>"; 

echo "</tr>";    

}

echo "</tbody>";
echo "</table>";
echo "</div>";
?>
<html>

<head>
  <title>DataTable</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link  rel="icon" href="../../images/logo1.ico"> -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  #title
  {
    color: blue;
    font-size: 30px;
    font-family: 'Comfortaa', cursive;
    margin-bottom: 30px;
    margin:30px auto;
    width:100%;
     text-align: center;
  }
    #total
    {
       color: blue;
    font-size: 20px;
    font-family: Montserrat;
    margin:70px auto;
    width:100%;
     text-align: center;
     position:absolute;
     top:0px;
    
  }
  th{
      text-align:center;
      background-color:blue;
      color:#fff;
      min-width:200px;
  }
  td
  {
      text-align:center;
  }

  #link
  {
      text-decoration:none;
  }
 
  
  
   
  </style>
</head>
<body>

  
   <script type="text/javascript">
      function red(){
        document.getElementById("f"$row).style.color='red ';
      }
    </script>  
   
</body>
</html>