<?php
include "database/connection.php";
$sql="SELECT * FROM services";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
        ?>
        <p style="margin-right:6%"><b><?php echo $row['course_name']; ?></b></p>
                        <br><br>
                        <div class="progress mt-3">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: <?php echo $row['per']; ?>%;"></div>
                          </div>
                          <br><?php
    }
}?>