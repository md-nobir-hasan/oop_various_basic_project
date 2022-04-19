<?php
include("crud_obj.php"
);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $val = $crud->read("SELECT * FROM user_info WHERE `user_id`=$id");
}

if (isset($_POST['btn_update'])) {
    $user_name = $_POST['user_name'];
    $age = $_POST['age'];
    $id = $_POST['user_id'];
    $sql = "UPDATE  `user_info` SET `name`='{$user_name}',`age`={$age} WHERE `user_id`={$id}";

    $crud->update($sql);
    // $query = mysqli_query($this->conn, $sql);
    // if ($query) {
    //     echo "<script> alert('Successfully Updated'); </script>";
    //     header("location: index.php");
    // } else {
    //     echo "<script> alert(' Updated fail'); </script>";
    //     header("location: update.php");
    // }
}

// var_dump($val);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Curd Operation by PHP OPP</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="md-6 ">
                <div class="card m-auto">
                    <div class="card_title" style="margin-top: 20px;">

                    </div>
                    <div class="card_body">
                        <form method="POST" action="update.php" class="form-control m-auto">
                            <label for="name">Name: </label>
                            <input type="text" name="user_name" value="<?php echo $val['name']; ?>">
                            <label for="name">Age: </label>
                            <input type="number" name="age" value="<?php echo $val['age']; ?>">
                            <input hidden type="number" name="user_id" value="<?php echo $val['user_id']; ?>">
                            <br>
                            <button type="submit" style="margin: 50px; margin-left: 250px;" class="m-50" name="btn_update">Update</button>
                        </form>
                    </div>
                    <div class="card_fotter"></div>

                </div>
            </div>
        </div>
    </div>

    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>