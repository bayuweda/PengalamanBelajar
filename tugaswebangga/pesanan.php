<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "2101020039_angga";

// Membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>



<div class="row justify-content-between">
    <div class="col-10"><b>Kategori </b></div>
    <div class="col-2 d-flex justify-content-end align-items-end">
        <button class="btn btn-dark btn-sm" type="button">add</button>
    </div>
</div>

<hr>
<table class="table table-sm border border-dark">
    <thead class="thead-dark">
        <tr>
            <th scope="col" width="5%">No</th>
            <th scope="col">tanggal pesanan</th>
            <th scope="col" width="12%">Aksi</th>
</tr>
</thead>
<tbody>
<tbody>
<?php
    $que = "SELECT * FROM pesanan";
    $select = mysqli_query($conn,$que);
    while($data= mysqli_fetch_array($select) ){

        ?>

        <tr>
            <th scope = "row"<?php echo $data["id_pesanan"]; ?></th>
            <td><?php echo $data["tanggal_pesanan"]; ?></td>
            <td>
                <button class="btn btn-dark btn-sm" type="button">edit </button>
                <button class="btn btn-dark btn-sm" type="button">delete</button>
            </td>
        </tr>
        <?php }?>
        </tbody>
    </table>
    

        
