<?php
//mengaktifkan session_commit
session_start();

//menghapus semua session
session_destroy();

//mengalihkan halaman sambil mengirim pesan logout
header("location:index.php?pesan=logout");
?>