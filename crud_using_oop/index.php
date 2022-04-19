<?php
include("crud_obj.php");

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
                        <form method="POST" action="index.php" class="form-control m-auto">
                            <label for="name">Name: </label>
                            <input type="text" name="user_name">
                            <label for="name">Age: </label>
                            <input type="number" name="age">
                            <br>
                            <button type="submit" style="margin: 50px; margin-left: 250px;" class="m-50" name="btn_save">Save</button>
                        </form>
                    </div>
                    <div class="card_fotter"></div>

                </div>
            </div>
            <div class="md-6">
                <div class="show">
                    <table border="2" class="table table-danger">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Actions</th>
                            </tr>


                        </thead>
                        <tbody>


                            <?php
                            $rows = $crud->read("SELECT * FROM user_info");
                            foreach ($rows as $val) {

                            ?>
                                <tr>
                                    <td>
                                        <?php echo $val['name'];
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $val['age'];
                                        ?>
                                    </td>

                                    <td><button style="text-decoration: none;" id="update" class="btn btn-primary" type='submit'><a style="text-decoration: none;color:white" href="update.php?id=<?php echo $val['user_id'] ?>">Update</a></button></td>

                                    <td> <button type='submit' class="btn btn-danger"><a style="text-decoration: none;color:white" href="delete.php?id=<?php echo $val['user_id'] ?>">Delete</a></button></td>
                                </tr>


                            <?php } ?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    ZZ
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>