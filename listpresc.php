<?php require("./templates/header.php"); ?>
<?php require("./common.php"); ?>
<?php require("../configs/config.php"); ?>


<?php require("./templates/header.php"); ?>

    <div class="container">
      <?php
         require("./templates/nav.php");
         if (!$result && $statement->rowCount() == 0) { ?>
          <h4> No prescriptions to display. Add one from the patients.</h4>
         <?php }
         else
         {
            foreach ($result as $task) {
              require("./templates/showtask.php");
             } // <!-- foreach -->
          } ?> <!-- else -->

    </div> <!-- container -->

    <?php require("./templates/footer.php"); ?>
