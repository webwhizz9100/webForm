
<?php
//insert formdata into the database
$conn = new PDO("mysql:host=localhost;port=7888;dbname=webform",'root','');
//$conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$query = "INSERT INTO login(username,password)
          VALUES ('{$_POST['username']}''{$_POST['password']}')";
$stmt = $conn ->prepare($query);
$result = $stmt -> execute();

if($result == 1){
  echo "success";
} else{
  echo "bad luck";
}
    echo $query;
    
//    echo $_POST['username'];
//    echo $_POST['password'];
//
//print_r($_POST);
//print_r($_GET);
    
    ?>