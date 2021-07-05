<div class="container">
                   
    <div class="row mt-4">
        <div class="col-md-6 ">

        <div class="card">
            <div class="card-header p-3 mb-2 bg-primary text-white">
                Form Edit Data Mahasiswa
              </div>

<!-- Card-body dan form tabel edit-->
                <div class="card-body">
                <form action=""  method="post">
                    <input type="hidden" name="id" value="<?= $mahasiswa ['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa ['nama'];?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="text" name="nim" class="form-control" id="nim" value="<?= $mahasiswa ['nim'];?>">
                            <small class="form-text text-danger"><?= form_error('nim'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name='email' class="form-control" id="email" value="<?= $mahasiswa ['email'];?>">
                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" name="kelas" class="form-control" id="kelas" value="<?= $mahasiswa ['kelas'];?>">
                            <small class="form-text text-danger"><?= form_error('kelas'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <?php foreach( $jurusan as $j ) : ?>
                                    <?php if($j == $mahasiswa['jurusan']) :?>
                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>

                                        <?php else :?>

                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                    <?php endif ;?>
                                <?php endforeach; ?>  
                                
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="matakuliahsp">Mata Kuliah SP</label>
                        <select class="form-control" id="matakuliahsp" name="matakuliahsp">
                        <?php foreach( $matakuliahsp as $msp ) : ?>
                                <?php if($msp == $mahasiswa['matakuliahsp']) :?>
                                    <option value="<?= $msp; ?>" selected><?= $msp; ?></option>

                                    <?php else :?>

                                    <option value="<?= $msp; ?>"><?= $msp; ?></option>
                                <?php endif ;?>
                            <?php endforeach; ?>  
                              
                        </select>
                    </div>
        
                        <button type="submit" name="edit" class="btn btn-primary btn-sm float-right"><i class="text-dark bi bi-box-arrow-up"></i>
                            Update Data</button>
                            <a href="<?= base_url(); ?>mahasiswa"  
                            class="btn btn-secondary btn-sm">Kembali</a>
                    </form>   
               </div>           
            </div>
        </div>
    </div>
</div>