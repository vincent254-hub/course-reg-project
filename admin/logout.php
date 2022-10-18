<?php
session_start();
$_SESSION['alogin']=="";
session_unset();

$_SESSION['errmsg']="Oops! sorry we are sorry to see you leave. see you later";
?>
<script language="javascript">
document.location="index.php";
</script>
