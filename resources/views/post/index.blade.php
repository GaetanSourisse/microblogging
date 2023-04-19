<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Celestia</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


</head>

<body>

  <header>
    <div class="collapse" style="background-image: url('{{ asset('image/ciel_etoile.jpg') }}')" id="navbarHeader">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-md-7 py-4">
            <h4 class="text-white"><a href="login" class="text-white">Log in</a></h4>
            <p class="text-muted">Ravi de vous revoir!</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white"><a href="register" class="text-white">Sign in</a></h4>
            <p class="text-muted">Première visite? Rejoignez notre communauté!</p>
            <!-- <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul> -->
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark shadow-sm" style="background-color:#000000; border-top:1px solid #f8fbfe; border-bottom:1px solid #f8fbfe">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('image/logo_celestia.png') }}" alt="tag"  height="50" width="50">
            <strong>Bienvenue sur Celestia</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main style="background-color:#000000">

    <section class="py-5 text-center container" style="background-color:#000000">
      <div class="row py-lg-5" style="background-image: url('{{ asset('image/aurore_boreale.jpeg') }}'); background-repeat: no-repeat; background-size: cover; background-position: center; border-radius: 20px;">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 style="color:#f8fbfe; font-size:4.5em" >Celestia</h1>
            <p style="color:#252e46; font-weight: bold">Le blog qui parle aux fans de la voûte céleste au ciel azur. Viens partager ta passion avec nous !</p> 
        </div>
      </div>
    </section>

    <div class="album py-5" style="background-color:#000000">
        
        @foreach($posts as $post)
    
            <div class="container py-4">
            
                <div>
                    <div>
                        <div class="card shadow-sm flex flex-row">
                            <img src="{{ $post->image }}"></img>

                            <div class="card-body">
                                <h3>{{ $post->title }}</h3>
                                <p class="card-text">{{ $post->content}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><img src="{{ asset('image/like.png') }}" alt="tag"></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Comments</button>
                                    </div>
                                    <small class="text-muted">posté le {{ $post->created_at}} par {{ $post->user_id}}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        
        @endforeach
        
    </div>

  </main>

  <footer class="text-muted py-5" style="background-image: url('{{ asset('image/ciel_etoile.jpg') }}')">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Cindy Bestaven, Juliette De Quatrebarbe, Thibaut Champenois, Gaëtan Sourisse.</p>
      <p class="mb-0"><a href="https://adatechschool.fr/">Ada Tech School</a></p>
    </div>
  </footer>

</body>

</html>
