<?php
session_start();
$_SESSION['login']=="";
session_unset();
session_destroy();
?>
<script language="javascript">
document.location="dist/index.html";
</script>