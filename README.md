# Secure by default PHP functions for setting cookies

Since an alternative signature was [implemented in PHP 7.3](https://www.php.net/manual/en/function.setcookie.php#refsect1-function.setcookie-changelog), the `setcookie` interface became even more terrible then it was before.

Sticking to ["Secure by default" principle](https://en.wikipedia.org/wiki/Secure_by_default) and avoiding [flag arguments](https://martinfowler.com/bliki/FlagArgument.html) I hereby introduce separate methods for setting different kind of cookies:

- `setSameSiteCookie()`
- `setLaxSameSiteCookie()`
- `setNotSameSiteCookie()`
- `setSameSiteNotHttpOnlyCookie()`
- `setLaxSameSiteNotHttpOnlyCookie()`
- `setNotSameSiteNotHttpOnlyCookie()`
- `setSameSiteNotSecureCookie()`
- `setLaxSameSiteNotSecureCookie()`
- `setSameSiteNotSecureNotHttpOnlyCookie()`
- `setLaxSameSiteNotSecureNotHttpOnlyCookie()`

The names of the functions are intentionally long and descriptive.

The signature of all the functions is the same (except for the name, of course):

```php
function setSameSiteCookie(
    string $name, 
    string $value, 
    int $expires = 0, 
    string $path = '', 
    string $domain = ''
): void
```

If you wonder what is "SameSite" or what "Lax" means, please read [SameSite cookies explained](https://web.dev/samesite-cookies-explained/) on web.dev. 