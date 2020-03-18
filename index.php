
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/stl.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <title>dzSang</title>

</head>
<body>
   
<header>

  <!-- navbar start -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
        <a class="navbar-brand" href="#">SangDz <span style="color: #c82333;">Inc.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <!-- <a class="nav-item nav-link" href="#">Features</a> -->
            
            <a class="nav-item nav-link" href="#">Login</a>
            <a class="nav-item nav-link" href="register.php">New Volunteer</a>
            <a class="nav-item nav-link" href="#">Contact Us</a>
          </div>
        </div>
    </nav>
      <!-- navbar end -->

<!-- SLIDER SHOW START-->
    <section class="slider-show">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="imgs/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imgs/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="imgs/3.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>
<!--    END SLIDER SHOW-->
    </header>

    <div class="content">
        <div class="container-fluid">

        <div class="row text-center">
         <h1 class="text-center"> قال تعالى (وَمَنْ أَحْيَاهَا فَكَأَنَّمَا أَحْيَا النَّاسَ جَمِيعًا) </h1>
          <div class="inputs col-12">
            <!-- ******************** -->
            <div class="form-group col-6 col-sm-4 d-inline-flex p-2">
               
              <select class="form-control" name="blood_type" id="blood_Type">
                <option value="0">فصيلة الدم</option>
                <option value="1">O+</option>
                <option value="2">O-</option>
                <option value="3">B+</option>
                <option value="4">B-</option>
                <option value="5">A+</option>
                <option value="6">A-</option>
                <option value="7">AB+</option>
                <option value="8">AB-</option>
              </select>
              </div>
<!-- ************************** -->
              <div class="form-group col-6 col-sm-4 d-inline-flex p-2">
               
                <select class="form-control" name="agent_state"  id="state"> 
                                  <option selected="selected" value="0">--state--</option>
                    
                      </select>
                 
                  </div>




                  <div class="form-group col-6 col-sm-4 d-inline-flex p-2">
               
               <select class="form-control" name="agent_town"  id="town"> 
                                 <option selected="selected" value="0" >--town--</option>
                               
                     </select>
                
                 </div>
                  <!-- ****************** -->
              
              <!-- <div class="form-group col-6 col-sm-3">
               
                <input    name="appoin_date" type="text" class="form-control btn-sm appoin_picker" id="email" placeholder=" email">
              </div> -->
              <!-- *************** -->
              <div class="form-group col-6 col-sm-4 d-inline-flex p-2">

                <button class="btn btn-danger col-sm-4" id="btn_search" onclick="search()" disabled>search!</button>

              </div>
              <!-- ****************** -->
        </div>
      </div>
    </div>
    </div>



    <footer>
    <table class="table table-striped table-dark" hidden="true">
    <thead>
        <tr>
            <th scope="col"> Fullname</th>
            <th scope="col">State</th>
            <th scope="col">Town</th>
            <th scope="col">Phone</th>
            <th scope="col">Email</th>
            <th scope="col">Blood type</th>
            <th scope="col">Gender</th>
            
        </tr>
    </thead>
    <tbody>
          <tr>
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </tbody>
</table>


</div>
    </footer>


    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/states.js"></script>
    <script src="js/index.js"></script>
    
    

    
</body>
</html>