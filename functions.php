<?php

function setSameSiteCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Strict', 'secure' => true, 'httponly' => true
    ]);
}

function setLaxSameSiteCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Lax', 'secure' => true, 'httponly' => true
    ]);
}

function setNotSameSiteCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'None', 'secure' => true, 'httponly' => true
    ]);
}

function setSameSiteNotHttpOnlyCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Strict', 'secure' => true, 'httponly' => false
    ]);
}

function setLaxSameSiteNotHttpOnlyCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Lax', 'secure' => true, 'httponly' => false
    ]);
}

function setNotSameSiteNotHttpOnlyCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'None', 'secure' => true, 'httponly' => false
    ]);
}

function setSameSiteNotSecureCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Strict', 'secure' => false, 'httponly' => true
    ]);
}

function setLaxSameSiteNotSecureCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Lax', 'secure' => false, 'httponly' => true
    ]);
}

function setSameSiteNotSecureNotHttpOnlyCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Strict', 'secure' => false, 'httponly' => false
    ]);
}

function setLaxSameSiteNotSecureNotHttpOnlyCookie(string $name, string $value, int $expires = 0, string $path = '', string $domain = ''): void
{
    setcookie($name, $value, [
        'expires' => $expires, 'path' => $path, 'domain' => $domain,
        'samesite' => 'Lax', 'secure' => false, 'httponly' => false
    ]);
}