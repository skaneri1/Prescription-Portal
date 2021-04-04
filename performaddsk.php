<?php
    require "../configs/config.php";
    require "./common.php";

        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_pres = array(
            "name"       => escape($_POST['name']),
            "freq"       => escape($_POST['freq']),
            "instruc"      => escape($_POST['instruc']),
            "filled"    => escape($_POST['filled'])
        );

        if ($_POST['lastfill']) {
            $new_pres+= ["lastfill" => escape($_POST['lastfill'])];
        }

        $sql1 = "SELECT name from shlok where name = ':dbname'";

        $statement1 = $connection->prepare($sql1);
        $statement1->bindParam(":dbname", "name");
        $statement1->execute();

        if($stmt->rowCount() > 0){
            header('Refresh:5; url=index.php');
            echo "<h2 style='padding-left: 20px; padding-top: 20px'>".'Error 404: This prescription already exists for this patient.'."</h2>";
            echo "<h2 style='padding-left: 20px; padding-top: 20px'>".'This page will redirect back to patients in 5 seconds.'."</h2>";
          }
        else{
            $sql = sprintf(
                "INSERT INTO %s (%s) values (%s)",
                "shlok",
                implode(", ", array_keys($new_pres)),
                ":" . implode(", :", array_keys($new_pres)));

            $statement = $connection->prepare($sql);
            $statement->execute($new_pres);

            header('Refresh:5; url=index.php');
            echo "<h2 style='padding-left: 20px; padding-top: 20px'>".'Congratulations! The Prescription has
            been saved!'."</h2>";
            echo "<h2 style='padding-left: 20px; padding-top: 20px'>".'This page will redirect back to patients in 5 seconds.'."</h2>";
          }
        }

        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>
