<div class="container">
 
 <!-- flashdata -->
<?php if( $this->session->flashdata('flash') ) : ?> 
    <div class="row mt-3">
        <div class="col md-6">
                <div class="alert alert-success alert-dismissible fade show" 
                    role="alert">
                    Data mahasiswa <strong>berhasil</strong> <?= 
                    $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert"
                    aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
        </div>
    </div>

<?php endif; ?>


<!-- css/style2 -->     
<link rel="stylesheet" href="<?= base_url(); ?>application/assets/css/style2.css"/>

<!-- Cari Data Mahasiswa -->
        <div class="row mt-5">
            <div class="col-md-11">
                <form action="" method="post">
                    <div class="input-group">
                        <a href ="<?= base_url(); ?>mahasiswa/tambah" class="font-weight-bold btn btn-success" ><i class="text-dark bi bi-person-plus-fill"></i> Daftar</a>
                        <input type="text" class="form-control" placeholder="Cari data pendaftaran mahasiswa SP...." name="cari">
                            <div class="input-group-append">
                        <button class="btn btn-outline-dark" type="submit"><i class="bi bi-search"></i></button>            
                            </div>
                          
                    </div>  
         

         <div class="row mt-4">
           <div class="col-md-11">
                <h4>Pendaftar Mahasiswa Semester Pendek</h4>  
           </div>  
         </div>
           
<!--Notif bila data tidak ada di database -->
           <?php if (empty($mahasiswa)) : ?>
                <div class="alert alert-danger" role="alert">
                Data tidak di temukan......
                </div>
           <?php endif; ?>

           
 <!-- Tabel List Mahasiswa Pendaftaran -->
                <table class="table table-success table-striped table-hover"> 
                    <thead class="table-danger"> 
                       <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th >Nim</th>
                            <th >Kelas</th>
                            <th class="text-center">Action</th>
                      </tr>
                    </thead>
                    
                   
                       <tbody>
                           <?php $i = 1;
                            foreach ($mahasiswa as $mhs) : ?>
                               <tr>
                                <td><?= $i++;?></td>
                                <td><?= $mhs['nama']?></td>
                                <td><?= $mhs['nim']?></td>
                                <td><?= $mhs['kelas']?></td>
                                <td>
                                   <a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" 
                                    onclick="return confirm('Apakah Anda Yakin ?');">Delete</a>
                                    <a href="<?= base_url(); ?>mahasiswa/edit/<?= $mhs['id']; ?>" class="badge badge-warning float-right" >Edit</a>
                                    <a href="<?= base_url(); ?>mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-info float-right" >Detail</a>
                                            
                                
                                </td>
                                </tr>
                            
                            <?php endforeach; ?>
                         </tbody>
                </table>
                                    
        </div>
   
    </div>

  </div>