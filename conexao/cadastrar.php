<?php

include "conexao/bancodedados.php";
include "conexao/validacao.php";


$token = $_POST["Nome do TOKEN"];
$sigla = $_POST["Sigla"];
$contrato = $_POST["Contrato"];
$site = $_POST["Site"];
$grupo_telegram = $_POST["Grupo do Telegram"];
$twitter = $_POST["Twitter"];
$outras_redes_sociais = $_POST["Outra Rede Social"];
$link_youtube = $_POST["Video do Projeto link?"];
$total_supply = $_POST["Supply Total"];
$valor_inicial = $_POST["Valor Inicial"];
$taxa_compra = $_POST["Taxa de Compra"];
$taxa_venda = $_POST["Taxa de Venda"];
$total_liquidez = $_POST["Total ADD Liquidez"];
$percentual_queimados = $_POST["Percentual de Tokens Queimados"];
$link_contrato = $_POST["Link do Contrato"];
$lancamento_dia_hora = $_POST["Lançamento Justo Dia e Hora"];
$usabilidade = $_POST["Usabilidade do Projeto"];
$proposito = $_POST["Proposito do Projeto"];
$plano_marketing = $_POST["Plano de Marketing"];



$token = filter_input(INPUT_POST, 'Nome do TOKEN', FILTER_SANITIZE_SPECIAL_CHARS);
$sigla = filter_input(INPUT_POST, 'Sigla', FILTER_SANITIZE_STRING);
$contrato = filter_input(INPUT_POST, 'Contrato', FILTER_SANITIZE_NUMBER_INT);
$site = filter_input(INPUT_POST, 'Site', FILTER_VALIDATE_URL);
$grupo_telegram = filter_input(INPUT_POST, 'Grupo do Telegram', FILTER_SANITIZE_SPECIAL_CHARS);
$twitter = filter_input(INPUT_POST, 'Twitter', FILTER_SANITIZE_SPECIAL_CHARS);
$outras_redes_sociais = filter_input(INPUT_POST, 'Outra Rede Social', FILTER_SANITIZE_SPECIAL_CHARS);
$link_youtube = filter_input(INPUT_POST, 'Video do Projeto link?', FILTER_VALIDATE_URL);
$total_supply = filter_input(INPUT_POST, 'Supply Total', FILTER_SANITIZE_SPECIAL_CHARS);
$valor_inicial = filter_input(INPUT_POST, 'Valor Inicial', FILTER_SANITIZE_NUMBER_FLOAT);
$taxa_compra = filter_input(INPUT_POST, 'Taxa de Compra', FILTER_SANITIZE_NUMBER_FLOAT);
$taxa_venda = filter_input(INPUT_POST, 'Taxa de Venda', FILTER_SANITIZE_NUMBER_FLOAT);
$total_liquidez = filter_input(INPUT_POST, 'Total ADD Liquidez', FILTER_SANITIZE_NUMBER_FLOAT);
$percentual_queimados = filter_input(INPUT_POST, 'Percentual de Tokens Queimados', FILTER_SANITIZE_NUMBER_FLOAT);
$link_contrato = filter_input(INPUT_POST, 'Link do Contrato', FILTER_SANITIZE_STRING);
$lancamento_dia_hora = filter_input(INPUT_POST, 'Lançamento Justo Dia e Hora', FILTER_SANITIZE_SPECIAL_CHARS);
$usabilidade = filter_input(INPUT_POST, 'Usabilidade do Projeto', FILTER_SANITIZE_STRING);
$proposito = filter_input(INPUT_POST, 'Proposito do Projeto', FILTER_SANITIZE_STRING);
$plano_marketing = filter_input(INPUT_POST, 'Plano de Marketing', FILTER_SANITIZE_STRING);


defineCategoriaCompetidor($nome, $sigla, $contrato, $site, $grupo_telegram, $twitter, $outras_redes_sociais, $link_youtube, $total_supply, $valor_inicial, $taxa_compra,
$taxa_venda, $total_liquidez, $percentual_queimados, $link_contrato, $lancamento_dia_hora, $usabilidade, $proposito, $plano_marketing);


header("Location: index.php");
