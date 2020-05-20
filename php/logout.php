<<<<<<< HEAD
<?php

session_start();

session_destroy();
header("location:../views/login.php");
setcookie('id', '', time()-10, '/');

=======
<?php

session_start();

session_destroy();
header("location:../views/login.php");

>>>>>>> 01ac521afefbe148bd28eb75166f3ebd7f222166
?>