<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Bloom</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="flowers.php">Flowers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="track.php">Track Order</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign.php">Sign in</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-4 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="images\quote1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
            <div class="col col-12 col-sm-6 col-md-6">
                <table class="table-borderless">
                    <tr>
                        <td>Enter Order No</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email Id</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">TRACK ORDER</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-6"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>