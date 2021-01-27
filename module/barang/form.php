<?php 
    $barang_id = isset($_GET['barang_id']) ? $_GET['barang_id'] : false;

    $nama_barang = "";
    $spesifikasi = "";
    $stok = "";
    $harga = "";
    $status = "";
    $button = "Add";

    // if($kategori_id) {
    //     $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id = '$kategori_id'");
    //     $row = mysqli_fetch_assoc($query_kategori);

    //     $kategori = $row['kategori'];
    //     $status = $row['status'];
    //     $button = "Update";
    // }
?>

<form action="<?php echo BASE_URL."module/barang/action.php?barang_id=$barang_id"; ?>" method="post" enctype="multipart/form-data">
    <div class="element-form">
        <label for="kategori">Kategori</label>
        <span>
            <select name="kategori_id" id="kategori">
                <?php 
                    $query = mysqli_query($koneksi, "SELECT kategori_id, kategori FROM kategori WHERE status='on' ORDER BY kategori ASC");
                    while($row = mysqli_fetch_assoc($query)) {
                        echo "<option value='$row[kategori_id]'>$row[kategori]</option>";
                    }
                ?>
            </select>
        </span>
    </div>
    <div class="element-form">
        <label for="nama_barang">Nama Barang</label>
        <span><input type="text" name="nama_barang" id="nama_barang" value="<?php echo $nama_barang; ?>"></span>
    </div>
    <div class="element-form">
        <label for="spesifikasi">Spesifikasi</label>
        <span><textarea name="spesifikasi" id="spesifikasi"><?php echo $spesifikasi; ?></textarea></span>
    </div>
    <div class="element-form">
        <label for="stok">Stok</label>
        <span><input type="text" name="stok" id="stok" value="<?php echo $stok; ?>"></span>
    </div>
    <div class="element-form">
        <label for="harga">Harga</label>
        <span><input type="text" name="harga" id="harga" value="<?php echo $harga; ?>"></span>
    </div>
    <div class="element-form">
        <label for="gambar">Gambar Produk</label>
        <span><input type="file" name="file" id="gambar"></span>
    </div>
    <div class="element-form">
        <label for="status">Status</label>
        <span>
            <input type="radio" name="status" value="on" id="status" <?php if($status == "on") { echo "checked='true'"; } ?>/>On
            <input type="radio" name="status" value="off" id="status" <?php if($status == "off") { echo "checked='true'"; } ?> />Off
        </span>
    </div>
    <div class="element-form">
        <span><input type="submit" name="button" value="<?php echo $button; ?>"></span>
    </div>
</form>