

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Weeks</title>
</head>
<body>

<h1>Appointment</h1>
        <table align="center" ><tr align="center"><td>
            <h3><form action="week.php" method="post">
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
    $days = date('t', strtotime($_POST['date'])); 
    $title = $_POST['title'];
    $details = $_POST['details'];// use for keep details.
    $dates = date('Y-m-d', strtotime($_POST['date'])); // use for keep input date.
    $today = date('d');
    $daytoday = date('D', strtotime($_POST['date'])); // date with name
    $todaymonth = date('m');
    $daymonth = date('M', strtotime($_POST['date'])); // month with name
    $todayyear = date('Y');
    $II; // use for day's number of week.
    include("database.php");
 

?>    

    <table align ="center">
        <tr><td>
            <h3><?php echo " ".$day." ".$month. " " .$year;?> AD 
            
            <button><a href="month.php">Month</a></button> 
            <button><a href="week.php">Weeks</a></button> 
            <button> <a href="day.php">Days</a></button> 
            </h3>
            </td></tr>
        <tr><td>
            <div class="calendar"> 
            <!-- <div class="days">Sunday</div> <div class="days">Monday</div> 
            <div class="days">Tuesday</div> <div class="days">Wednesday</div> 
            <div class="days">Thursday</div> <div class="days">Friday</div>
            <div class="days">Saturday</div> -->
            
            <?php
                if($firstday == 7) {
                    $II = 0;
                }
                elseif($firstday == 6){
                    $II = 1;
                }elseif($firstday == 5) {
                    $II = 2;
                }elseif($firstday == 4) {
                    $II = 3;
                }elseif($firstday == 3) {
                    $II = 4;
                }elseif($firstday == 2) {
                    $II = 5;
                }elseif($firstday == 1) {
                    $II = 6;
                }
                    for($k=$D; $k<$D+7; $k++){
                        if($k>=32){
                            break;
                        }
                        echo '<div class="date';
                        if ($today == $k && $todaymonth==$month && $todayyear == $year) {
                        echo ' today'; 
                        }
                        echo '">'.$k.'<br>';
                        
                        if($day==$k){
                            echo $title;
                            
                        }
                        echo '</div>'; }    
            ?>
            </div>
        </td></tr>
    </table>
</body>
</html>