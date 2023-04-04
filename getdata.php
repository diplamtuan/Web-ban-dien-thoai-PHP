<?php
include 'header.php';
include 'DB/dbconnect.php';
global $conn;

$sqlProduct = "SELECT * FROM dienthoai";
$result = $conn->query($sqlProduct);
while ($row = $result->fetch_assoc()) {
?>




    <!DOCTYPE html>
    <html>

    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link rel="stylesheet" href="style_getdata.css">
    </head>

    <body>

        <h2 style="text-align:center">Product Card</h2>
        <div class="card">
            <img src="assets/img/<?php echo $row['Anhdt']; ?>" alt="<?php echo $row['Tendt']; ?>" style="width:100%">
            <h1><?php echo $row['Tendt']; ?></h1>
            <p class="price"><?php echo $row['Giadt']; ?>vnđ</p>
            <p><?php echo $row['Motadt']; ?></p>
            <p><button onclick=" addtocart(<?php echo $row['ID_dienthoai']; ?>)">Mua hàng</button></p>
        </div>
    <?php } ?>

    </body>

    <script>
        function addtocart(id_dt) {
            $.post("addcart.php", {"id_dt": id_dt }, function(data) {
                item = data.split("-");
                console.log(item);
                $('#qty').html(item[0]);
            });

        }
    </script>

    </html>