<!DOCTYPE html>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<html>

<head>
    <h1>TCE-AL</h1>
</head>



<body>
    <h1>Retorno de tabela</h1>

    <?php
session_start();

include('includes/pgsqlPDO.php');
    echo "<div class = 'd-flex p-2'> ";
    echo "   ";
include('generateFiles/generateCsv.php');
include('generateFiles/generateXls.php');
echo "</div>";

include('includes/generateList.php'); 
?>

</body>

</html>