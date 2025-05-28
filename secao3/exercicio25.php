
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercício 25</title>
</head>
<body>
    <h2>Relatório de Notas - PWEB1</h2>
    <table>
        <tr>
            <th>Matrícula</th>
            <th>Nome Completo</th>
            <th>Nota PWEB1</th>
        </tr>
        <?php
        $alunos = [
            ['2023001', 'Ana Paula Silva', 8.5],
            ['2023002', 'Bruno Souza Lima', 7.2],
            ['2023003', 'Carla Mendes Rocha', 9.1],
            ['2023004', 'Daniela Costa', 6.8],
            ['2023005', 'Eduardo Martins', 7.9],
            ['2023006', 'Fernanda Alves', 8.0],
            ['2023007', 'Gabriel Torres', 5.7],
            ['2023008', 'Helena Dias', 9.5],
            ['2023009', 'Igor Ferreira', 6.3],
            ['2023010', 'Juliana Ramos', 8.8],
        ];

        foreach ($alunos as $aluno) {
            echo "<tr>";
            echo "<td>{$aluno[0]}</td>";
            echo "<td>{$aluno[1]}</td>";
            echo "<td>{$aluno[2]}</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>