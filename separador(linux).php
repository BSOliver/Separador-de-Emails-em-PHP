<?php

$indice = "SEPARADOR DE EMAILS CRIADO BY D4RKR0N/Bruno Santos :)\nSalve para todos os brothers.\n";

if(isset($argv[1])){
	switch($argv[1]){
		case "--ajuda" : 
		echo "Uso do script: php $argv[0] -l lista_de_emails";
		break;
		case "-l";
		if(isset($argv[2])){
			if(file_exists($argv[2])){  
			$pegar_emails = file_get_contents($argv[2]);
			$emails_array = explode("\n" , $pegar_emails);
			foreach($emails_array as $email){
				$nemail = explode("@", $email);
				$nome_arquivo = $nemail[1] . ".txt";
				$arquivo = fopen($nome_arquivo, "a");
				fwrite($arquivo, $nemail[0] . "@" . $nemail[1] . "\r\n");
				fclose($arquivo);

			}
			echo $indice . "\n\nEmails Separados com Sucesso !!!";
		}else{
			echo $indice . "\nLista não encontrada.";
		}
	
	}
	break;
			default:
			echo "Comando desconhecido, digite --ajuda para saber o uso do script.\n";
}

}else{
	echo $indice . "Digite --ajuda para saber o uso do script.";
}

?>
