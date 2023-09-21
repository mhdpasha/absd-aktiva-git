<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABSD Aktiva | {{ $title }} </title>
    <link rel="icon" href="{{ asset("img/logo icon.png") }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/Logotab.png"/>
  </head>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap');
    /* * {border: 1px solid red; } */
    img {
      -webkit-user-drag: none;
      user-select: none;
    }
    html,
    body{
        height: 100%;
        background-color: rgb(152, 152, 152);
        font-family: 'Montserrat', sans-serif;
    }

    
    .global-container{
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #000000;
    }

    .Login-form{
        width: 450px;
        height: 500px;
        padding: 45px;
        background-color: rgba(255,255,255, 0.7);
        border-radius: 10px;
        margin-bottom: 25px;
        filter: blur(20);
    }
    .card-title{
        font-weight: 900;
        padding-top: 5px;
    }
    .form-control {
      border: none;
      background-color: rgba(255,255,255, 0.6);;
    }
    .btn {
      letter-spacing: 2px;
    }
  </style>
  <body>

    <form class="global-container" action="{{ url('/dashboard') }}" method="">
        <div class="card Login-form">
            <div class="d-flex justify-content-center">
                <img class="mb-5 mt-2" src="img/logo absd.png" alt="heroImg">
            </div>
            <div class="card-text">
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Username</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" autocomplete="off">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" aria-describedby="password">
                    </div>
                    <div class="d-grid gap-2 mt-5">
                      <button class="btn btn-lg btn-primary fw-semibold">LOGIN</button>
                  </div>
                  </form>
            </div>
        </div>
    </form>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>