<?php
function formatarPreco($preco) {
    return "O valor informado é: R$ " . number_format($preco, 2, ',', '.');
}

function mediaDoAluno($nota1, $nota2, $nota3) {
    return ($nota1 + $nota2 + $nota3) / 3;
}