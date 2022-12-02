<table class='table table-borderless table-light'>
  <thead>
    <tr>
      <th scope='col'>NOME</th>
      <th scope='col'>E-MAIL</th>
      <th scope='col'>CPF</th>
      <th scope='col'>TELEFONE</th>
      <th scope='col'>FUNÇÕES</th>
    </tr>
  </thead>
  <tbody>


    <?php



    //READ
    $conn->prepare("SELECT * FROM clientes");
    $stmt->execute();
    $fetchClientes = $stmt->fetchAll();
    foreach ($fetchClientes as $key => $value) {
      echo "
  <tr id = 'trow'>
  <th scope='row'>" . $value['nome'] . "</th>
  <td>" . $value['email'] . "</td>
  <td>" . $value['cpf'] . "</td>
  <td>" . $value['telefone'] . "</td>
  <td>
  <a id='buttonRead' href = '?delete=" . $value['id_cliente'] . "'><img src='../assets/icon-delete.svg'></a>
  <a id='buttonRead' href = 'edit.php?edit=" . $value['id_cliente'] . "'><img src='../assets/icon-edit.svg'></a>
  </td>
  ";
    }
    //delete
    ?>
  </tbody>
</table>