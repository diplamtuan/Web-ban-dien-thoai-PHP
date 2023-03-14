<div>
    <?php
    if(isset($_GET['hienthi'])){
        $tam = $_GET['hienthi'];
    }
    else{
        $tam='';
    }
    if($tam=='tenthuonghieu'){
        include("main_nav_menu.php");
    }
    if($tam=='tatca'){
    
        include_once('timkiem.php');
        
    }
    ?>
</div>