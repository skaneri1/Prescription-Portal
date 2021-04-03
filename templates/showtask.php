<!-- Begin showtask -->
<div class="card border-primary" style="width: 50%">
              <div class="card-header">
              <div class="row">
                  <div class="col-sm">
                    <?php echo $presc["name"]; ?> <!-- else -->
                  </div>
                  <div class="col-sm">
                      <?php
                       switch($presc["filled"]) {
                          case 'Yes': ?>
                            <span class="badge float-right badge-success">Filled: Yes</span> <?php
                            break;
                          case 'No': ?>
                            <span class="badge float-right badge-danger">Filled: No</span> <?php
                            break;
                        } ?>
                  </div>
                </div> <!-- Row #1 -->
                </div> <!-- Header -->
                <div class="card-body">
                  <p class ="card-title"><?php echo $presc["freq"]; ?></p>
                  <p class="card-text"><?php echo $presc["instruc"]; ?></p>
                </div> <!-- Body -->
                <div class="card-footer">
                  <div class = "row">
                  </div>
              </div>
            </div> <!-- Card -->
           <p>
<!-- End showtask -->
