<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SCBI Calc - Factory</title>
    <!-- Bootstrap 4 CDN -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" type="text/css" href="buldingcss.css">
</head>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="scbicalc.html">SCBI Calculator</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="scbicalc.html">Home</a></li>
            <li class="nav-item"><a class="nav-link active" href="#">Factory</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Building Supply</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Hardware</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Farmer's Market</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Gardening Supplies</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Donut Shop</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Fashion Store</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Fast Food</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Home Appliances</a></li>
             <!-- <li class="nav-item"><a class="nav-link" href="#">Totals</a></li> -->
        </ul>
    </div>
</nav>
    <div class="container">
        <form action="" method="get">
        <div class="row" style="margin: 5px">
            <div class="col-md-12">
                <h1>Factory Items</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Metal - <input type="text" size="3" name="metal"></label>
            </div>
            <div class="col-md-4">
                <label>Wood - <input type="text" size="3" name="wood"></label>
            </div>
            <div class="col-md-4">
                <label>Plastic - <input type="text" size="3" name="plastic"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Seeds - <input type="text" size="3" name="seeds"></label>
            </div>
            <div class="col-md-4">
                <label>Minerals - <input type="text" size="3" name="minerals"></label>
            </div>
            <div class="col-md-4">
                <label>Chemicals - <input type="text" size="3" name="chemicals"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label>Textiles - <input type="text" size="3" name="textiles"></label>
            </div>
            <div class="col-md-4">
                <label>Spices - <input type="text" size="3" name="spices"></label>
            </div>
            <div class="col-md-4">
                <label>Glass - <input type="text" size="3" name="glass"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Feed - <input type="text" size="3" name="feed"></label>
            </div>
            <div class="col-md-6">
                <label>Microchips - <input type="text" size="3" name="chips"></label>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label><input type="reset" value="Clear Factory"></label>
                <label><input type="submit" value="Building Supplies"></label>
            </div>
        </div>
        </form>
    </div>
</body>
</html>