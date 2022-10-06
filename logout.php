<?php

    include('./input-config.php');
    session_destroy();

    echo"
            <script>
            alert('keluarnya cepet');
            window.location= 'login.php';
            </script>
            ";

?>