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
    <?php
	    header("Refresh: 60");

	    date_default_timezone_set('Asia/Dhaka');

	    $script_tz = date_default_timezone_get();

	    $current_hour= date("H");
      
	    ?>

    <?php
	    //echo "<br>";
	    $d=cal_days_in_month(CAL_GREGORIAN,3,2020);
	    //echo "There was $d days in March 2020";

	    echo "<br>";
	    $jd=gregoriantojd(3,1,2020);//1 march 2020
      

	    //echo "<br>";
	    $d=mktime(12, 39, 17, 3, 20, 2020);
	    //echo "Created date is " . date("Y-m-d h:i:sa", $d);


      
	    //echo "<br>";

	    function numtomonth($nmonth)
	    {
	      if($nmonth==1){
	        return "January";
	      }elseif ($nmonth==2) {
	        return "February";
	      }elseif ($nmonth==3) {
	        return "March";
	      }elseif ($nmonth==4) {
	        return "April";
	      }elseif ($nmonth==5) {
	        return "May";
	      }elseif ($nmonth==6) {
	        return "Jun";
	      }elseif ($nmonth==7) {
	        return "July";
	      }elseif ($nmonth==8) {
	        return "August";
	      }elseif ($nmonth==9) {
	        return "September";
	      }elseif ($nmonth==10) {
	        return "October";
	      }elseif ($nmonth==11) {
	        return "November";
	      }elseif ($nmonth==12) {
	        return "December";
	      }else
	      {
	        $nmonth=$nmonth-12;
	        return numtomonth($nmonth);
	      }
	    }
      function numtoday($nday)
	    {
	      if($nday==1){
	        return "Saturday";
	      }elseif ($nday==2) {
	        return "Sunday";
	      }elseif ($nday==3) {
	        return "Monday";
	      }elseif ($nday==4) {
	        return "Tuesday";
	      }elseif ($nday==5) {
	        return "Wednesday";
	      }elseif ($nday==6) {
	        return "Thursday";
	      }elseif ($nday==7) {
	        return "Friday";
	      }
	    }
?>


    <div class="table-responsive-lg" id="divtb">
        <table class="table table-bordered table-warning table-sm ">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Day</th>
                    <th scope="col">8am-9am</th>
                    <th scope="col">9am-10am</th>
                    <th scope="col">10am-11am</th>
                    <th scope="col">10am-11am</th>
                    <th scope="col">11am-12pm</th>
                    <th scope="col">12pm-1pm</th>
                    <th scope="col">1pm-2pm</th>
                    <th scope="col">2pm-3pm</th>
                    <th scope="col">3pm-4pm</th>
                    <th scope="col">4pm-5pm</th>
                    <th scope="col">5pm-6pm</th>
                    <th scope="col">6pm-7pm</th>
                    <th scope="col">7pm-8pm</th>
                    <th scope="col">8pm-9pm</th>
                    <th scope="col">9pm-10pm</th>

                </tr>
            </thead>
            <tbody>
                <?php
              for($i=1;$i<=7;$i++){
            ?>


                <tr <?php if(date("l")==numtoday($i)){ ?>style="height:70px;" <?php } ?>
                    <?php if(date("l")==numtoday($i)){echo "bgcolor='#9dfc03'";  }?>>
                    <th class="text-dark" scope="row "><?php if(date("l")==numtoday($i)){ echo date("Y-m-d"); } ?></th>
                    <td class="text-dark font-weight-bold"><?php echo numtoday($i); ?></td>
                    <?php
                    for($r=8;$r<=22;$r++){
                      if($current_hour==$r&&date("l")==numtoday($i)){
                        
                    ?>
                    <a href="index.php?function=slot_task&slot_h=<?php echo $r;?>&slot_d=<?php echo $i;?>">
                        <td class="m-0 p-0 font-weight-bold text-dark text-center bg-warning" style="font-size: 20px;">
                            <a href="index.php?function=slot_task&slot_h=<?php echo $r;?>&slot_d=<?php echo $i;?>">
                                task-<?php echo $i." ".$r;?>
                            </a>
                        </td>

                        <?php

                      }elseif($current_hour>$r&&date("l")==numtoday($i)){
                        ?>

                        <td class="m-0 p-0 bg-secondary text-white">
                            <a href="index.php?function=slot_task&slot_h=<?php echo $r;?>&slot_d=<?php echo $i;?>">
                                task-<?php echo $i." ".$r;?>
                            </a>
                        </td>

                        <?php

                      }else{
                        ?>

                        <td class="m-0 p-0">
                            <a href="index.php?function=slot_task&slot_h=<?php echo $r;?>&slot_d=<?php echo $i;?>">
                                task-<?php echo $i." ".$r;?>
                            </a>
                        </td>

                        <?php

                      }
                      
              }
              ?>

                </tr>

                <?php
              }
              ?>



            </tbody>
        </table>
    </div>
    <a href="index.php?function=add_new_task"><button type="button" class="btn btn-dark">Add New Task</button></a>

    </div>








    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>