<!DOCTYPE html>
<head>
<title>Festive Events|Marahuyo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!--Icon top-->
    <link rel="icon" type="image/png" href="../assets/img/logo.png">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/><!--fontawesome-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>


<style>
     @import url(https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
    @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);
    .card{
        margin-bottom: 0 auto;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        max-height: 200px;
    }
    .tableImg{ 
        width:310px; 
        height:300px;
    }

        /**Star rating */
     

        .rating>[id^="star"] {
        display: none;
    }

    .rating>label:before {
        margin: 0;
        font-size: 20px;
        font-family: FontAwesome;
        display: flex;
        content: "\f005"
    }

    .rating>.half:before {
        content: "\f089";
        position: absolute;
    }

    .rating>label {
        color: #ddd;
        float: right;
    }

    .rating>[id^="star"]:checked~label,
    .rating:not(:checked)>label:hover,
    .rating:not(:checked)>label:hover~label {
        color: #FFD700;
    }

    .rating>[id^="star"]:checked+label:hover,
    .rating>[id^="star"]:checked~label:hover,
    .rating>label:hover~[id^="star"]:checked~label,
    .rating>[id^="star"]:checked~label:hover~label {
        color: #FFED85;
    }; /**end of star ratings */
</style>
<body>
<div>
    <!--Navbar start-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top " style="background: #811331;" >
        <div class="container">  
            <a href="#" class="navbar-brand mb-0 h1"><img src="../assets/img/logonavbar.png" style="height: 40px; width: 200px;"></a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#menunavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menunavbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a href="./index.php" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " id="categoryDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Categories</a>
                        <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                            <li><a href="./festMain.php" class="dropdown-item">Intangible Heritage</a></li>
                            <li><a href="#" class="dropdown-item">Cultural Arts</a></li>
                            <li><a href="./festMain.php" class="dropdown-item">Festive Events</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item active"><a href="./contact.php" class="nav-link">Contact Us</a></li>
                </ul>
                <form class="d-flex">
                    <input type="text" class="form-control me-2">
                <button type="submit" class="btn btn-danger"><i class="fas fa-search"></i></button>
            </form>
            </div>
            
        </div>
    </nav>
    <!--Navbar end-->
    <!--Main container start-->
    <div class="container-fluid">
        
        <div class="row">
            <h3 class="mx-auto d-flex font-weight-bold " style="padding-top:6rem; padding-bottom: 1rem; text-transform: uppercase;">Get in touch</h3>
        </div>
        <div class="row">
            <p class="mx-auto d-flex text-justify p-sm-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc rutrum lorem dui, in dapibus quam venenatis vitae. Nullam orci magna, sodales vel congue et, condimentum vitae risus. Suspendisse faucibus iaculis convallis. Fusce et lectus in lacus gravida luctus id non mi. Quisque mi neque, euismod non varius eget, dapibus nec nunc. Etiam efficitur varius tempor. Aenean non libero pulvinar, gravida diam at, maximus quam. In arcu sapien, consequat sit amet lobortis ut, blandit ut ligula. Aliquam ac erat odio. Phasellus erat risus, sodales at lacinia a, consequat laoreet justo. Quisque sed feugiat lorem, in placerat dolor. Phasellus velit elit, egestas et libero at, commodo sagittis massa. Nullam maximus mauris vel felis tincidunt tincidunt vel ac dolor. Suspendisse ac ante sit amet sem fringilla elementum blandit eget magna. Sed metus felis, accumsan id elit vel, vulputate malesuada est. Phasellus fringilla leo et viverra aliquam.</p>
        </div>

       
            


        

    </div>

<!-- Footer -->
<footer class="text-center text-lg-start  text-light" style="background: #5D0F1D;">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="fab fa-github"></i>
        </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Marahuyo Archives
            </h6>
            <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
            </p>
            </div>
            <!-- Grid column -->

            

            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Contents
            </h6>
            <p>
                <a href="artMain.php" class="text-reset">Cultural Arts</a>
            </p>
            <p>
                <a href="heritMain.php" class="text-reset">Intangible Heritage</a>
            </p>
            <p>
                <a href="festMain.php" class="text-reset">Festive Events</a>
            </p>
            
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Leave us a comment
            </h6>
            <form method="post" acion="" >
                
                    <fieldset class="rating"> <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="Awesome - 5 stars"></label> 
                        
                        <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="Pretty good - 4 stars"></label>
                        
                        <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="Meh - 3 stars"></label> 
                        
                        <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label> 
                        
                        <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="Sucks big time - 1 star"></label> 
                         
                    </fieldset>
                
                <input type="text" id="username" name="username" placeholder="Name(optional)">
                <textarea name="comment" id="comment" rows="5"  placeholder="Add comment..."></textarea>
                <input type="submit" value="Submit" name="submitFeedback" id="submitFeedback" style="cursor:pointer;">
            </form>
            </div>
            <?php
                $feedbackdb=mysqli_connect("localhost","root","","main_web");
                if(isset($_POST['submitFeedback']))
                {
                    $rating=$_POST['rating'];
                    $comment= $_POST['comment'];
                    $username= $_POST['username'];
                   
                    $feedbacksql="INSERT INTO feedback ( rating, username, comment) VALUES ('$rating','$username','$comment')";
                    
                    mysqli_query($feedbackdb, $feedbacksql );
                
                }
                
            ?>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
                Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> Batangas City, Batangas</p>
            <p>
                <i class="fas fa-envelope me-3"></i>
                marahuyoarchives.batangas@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 63 955 925 8063</p>
            <p><i class="fas fa-print me-3"></i> + 43 772 3063</p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="#">marahuyoarchives.com</a>
    </div>
    <!-- Copyright -->
    </footer>
    <!-- Footer -->
</div>

<!--bootstrap js files-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>