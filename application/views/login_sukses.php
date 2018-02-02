<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="refresh" content="3; url=<?php echo base_url('team') ?>" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('') ?>/asset/swalert/dist/sweetalert2.css">

    <script type="text/javascript" src="<?php echo base_url('') ?>/asset/swalert/dist/sweetalert2.all.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11 and Android browser -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
  <script>
    swal({
      text: "Berhasil",
      type: 'success',
      confirmButtonColor: '#3085d6',
      confirmButtonText: 'OK'
    }).then(function (result) {
      if (result.value) {
        window.location = "<?php echo base_url('team') ?>"
      }
    })
  </script>
</html>
