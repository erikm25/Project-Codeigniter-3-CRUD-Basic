<div class="container">
    <div class="row mt-5">
        <div class="col-md-7">
        
            <div class="card">
                    <div class="card-header p-3 mb-2 bg-secondary text-white">
                       Detail Data Mahasiswa
                     </div> 
                  <div class="card-body">   
                  <!-- Tabel detai data mahasiswa-->
                        <table class="table table-bordered"> 
                            <thead class="thead-light"> 
                                <tr>
                                        <th>Nama</th>
                                        <th>Nim</th>
                                        <th>Kelas</th>
                                        <th>Email</th>
                                        <th>Jurusan</th>
                                        <th>Mata Kuliah SP</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td><?= $mahasiswa['nama']; ?></td>
                                <td><?= $mahasiswa['nim']; ?></td>              
                                <td><?= $mahasiswa['kelas']; ?></td>              
                                <td><?= $mahasiswa['email']; ?></td>              
                                <td><?= $mahasiswa['jurusan']; ?></td>                    
                                <td><?= $mahasiswa['matakuliahsp']; ?></td>                    
                                </tr>
                        
                            </body>
                        </table>  

                     <div class="col mt-5">
                      <a href="<?= base_url(); ?>mahasiswa"  class="btn btn-secondary btn-sm">Kembali</a>    
                     </div>
               
                    </div>
            </div>
        
        </div>
    </div>
</div>









