<!doctype html>
   <html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <!-- Icon CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

      <!-- css saya -->
      <link rel="stylesheet" href="<?= base_url(); ?>application/assets/css/style.css"/>

    <title><?php echo $judul ?></title>
  </head>
  <body>
  
 
 <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class ="container" >

              <a class="navbar-brand" href="#">
                  <img src="application/img/codeigniter.png" alt="" width="40" height="32" class="d-inline-block align-text-top">
                  Pemograman Framwork
              </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                      <div class="navbar-nav">
                  
                        <a class="text-dark font-weight-bold nav-item nav-link " href="<?= base_url() ; ?>home">My Profile <span class="sr-only">(current)</span></a>
                        <a class="text-dark font-weight-bold nav-item nav-link" href="<?= base_url() ; ?>mahasiswa">Pendaftaran SP</a>
    
                      </div>
                  </div>
         <div>
        
</nav> 