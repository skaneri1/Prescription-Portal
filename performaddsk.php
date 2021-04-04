<?php
    require "../configs/config.php";
    require "./common.php";

        try {
            $connection = new PDO($dsn, $username, $password, $options);

            $tempname = $_POST['name'];

            $sql1 = "SELECT * FROM shlok WHERE name = '$tempname'";

            $statement1 = $connection->prepare($sql1);
            $statement1->execute();

            if ($statement1->rowCount() > 0){
                header('Refresh:5; url=index.php');
                echo "<h2 style='padding-left: 30px; padding-top: 30px'>".'Error 404: This prescription already exists for Shlok.'."</h2>";
                echo "<h4 style='padding-left: 30px; padding-top: 10px'>".'Try entering a different prescription from the patient portal'."</h4>";
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

            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "shlok",
                implode(", ", array_keys($new_pres)),
                ":" . implode(", :", array_keys($new_pres)));

            $statement = $connection->prepare($sql);
            $statement->execute($new_pres);

            header('Refresh:5; url=index.php');
            echo "<h2 style='padding-left: 30px; padding-top: 30px'>".'Congratulations! The Prescription has been saved!'."</h2>";
            echo "<h4 style='padding-left: 30px; padding-top: 10px'>".'You can view this submission for Shlok in the Prescriptions tab'."</h4>";
            echo "<h2 style='padding-left: 30px; padding-top: 10px'>".'This page will redirect back to patients in 5 seconds.'."</h2>";
        }

        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>
