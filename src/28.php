<?php
  // Initialize database connection
  $conn = mysqli_init();
  
  // Set error handling mode to output errors
  $connect = mysqli_set_charset($conn, "utf8mb4");
  if ($connect) {
    echo "Database connection set up successfully.";
  } else {
    echo "Failed to set database connection.\n";
  }
?>
