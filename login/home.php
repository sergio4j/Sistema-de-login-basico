<?php include("includes/header.php")?>

<?php 
session_start();
    if(isset( $_SESSION['email'])){
        $cliente = $_SESSION['email'];
    }else{
        header('Location: index.php');
        die();
    }
?>

    <a href="conexion/logout.php">Cerrar Sesión</a>

    <h1>Bienvenido <?php echo $cliente ?> </h1>
    
<?php include("includes/footer.php")?>
