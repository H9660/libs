<html>
<head></head>
<body bgcolor="yellow"><center></b><br><br>
<?php
$isbn = filter_input(INPUT_POST, 'isbn');
$title = filter_input(INPUT_POST, 'title');
$author = filter_input(INPUT_POST, 'author');
$edition = filter_input(INPUT_POST, 'edition');
$publication = filter_input(INPUT_POST, 'publication');

if (!empty($isbn)){
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "project";
        // Create connection
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


        if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            .mysqli_connect_error());
        }
        else{
            $sql = "INSERT INTO teams (isbn, title, author, edition, publication)values ('$isbn','$title', '$author', '$edition', '$publication')";
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
    echo "ISBN should not be empty";
    die();
}
?>
</b><br><br>
<div class="btn-group">
	<button onclick="window.location.href = 'searchhtml.html';">Previous</button>
	<button onclick="window.location.href = 'alert.html';">Next</button>
	<button onclick="window.location.href = 'website.html';">Home</button>
</div>
</center>
</body>
</html>