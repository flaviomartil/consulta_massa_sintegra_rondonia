
<?php
error_reporting(0);
DeletarCookies();
extract($_GET);

function getStr($string, $start, $end) {
	$str = explode($start, $string);
	$str = explode($end, $str[1]);
	return $str[0];
}

function deletarCookies() {
	if (file_exists("cookie.txt")) {
		unlink("cookie.txt");
	}
}

$lista = str_replace(" ", "", $lista);
$separa = explode("|", $lista);
$email = $separa[0];
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "https://portalcontribuinte.sefin.ro.gov.br/Publico/consultapublica.jsp"); 
curl_setopt($ch, CURLOPT_HTTPHEADER, array (
"Host: portalcontribuinte.sefin.ro.gov.br",
"Connection: keep-alive",
"Cache-Control: max-age=0",
"Origin: https://portalcontribuinte.sefin.ro.gov.br",
"Upgrade-Insecure-Requests: 1",
"Content-Type: application/x-www-form-urlencoded",
"User-Agent: Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.106 Safari/537.36",
"Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8",
"Referer: https://portalcontribuinte.sefin.ro.gov.br/Publico/parametropublica.jsp",
)); 
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd() . '/cookie.txt'); 
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd() . '/cookie.txt'); 
curl_setopt($ch, CURLOPT_POST, 0); 
curl_setopt($ch, CURLOPT_URL, 'https://portalcontribuinte.sefin.ro.gov.br/Publico/consultapublica.jsp'); 
curl_setopt($ch, CURLOPT_POST, 1); 
curl_setopt($ch, CURLOPT_POSTFIELDS,  'TipoDevedor=1&NuDevedor='.$email. ''); 
$data = curl_exec($ch); 

if (strpos($data, 'CRIACAO DE BOVINOS PARA LEITE') !== false) {
	$Atividade = 'GADO DE LEITE';
	
} else {
	$Atividade = 'GADO DE CORTE';
}

if (strpos($data, 'HABILITADO') !== false) {
	$habilitado = 'ATIVA';
	
} else {
	$habilitado = 'DESATIVADO';
}

$cpf = explode('</td>', explode('<td width="32%" bgcolor="#FFFFFF">', $data)[1])[0]; 
$inscriçao = explode('</td>', explode('<td width="29%" bgcolor="#FFFFFF">', $data)[1])[0]; 
$nome = explode('</td>', explode('<td bgcolor="#FFFFFF" colspan="3">', $data)[1])[0]; 
$telefone = explode('</tr>', explode('<td bgcolor="#EEEEEE">Telefone: </td>', $data)[1])[0]; 
$Município = explode('</td>', explode('<td width="294" bgcolor="#FFFFFF">', $data)[1])[0]; 
$datains = explode('</td>', explode('<td width="19%" bgcolor="#FFFFFF">', $data)[1])[0]; 
$fantasia = explode('</tr>', explode('<td bgcolor="#EEEEEE">Nome Fantasia: </td>', $data)[1])[0]; 
$adress = explode('</tr>', explode('<td width="89" bgcolor="#EEEEEE"> Complemento:</td>', $data)[1])[0]; 
$teste = explode('</td>', explode('<td width="90" bgcolor="#EEEEEE"> Endereço:', $data)[1])[0]; 
$tudo = '<center><br><font color=black>[NOME]</font><font color=red> '.$nome.'</font><br><font color=black>[C.P.F/C.N.P.J:] </font><font color=red>'.$cpf.'</font><BR><font color=black> [INSCRIÇÃO ESTADUAL]</font> <font color=red>'.$inscriçao.'</font><br><font color=black>[NOME FANTASIA] </font><font color=red> '.$fantasia.'<BR><font color=black> [TELEFONE]</font><font color=red> (69)'.$telefone.'<BR> <font color=black>[MUNICÍPIO] </font><font color=red>'.$Município.'</font><br><font color=black>[ENDEREÇO DA PROPRIEDADE]</font><font color=red> '.$adress.'<BR><font color=black> [ATIVIDADE]</font> <font color=red>'.$Atividade.'</font><br><font color=black>[DATA DA INSCRIÇÃO]</font> <font color=red>'.$datains.'</font><BR><font color=black> [SITUAÇÃO DO CONTRIBUINTE] </font><font color=red>'.$habilitado.'</font><br>'.$teste.'<font color=green></font><br><br><br>';

if (!strpos($data, '015120')) { 
	echo ' <font color=red>Inscrição não existente &#10008;</font> '.$email.'   <br>';
}else {
		echo '<center> <font color=lime>Inscrição existente &#10004;</font><br>'.$tudo.'<br><br><br>';
	$fp = fopen("./ro/" . $email . " inscricao.html", 'a');
fwrite($fp, '<meta charset=“utf-8”><center> ' . $tudo . '<br>
');
	
}

?>