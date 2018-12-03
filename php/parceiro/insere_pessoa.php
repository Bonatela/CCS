<?

include "../../php/conexao.php";



$cpf_cnpj= $_POST['cpf_cnpj'];

$nome_razao = $_POST['nome_razao'];

$endereco= $_POST['endereco'];

$cidade = $_POST['cidade'];

$estado = $_POST['estado'];

$cep = $_POST['cep'];

$email = $_POST['email'];

$tipo_pessoa = $_POST['tipo_pessoa'];

$senha = $_POST['senha'];

$telefone = $_POST['telefone'];




$Sql = "INSERT INTO parceiro ";
					
$Sql .= "(cpf_cnpj, nome_razao, endereco, cidade, estado, cep, email, tipo_pessoa, senha, telefone)";
					$Sql .= " VALUES ";
					$Sql .= "('$cpf_cnpj','$nome_razao','$endereco','$cidade','$estado','$cep','$email','$tipo_pessoa','$senha', '$telefone')";
					
					$result = mysql_query($Sql);
echo "$Sql";
               
               
					echo "<script language='javascript'>ShowMensage(6,'Registro cadastrado com sucesso.');</script>";
					//echo "<script language='javascript'>window.parent.frames(1).location.reload("../../parceiro/sucesso/sucesso.html");</script>";

?>


<meta http-equiv="refresh" content='0;url="../../parceiro/sucesso/sucesso.html"'>