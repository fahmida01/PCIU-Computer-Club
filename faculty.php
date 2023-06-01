<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Member.css">

	<title>AdminHub</title>
</head>
<body>
<style>
    .logo {
        margin-top: 20px; 
        margin-bottom: 10px; 
        width: 40px;
        height: auto;
    }
    .logo-text {
        font-size: 20px; /* Adjust the font size value as per your preference */
    }
</style>

<!-- SIDEBAR -->
<section id="sidebar">
	<a href="#" class="brand">
		<img src="twitter.png" alt="Logo" class="logo">
		<span class="logo-text">PCIU ELITE</span>
	</a>
	<ul class="side-menu top">
		<li class="active">
			<a href="homepage.php">
				<i class='bx bxs-dashboard' ></i>
				<span class="text">Dashboard</span>
			</a>
		</li>
		<li>
			<a href="member.php">
				<i class='bx bxs-group' ></i>
				<span class="text">Members</span>
			</a>
		</li>
		<li>
			<a href="event.php">
				<i class='bx bxs-notification' ></i>
				<span class="text">Event</span>
			</a>
		</li>
		<li>
			<a href="faculty.php">
				<i class='bx bxs-user-detail' ></i>
				<span class="text">Faculty</span>
			</a>
		</li>	
	</ul>
</section>
<section id="content">
	<nav>
		<i class='bx bx-menu' ></i>
		<form action="#">
			<div class="form-input">
				<input type="search" placeholder="Search...">
				<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
			</div>
		</form>	
		<input type="checkbox" id="switch-mode" hidden>
		<label for="switch-mode" class="switch-mode"></label>		
	</nav>
	<main>
		<div class="head-title">
			<div class="left">
				<h1>Facultys</h1>
				<ul class="breadcrumb">
					<li>
						<a href="#">Facultys</a>
					</li>
					<li><i class='bx bx-chevron-right' ></i></li>
					<li>
						<a class="active" href="#">Home</a>
					</li>
				</ul>
			</div>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Facultys</h3>
						
						<a href="faculty_form.php" class="button">
							<i class='bx bx-add-to-queue'></i>
						</a>
					</div>
					<table>
						<thead>
							<tr>
								<th>Name</th>
								<th>Deparment</th>
								<th>Postion</th>
								<th>Email</th>
								
								
								<!-- <th>NID Number</th>
								<th>Blood Group</th>
								<th>Teacher Id</th>
								<th>Join Date</th> -->
							</tr>
						</thead>
						<tbody>
							<?php
							$sname = "localhost";
							$uname = "root";
							$password = "";
							$db_name = "faculty";

							$con = new mysqli($sname, $uname, $password, $db_name);

							if ($con->connect_error) {
								die("Connection failed: " . $con->connect_error);
							}

							$query = "SELECT * FROM faculty_data";
							$result = $con->query($query);

							if ($result->num_rows > 0) {
								while ($row = $result->fetch_assoc()) {
									echo "<tr>";
									echo "<td>  <a href='faculty_webportal.php?data_id=" . $row['id'] . "'>" . $row['name'] . "</a>" . $row['name'] . "</td>";
									echo "<td>" . $row['fathername'] . "</td>";
									echo "<td>" . $row['mothername'] . "</td>";
									echo "<td>" . $row['email'] . "</td>";
									echo "<td>" . $row['contact'] . "</td>";
									echo "<td>" . $row['nid'] . "</td>";
									echo "<td>" . $row['blood'] . "</td>";
									echo "<td>" . $row['id'] . "</td>";
									echo "<td>" . $row['date'] . "</td>";
									echo "</tr>";
								}
							} else {
								echo "<tr><td colspan='9'>No records found</td></tr>";
							}

							$con->close();
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>
</section>
<script src="homepage.js"></script>

</body>
</html>
<!-- echo "<h2>Name: " . $row['name'] . "</h2>";
          echo "<p>Department: " . $row['department'] . "</p>"; -->