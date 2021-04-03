
<?php require("./templates/header.php"); ?>
<?php require("./common.php"); ?>
<?php require("../configs/config.php"); ?>

    <div class="container">
        <?php require "./templates/nav.php" ?>
        <div class="card" style="width: 50%">
        <form method="post" style="padding: 20px" action="./performadd.php">
            <div class="form-group">
                <label for="name" class="text-primary">Drug Name</label>
                <input class="form-control" id="name" name="name">

                <label for="freq" class="text-primary">Frequency</label>
                <textarea class="form-control" id="freq" rows="3" name="freq"></textarea>

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
    </div> <!-- container -->

<?php require("./templates/footer.php"); ?>
