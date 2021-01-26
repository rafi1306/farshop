<?php 
    $kategori_id = isset($_GET['kategori_id']) ? $_GET['kategori_id'] : false;

    $kategori = "";
    $status = "";
    $button = "Add";

    if($kategori_id) {
        $query_kategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE kategori_id = '$kategori_id'");
        $row = mysqli_fetch_assoc($query_kategori);

        $kategori = $row['kategori'];
        $status = $row['status'];
        $button = "Update";
    }
?>

<form action="<?php echo BASE_URL."module/kategori/action.php?kategori_id=$kategori_id"; ?>" method="post">
    <div class="element-form">
        <label for="kategori">Kategori</label>
        <span><input type="text" name="kategori" id="kategori" value="<?php echo $kategori; ?>"></span>
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