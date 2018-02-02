<?php
session_start();
?>

<?php

if(isset($_POST['submit'])) :

    $straight_saving = array(
        'name' => $_POST['name'],
        'age' => $_POST['age'],
    );

    $_SESSION['straight_saving'][] = $straight_saving;
    header("Location: bb.php");

endif;

?>

<form method="POST" action="aa.php">

   <label>Name:</label>
   <input name="name" type="text" required/>

   <label>Age:</label>
   <input name="age" type="number" required/>

   <input name="submit" type="submit" class="add_button" value="Add"  />

</form>

