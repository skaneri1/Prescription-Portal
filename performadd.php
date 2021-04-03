<?php
    require "../configs/config.php";
    require "./common.php";

        try {
        $connection = new PDO($dsn, $username, $password, $options);

        $new_presc = array(
            "name"       => escape($_POST['name']),
            "freq"       => escape($_POST['freq']),
            "instruc"      => escape($_POST['instruc']),
            "filled"    => escape($_POST['filled']),
            "lastfill"    => escape($_POST['lastfill'])
        );

        if ($_POST['lastfill']) {
            $new_presc+= ["lastfill" => escape($_POST['lastfill'])];
        }

        $sql = sprintf(
            "INSERT INTO %s (%s) values (%s)",
            "presc",
            implode(", ", array_keys($new_presc)),
            ":" . implode(", :", array_keys($new_presc)));

        $statement = $connection->prepare($sql);
        $statement->execute($new_presc);

        header ("location: /index.php");
        }

        catch(PDOException $error) {
            echo $sql . "<br>" . $error->getMessage();
        }
?>
