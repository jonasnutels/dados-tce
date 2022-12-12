<?php
$query = "SELECT * FROM transparencia.contratos";
$result = $conn->prepare($query);
$result->execute();

while ($row_contratos = $result->fetch(PDO::FETCH_ASSOC)) {
    $dados[] = $row_contratos;
}


function gerarCsv($dados)
{

    $filename = date("d-m-Y") . ".csv";
    $arquivo = fopen($filename, 'w');
    //Mudança para arquivo em Excel 
    //fputs($arquivo, $bom = ( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
    $headers = [
        'id',
        'contrato',
        'aditivo',
        'contratado_id',
        'objeto',
        'valor',
        'data_assinatura',
        'data_publicacao',
        'inicio_vigencia',
        'fim_vigencia',
        'fiscal_id',
        'gestor_id',
        'status_id',
        'inicio_vigencia',
        'tipo_documento_id',
        'processo',
        'modalidade_id',
        'data_cadastro',
        'hora_cadastro'
    ];
    fputcsv($arquivo, $headers);
    foreach ($dados as $linha) {
        fputcsv($arquivo, $linha);
    }
    fclose($arquivo);
}

if (isset($_POST['gerar'])) {
    gerarCsv($dados);

}

echo "<form method='post'> 
      <button class='btn btn-primary' name='gerar'>Gerar CSV</button>
     </form>";


?>
