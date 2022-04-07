<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
     <!-- language English page  -->
     <link rel="stylesheet" href="css/langEnglish.css">
     <!-- boostrap flie  -->
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <!-- main css  -->
     <link rel="stylesheet" href="css/main.css">
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
    </header>
    <!-- end header   -->

    <!-- start content  -->
    <section class="content  pt-5">
        <div class="container">
            <div class="row border-bottom mb-5 ">
                <div class="col-md-3 d-flex flex-column justify-content-start align-items-center ">
                    <div class="card" style="width: 18rem;">
                        <img src="images/person1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title text-center">Murad hassan ali</h5>
                        </div>
                      </div>
                </div>
                <div class="col-md-7 m-5 mt-3">
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">First Name:</div>
                        <div class="col-6">muard</div>
                    </div>
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">Last Name:</div>
                        <div class="col-6">hassan</div>
                    </div>
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">phone:</div>
                        <div class="col-6">+967772725220</div>
                    </div>
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">emmail:</div>
                        <div class="col-6">muardhghg@gmail.com</div>
                    </div>
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">password</div>
                        <div class="col-6">1234566789</div>
                    </div>
                    <div class="row border-bottom w-100 mb-3">
                        <div class="col-6">conflig password</div>
                        <div class="col-6">1234566789</div>
                    </div>
                    <div class="row  w-100 mb-3">
                        <button class="btn btn-primary mb-3 w-100">edit</button>
                    </div>
                </div>
            </div>
            <div class="row shadow-lg ">
                
                <div class="col-md-4  shadow-sm p-3 rounded">
                    <div class="row">
                        <h3>Experience</h3>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">posation : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="posation name">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">place : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Like the name of the school or institute">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 w-100">
                                <label for="exampleFormControlInput1" class="form-label">date start : </label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 w-100">
                                <label for="exampleFormControlInput1" class="form-label">date end : </label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                    </div>
                   
                       <div class="mb-3 w-100">
                          <button class="btn btn-primary mb-3 w-100">add</button>
                      </div>
                      <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>Developer front end</h5>
                          <p style="margin-bottom: .1rem;">
                          <span class="fw-bold">From</span> 20/02/2000  <span class="fw-bold"> To </span>  20/02/2010</p>
                          <p class="fw-bold">Click apps</p>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                    </div> 
                    <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>Developer front end</h5>
                          <p style="margin-bottom: .1rem;">
                          <span class="fw-bold">From</span> 20/02/2000  <span class="fw-bold"> To </span>  20/02/2010</p>
                          <p class="fw-bold">Click apps</p>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-4  shadow-sm p-3 rounded">
                    <div class="row">
                        <h3>Courses and Aduction</h3>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">name : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Such as the name of the course or educational stage">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">place : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Like the name of the school or institute">
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 w-100">
                                <label for="exampleFormControlInput1" class="form-label">date start : </label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 w-100">
                                <label for="exampleFormControlInput1" class="form-label">date end : </label>
                                <input type="date" class="form-control" id="exampleFormControlInput1" >
                            </div>
                        </div>
                    </div>
                   
                       <div class="mb-3 w-100">
                          <button class="btn btn-primary mb-3 w-100">add</button>
                      </div>
                      <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>Full Stack</h5>
                          <p style="margin-bottom: .1rem;">
                          <span class="fw-bold">From</span> 20/02/2000  <span class="fw-bold"> To </span>  20/02/2010</p>
                          <p class="fw-bold">Rowad Institute</p>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                    </div> 
                    <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>Full Stack</h5>
                          <p style="margin-bottom: .1rem;">
                          <span class="fw-bold">From</span> 20/02/2000  <span class="fw-bold"> To </span>  20/02/2010</p>
                          <p class="fw-bold">Rowad Institute</p>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                    </div> 
                    
                </div>
                <div class="col-md-4 border-left border-right shadow-sm  p-3 rounded">
                    <div class="row">
                        <h3>Skills</h3>
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">Name : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="The skill you can do">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="exampleFormControlInput1" class="form-label">Degree of mastery : </label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter number from 1 to 10">
                    </div>
                    
                   
                       <div class="mb-3 w-100">
                          <button class="btn btn-primary mb-3 w-100">add</button>
                      </div>
                      <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>web design</h5>
                          <div class="progress mt-4">
                            <div class="progress-bar btn-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                          </div>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                      </div> 
                      <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>web design</h5>
                          <div class="progress mt-4">
                            <div class="progress-bar btn-primary" role="progressbar" style="width: 50%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
                          </div>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                      </div> 
                      <div class="row  border-top pt-2">
                        <div class="col-9">
                          <h5>web design</h5>
                          <div class="progress mt-4">
                            <div class="progress-bar btn-primary" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">75%</div>
                          </div>
                        </div>
                        <div class="col-3">
                          <button class="btn btn-success mb-1 w-100">Edit</button>
                          <button class="btn btn-danger mb-3 w-100">delet</button>
                        </div>
                      </div> 
                </div>
               
            </div>
            
           
            
            
        </div>
    </section>
    <!-- end content  -->

    <!-- start footer  -->
    <section class="Subscribe mt-5">
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
  <script>
  $(document).ready(function(){
     $("#search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      if($("#select-searrch").val()=="company")
      {
        $("#myTable tbody tr td:nth-child(5)").filter(function() {
        $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
       });
      }
      else if($("#select-searrch").val()=="city")
      {
        $("#myTable tbody tr td:nth-child(6)").filter(function() {
        $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    }
    else
    {
      $("#myTable tbody tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
     }
    });
  });

  </script>
    <script src="js/main.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </body>
</html>