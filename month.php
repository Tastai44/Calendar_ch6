

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Month</title>
</head>
<body>


<h1>Appointment</h1>
        <table align="center" ><tr align="center"><td>
            <h3><form action="month.php" method="post">
                        <input placeholder="Date" type="date" name="date"><br />
                        <input placeholder="Title" type="text" name="title" /><br />
                        <input placeholder="Details" type="text" name="details" /><br />
                        <input class="enter_button" type="submit" value="Go">
                    </form>
                </h3>
                <button><a href="All_appointment.php" class="enter_button" target="_blank">All appointments</a></button>
        </td></tr>
        </table>
    <?php
    
    $day = date('d', strtotime($_POST['date']));
    $month = date('m', strtotime($_POST['date']));
    $year = date('Y', strtotime($_POST['date']));
    $d = $year."-".$month."-01";
    $firstday = date('N', strtotime($d));
    $dates = date('Y-m-d', strtotime($_POST['date'])); // use for keep input date.
    $details = $_POST['details'];// use for keep details.
    $days = date('t', strtotime($_POST['date'])); 
    $title = $_POST['title'];
    $today = date('d');
    $daytoday = date('D', strtotime($_POST['date'])); // date with name
    $todaymonth = date('m');
    $daymonth = date('M', strtotime($_POST['date'])); // month with name
    $todayyear = date('Y');
    include("database.php");
    
?>

<!-- Calendar -->
    <table align ="center">
        <tr><td>
            <h3>
                <?php echo " ".$day." ".$month. " " .$year;?> AD 
                <!-- <a href="?ym=<?php echo date("m",strtotime($d. ' - 1 Month'));?>"><</a> -->
                <button> <a href="month.php">Month</a></button> 
                <button> <a href="week.php">Weeks</a></button> 
                <button> <a href="day.php">Days</a></button>
                <!-- <a href="?ym=<?php echo date("m",strtotime($d.' + 1 Month'));?>">></a> -->
            </h3>
            </td></tr>
        <tr><td>
            <div class="calendar"> 
            <div class="days">Sunday</div> <div class="days">Monday</div> 
            <div class="days">Tuesday</div> <div class="days">Wednesday</div> 
            <div class="days">Thursday</div> <div class="days">Friday</div>
            <div class="days">Saturday</div>
            <?php
                for($i=1; $i<=$firstday; $i++) {
                echo '<div class="date blankday"></div>'; }
            ?>
            <?php
                for($i=1; $i<=$days; $i++) {
                echo '<div class="date';
                if ($today == $i && $todaymonth==$month && $todayyear == $year) {
                echo ' today'; 
                }
                echo '">'.$i.'<br>'; 
                if($day==$i){
                    echo $title;    
                }
                echo '</div>'; }
            ?>
            <?php
                $daysleft = 7-(($days + $firstday)%7); 
                if($daysleft<7){
                    for($i=1; $i<=$daysleft; $i++) {
                    echo '<div class="date blankday"></div>'; }
            }?>
            </div>
    </td></tr></table>
    
</body>
</html>

