<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     
     // Create connection
     $conn = new mysqli($servername, $username, $password);
     
     // Check connection
     $sql= "CREATE DATAB"
    ?>
    <div class="head">
    <div class="container">
    <div class="heading">Registration Form</div>
    <p>Pleade fill in the form below</p>
    <div class="hr"></div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <textarea name="address" id="txtarea"  rows="4" placeholder="Address"></textarea><br>
        <input type="number" name="phone" placeholder="Phone No"><br>
        <input type="date" name="dob" placeholder="Date of Birth"><br>
        <label for="gender" class="hed">Gender </label><br>
        <label for="male">Male :</label>
        <input type="radio" name="gender" value="Male">
        <label for="female">Female :</label>
        <input type="radio" name="gender" value="Female"> 
        <label for="other">Other :</label>
        <input type="radio" name="gender" value="Other"><br>
        <label for="education"  class="hed">Education</label><br>
        <select name="education" id="education">
            <option value="Higher Secondary">Higher Seconday</option>
            <option value="Graduated">Graduated</option>
            <option value="Post graduation">Post Gradation</option>
            <option value="PHD">PHD</option>
            <option value="Doctral">Doctral</option>
        </select><br>
        <label for="interests" class="hed">Insterests</label><br>
        <label for="truking"> Trucking :</label>
        <input type="checkbox" name="interests" value="Trucking"><br>
        <label for="vid games"> Video Games :</label>
        <input type="checkbox" name="interests" value="Video Games"><br>
        <label for="hang out">Hanging Out :</label>
        <input type="checkbox" name="interests" value="Hanging Out"><br>
        <label for="anime">Anime :</label>
        <input type="checkbox" name="interests" value="Anime"><br>
        <label for="do nothing"> Doing Nothing :</label>
        <input type="checkbox" name="interests" value="Doing Nothing"><br>
        <label for="working" class="hed">Working</label><br>
        <label for="yes">Yes :</label>
        <input type="radio" name="working" value="Yes" >
        <label for="yes">No :</label>
        <input type="radio" name="working" value="No"><br>
        <input type="number" name="anum" placeholder="Annual Income in Rupees"><br>
        <input type="submit"  value="Submit">
    </form> 
    </div>
    </div>
</body>
</html>