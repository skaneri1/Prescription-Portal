<?php require("./templates/header.php"); ?>

		<div class="container">
		<?php require "./templates/nav.php" ?>
		<h2 style="padding-bottom: 30px">Patients Registered with Portal</h2>

		<h4>Kaneria, Shlok</h4>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Prescription</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Fill Prescription</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
	        <form method="post" id="shlok" style="padding: 10px">
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
	                <input  type="submit" class="btn btn-primary" name="submit" value="Add Prescription" formaction="./performaddsk.php">
	        </form>
	      </div>
			</div>
		</div>
		</div>

		<h4 style="padding-top: 30px">Parthasarathy, Dhruv</h4>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Add Prescription</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal1" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Fill Prescription</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
	        <form method="post" id="dhruv" style="padding: 10px">
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
	                <input  type="submit" class="btn btn-primary" name="submit" value="Add Prescription" formaction="./performadddp.php">
	        </form>
	      </div>
			</div>
		</div>
		</div>

		<h4 style="padding-top: 30px">Dhanushkodi, Hari</h4>
		<!-- Trigger the modal with a button -->
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Add Prescription</button>

		<!-- Modal -->
		<div class="modal fade" id="myModal2" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<h2 class="modal-title">Fill Prescription</h2>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
	        <form method="post" id="hari" style="padding: 10px">
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
	                <input  type="submit" class="btn btn-primary" name="submit" value="Add Prescription" formaction="./performaddhd.php">
	        </form>
	      </div>
			</div>
		</div>
		</div>

		</div> <!-- container -->

    <?php require("./templates/footer.php"); ?>
