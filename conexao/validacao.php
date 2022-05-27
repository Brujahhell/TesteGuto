<?php

function validacadastro(
    string $token,
    string $sigla,
    string $contrato,
    string $site,
    string $grupo_telegram,
    string $twitter,
    string $outras_redes_sociais,
    string $link_youtube,
    string $total_supply,
    string $valor_inicial,
    string $taxa_compra,
    string $taxa_venda,
    string $total_liquidez,
    string $percentual_queimados,
    string $link_contrato,
    string $lancamento_dia_hora,
    string $usabilidade,
    string $proposito,
    string $plano_marketing

) : ?string
{
    if (validaNome($token)/
        validasigla($sigla)/
        validacontrato($contrato)/
        validasite($site)/
        validatelegram($grupo_telegram)/
        validatwitter($twitter)/
        validasocial($outras_redes_sociais)/
        validavideo($link_youtube)/
        validadesupply($total_supply)/
        validavalor($valor_inicial)/
        validacompra($taxa_compra)/
        validavenda($taxa_venda)/
        validaliquidez($total_liquidez)/
        validaqueimados($percentual_queimados)/
        validalink($link_contrato)/
        validalancamento($lancamento_dia_hora)/
        validausabilidade($usabilidade)/
        validaproposito($proposito)/
        validamarketing($plano_marketing)

    )
    {
        return null;
    }
    removerMensagemSucesso();
    return obterMensagemErro();
}

