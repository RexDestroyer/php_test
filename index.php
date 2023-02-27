<!doctype html>
<html>

<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>2023 FRC Match Scouting</title>


  <!-- Set Up Jquery -->
  <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

  <!-- Set Up Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>

  <!-- Set Up Font Awesome and Google Fonts-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">

  <script src="js/script.js"></script>

</head>



<body style="background-color: aliceblue">



  <div id="content" class="container">
    <form action="test.php" method="POST">
      <!--DO NOT CHANGE THE CODE BELOW THIS-->
      <div>
        <div class="text-center mt-5">
          <h3 id="current-event">Currently Scouting for Event: </h3>
        </div>
        <div class=" mt-5 row justify-content-around">
          <div class=" pb-3 width-50">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="mr-3 mt-2">Match</label>
                <select class="custom-select" id="match-choices">
                  <option disabled selected value> -- select an option -- </option>
                </select>
              </div>
            </div>
          </div>
          <div class=" pb-3 width-50">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="mr-3 mt-2">Team</label>
                <select class="custom-select" id="team-choices">
                  <option disabled selected value> -- select an option -- </option>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 row justify-content-center" onclick="cronometro()">
          <div class="btn btn-success btn-lg" id="start-clock">Start Scoutting</div>
        </div>
        <div class="mt-3 row justify-content-center">
          <div id="timeContainer" class="px-3 py-2 my-auto align-items-center d-flex"
            style="border: 3px solid black; background-color: whitesmoke;">
            <h1 class="fw-bold" id="time">00 : 00</h1>
          </div>
        </div>
      </div>

      <!-- -------------------------------------------------------------------------- -->

      <div id="main">

        <div class="mt-5">
          <h1 class="text-center">Autonomous</h1>
          <!--TODO: Insert Scout Inputs for Autonomous here-->
          <div class="row justify-content-center">
            <div class="col-md-4 justify-content-center mt-4">
              <div class="card text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="auto-leave_community"
                      name="auto-leave_community" value="0" onclick="check('a-lc')">
                    <label class="form-check-label" for="auto-leave_community">
                      Leave Community
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-around mt-5">
            <div class="text-center col-md-4 pb-3">
              <h3>Bottom</h3>
              <div class=" d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="auto-bottom" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('auto-bottom')" type="button">-</button>
                  </div>
                  <div id="auto-bottom" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="auto-bottom" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('auto-bottom')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center col-md-4 pb-3">
              <h3>Middle</h3>
              <div class="d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="auto-middle" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('auto-middle')" type="button">-</button>
                  </div>
                  <div id="auto-middle" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="auto-middle" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('auto-middle')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center col-md-4 pb-3">
              <h3>Top</h3>
              <div class="d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="auto-top" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('auto-top')" type="button">-</button>
                  </div>
                  <div id="auto-top" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="auto-top" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('auto-top')" onclick="incAutoTop()" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-around mt-5">
            <div class="col-md-4 mt-3">
              <div class="card text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="auto-docked" name="auto-docked" value="0"
                      onclick="check('a-d')">
                    <label class="form-check-label" for="auto-docked">
                      Docked
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-3">
              <div class="card text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="auto-docked_engaged"
                      name="auto-docked_engaged" value="0" onclick="check('a-de')">
                    <label class="form-check-label" for="auto-docked_engaged">
                      Docked Engaged
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <!-- ------------------------------------------------------------------------- -->

        <div class="mt-5">
          <h1 class="text-center">Teleop</h1>
          <!--TODO: Insert Scout Inputs for Teleop here-->
          <div class="row justify-content-around mt-5">
            <div class="text-center col-md-4 pb-3">
              <h3>Bottom</h3>
              <div class=" d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="teleop-bottom" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('teleop-bottom')" type="button">-</button>
                  </div>
                  <div id="teleop-bottom" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="teleop-bottom" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('teleop-bottom')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center col-md-4 pb-3">
              <h3>Middle</h3>
              <div class="d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="teleop-middle" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('teleop-middle')" type="button">-</button>
                  </div>
                  <div id="teleop-middle" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="teleop-middle" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('teleop-middle')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center col-md-4 pb-3">
              <h3>Top</h3>
              <div class="d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="teleop-top" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('teleop-top')" type="button">-</button>
                  </div>
                  <div id="teleop-top" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="teleop-top" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('teleop-top')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-around mt-5">
            <div class="text-center col-md-4 pb-3">
              <h3>Links</h3>
              <div class="d-flex justify-content-center mt-2">
                <div class="input-group mt-3 w-75">
                  <div class="input-group-prepend">
                    <button for="teleop-link" class="btn btn-outline-secondary change-btn decrement"
                      onclick="decrement('teleop-link')" type="button">-</button>
                  </div>
                  <div id="teleop-link" class="form-control data">
                    0
                  </div>
                  <div class="input-group-append">
                    <button for="teleop-link" class="btn btn-outline-secondary change-btn increment"
                      onclick="increment('teleop-link')" type="button">+</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ----------------------------------------------------------------------------------------- -->

        <div class="mt-5">
          <h3 class="text-center">Endgame</h3>
          <!--TODO: Insert Scout Inputs for Endgame here-->
          <div class="row justify-content-center">
            <div class="col-md-4 justify-content-center mt-4">
              <div class="card  text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="end-park" name="end-park" value="0"
                      onclick="check('e-p')">
                    <label class="form-check-label" for="end-park">
                      Parked
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row justify-content-around mt-5">
            <div class="col-md-4 mt-3">
              <div class="card text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="end-docked" name="end-docked" value="0"
                      onclick="check('e-d')">
                    <label class="form-check-label" for="end-docked">
                      Docked
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 mt-3">
              <div class="card text-center">
                <div class="card-body">
                  <div class="form-check">
                    <input class="form-check-input data" type="checkbox" id="end-docked_engaged"
                      name="end-docked_engaged" value="0" onclick="check('e-de')">
                    <label class="form-check-label" for="end-docked_engaged">
                      Docked Engaged
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="hidden" name="a-b" id="a-b" value="0">
          <input type="hidden" name="a-m" id="a-m" value="0">
          <input type="hidden" name="a-t" id="a-t" value="0">
          <input type="hidden" name="t-b" id="t-b" value="0">
          <input type="hidden" name="t-m" id="t-m" value="0">
          <input type="hidden" name="t-t" id="t-t" value="0">
          <input type="hidden" name="t-l" id="t-l" value="0">


        </div>

        <!--No need to change the save button-->
        <!-- <div class="mt-3 ml-3 float-right">
          <div data-toggle="modal" data-target="#save-modal" class="btn btn-success btn-lg">Save</div>
        </div> -->

      </div>
      <input type="submit" value="Enviar">
    </form>
  </div>

  <!--No need to change the save modal-->
  <!-- Save Modal -->
  <!-- <div class="modal fade" id="save-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Submit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Are you sure you want to submit? <b>You <u>can not</u> edit your data after submitting.</b>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-dismiss="modal">Go Back</button>
            <button class="btn btn-primary" data-dismiss="modal" type="submit" id="submit-btn">Submit</button>
          </div>
        </div>
      </div>
    </div> -->


</body>
