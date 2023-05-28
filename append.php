<?php


$servername = "sql213.epizy.com";
$username = "epiz_34302057";
$password = "fXgABcnIk06YRP";
$db = "epiz_34302057_jobs";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);


$name = $_POST['name'];
$link = $_POST['link'];

$f=0;

if(strlen($name)){

if(strlen($link)>0){

    $f=1;

    $sql = "INSERT INTO job (name, link) VALUES ('$name','$link')";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


}

}

if($f==0){
  
    echo "<script>

    alert('please check the boxes');
    window.location = 'append.html';
    
    </script>
    ";
}




?>