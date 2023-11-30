<html>
<head></head>
<body bgcolor="aqua"><center></b><br><br>
<?php
$firstname = filter_input(INPUT_POST, 'firstname');
$lastname = filter_input(INPUT_POST, 'lastname');
$country = filter_input(INPUT_POST, 'country');
$email = filter_input(INPUT_POST, 'email');
$contact_no = filter_input(INPUT_POST, 'contact_no');
$book = filter_input(INPUT_POST, 'book');
$fb_book = filter_input(INPUT_POST, 'fb_book');
$feedback = filter_input(INPUT_POST, 'feedback');
$rate = filter_input(INPUT_POST, 'rate');

if (!empty($firstname)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "board";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            .mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO success (firstname, lastname, country, email, contact_no, book, fb_book, feedback, rate)values ('$firstname','$lastname', '$country', '$email', '$contact_no', '$book', '$fb_book', '$feedback', '$rate')";
            if ($conn->query($sql)){
                echo "New record is inserted sucessfully";
            }
            else{
                echo "Error: ". $sql ."
                ". $conn->error;
            }
            $conn->close();
        }
}
else{
    echo "firstname should not be empty";
    die();
}
?>
</b><br><br>
<div class="btn-group">
	<button onclick="window.location.href = 'registrationhtml.html';">Previous</button>
	<button onclick="window.location.href = 'alert.html';">Next</button>
	<button onclick="window.location.href = 'website.html';">Home</button>
</div>
</center>
</body>
</html>