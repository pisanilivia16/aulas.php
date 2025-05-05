<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php

$Endereco=			$_POST["Endereco"];
$Cidade=		$_POST["Cidade"];
$Estado= 		$_POST["Estado"];
$CEP=			$_POST["CEP"];
$Tipo=			$_POST["Tipo"];
$Valor=	$_POST["Valor"];

$con=mysqli_connect("localhost","root","","Imobiliaria") or die ("erro!");

$in = "insert into veiculos values (null,'$Endereco',
									'$Cidade',
									'$Estado',
									'$CEP',
									'$Tipo', 
									'$Valor'
							)";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   Placa:		$placa<BR>
   Cidade:		$Cidade<BR>
   Estado:		$Estado<BR>
   CEP:			$CEP<BR>
   Tipo:			$Tipo<BR>
   Valor: $Valor<BR>
   ";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

