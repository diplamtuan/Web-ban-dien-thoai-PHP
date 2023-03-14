<?php
// include('./DB/dbconnect.php');
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <?php
            $sql_thuonghieu = "SELECT *from thuonghieu ";
            $query_thuonghieu = mysqli_query($conn, $sql_thuonghieu);
            ?>
            <ul class="navbar-nav">
                <li><a class="nav-link active" aria-current="page" href=" Sanpham.php?hienthi=tatca">Tất cả</a></li>
                <?php
                while ($row = mysqli_fetch_array($query_thuonghieu)) {
                    $id = $row['id_thuonghieu'];

                ?>
                    <li><a class="nav-link" href="Sanpham.php?hienthi=tenthuonghieu&id=<?php echo $id ?>"><?php echo $row['tenthuonghieu'] ?></a></li>
                <?php
                }
                ?>
        
            </ul>
        </div>
    </div>
</nav>