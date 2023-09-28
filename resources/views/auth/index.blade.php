<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABSD Aktiva | {{ $title }}</title>
    <link rel="icon" href="{{ asset("img/logo icon.png") }}">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
          background: linear-gradient(41deg, rgba(180,184,164,1) 31%, rgba(137,235,255,1) 100%);
          font-family: 'Montserrat', sans-serif;
      }
    
      .background{
      width: 430px;
      height: 520px;
      position: absolute;
      transform: translate(-50%,-50%);
      left: 50%;
      top: 50%;
    }
  
    .background .shape{
      height: 200px;
      width: 200px;
      position: absolute;
      border-radius: 50%;
    }
    .shape:nth-child(1){
        background: linear-gradient(237deg, rgba(180,184,164,1) 31%, rgba(137,235,255,1) 100%);
        left: -80px;
        top: -80px;
    }
    .shape:nth-child(2){
        background: linear-gradient(237deg, rgba(180,184,164,1) 31%, rgba(137,235,255,1) 100%);
        right: -10px;
        bottom: -5px;
    }
    .shape:nth-child(3){
        background: linear-gradient(237deg, rgba(180,184,164,1) 31%, rgba(137,235,255,1) 100%);
        left: -140px;
        bottom: -5px;
    }
    .shape:nth-child(4){
        background: linear-gradient(237deg, rgba(180,184,164,1) 31%, rgba(137,235,255,1) 100%);
        right: -50px;
        top: -80px;
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
        background-color: rgba(255,255,255,0.13);
        backdrop-filter: blur(10px);
        box-shadow: 0 0 40px rgba(8,7,16,0.6);
        position: absolute;
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
    <div class="background">
      <div class="shape" id="shape"></div>
      <div class="shape" id="shape"></div>
      <div class="shape" id="shape"></div>
      <div class="shape" id="shape"></div>
    </div>
    @if (session()->has('loginErr'))
        <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert" data-dismiss="alert" style="cursor: pointer;">
            <strong class="d-flex items-center justify-content-center">
                 {{ session('loginErr') }}
            </strong>
        </div>
    @endif
    <form class="global-container" action="{{ route('auth.verif') }}" method="POST">
      @csrf
      <div class="card Login-form">
          <div class="d-flex justify-content-center">
              <img class="mb-5 mt-2" src="img/logo absd.png" alt="heroImg">
          </div>
          <div class="card-text" style="color: white;">
              <div class="mb-3">
                  <label for="username" class="form-label text-black">Username</label>
                  <input name="username" type="text" class="form-control" id="username" autocomplete="off" value="{{ old('username') }}">
              </div>
              <div class="mb-3">
                  <label for="password" class="form-label text-black">Password</label>
                  <input name="password" type="password" class="form-control" id="password" value="{{ old('password') }}">
              </div>
              <div class="d-grid gap-2 mt-5">
                  <button class="btn btn-lg btn-primary fw-semibold">LOGIN</button>
              </div>
          </div>
      </div>
  </form>
  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js" integrity="sha512-z4OUqw38qNLpn1libAN9BsoDx6nbNFio5lA6CuTp9NlK83b89hgyCVq+N5FdBJptINztxn1Z3SaKSKUS5UP60Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="text/javascript">

    Anime = () => {
      anime({
          targets: '.background .shape',
          translateX: anime.random(0, 120),
          translateY: anime.random(0, 120),
          delay: anime.stagger(200),
          easing: 'easeInOutCubic',
          duration: 750,
          complete: Anime
        });
      }

  Anime();
    
  </script>
</html>