<?php
                          include '../koneksi.php';
                           $db = new database();
                          $no = 1;
                          foreach($db->tampil_data() as $x){
                   ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $x['id_buku']; ?></td>
                    <td><?php echo $x['kategori']; ?></td>
                    <td><?php echo $x['nama_buku']; ?></td>
                    <td><?php echo $x['harga']; ?></td>
                    <td><?php echo $x['stok']; ?></td>
                    <td><?php echo $x['penerbit']; ?></td>
                   
                    <td>
                        <a href="edit_buku.php?id_buku=<?php echo $x['id_buku']; ?>&aksi=edit">
                        <button type="button" class="btn btn-success">Edit</button></a>
                       
                        <a class="remove"
                        href="../controller.php?action=delete&id_buku=<?php echo $x['id_buku']; ?>">
                        <button type="button" class="btn btn-danger">Hapus</button></a>
                       
                    </td>
                </tr>
                <?php
                     }
                ?>
