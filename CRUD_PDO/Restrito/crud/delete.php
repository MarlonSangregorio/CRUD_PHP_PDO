<script src="sweetalert2.all.min.js"></script>
<?php
if (isset($_GET['delete'])) {

  $id = (int)$_GET['delete'];

  $stmt = $conn->prepare('DELETE FROM clientes WHERE id_cliente=' . $id);
  $stmt->execute();

  echo "
      <script>
      Swal.fire({
        position: 'center',
        icon: 'success',
        title:'Cliente excluido com sucesso!',
        showConfirmButton: false,
        allowOutsideClick: false,
        allowEscapeKey: false,
        timer: 1500
      })
      </script>
      ";
  header("Refresh:1.5; url=index.php");
  die();
}
?>