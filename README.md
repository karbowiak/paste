# Paste
Paste is a paste website created by Karbowiak

## Contact
`#esc` on `irc.coldfront.net`
Mibbit link incase you're lazy: http://chat.mibbit.com/?channel=%23esc&server=irc.coldfront.net

# Running Paste

## Dependencies
- PHP 5.3+
- Apache + mod_rewrite or Lighttpd
- Linux, Mac OS X or Windows
- Composer

## Lighttpd rewrite
```
url.rewrite-if-not-file = (
	"(.*)" => "/index.php/$0"
)
```

## Apache rewrite
If you use this filth, you figure it out..