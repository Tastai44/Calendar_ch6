
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calendar</title>
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
                <button><a href="database.php">All appointments</a></button>
        </td></tr></table>
            
        
    

    
</body>
</html>
