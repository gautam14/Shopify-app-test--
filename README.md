# Shopify-app-test--
Shopify app just for testing &amp; learning purpose .Other files which are required https://github.com/phpish/shopify_app-skeleton &amp; steps to install

Changes to be made:
1. Open conf.php file & change define('SHOPIFY_APP_API_KEY', 'paste here your partner acc API keys');
  define('SHOPIFY_APP_SHARED_SECRET', 'paste here your partner acc Secret keys');
2. In http.php change CURLOPT_SSL_VERIFYPEER to TRUE by default its FALSE.
3. In shopify.php change the http location in $redirect_uri = empty($redirect_uri) ? '' : '&redirect_uri='.urlencode($redirect_uri);
here you have to give the location where user go after app is installed. I redirect it in location $redirect_uri = '&redirect_uri=http://localhost/new_test/oauth.php';
4. If you are using Xampp remove semicolon (e.g ;) before extension=php_openssl.dll in php.ini file in xampp folder.
