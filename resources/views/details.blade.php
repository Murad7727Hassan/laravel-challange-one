<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>details job</title>
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
      <div class="container my-5">
        <div class="row d-flex">
          <div>
            <div class="input-group mb-3">
              <div>
               <select class="form-select form-select-lg " aria-label=".form-select-lg example" id="select-searrch">
                 <option selected>All</option>
                 <option value="company">company</option>
                 <option value="city">city</option>
                </select>
              </div>
              <input type="text" class="form-control" id="search" placeholder="" aria-label="Example text with two button addons">
           </div>
          </div>
          
          
        </div>
          <div class="row">
              <div class="col-12">
                <table class="table table-striped"  id="myTable">
                  <thead>
                      <tr>
                        <th scope="col">number </th>
                        <th scope="col">company</th>
                        <th scope="col">postion</th>
                        <th scope="col">last day </th>
                        <th scope="col">company</th>
                        <th scope="col">city</th>
                        <th scope="col">more view</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>BMW</td>
                        <td>Manger HR</td>
                        <td>2022/01/31</td>
                        <td>A</td>
                        <td>F</td>
                        <td>
                            <a href="details.html">view more</a>
                        </td>
                      </tr>
                      <tr>
                          <td>1</td>
                          <td>BMW</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>A</td>
                          <td>F</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>BMW</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>A</td>
                          <td>F</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>BMW</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>A</td>
                          <td>F</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>BMW</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>A</td>
                          <td>F</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>BMW</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>a</td>
                          <td>c</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>q</td>
                          <td>Manger HR</td>
                          <td>2022/01/31</td>
                          <td>a</td>
                          <td>c</td>
                          <td>
                              <a href="details.html">view more</a>
                          </td>
                        </tr>
                    </tbody>
                </table>
              </div>
          </div>
          <div class="row ">
            <div class="btn-toolbar mb-3 text-center" role="toolbar" aria-label="Toolbar with button groups">
              <div class="btn-group me-2 justify-content-center align-items-center" role="group" aria-label="First group">
                <button type="button" class="btn btn-outline-primary">1</button>
                <button type="button" class="btn btn-outline-primary">2</button>
                <button type="button" class="btn btn-outline-primary">3</button>
                <button type="button" class="btn btn-outline-primary">4</button>
              </div>
          </div>
                  <!-- end ads  -->
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