<!-- Begin showtask -->
<div class="card border-primary" style="width: 50%">
              <div class="card-header">
              <div class="row">
                  <div class="col-sm">
                    <?php echo $pres["name"]; ?> <!-- else -->
                  </div>
                  <div class="col-sm">
                      <?php
                       switch($pres["filled"]) {
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
                  <p class ="card-title"><?php echo $pres["freq"]; ?></p>
                  <p class="card-text"><?php echo $pres["instruc"]; ?></p>
                </div> <!-- Body -->
                <div class="card-footer">
                  <div class = "row">
                      <div class = "col-sm">
                          <ul class="nav justify-content-end nav-pills card-header-pills">
                              <li class="nav-item">
                                  <a class="nav-link" href="/deletetask.php?id=<?php echo $pres["id"] ?>"> <i class="fas fa-trash-alt"></i></a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
            </div> <!-- Card -->
           <p>
<!-- End showtask -->
