<form action="../controller.php?action=add" method="post">
       
        <div class="mb-3 mt-3">
            <label for="id_buku" class="form-label">Id Buku:</label>
            <input type="text" class="form-control" id="id_buku" placeholder="Masukkan ID Buku" name="id_buku">
        </div>
        <div class="mb-3">
            <label for="kategori" class="form-label">Kategori:</label>
            <input type="text" class="form-control" id="kategori" placeholder="Masukkan Kategori Buku" name="kategori">
        </div>
        <div class="mb-3">
            <label for="nama_buku" class="form-label">Nama Buku:</label>
            <input type="text" class="form-control" id="nama_buku" placeholder="Masukkan Nama Buku" name="nama_buku">
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">harga:</label>
            <input type="text" class="form-control" id="harga" placeholder="Masukkan Harga Buku" name="harga">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok:</label>
            <input type="text" class="form-control" id="stok" placeholder="Masukkan Stok Buku" name="stok">
        </div>
        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit:</label>
           
            <select class="form-control" name="penerbit">
            <?php
                      include '../koneksi.php';
                      $db = new database();
                      foreach($db->tampil_data_penerbit() as $x){
                ?>
            <option value="<?php echo $x['nama'] ?>"><?php echo $x['nama'] ?></option>
                 
            <?php
               }
            ?>
            </select>
           
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
