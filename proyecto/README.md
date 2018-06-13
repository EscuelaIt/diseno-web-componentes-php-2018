# Starter Kit

Starter Kit para desarrollar orientado a Componentes con PHP, Sass y +ES6.

Instalando dependencias:

```
npm i -g gulp

npm i -D babel-core babel-preset-env babelify browser-sync browserify gulp gulp-autoprefixer gulp-babel gulp-clean-css gulp-imagemin gulp-jsmin gulp-plumber gulp-sass gulp-sourcemaps vinyl-buffer vinyl-source-stream
```

```
# Evitar que el .htaccess se lea desde el navegador
<Files .htaccess>
  Order allow,deny
  Deny from all
</Files>

# Activar Compresión gzip
<ifModule mod_gzip.c>
  mod_gzip_on Yes
  mod_gzip_dechunk Yes
  mod_gzip_item_include file .(html?|txt|css|js|php|pl)$
  mod_gzip_item_include handler ^cgi-script$
  mod_gzip_item_include mime ^text/.*
  mod_gzip_item_include mime ^application/x-javascript.*
  mod_gzip_item_exclude mime ^image/.*
  mod_gzip_item_exclude rspheader ^Content-Encoding:.*gzip.*
</ifModule>

# Compresión HTML, CSS, JavaScript, Text, XML and fonts
<IfModule mod_deflate.c>
  AddOutputFilterByType DEFLATE application/javascript
  AddOutputFilterByType DEFLATE application/rss+xml
  AddOutputFilterByType DEFLATE application/vnd.ms-fontobject
  AddOutputFilterByType DEFLATE application/x-font
  AddOutputFilterByType DEFLATE application/x-font-opentype
  AddOutputFilterByType DEFLATE application/x-font-otf
  AddOutputFilterByType DEFLATE application/x-font-truetype
  AddOutputFilterByType DEFLATE application/x-font-ttf
  AddOutputFilterByType DEFLATE application/x-javascript
  AddOutputFilterByType DEFLATE application/xhtml+xml
  AddOutputFilterByType DEFLATE application/xml
  AddOutputFilterByType DEFLATE font/opentype
  AddOutputFilterByType DEFLATE font/otf
  AddOutputFilterByType DEFLATE font/ttf
  AddOutputFilterByType DEFLATE image/svg+xml
  AddOutputFilterByType DEFLATE image/x-icon
  AddOutputFilterByType DEFLATE text/css
  AddOutputFilterByType DEFLATE text/html
  AddOutputFilterByType DEFLATE text/javascript
  AddOutputFilterByType DEFLATE text/plain
  AddOutputFilterByType DEFLATE text/xml

  # Remove browser bugs (only needed for really old browsers)
  BrowserMatch ^Mozilla/4 gzip-only-text/html
  BrowserMatch ^Mozilla/4\.0[678] no-gzip
  BrowserMatch \bMSIE !no-gzip !gzip-only-text/html
  Header append Vary User-Agent
</IfModule>

# Almacenamiento en cache
<IfModule mod_expires.c>
  ExpiresActive On
  ExpiresByType image/gif A432000
  ExpiresByType image/jpg A432000
  ExpiresByType image/jpeg A432000
  ExpiresByType image/png A432000
  ExpiresByType image/ico A432000
  ExpiresByType image/bmp A432000
  ExpiresByType text/css A432000
  ExpiresByType text/javascript A432000
  ExpiresByType application/javascript A432000
  ExpiresByType application/x-javascript A432000
</ifmodule>

```
