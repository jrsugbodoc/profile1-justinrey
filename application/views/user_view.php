<!DOCTYPE html>
<html lang="en">
<head>
    <meta chatset="UTF-8">
  <title>User View</title>
</head>
<body>


  <h1>
    <?php

    // echo $results;

     foreach ($results as $object){
            echo $object->username . "<br>";
        }
    ?>

  </h1>
  <p>This is a paragraph.</p>
</body>
</html>