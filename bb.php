<?php
session_start();
?>
<table>
  <tr>
    <th>Name<a href ="bb.php?key=asc">A</a><a href ="bb.php?key=des">D</a></th>
    <th>Age<a href="bb.php?key=inc">I</a><a href="bb.php?key=dec">D</a></th>
  </tr>
<?php
if(isset($_SESSION['straight_saving'])) :
    if (isset($_GET['key'])){
        foreach ($_SESSION['straight_saving'] as $key => $row) {
              $volume[$key]  = $row['name'];
              $edition[$key] = $row['age'];
               }
        if ($_GET['key'] == 'asc'){
            sort($_SESSION['straight_saving']);
        }
        elseif ($_GET['key'] == 'des') {
            rsort($_SESSION['straight_saving']);
        }
        elseif ($_GET['key'] == 'inc') {
            // Obtain a list of columns


// Sort the data with volume descending, edition ascending
// Add $data as the last parameter, to sort by the common key
array_multisort($edition, SORT_ASC, $_SESSION['straight_saving']);
        }
        elseif ($_GET['key'] == 'dec') {
array_multisort($edition, SORT_DESC, $_SESSION['straight_saving']);        }
    }

    foreach($_SESSION['straight_saving'] as $sav) {

?>


<tr>
    <td><?php echo $sav['name']; ?></td>
    <td><?php echo $sav['age']; ?></td>
</tr>

<?php } endif; ?>
</table>
<a href="aa.php">Back</a>
