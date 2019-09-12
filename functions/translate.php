<?php

function sessionIsActive() {
    return session_status() == 2;
}

function createSession() {
    if(! sessionIsActive())
    session_start();
}

createSession();

function setLanguage($language) {
    $_SESSION['language'] = $language;
}

function __($message, $translate) {
    if(getLanguage() == 'pt-BR')
        return $message;
    return $translate;
}

function getLanguage() {
    return $_SESSION['language'] ?? 'pt-BR';
}