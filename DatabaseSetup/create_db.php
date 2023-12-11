<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE internship";
if (mysqli_query($conn, $sql)) {
	echo "Internship database created successfully <br>";

	// Execute SQL statements from create_table.sql
	$createTableFile = __DIR__ . "/create_table.sql"; // Path to the create_table.sql file
	$createTableStatements = file_get_contents($createTableFile);
	if (mysqli_multi_query($conn, $createTableStatements)) {
		while (mysqli_more_results($conn) && mysqli_next_result($conn)) {
			// Consume the result set
		}
		echo "Tables created successfully <br>";

		// Execute SQL statements from populate_table.sql
		$populateTableFile = __DIR__ . "/populate_table.sql"; // Path to the populate_table.sql file
		$populateTableStatements = file_get_contents($populateTableFile);
		if (mysqli_multi_query($conn, $populateTableStatements)) {
			while (mysqli_more_results($conn) && mysqli_next_result($conn)) {
				// Consume the result set
			}
			echo "Data inserted successfully <br>";
		} else {
			echo "Error executing populate_table.sql statements: " . mysqli_error($conn);
		}
	} else {
		echo "Error executing create_table.sql statements: " . mysqli_error($conn);
	}

} else {
	echo "Error creating database: " . mysqli_error($conn);
}


mysqli_close($conn);
?>