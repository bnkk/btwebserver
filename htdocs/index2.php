if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    if ($_SERVER['PHP_AUTH_USER'] != 'user' || 
        $_SERVER['PHP_AUTH_PW'] != 'pass') {

        header('WWW-Authenticate: Basic realm="Protected area"');
        header('HTTP/1.0 401 Unauthorized');

        die('Login failed!');
    }
}