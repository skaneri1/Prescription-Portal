<?php
    require "../configs/config.php";
    require "./common.php";

        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $tempname = $_POST['name'];

        $sql1 = "SELECT * FROM dhruv WHERE name = '$tempname'";

        $statement1 = $connection->prepare($sql1);
        $statement1->execute();

        if ($statement1->rowCount() > 0){
            header('Refresh:5; url=index.php');
            echo "<h2 style='padding-left: 30px; padding-top: 30px'>".'Error 404: This prescription already exists for Dhruv.'."</h2>";
            echo "<h5 style='padding-left: 30px; padding-top: 10px'>".'Try entering a different prescription from the patient portal'."</h5>";
            echo "<h2 style='padding-left: 30px; padding-top: 10px'>".'This page will redirect back to patients in 5 seconds.'."</h2>";
            exit();
        }

        $new_pres = array(
            "name"       => escape($_POST['name']),
            "freq"       => escape($_POST['freq']),
            "instruc"      => escape($_POST['instruc']),
            "filled"    => escape($_POST['filled'])
        );

        if ($_POST['lastfill']) {
            $new_pres+= ["lastfill" => escape($_POST['lastfill'])];
        }
        //If entry exists in shlok...header('Refresh:5; url=index.php');...echo 404 error and say record exists

        //else...do all the rest
        $sql = sprintf(
          "INSERT INTO %s (%s) values (%s)",
          "dhruv",
          implode(", ", array_keys($new_pres)),
          ":" . implode(", :", array_keys($new_pres)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_pres);


        header('Refresh:5; url=index.php');
        echo "<h2 style='padding-left: 30px; padding-top: 30px'>".'Congratulations! The Prescription has been saved!'."</h2>";
        echo "<h5 style='padding-left: 30px; padding-top: 10px'>".'You can view this submission for Dhruv in the Prescriptions tab'."</h5>";
        echo "<h2 style='padding-left: 30px; padding-top: 10px'>".'This page will redirect back to patients in 5 seconds.'."</h2>";
        }

        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>
