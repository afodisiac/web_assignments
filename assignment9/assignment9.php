<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <form action="">
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Greetings</h5>
            <p class="card-text">can you please enter your name </p>
            <label for="firstname">firstname</label>
            <input type="text" class="form-control" placeholder="firstname " id="add-on text" name="firstname">
            <label for="secondname">secondname</label>
            <input type="text" class="form-control" placeholder="secondname " id="add-on text" name="secondname">
            <button>
            <a type="submit" >submit</a>
            </button>
            

            </div>
        </div>
    </form>

<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    $FirstName = $_GET["firstname"];
    // echo $FirstName;
    $SecondName = $_GET["secondname"];
    // echo $SecondName;
    echo "how are you {$FirstName} {$SecondName}";

?>