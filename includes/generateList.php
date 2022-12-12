<?php 
echo "<table class = 'table table-hover'>";
echo "<thead> 
<th>id</th>
<th>contrato</th>
<th>aditivo</th>
<th>contratado_id</th>
<th>objeto</th>
<th>valor</th>
<th>data_assinatura</th>
<th>data_publicacao</th>
<th>inicio_vigencia</th>
<th>fim_vigencia</th>
<th>fiscal_id</th>
<th>gestor_id</th>
<th>status_id</th>
<th>Inicio Vigencia</th>
<th>tipo_documento_id</th>
<th>processo</th>
<th>modalidade_id</th>
<th>data_cadastro</th>
<th>hora_cadastro</th>
</thead>";

foreach($dados as $row_contratos) {
    echo "<tbody class = '.table-hover'>";
    echo "<tr>";
    echo "<td>" . $row_contratos["id"] . "</td>";
    echo "<td>" . $row_contratos["contrato"] . "</td>";
    echo "<td>" . $row_contratos["aditivo"] . "</td>";
    echo "<td>" . $row_contratos["contratado_id"] . "</td>";
    echo "<td>" . $row_contratos["objeto"] . "</td>";
    echo "<td>" . $row_contratos["valor"] . "</td>";
    echo "<td>" . $row_contratos["data_assinatura"] . "</td>";
    echo "<td>" . $row_contratos["data_publicacao"] . "</td>";
    echo "<td>" . $row_contratos["inicio_vigencia"] . "</td>";
    echo "<td>" . $row_contratos["fim_vigencia"] . "</td>";
    echo "<td>" . $row_contratos["fiscal_id"] . "</td>";
    echo "<td>" . $row_contratos["gestor_id"] . "</td>";
    echo "<td>" . $row_contratos["status_id"] . "</td>";
    echo "<td>" . $row_contratos["inicio_vigencia"] . "</td>";
    echo "<td>" . $row_contratos["tipo_documento_id"] . "</td>";
    echo "<td>" . $row_contratos["processo"] . "</td>";
    echo "<td>" . $row_contratos["modalidade_id"] . "</td>";
    echo "<td>" . $row_contratos["data_cadastro"] . "</td>";
    echo "<td>" . $row_contratos["hora_cadastro"] . "</td>";
    echo "</tr>";
    echo "</tbody>";

}
echo "</table>";

?>