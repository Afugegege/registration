<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js"></script>
</head>
<body> 
    <div class="container custom-container">
        <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 form-title">Debug Lab Registration Form</h3>
        <div class="table-wrapper">
              <table class="table table-bordered">
              <thead class="thead-dark">
                <tr>
                    <th style="width: 5%">Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th style="width: 17%">Email</th>
                    <th>Phone Number</th>
                    <th>Course</th>
                    <th style="width: 7%">Actions</th>
                  </tr>
              </thead>
              <tbody>
				<?php

	$con = new mysqli("localhost", "root", "", "test");
	
	if ($con->connect_error) {
		echo "$conn->connect_error";
		die("Connection Failed: " . $con->connect_error);
	}
	
	$query = "SELECT * FROM student";
	$result = $con->query($query);
	
	if ($result-> num_rows > 0){
		while($row=$result->fetch_assoc()){
      $date=date_create($row["Birthday"]);

			echo "<tr><td>".$row["Id"]."</td><td>".$row["first_Name"]."</td><td>".$row["Last_Name"]."</td><td>".date_format($date,"d M Y")."</td><td>".$row["Gender"]."</td><td>".$row["Email"]."</td><td>".$row["Phone_number"]."</td><td>".$row["Course"]."</td><td>
                  <i class='fa-solid fa-eye'></i>
                  <i class='fa-solid fa-pen-to-square'></i>
                  <i class='fa-solid fa-trash'></i>
                  </td></tr>";
		}
		echo "</table>";
	}else{
		echo "0 result";
	}
	
	$con->close();
?>

</tbody>
     
            </table>
        </div>
      </div>    
    </div> 
	
</body>
</html>
