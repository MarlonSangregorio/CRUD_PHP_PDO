  <!--CSS sweetalert2-->
  <link rel="stylesheet" href="sweetalert2.min.css">

  <!--scripts sweetalert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>

  <?php
  function alertError()
  {
    echo "
  <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
  <script>
      setTimeout(() => {
        Swal.fire({
          icon: 'error',
          title: 'Oops...',
          text: 'Úsuario ou senha inválidos! Tente novamente.',
          showConfirmButton: false,
          allowOutsideClick: false,
          allowEscapeKey: false,
          timer: 2500
        })
      }, 300);
    </script>
    ";
  }
  ?>