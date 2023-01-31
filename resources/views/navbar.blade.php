<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Bootstrap Example</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    
    
    
    <style>
        body{
            
            box-sizing: border-box;
        }
        .dropdown-item{
            padding:5px 13px;
           
        }
        .dropdown-item:hover{
           
            background:black;
            color: white;
        }
    </style>
  </head>
  <body class="p-0 m-0 border-0 bd-example">

    <!-- Example Code -->
    
    <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Leads</a>
            </li>
            <li class="nav-item">
                <a class="nav-link ">Contacts</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ">Accounts</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Deals</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Tasks</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Meetings</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Cells</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Reports</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Analytics</a>
              </li>  <li class="nav-item">
                <a class="nav-link ">Products</a>
              </li>
            </li>  <li class="nav-item">
                <a class="nav-link ">Services</a>
              </li>
            </li>  <li class="nav-item">
                <a class="nav-link ">Projects</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="{{asset('/assets/images/ssa.png')}}" alt="" style="width:20px; height:20px;">
              </a>
              <div class="dropdown-menu " style="padding: 9px 12px;">
                <input type="text" class="form-control" id="myInput"/>
                <ul  style="width: 240px;list-style-type:none;padding:0;" id="myList">
                   
    
                    <li><a class="dropdown-item" href="#">Quotes</a></li>
                    <li><a class="dropdown-item" href="#">Sales Order</a></li>
                    <li><a class="dropdown-item" href="#">Purchase Order</a></li>
                    <li><a class="dropdown-item" href="#">Invoices</a></li>
                    <li><a class="dropdown-item" href="#">SalesInbox</a></li>
                    <li><a class="dropdown-item" href="#">Invoices</a></li>
                    <li><a class="dropdown-item" href="#">Campaigns</a></li>
                    <li><a class="dropdown-item" href="#">Vendors</a></li>
                    <li><a class="dropdown-item" href="#">Price Books</a></li>
                    <li><a class="dropdown-item" href="#">Cases</a></li>
                    <li><a class="dropdown-item" href="#">Solutions</a></li>
                    <li><a class="dropdown-item" href="#">Documents</a></li>
                    <li><a class="dropdown-item" href="#">Forcasts</a></li>
                    <li><a class="dropdown-item" href="#">Visits</a></li>
                    <li><a class="dropdown-item" href="#">Social</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
              </div>
              
            </li>
           
          </ul>
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <script src="https://kit.fontawesome.com/5e53d7a4f7.js" crossorigin="anonymous"></script>
    
    <!-- End Example Code -->
    <script>
        $(document).ready(function(){
          $("#myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#myList li").filter(function() {
              $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
          });
        });
        </script>
  </body>
</html>