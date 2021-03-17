<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="footer, address, phone, icons" />

    <!--footer-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='https://fonts.googleapis.com/css?family=Sofia' rel='stylesheet'>


    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">

    <link rel="stylesheet" type="text/css" href="assets/css/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--<title><?php echo $arr['title']?></title>-->


    <link href="assets/fontawesome/css/all.css" rel="stylesheet">







    <link rel="icon" type="image/png" href="assets/logo/cm short.png">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <title>Counselling Manager</title>
    <style>
    h4 {
        font-family: 'Sofia';
        font-size: 22px;
    }

    #navbaar {
        overflow: hidden;

    }

    #navbaar a {
        float: left;
        display: block;

        text-align: center;
        padding: 14px;

    }

    .sticky {

        top: 0;
        width: 100%;
    }

    body,
    h1,
    h2,
    h3,
    h5 {
        font-family: "Poppins", sans-serif
    }

    body {
        font-size: 16px;
        overflow: auto;
    }

    .w3-half img {
        margin-bottom: -6px;
        margin-top: 16px;
        opacity: 0.8;
        cursor: pointer
    }

    .w3-half img:hover {
        opacity: 1
    }

    hr.style-three {
        height: 30px;
        border-style: solid;
        border-color: black;
        border-width: 1px 0 0 0;
        border-radius: 20px;
    }

    hr.style-three:before {
        display: block;
        content: "";
        height: 30px;
        margin-top: -31px;
        border-style: solid;
        border-color: black;
        border-width: 0 0 1px 0;
        border-radius: 20px;
    }
    </style>
</head>




<body class="w3-light-grey">
    <div id="login">
        <h3 class="text-center text-dark pt-5">Add a task with a Slot</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="index.php" method="post">
                            <h3 class="text-center text-info">TASK</h3>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Select Task</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="t_id">
                                <?php
                                foreach ($tasks as $row) {
                                ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['task_name']; ?></option>
                                    <?php 
                                } ?>
                                    
                                </select>
                            </div>
                            <input type="hidden" name="slot_h" value="<?php echo $_GET['slot_h'];?>">
                            <input type="hidden" name="slot_d" value="<?php echo $_GET['slot_d'];?>">

                            <input type="hidden" name="function" value="insert_slot_task">
                            <input type="hidden" name="controller" value="GS_ROUTINE_GUI">


                            <div class="form-group">

                                <input type="submit" name="sign_in" class="btn btn-info btn-md" value="Update Slot">
                            </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>