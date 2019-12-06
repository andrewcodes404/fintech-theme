<!-- RE-DIRECT TO HOME PAGE -->
<?php
header("HTTP/1.1 301 Moved Permanently");
header("Location: ".get_bloginfo('url'));
exit();
?>