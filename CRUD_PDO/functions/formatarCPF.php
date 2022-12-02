<?php
/*
Não usado, optei por usar o Jquery Mask do JS, embora esta funcao do php tenha suas vantagens.

function formatarCPF($doc)
{
  //preg_replace()limpa a formatacao
  $doc = preg_replace("/[^0-9]/", "", $doc);
  $qtd = strlen($doc);

  if ($qtd === 11) {
    $docFormatado =
      substr($doc, 0, 3) . '.' .
      substr($doc, 3, 3) . '.' .
      substr($doc, 6, 3) . '.' .
      substr($doc, 9, 2);
  } else {
    return '';
  }
}
*/
