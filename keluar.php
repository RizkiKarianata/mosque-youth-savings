<?php
setcookie("version", "", time() + (60 * 60 * 24 * 5), '/');
echo "<script>
localStorage.removeItem('id_pengguna');
localStorage.removeItem('username');
localStorage.removeItem('nama');
window.location.href='index';
</script>";
?>