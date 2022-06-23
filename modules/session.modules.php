<?php

function session_validate()
{
    session_start();
    $session_user = 'guest';
    if (!empty($_SESSION['token'])):
        $session_user = $_SESSION['token'];
    endif;
    return $session_user;
}

function session_validate_element($session_state) {
    return $session_state == 'guest' ? 'd-none' : '';
}