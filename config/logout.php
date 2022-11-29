<?php
session_start();
session_destroy();
echo "<script>alert('Terima kasih');
location.href='../'</script>";
echo "<script> window.location = '../index.php' </script>";
