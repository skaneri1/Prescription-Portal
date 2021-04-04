<?php
    require "../configs/config.php";
    require "./common.php";

        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_pres = array(
            "name"       => escape($_POST['name']),
            "freq"       => escape($_POST['freq']),
            "instruc"      => escape($_POST['instruc']),
            "filled"    => escape($_POST['filled']),
            "lastfill"    => escape($_POST['lastfill'])
        );

        if ($_POST['lastfill']) {
            $new_pres+= ["lastfill" => escape($_POST['lastfill'])];
        }

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "presc",
            implode(", ", array_keys($new_pres)),
            ":" . implode(", :", array_keys($new_pres)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_pres);

        echo "Your prescription is saved successfully!";

        header ("location: /index.php");
        }

        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>
