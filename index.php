<?php
	try {
		require "../configs/config.php";
		require "./common.php";

		$connection = new PDO($dsn, $username, $password, $options);

		$sql = "SELECT * FROM presc";

		$statement = $connection->prepare($sql);
		$statement->execute();

        $result = $statement->fetchAll();

	} catch(PDOException $error) {
		echo $sql . "<br>" . $error->getMessage();
	}
?>


<?php require("./templates/header.php"); ?>

		<div class="container">
		<?php require "./templates/nav.php" ?>
		<h2>Modal Example</h2>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2 class="modal-title">Modal Header</h4>
				</div>
				<div class="modal-body">
					<div class="card" style="width: 50%">
	        <form method="post" style="padding: 20px" action="./performadd.php">
	            <div class="form-group">
	                <label for="name" class="text-primary">Drug Name</label>
	                <input class="form-control" id="name" name="name">

	                <label for="freq" class="text-primary">Frequency</label>
	                <textarea class="form-control" id="freq" name="freq"></textarea>

	                <label for="instruc" class="text-primary">Instructions</label>
	                <textarea class="form-control" id="instruc" rows="3" name="instruc"></textarea>

	                <label for="filled" class="text-primary">Prescription Filled</label>
	                <select class="form-control" id="filled" name="filled">
	                    <option selected>Yes</option>
	                    <option>No</option>
	                </select>

	                <label for="lastfill" class="text-primary">Date of last fill:</label>
	                <input type="date" class="form-control" id="lastfill" name="lastfill">
	            </div>
	                <input  type="submit" class="btn btn-primary" name="submit" value="Add Prescription">
	        </form>
	        </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>

		</div>
		</div>

		</div> <!-- container -->

    <?php require("./templates/footer.php"); ?>
