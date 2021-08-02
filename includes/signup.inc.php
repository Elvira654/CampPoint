<?php 

		include_once 'dbh.inc.php';

		$mejl = $_POST['email'];
		$ims = $_POST['first'];
		$prz = $_POST['last'];


            $sql = "INSERT INTO rezerv (ime, mail, prezime) VALUES ('$ims','$mejl','$prz')"; 
           mysqli_query($conn, $sql);

           header("Location: ../informacije.php")
           
           ?>
            




