<?php

 $dsn = 'mysql:host=localhost; dbname=aapgsue1_aapgsue1'; // dsn = data source name ----- dbname = database name
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
	
	
	$result=$con->query("SELECT * FROM `applicants`;");
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
      echo "<th>" . "Committee1" . "</th>";
      echo "<th>" . "Committee2" . "</th>";
      echo "<th>" . "Field9" . "</th>";
      echo "<th>" . "Field10" . "</th>";
      echo "<th>" . "ChooOne" . "</th>";
      echo "<th>" . "Chootwo" . "</th>";
      echo "<th>" . "ChooThree" . "</th>";
      echo "<th>" . "Feedback" . "</th>";

      echo "</tr>";
      echo "</thead>";
      echo "<tbody>";



foreach($res as $row){
echo "<tbody>";
echo "<tr>";          
echo "<td>".$row[0]."</td>"; 
echo "<td>".$row[1]."</td>";
echo "<td>".$row[4]."</td>"; 
echo "<td>".$row[6]."</td>";
echo "<td>".$row[5]."</td>"; 
echo "<td>".$row[3]."</td>";
echo "<td>".$row[2]."</td>";
echo "<td>".$row[7]."</td>"; 
echo "<td>".$row[8]."</td>"; 
echo "<td>".$row[9]."</td>"; 
echo "<td>".$row[10]."</td>"; 
echo "<td>".$row[11]."</td>"; 
echo "<td>".$row[12]."</td>"; 
echo "<td>".$row[13]."</td>"; 
echo "<td>".$row[14]."</td>"; 
echo "<td>".$row[15]."</td>"; 

echo "</tr>";    

}

echo "</tbody>";
echo "</table>";
echo "</div>";
?>
<html>

<head>
  <title>Reposition Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <link  rel="icon" href="../../images/logo1.ico">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  #title
  {
    color: #8a1b1b;
    font-size: 30px;
    font-family: 'Comfortaa', cursive;
    margin-bottom: 30px;
    margin:30px auto;
    width:100%;
     text-align: center;
  }
    #total
    {
       color: #8a1b1b;
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
      background-color:#B71C1C;
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