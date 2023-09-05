<?php
// include 'dbcontroller.php';
require_once('dbcontroller.php');
$db = new dbController();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">;
    </script>
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <!-- Navbar -->
  <section class="header">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
      <div class="container">
      <a class="navbar-brand" href="#">SMKN 40 Jakarta</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">JURUSAN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">GURU</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">SISWA</a>
          </li>             
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <br>

  <!-- Cards -->
  <div class="container" id="kelas">
    <h1 class="text-center text-center mb-5 mt-3 text-white" >JURUSAN</h1>
    <div class="row text-center justify-content-center">
      
      <?php
      $sql = "select * from t_kelas";
      $row = $db->getALL($sql);
      foreach ($row as $value) :
      ?>

        <div class="card-all d-flex justify-content-center col-md-4 col-xl-4 mb-5" data-aos="flip-right" data-aos-duration="1000">
          <div class="card" style="width: 18rem;">
            <img src="image/<?php echo $value["f_nama"] ?>.jpg" class="card-img-top" alt="jurusan">
            <div class="card-body">
              <h5 class="card-title text-dark">

                <?php echo $value['f_nama']; ?>

              </h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic ex aperiam accusantium. Odit eos illo officia. Assumenda fuga, corrupti tenetur, natus rem vero porro pariatur magnam facilis doloribus enim expedita.
              </p>
            </div>
          </div>
        </div>
      <?php
      endforeach
      ?>
    </div>
  </div>
</section>  

  <!-- Akhir Cards -->
  <!-- Cards Kelas -->

  <section class="course">
    <h1>Class | SMK Negeri 40 Jakarta</h1>
    <div class="row">
        <div class="course-col">
            <h3>KELAS 10</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem fuga pariatur perspiciatis! Necessitatibus porro earum illum sed, repellat amet enim quaerat maiores, laborum laboriosam provident similique iste quo.</p>
        </div>
        <div class="course-col">
            <h3>KELAS 11</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem fuga pariatur perspiciatis! Necessitatibus porro earum illum sed, repellat amet enim quaerat maiores, laborum laboriosam provident similique iste quo.</p>
        </div>
        <div class="course-col">
            <h3>KELAS 12</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quidem fuga pariatur perspiciatis! Necessitatibus porro earum illum sed, repellat amet enim quaerat maiores, laborum laboriosam provident similique iste quo.</p>
        </div>
    </div>
</section>
<!-- Cards -->
<div class="container" id="kelas">
    <h1 class="text-center text-center mb-5 mt-3 text-black" >GURU</h1>
    <div class="row text-center justify-content-center">
      
      <?php
      $sql = "select * from t_guru";
      $row = $db->getALL($sql);
      foreach ($row as $value) :
      ?>

       <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="img_guru/<?php echo $value["f_nama"] ?>.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          <?php echo $value['f_nama']; ?>
        </h5>
        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptatibus ipsum, quisquam dolorem ratione facilis?</p>
      </div>
    </div>
  </div>
</div>
      <?php
      endforeach
      ?>
    </div>
  </div>
</section>

  <!-- Akhir Cards -->

</body>

</html>