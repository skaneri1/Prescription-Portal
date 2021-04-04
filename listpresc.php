<?php
	try {
		require "../configs/config.php";
		require "./common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * FROM presc.shlok";

		$statement = $connection->prepare($sql);
		$statement->execute();

        $result = $statement->fetchAll();

		$sqla = "SELECT * FROM presc.dhruv";

		$statementa = $connection->prepare($sqla);
		$statementa->execute();

        $resulta = $statementa->fetchAll();

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
		echo $sqla . "<br>" . $error->getMessage();
	}
?>


<?php require("./templates/header.php"); ?>

    <div class="container">
			<?php require "./templates/nav.php" ?>
			<h2 style="padding-bottom: 30px">Shlok's Prescriptions</h2>
      <?php
         if (!$result && $statement->rowCount() == 0) { ?>
          <h4> No prescriptions to display. Add one from the patients.</h4>
         <?php }
         else
         {
            foreach ($result as $presc) {
              require("./templates/showtask.php");
             } // <!-- foreach -->
          } ?> <!-- else -->

			<h2 style="padding-bottom: 30px; padding-top: 30px">Dhruv's Prescriptions</h2>
      <?php
         if (!$resulta && $statementa->rowCount() == 0) { ?>
          <h4> No prescriptions to display. Add one from the patients.</h4>
         <?php }
         else
         {
            foreach ($resulta as $presc) {
              require("./templates/showtask.php");
             } // <!-- foreach -->
          } ?> <!-- else -->

			</div>

    <?php require("./templates/footer.php"); ?>
