<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login window</title>
     <!-- language English page  -->
     <link rel="stylesheet" href="css/langEnglish.css">
     <!-- boostrap flie  -->
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- main css  -->
     <link rel="stylesheet" href="main.css">
    </head>
<body>
    <!-- start header  -->
    <header>
      <div class="container">
          <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                <a class="navbar-brand bold" href="#">Job online</a>
                  <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav ">
                    <li class="nav-item">
                      <a class="nav-link active " aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " aria-current="page" href="details.html">jobs</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="services.html">services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="company.html">our partners</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="connect.html">connect</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="about.html">about</a>
                    </li>
                  </ul>
                </div>
                <form class="d-flex btn-login" >
                  <a href="login.html" class="btn btn-outline-primary mx-2">login</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
               </form>
              
              </div>
            </nav>
      </div>
  </header>    <!-- end header   -->

    <!-- start content  -->
    <section class="content mb-5" style="margin-top: 115px;">
      <div class="above login " >
        <div class="container p-5 mt-5 shadow-lg">
          <div class="row">      
              <h1 class="text-center">sing in</h1>
          </div>
            <div class="row ">
              
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlInput1" class="form-label">Password </label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="password">
                </div>
                <div class="mb-3">
                  <a class="btn btn-outline-primary mb-3 w-100">sing in</a>
                </div>
                
        </div>
        <div class="row text-center">
          <a href="/newacount" class="btn text-primary  p-1 w-100">Don't have account</button>
        </div>
     </div>
    </section>
    <!-- end content  -->

    <!-- start footer  -->
    <section class="Subscribe">
      <div class="row  py-5">
        <h3 class="text-center">Subscribe to the site</h3>
        <div class="container d-flex align-items-center justify-content-center flex-row">
            <input type="email" class="form-control mx-3 " style="width: 50%;" id="exampleFormControlInput1" placeholder="name@example.com">
            <button type="button" class="btn btn-outline-primary" style="width: 20%;">send</button>
        </div>
      </div>
      <div class="row">
       
        <div class="col-md-3    align-items-center d-flex
        flex-column">
        <h3 class="mb-3">Jobs</h3>
       <ul style="list-style: none;">
          <li><a href=""></a></li>
          <li><a href="">Job one</a></li>
          <li><a href="">Job tow</a></li>
          <li><a href="">Job three</a></li>
      </ul>
      </div>
      <div class="col-md-3    align-items-center d-flex
      flex-column">
      <h3 class="mb-3">Services</h3>
     <ul style="list-style: none;">
        <li><a href="">Services one</a></li>
        <li><a href="">Services tow</a></li>
        <li><a href="">Services thre</a></li>
        <li><a href="">Services four</a></li>
    </ul>
    </div>
    <div class="col-md-3    align-items-center d-flex
    flex-column">
    <h3 class="mb-3">Connect</h3>
   <ul style="list-style: none;">
      <li><a href="">+967772725220</a></li>
      <li><a href=""> +967772725220  </a></li>
      <li><a href="">+967772725220</a></li>
      <li><a href=""> +967772725220  </a></li>
  </ul>
  </div>
  <div class="col-md-3    align-items-center d-flex
  flex-column">
  <h3 class="mb-3">About</h3>
 <ul style="list-style: none;">
    <li><a href="">About company</a></li>
    <li><a href="">About services</a></li>
 </ul>
</div>
      
      </div>
    </section>
    <footer>
     <p class="text-center py-3">Save All Right For &copy; Job online</p>
   </footer>
     <!-- end footer  -->
       <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/main.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>