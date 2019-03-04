<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Fahri Final Project</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="page2.php">Gambar dan Komentar</a>
          </li>
          <li class="nav-item  active">
              <a class="nav-link" href="page3.php">Daftar Peserta<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

      <div class="container mt-4">
       <div class="row">
           <div class="col">
             <div class="row mt-2">
                <h1>Nama Peserta</h1>
             </div>
             <div class="row mt-2">
               
               <div class="col">
                  <label>Nama Peserta</label>
                  <input type="text" class="form-control" id="nama-peserta"/>
                  <label>Nilai Peserta</label>
                  <input type="text" class="form-control" id="nilai-peserta"/>
                  <button type="button" class="btn btn-primary mt-2" id="submit">Submit</button>
                </div>
             </div>
           
            
           </div>



           <div class="col">
            <h1>Daftar Peserta</h1>
            <ul class="list-group">
             
            </ul>
           </div>
       </div>
   </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="jq.js"></script>
  </body>
</html>