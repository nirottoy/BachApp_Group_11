<?php
      
	require_once "EmployeeHeader.php";
	require_once "Model/db_config.php";
	require_once "Controller/UserController.php";
	
    $users = getAlluser();
?>


<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="styles/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			
		</div>
		<div class="center">
	<h3 class="text">Pending RegistrationList</h3>
	<table class="table table-striped">
		<thead>
		    <th> Custromer Id </th>
			<th> Custromer Name </th>
			<th> Username</th>
			<th> Email </th>
			<th> Phone Number</th>
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			
	
			<?php
			
			foreach($users as $user){     
			if($user["type"]=="non_custromer"){
			        echo "<tbody>";
				    echo "<td>".$user["id"]."</td>";
					echo "<td>".$user["name"]."</td>";
					echo "<td>".$user["username"]."</td>";
					echo "<td>".$user["email"]."</td>";
					echo "<td>".$user["phone"]."</td>";
					echo '<td><a href="ConfirmReg.php?id='.$user["id"].'" class="btn btn-success">Confirm</a></td>';
					echo '<td><a href="DeleteCustromerReg.php?id='.$user["id"].'" class="btn btn-danger">Decline</a></td>';
				   echo "</tbody>";
			}
		}
				
		?>
		
		</tbody>
	</table>
  </div>
</html>


