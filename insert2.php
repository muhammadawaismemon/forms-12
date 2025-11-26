<?php
include 'db2.php';
?>
<!DOCTYPE html>
<html>
<head>
    <center>
    <title>Insert Teacher Record - Imagine Center</title>
    
    <style>
        body{
            background-color:RGB(168, 129, 50);
        }
        label{
            display: inline-block;
            width: 170px;
            border-radius: 5px;
            font-size: 20px;
            font-style=italic;
            color:white;
            background-color: RGB(168, 129, 50);
            padding: 5px;

        }
        input[type="text"], input[type="number"]{
            width: 180px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .all{
            border: 1px solid black;
            width: 300px;

            padding: 20px;
            border-radius: 10px;
            background-color: RGB(240, 248, 255);
        }
        h2,h1{
            color: white;
            width: 250px;
            border-radius: 10px;
            font-size: 30px;
            font-style=italic;
            text-shadow: 2px 2px  #000000;

              }
        .awa{
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 16px;
                background-color: RGB(168, 129,0);
                color: white;
                border: none;

              }

              /* ---------- GLOBAL RESPONSIVE DESIGN ---------- */

/* Small Screens: Phones (max-width: 600px) */
@media only screen and (max-width: 600px) {
    body {
        padding: 10px;
    }

    .all {
        width: 90%;
        padding: 15px;
    }

    label {
        width: 100%;
        font-size: 18px;
        text-align: left;
        margin-bottom: 5px;
    }

    input[type="text"], input[type="number"] {
        width: 100%;
    }

    h1, h2 {
        width: 100%;
        text-align: center;
        font-size: 24px;
    }

    .awa {
        width: 100%;
        padding: 12px;
        font-size: 18px;
    }
}


/* Medium Screens: Tablets (600px – 900px) */
@media only screen and (min-width: 600px) and (max-width: 900px) {
    .all {
        width: 70%;
        padding: 18px;
    }

    label {
        width: 40%;
        font-size: 18px;
    }

    input[type="text"], input[type="number"] {
        width: 55%;
    }

    h1, h2 {
        font-size: 28px;
    }



/* Large Screens / Desktops (900px – 1400px) */
@media only screen and (min-width: 900px) and (max-width: 1400px) {
    .all {
        width: 40%;
    }

    label {
        width: 45%;
    }

    input[type="text"], input[type="number"] {
        width: 50%;
    }
}

/* Extra Large Screens (TVs / Wide monitors >1400px) */
@media only screen and (min-width: 1400px) {
    .all {
        width: 30%;
    }
}

    </style>

</head>
<body>
    <h2>Insert Teacher Details</h2>

    <!-- HTML Form -->
    <form method="post" action="">
        <label>Name:</label>
        <input type="text" name="stname" required><br><br>

        <label>Father name:</label>
        <input type="text" name="fathername" required><br><br>

        <label>Education:</label>
        <input type="text" name="education" required><br><br>

        <label>About you:</label>
        <input type="text" name="aboutyou" required><br><br>

        
        <input class="awa", type="submit" name="submit" value="Insert">
    </form>

<?php

// PHP code to handle form submission
if (isset($_POST['submit'])) {

    // Get form data
    $name = $_POST['stname'];
    $fathername = $_POST['fathername'];
    $Education = $_POST['education'];
    $Aboutyou = $_POST['aboutyou'];

    // Insert Query
    $sql = "INSERT INTO student (Name, Father_name, Education, About_you) 
            VALUES ('$name', '$fathername', '$Education', '$Aboutyou')";

    if (mysqli_query($conn, $sql)) {
        echo "<h1>Record Inserted Successfully!</h1>";
        // header("Location: select.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
</center>
</body>
</html>