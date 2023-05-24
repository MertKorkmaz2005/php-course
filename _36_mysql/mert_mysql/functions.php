<?php include "db.php";?>
<?php 
function showAllData(){
    //with global you can use the variabele from a another file
    global $connection;
    $qeury = "SELECT * FROM users";
    $result = mysqli_query($connection, $qeury);
    if(!$result ){
        die('qeury failed'. mysqli_error($connection));

    }

    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];

      echo  "<option value='$id'>$id</option>";


    }

}

?>