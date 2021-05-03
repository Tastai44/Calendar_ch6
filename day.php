<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Days</title>
</head>
<body>

<h1>Appointment</h1>
        <table align="center" ><tr align="center"><td>
            <h3><form action="day.php" method="post">
                        <input placeholder="Date" type="date" name="date"><br />
                        <input placeholder="Title" type="text" name="title" /><br />
                        <input placeholder="Details" type="text" name="details" /><br />
                        <input class="enter_button" type="submit" value="Go">
                    </form>
                </h3>
                <button><a href="All_appointment.php" class="enter_button" target="_blank">All appointments</a></button>
        </td></tr></table>

<?php
    $day = date('d', strtotime($_POST['date']));
    $month = date('m', strtotime($_POST['date']));
    $year = date('Y', strtotime($_POST['date']));
    $d = $year."-".$month."-01";
    $firstday = date('N', strtotime($d));
    $D = date('j', strtotime($_POST['date']));
    $week = date('N', strtotime($_POST['date']));
    $time = date("H" , strtotime($_POST['date']));
    $time_M = date("i" , strtotime($_POST['date']));
    $time_S = date("s" , strtotime($_POST['date']));
    $days = date('t', strtotime($_POST['date'])); 
    $title = $_POST['title'];
    $details = $_POST['details'];// use for keep details.
    $dates = date('Y-m-d', strtotime($_POST['date'])); // use for keep input date.
    $today = date('d');
    $daytoday = date('D', strtotime($_POST['date'])); // date with name
    $todaymonth = date('m');
    $daymonth = date('M', strtotime($_POST['date'])); // month with name
    $todayyear = date('Y');
    include("database.php");
    

?>    

    
    
    <h3 class="head_show"><?php echo " ".$day." ".$month. " " .$year;?> AD 
           
            <button><a href="month.php">Month</a></button> 
            <button><a href="week.php">Weeks</a></button> 
            <button> <a href="day.php">Days</a></button> 
            </h3>
           
    <table align ="center" class="box">
        <tr ><td>
            <h3>
            <?php
            
               
                if($D<32){
                    
                    if ($today == $D && $todaymonth==$month && $todayyear == $year) {
                        echo ' '; 
                    }
                    echo '<br>';
                    if($week == 1) {
                        echo 'Monday';
                    }elseif($week == 2){
                        echo 'Tuesday';
                    }elseif($week == 3){
                        echo 'Wednesday';
                    }elseif($week == 4){
                        echo 'Thursday';
                    }elseif($week == 5){
                        echo 'Friday';
                    }elseif($week == 6){
                        echo 'Saturday';
                    }elseif($week == 7){
                        echo 'Sunday';
                    }
                    if($day==$D){
                        echo "  Events: ".$title;   
                    }
                    echo '<div class="new4">'; 
                    echo '<br>';
                    for($i=0; $i<=$time+23; $i++){
                        echo " ".$i. ":".$time_M.":".$time_S.'<br>';
                        echo '<div class="new4">'; 
                        echo '<br>';
                    }       
                } 
                                   
        ?>
            
            </h3>     
        </td></tr>
    </table>
</body>
</html>