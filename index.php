<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
  <script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.2.0/zxcvbn.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>PHP</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">PHP</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#">PPL</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#output_data">
                  <span data-feather="home"></span>
                  Output Data<span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#user_input">
                  <span data-feather="file"></span>
                  User-Input
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#maths">
                  <span data-feather="shopping-cart"></span>
                  Math
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#comparisons">
                  <span data-feather="users"></span>
                  Comparisons
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#comparisons">
                  <span data-feather="users"></span>
                  Statements
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#functions">
                  <span data-feather="bar-chart-2"></span>
                  Functions
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#loops">
                  <span data-feather="layers"></span>
                  Loops
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#arrays">
                  <span data-feather="layers"></span>
                  Arrays
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Add</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>

          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4 bg-light">
          <div class="jumbotron p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 bg-white rounded">
            <div class="row">
   <div class="col-md-6 px-0">
     <h1 class="display-4 font-italic">Showcasing php, and what it can do</h1>
     <p class="lead my-3">php as we know it was first designed in 1998. The Eight Hallmarks of Mastering a Programming language, including but not limited to: <strong>outputting data, user input, variable math, comparisons, functions, "if" statements, loops, arrays </strong>
     <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
   </div>
      <div class="col-md-6 px-0 text-center">
        <img src="https://i.ytimg.com/vi/wCZ5TJCBWMg/maxresdefault.jpg" class="rounded-circle" alt="Cinque Terre" width="275" height="236">
        <p style="margin-bottom: 0px; font-weight: 0; margin-top: 20px">
          <em>By Alex Monari, Adam Chester, Yuning Gao, Josh Richard</em>
        </p>
      </div>
    </div>
 </div>
 <div class="container rounded shadow-sm p-3 mb-5 bg-white" id="output_data">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Output Data</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                <button class="btn btn-sm btn-outline-secondary">Share</button>
                <button class="btn btn-sm btn-outline-secondary">Export</button>
              </div>
              <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                <span data-feather="calendar"></span>
                This week
              </button>
            </div>
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>
          <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
            Php allows for data output, natively. By using the <code>echo</code> tag or the <code>print</code> function on the command line, any data can be outputted inline. In this case, we create a Javascript chart and echo data into it:</div>
  <div class="wrapper">

        <img src="http://localhost/ppl/screenshots/chart.png" style="width: 100%; height: 100%;"/>
      </div>
</div>






<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="user_input">
         <div>
           <h1 class="h2">User Input</h1>

  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" name="address2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">City</label>
      <input type="text" class="form-control" name="city" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">State</label>
      <select id="inputState" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Zip</label>
      <input type="text" class="form-control" name="zip" id="inputZip">
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-dark">Sign in</button>
</form>
<?php if (isset($_POST['name'])): ?>
<?php echo htmlspecialchars($_POST["name"]); ?>!<br>
<?php echo htmlspecialchars($_POST["email"]); ?>.<br>
<?php echo htmlspecialchars($_POST["address"]); ?>.<br>
<?php echo htmlspecialchars($_POST["address2"]); ?>.<br>
<?php echo htmlspecialchars($_POST["city"]); ?>.<br>
<?php echo htmlspecialchars($_POST["zip"]); ?>.<br>
<?php endif; ?>
<div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
  Php allows seamless form handling on web and mobile applications, natively. By using REST API protocols, specifically POST <code>$_POST</code> and GET <code>$_GET </code> users and apps can access and/or handle data.</div>
<div>
  <div class="wrapper">

        <img src="http://localhost/ppl/screenshots/form.png" style="width: 100%; height: 100%;"/>
      </div>
</div>
</div>
</div>





<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="maths">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Math on Variables</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                Num1: <input type="number" name="num1">
                Num2: <input type="number" name="num2">
                <input type="submit">
           </form>

           <?php if (isset($_POST['num1'])): ?>
           <?php $num1 = $_POST["num1"]; ?>
            <?php $num2 = $_POST["num2"]; ?>
            <?php echo $num1 + $num2; ?>
           <?php endif; ?>
         </div>
         <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
           Like most object oriented languages, php has built in ability to perform math on variables. In the above example we have a simple calculator that allows a person to add two values using php.</div>
<div>
  <div class="wrapper">

        <img src="http://localhost/ppl/screenshots/math.png" style="width: 100%; height: 100%;"/>
      </div>
</div>
</div>





<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="comparisons">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Variable Comparison and If statements</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
             <div class="form-row">
               <div class="form-group col-md-6">
                 <label for="inputEmail4">Num 1</label>
                 <input type="number" class="form-control" id="inputEmail4" name="num3" placeholder="ex: 1">
               </div>
               <div class="form-group col-md-6">
                 <label for="inputPassword4">Num 2</label>
                 <input type="number" class="form-control" id="inputPassword4" name="num4" placeholder="ex: 3">
               </div>
               <input class="btn btn-dark form-group" type="submit">
             </div>
           </form>
           <?php if (isset($_POST['num3'])): ?>
           <?php $num1 = $_POST["num3"]; ?>
            <?php $num2 = $_POST["num4"]; ?>
            <?php if($num1 > $num2){echo 'True';}else{echo 'False';}?>
           <?php endif; ?>
         </div>
         <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
           Like most object oriented languages, php has built in ability to perform math on variables. In the above example we have a simple calculator that allows a person to add two values using php. In this example, we use the <code>></code> operator, but php provides the following operators for comparison: <code>==</code>, <code>>=</code>, <code><=</code>, <code>===</code>, <code><=></code>, <code>></code> <code><</code>, <code><></code>, <code>!==</code>, <code>!=</code></div>
           <div class="wrapper">

                 <img src="http://localhost/ppl/screenshots/variable_compare.png" style="width: 100%; height: 100%;"/>
               </div>
</div>




<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="functions">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Writing Function</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
             <div class="row">
               <div class="form-group col-md-10">
                 <input type="text" class="form-control textarea" style="width: 400px;" id="inputEmail4" name="funct" placeholder="ex: Hey what is up class!">
               </div>
               <div class="col-sm-2">
             <input class="btn btn-dark form-group" type="submit">
           </div>
           </div>
           </form>
           <?php if (isset($_POST['funct'])): ?>
           <?php $funct= $_POST["funct"]; ?>
            <?php function writeMsg($funct) { echo $funct; }
            writeMsg($funct);
            ?>
           <?php endif; ?>
         </div>
         <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
          We've programmed a simple function, <code>writeMsg()</code>. Simply type in a message to send to the class.</div>
  <div class="wrapper">

        <img src="http://localhost/ppl/screenshots/funct.png" style="width: 100%; height: 100%;"/>
      </div>
</div>





<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="loops">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Loops</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
           <div class="row">
             <div class="form-group col-md-">
               <input type="number" class="form-control" style="" id="inputEmail4" name="num6" placeholder="ex: 5">
             </div>
             <div class="col-sm-2">
           <input class="btn btn-dark form-group" type="submit">
         </div>
         </div>
         <div class="form-group col-sm-4">
           <label for="inputEmail4">Output: </label>
           <?php if (isset($_POST['num6'])): ?>
           <?php $num5 = $_POST["num6"]; ?>
           <?php $arr = array(); ?>
            <?php for($i = 0; $i < $num6; $i++){ $arr[$i] = $i; }?>
            <?php echo '<pre>' + print_r($arr) ?>
           <?php endif; ?>
         </div>
           </form>
         </div>
         <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
          Php enables loop support. To iterate a known number of times it provides the <code>for</code> keyword. To loop an unknown number of times use the <code>while</code> keyword</div>
           <div class="wrapper">

                 <img src="http://localhost/ppl/screenshots/loop.png" style="width: 100%; height: 100%;"/>
               </div>
</div>







<div class="container rounded shadow-sm p-3 mb-5 bg-white" id="arrays">
         <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
           <h1 class="h2">Arrays</h1>
           <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
           <div class="row">
             <div class="form-group col-md-">
               <input type="number" class="form-control" style="" id="inputEmail4" name="num5" placeholder="ex: 5">
             </div>
             <div class="col-sm-2">
           <input class="btn btn-dark form-group" type="submit">
         </div>
         </div>
           </form>
           <?php if (isset($_POST['num5'])): ?>
           <?php $num5 = $_POST["num5"]; ?>
            <?php for($i = 0; $i < $num5; $i++){ echo $i; }?>
           <?php endif; ?>
         </div>
         <div class="p-3 p-md-5 text-black rounded bg-light shadow-sm p-3 mb-5 lead my-3">
           Php allows the creation, population, and traversal of arrays. In the above example we allow the user to create an array with a length they provide, then the array is populated at a given index with its index value. For example, the array <code>$arr = array(); </code> creates an array. Then the array at index 0 is set to the value 0. <code>$arr[0] = 0; </code></div>
           <div class="wrapper">

                 <img src="http://localhost/ppl/screenshots/loop.png" style="width: 100%; height: 100%;"/>
               </div>
</div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["0", "Test 1", "Test 2", "Test 3", "Test 4", "Test 5", "Test 6"],
          datasets: [{
            data: [<?php echo 95; ?>, <?php echo 86; ?>, <?php echo 92; ?>, <?php echo 97; ?>, <?php echo 100; ?>, <?php echo 81; ?>, <?php echo 98; ?>],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
    <footer class="container py-5">
      <div class="row">
        <div class="col-12 col-md">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
          <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
        </div>
        <div class="col-6 col-md">
          <h5>Members</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Alex Monari</a></li>
            <li><a class="text-muted" href="#">Josh Richard</a></li>
            <li><a class="text-muted" href="#">Adam Chester</a></li>
            <li><a class="text-muted" href="#">Yuning Gao</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Links</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#output_data">Output Data</a></li>
            <li><a class="text-muted" href="#user_input">User Input</a></li>
            <li><a class="text-muted" href="#math">Math</a></li>
            <li><a class="text-muted" href="#variable_compare">Variable Compare</a></li>
            <li><a class="text-muted" href="#loops">Loops</a></li>
            <li><a class="text-muted" href="#arrays">Arrays</a></li>
            <li><a class="text-muted" href="#functions">Functions</a></li>
            <li><a class="text-muted" href="#comparisons">Statements</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Class</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">PPL</a></li>
            <li><a class="text-muted" href="#">PHP</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li><a class="text-muted" href="#">Team</a></li>
            <li><a class="text-muted" href="#">Locations</a></li>
            <li><a class="text-muted" href="#">Privacy</a></li>
            <li><a class="text-muted" href="#">Terms</a></li>
          </ul>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script>
  </body>
</html>
