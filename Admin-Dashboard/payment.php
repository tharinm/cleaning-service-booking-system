<?php
include_once('../Home-page/config.php');

if (isset($_POST['pay'])) {
  $payment = $_POST['text'];
  $sql = mysqli_query($conn, "INSERT INTO (admin_pay) VALUES ($payment)");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!--bootstrap css-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="CSS/payment.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>

  <div class="main-container d-flex">
    <div class="sidebar " id="side_nav">
      <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
        <h1 class="fs-4 ms-2 name"><span class="text">DCSMS</span></h1>
        <button class="btn d-md-none d-block close-btn px-1 py-0 text-white"><i class="fa-solid fa-bars-staggered"></i></button>
      </div>


      <ul class="list-unstyled px-2 ">
        <li class=""><a href="registeremployee.php" class="text-decoration-none px-3 py-3 d-block">REGISTER EMPLOYEE</a></li>
        <li class="active"><a href="payment.php" class="text-decoration-none px-3 py-3 d-block">PAYMENT</a></li>
        <li class=""><a href="work.php" class="text-decoration-none px-3 py-3 d-block">WORKS</a></li>
        <li class=""><a href="employeelist.php" class="text-decoration-none px-3 py-3 d-block">EMPLOYEE LIST</a></li>
        <li class=""><a href="userlist.php" class="text-decoration-none px-3 py-3 d-block">USER LIST</a></li>
        <li class=""><a href="complaign.php" class="text-decoration-none px-3 py-3 d-block">COMPLAIGN</a></li>


      </ul>


    </div>
    <div class="content">
      <nav class="navbar navbar-expand-md py-3 navbar-light bg-light ">
        <img src="image.png" class="avatar">
        <input type="submit" class="btn btn-danger default btn  " value="Logout" onclick="window.location.href='../Home-Page/index.html'" name="logout">
      </nav>

      <div class="payment ms-5 px-3 pt-4">


        <div class="row">
          <div class="col-sm-4">
            <h6 class="text-sm text text text-info mt-4">PAYMENT UPDATE</h6>
            <div class="card">

              <div class="card-body">
                <h6 class="card-title ">CUSTOMER ID</h6>
                <p class="card-text mt-4">10234</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">ACCEPT</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm modal-fullscreen-sm-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Emlpoyee Bank Account Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form method="POST">
                          <input type="text" class="form-control modal-md" name="text">

                      </div>

                      <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" data-bs-dismiss="modal" name="pay" value="pay">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-sm-4">
            <h6 class="text-sm text text text-info mt-4">WITHDRAW REQUEST</h6>
            <div class="card">
              <div class="card-body">
                <h6 class="card-title ">EMPLYEEE ID</h6>
                <p class="card-text mt-4">10234</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">ACCEPT</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm modal-fullscreen-sm-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Emlpoyee Bank Account Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form>
                          <input type="text" class="form-control modal-md" name="text">
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">PAY</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 mt-5">

            <div class="card">

              <div class="card-body">
                <h6 class="card-title ">CUSTOMER ID</h6>
                <p class="card-text mt-4">10234</p>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">ACCEPT</button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-sm modal-fullscreen-sm-down">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Emlpoyee Bank Account Number</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body">
                        <form>
                          <input type="text" class="form-control modal-md" name="text">
                        </form>
                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">PAY</button>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4 mt-5">
              <h6 class="text-sm text text text-info mt-4">REFUND REQUEST</h6>
              <div class="card mt-5">

                <div class="card-body ">
                  <h6 class="card-title ">CUSTOMER ID</h6>
                  <p class="card-text mt-4">10234</p>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">ACCEPT</button>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-sm modal-fullscreen-sm-down">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Emlpoyee Bank Account Number</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>

                        <div class="modal-body">
                          <form>
                            <input type="text" class="form-control modal-md" name="text">
                          </form>
                        </div>

                        <div class="modal-footer">
                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">PAY</button>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>


        </div>
      </div>

      <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://kit.fontawesome.com/c752b78af3.js" crossorigin="anonymous"></script>


      <script>
        $(".sidebar ul li").on('click', function() {
          $(".sidebar ul li.active").removeClass('active');
          $(this).addClass('active');

        })

        $('.open-btn').on('click', function() {
          $('.sidebar').addClass('active');
        })

        $('.close-btn').on('click', function() {
          $('.sidebar').removeClass('active');
        })
      </script>


</body>

</html>