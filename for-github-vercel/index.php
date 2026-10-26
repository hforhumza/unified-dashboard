<?php
// Fallback for servers that prefer index.php: send visitors to the login screen.
header('Location: login.html', true, 302);
exit;
