<?php
    $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
    $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
    if(strpos("/pacman/") !== false){
        header('Location: http://pacman.davidruiz.xyz/index.html');
    } else {
        header('Location: http://pacman.davidruiz.xyz/index.html');
    }
?>