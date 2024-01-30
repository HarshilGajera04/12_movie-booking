<!DOCTYPE html>
<html>

<head>
    <?php
    include_once "./Database.php";
    $userId = @$_GET['id'];
    $selectQuery = "SELECT * FROM `user` WHERE `id` = '$userId'";
    $result = mysqli_query($conn, $selectQuery);

    while ($row = mysqli_fetch_assoc($result)) {
        $usename = $row['username'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $city = $row['city'];
        $password = $row['password'];
        $file = $row['image'];
    }
    ?>
    <title>Slide Navbar</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet"> -->
    <style>
        body {
            margin: 0px;
            padding: 0px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Jost', sans-serif;
            background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
        }

        .main {
            width: 350px;
            height: 550px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }

        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: 20px;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #fff;
            background: #573b8a;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }

        button:hover {
            background: #6d44b8;
        }

        /* .login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
} */
        /* .login label{
	color: #573b8a;
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
} */
        #chk:checked~.signup label {
            transform: scale(.6);

        }
    </style>
</head>

<body>
    <div class="main">
        <input type="checkbox" id="chk" aria-hidden="true">

        <div class="signup">
            <form action="./updateusercode.php?id=<?php echo $userId; ?>" method="POST">
                <label for="chk" aria-hidden="true">Show Timing</label>
                <input type="text" name="txt" placeholder="username" value="<?php echo $username; ?>">
                <input type="email" name="email" placeholder="email" value="<?php echo $email; ?>">
                <input type="text" name="mobile" placeholder="mobile" value="<?php echo $mobile; ?>">
                <input type="text" name="city" placeholder="city" value="<?php echo $city; ?>">
                <input type="text" name="password" placeholder="password" value="<?php echo $password; ?>">

                <button type="submit">Update Movie</button>
            </form>
            <a href="./users.php"><button>back</button></a>
</body>

</html>