<?php
$sql = "SELECT `Train Name`,`Starting Place`,`Destination Place`,`fare`,time,day FROM train";
if($result = mysqli_query($conn , $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th rowspan=2><h1>Train Name</h1></th>";
				echo "<th rowspan=2><h1>Starting Place</h1></th>";
				echo "<th rowspan=2><h1>Destination Place</h1></th>";
				echo "<th rowspan=2><h1>Fare in Rupees</h1></th>";
				echo "<th colspan=2><h1><center>Arrival</center></h1></th>";
                
            echo "</tr>";
			echo "<tr>";
				echo "<th style='background-color:#D18B12;' >Time</th>";
				echo "<th style='background-color:#D18B12;'>Days</th>";
			echo "</tr>";
            
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Train Name'] . "</td>";
				echo "<td>" . $row['Starting Place'] . "</td>";
				echo "<td>" . $row['Destination Place'] . "</td>";
				echo "<td>" . $row['fare'] . "</td>";
				echo "<td>" . $row['time'] . "</td>";
				echo "<td>" . $row['day'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn );
}
 
// Close connection
mysqli_close($conn);
?>
	  