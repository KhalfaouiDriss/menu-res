<?php

include '../Config/config.php';

if (isset($_GET['id'])) {
    $id_meal = $_GET['id'];
    $id_meal = mysqli_real_escape_string($conn, $id_meal);
    $delete_query = "DELETE FROM meals WHERE id = '$id_meal'";
    if (mysqli_query($conn, $delete_query)) {
<<<<<<< HEAD
        header("Location: ../../Views/index.php?delete_success=true");
    } else {
        header("Location: ../../Views/index.php?delete_error=fqlse");
    }
} else {
    header("Location: ../../Views/index.php");
=======
        header("Location: meals_list.php?delete_success=true");
    } else {
        header("Location: meals_list.php?delete_error=true");
    }
} else {
    header("Location: meals_list.php");
>>>>>>> d7705398bd400ea3bd1c5ccdfe2cedaf0b449561
}

mysqli_close($conn);
?>
