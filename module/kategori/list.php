<div id="frame-tambah">
    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action">+ Tambah Kategori</a>
</div>

<?php 
    $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori");

    if(mysqli_num_rows($query_kategori) == 0) {
        echo "<h3>Saat ini belum ada kategori di dalam tabel kategori.</h3>";
    } else {
        echo "<table class='table-list'>";

        echo "<tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";
        
        $no = 1;
        while($row = mysqli_fetch_assoc($query_kategori)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$row[kategori]</td>
                    <td>$row[status]</td>
                    <td>
                        <a href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&kategori_id=$row[kategori_id]'>Edit</a>
                    </td>
                </tr>";
            $no++;
        }

        echo "</table>";
    }
?>