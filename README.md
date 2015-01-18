Strona blog.epf.org.pl - theme dla Wordpress
=====================

## Wymagania

Moduły PHP:
- php5-gd
- php5-curl

Dodatkowe biblioteki
- `apt-get install sendmail` (ewentualnie)

Dyrektywa vhost:
```
AllowOverride All
Options +FollowSymLinks +SymLinksIfOwnerMatch
```

Uprawnienia:
ustawić prawa do zapisu dla `www-data` do `wp-content`.

Wordpress: 
testowane na wersji 4.0.1

`wp-includes/class-phpmailer.php`:
`public $Sender = '"Fundacje ePaństwo"<mailer@epf.org.pl>';`

Edycja:
- ustawić flagę `inline_styles => false` w inicjalizacji edytora" tinyMCE.init (wp-includes/class-wp-editor.php)
