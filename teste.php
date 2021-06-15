<html>

<body>
    <a href="teste.php?page=patientRegister"> TESTE </a>
</body>

</html>

<?php
$page = "";
if (isset($_GET['page']) && !empty($_GET['page'])) {
    $page = addslashes($_GET['page']);
}

switch ($page) {

    case 'patientRegister':
        echo "aaaaaaaaaa";
        break;

    case 'patientTable':
        require 'patientTable.php';
        break;

        //default:
        //require 'login.php';
}
