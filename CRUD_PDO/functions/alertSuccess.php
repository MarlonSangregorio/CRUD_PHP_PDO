  <!--CSS sweetalert2-->
  <link rel="stylesheet" href="sweetalert2.min.css">

  <!--scripts sweetalert2-->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>


  <?php
  function alertSuccess($user, $msg)
  {
    echo "
  <script>
  const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: toast => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  Toast.fire({
    icon: 'success',
    title: '$user $msg com sucesso!'
  })
  </script>";
  }
