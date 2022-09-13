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
    $err_name = $err_phone = $err_email = $err_address = $err_gender = $err_education = $err_dob = $err_interests = $err_working = $err_annum = "";
    $name = $email = $phone = $gender = $address = $education = $dob = $interests =  $annum = $trucking = $vid_games = $hanging_out = $anime = "";
    if (isset($_POST["submit"])) {
        if(isset($_POST['trucking'])){
            $trucking = $_POST['trucking'];
        }
        if(isset($_POST['vid_games'])){
            $vid_games = $_POST["vid_games"];
        }
        if(isset($_POST['hanging_out'])){
            $hanging_out = $_POST["hanging_out"];
        }
        if(isset($_POST['anime'])){
            $anime = $_POST["anime"];
        }
        if(isset($_POST['working'])){
            $working = $_POST["working"];
        }
        if(isset($_POST['gender'])){
            $gender = $_POST["gender"];
        }
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $address = $_POST["address"];
        $dob = $_POST["dob"];
        $education = $_POST["education"];
        $annum = $_POST["annum"];
        
        // name validation
        if (strlen($_POST["name"]) < 3) {
            $err_name = "Your name should be atleast 3 characters long";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$ /", $name)) {
                $err_name = "Only Alphabets  and white spaces are allowed in the Name";
            }
        }
        // email validation
        if (empty($email)) {
            $err_email = "Email can't be empty";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $err_email = "Please enter a valid email";
            }
        }
        // phone no validation
        if (empty($phone)) {
            $err_phone = "Phone number can't be empty";
        } else {
            if (!((preg_match('/^[0-9]{10}+$/', $phone)) && preg_match('/@.+\./', $email))) {
                $err_phone = "Phone number should only contain digits and can't be longer than 10 digits";
            }
        }
        // address 
        if (empty($address)) {
            $err_address = "Your need to enter your address";
        } else {
            if (strlen($address) < 6) {
                $err_address = "Address should be atleast 6 characters";
            }
        }
        // date of birth
        if (empty($dob)) {
            $err_dob = "Your need to enter your Date of birth";
        }
        // education 
        if (empty($education)) {
            $err_education = "You need to select your education";
        }
        // annum 
        if (empty($annum)) {
            $err_annum = "Your need to enter your annual income";
        } else {
            if ($annum < 100000) {
                $err_annum = "You need atlest ₹100000 Annual income to register";
            }
        }
        // gender 
        if (empty($_POST["gender"])) {
            $err_gender = "Please select an option";
        }
        // intersts 
        //    working 
        if (empty($working)) {
            $err_working = "You need to specify weather your are working or not";
        }
    }
    //  $servername = "localhost";
    //  $username = "root";
    //  $password = "";

    //  // Create connection
    //  $conn = new mysqli($servername, $username, $password);

    //  // Check connection
    //  $sql= "CREATE DATAB"
    ?>
    <div class="head">
        <div class="container">
            <div class="heading">Application Form</div>
            <p>Please fill in the form below</p>
            <div class="hr"></div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="text" name="name" value="<?php echo htmlentities($name);?>" placeholder="Name"><br>
                <div class="err"><?php echo "$err_name";?></div>
                <input type="email" name="email" value="<?php echo htmlentities($email); ?>" placeholder="Email"><br>
                <div class="err"><?php echo $err_email;?></div>
                <textarea name="address" id="txtarea" rows="4" placeholder="Address"><?php echo $address;?></textarea><br>
                <div class="err"><?php echo $err_address?></div>
                <input type="number" name="phone" value="<?php echo htmlentities($phone); ?>" placeholder="Phone No"><br>
                <div class="err"><?php echo $err_phone?></div>
                <label for="dob" class="hed">Date of Birth </label><br>
                <input type="date" name="dob" value="<?php echo htmlentities($dob); ?>" placeholder="Date of Birth"><br>
                <div class="err"><?php echo $err_dob?></div>
                <label for="gender" class="hed">Gender </label><br>
                <label for="male">Male :</label>
                <input type="radio" name="gender" value="Male" <?php if ((isset($_POST['gender'])) && $_POST['gender'] == "male") {
                                                                    echo 'checked="checked"';
                                                                }; ?>>
                <label for="female">Female :</label>
                <input type="radio" name="gender" value="Female" <?php if ((isset($_POST['gender'])) && $_POST['gender'] == "female") {
                                                                        echo 'checked="checked"';
                                                                    }; ?>>
                <label for="other">Other :</label>
                <input type="radio" name="gender" value="Other" <?php if ((isset($_POST['gender'])) && $_POST['gender'] == "other") {
                                                                    echo 'checked="checked"';
                                                                }; ?>><br> <div class="err"><?php echo $err_gender?></div>
                <label for="education" class="hed">Education</label><br>
                <select name="education" id="education">
                    <option value="" ></option>
                    <option value="Higher Secondary" <?= $education == 'Higher Secondary' ? ' selected="selected"' : ''; ?>>Higher Seconday</option>
                    <option value="Graduated" <?= $education == 'Graduated' ? ' selected="selected"' : ''; ?>>Graduated</option>
                    <option value="Post Graduation" <?= $education == 'Post Graduation' ? ' selected="selected"' : ''; ?>>Post Gradation</option>
                    <option value="PHD" <?= $education == 'PHD' ? ' selected="selected"' : ''; ?>>Graduated</option>>PHD</option>
                    <option value="Doctral" <?= $education == 'Doctral' ? ' selected="selected"' : ''; ?>>Graduated</option>>Doctral</option>
                </select><br> <div class="err"><?php echo $err_education?></div>
                <label for="interests" class="hed">Insterests</label><br>
                <label for="truking"> Trucking :</label>
                <input type="checkbox" name="trucking" value="Trucking" <?php echo ($trucking == "trucking" ? 'checked' : ''); ?>><br>
                <label for="vid games"> Video Games :</label>
                <input type="checkbox" name="vid_games" value="Video Games" <?php echo ($vid_games == "Video Games" ? 'checked' : ''); ?>><br>
                <label for="hang out">Hanging Out :</label>
                <input type="checkbox" name="hanging_out" value="Hanging Out" <?php echo ($hanging_out == "Hanging Out" ? 'checked' : ''); ?>><br>
                <label for="anime">Anime :</label>
                <input type="checkbox" name="anime" value="Anime" <?php echo ($anime == "Anime" ? 'checked' : ''); ?>><br>
                <label for="working" class="hed">Working</label><br>
                <label for="yes">Yes :</label>
                <input type="radio" name="working" value="Yes" <?php if ((isset($_POST['working'])) && $_POST['working'] == "Yes") {
                                                                    echo 'checked="checked"';
                                                                }; ?>>
                <label for="yes">No :</label>
                <input type="radio" name="working" value="No" <?php if ((isset($_POST['working'])) && $_POST['working'] == "No") {
                                                                    echo 'checked="checked"';
                                                                }; ?>><br> <div class="err"><?php echo $err_working?></div>
                <input type="number" name="annum" placeholder="Annual Income in Rupees" value="<?php echo htmlentities($annum); ?>"><br>
                <div class="err"><?php echo $err_annum?></div>
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>