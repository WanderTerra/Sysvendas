<?php
include_once './includes/connect.php';



if(isset($_GET['deleteid'])){
    $id = $_GET["deleteid"];
    $sql = "DELETE FROM pessoa WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
        header('location: Clientes.php');
    }
    else{
        echo "<script>alert('Erro ao excluir!')</script>";
        echo "<script>window.location.href = 'Clientes.php'</script>";
    }
}
?>