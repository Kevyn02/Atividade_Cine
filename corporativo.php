<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine São Carlos: Corporativo</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
</head>

<body>
    <div class="container d-flex justify-content-center">
        <div class="row">
            <?php require('header.html');?>
            <main class="container">
                <div class="row">
                    <div class="card m-2 card_header">
                        <div class="card-header bg-secondary">
                            <h1 class="text-white">Corporativo</h1>
                        </div>
                        <div class="card-body bg-cinza">
                            <h2 class="text-center color-red ml-2">LEI DA CLASSIFICAÇÃO INDICATIVA</h2>
                            <p class="text-center ml-2">Poucos sabem, mas o
                                então Presidente Luiz Inácio Lula da Silva sancionou no dia 20/07/2006 a nova
                                lei de Classificação Indicativa para cinemas, teatros, shows, programas de
                                rádio e televisão.</p>
                            <p class="text-center ml-2">
                                Resumindo, para a nova lei fica a critério dos pais o acesso de crianças e
                                adolescentes para qualquer espetáculo (no nosso caso, sessões de cinema)
                                classificado até 16 anos. Mas para tanto é obrigatório que os pais estejam
                                acompanhando os filhos ou que estes estejam acompanhados por adulto responsável
                                e portando autorização dada pelos pais.</p>
                            <p class="text-center color-red ml-2"><strong>Entenda a nova simbologia das
                                    classificações indicativas:</strong></p>
                            <table class="table table-bordered table-responsive bg-light">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Classificação Indicativa</th>
                                        <th>Recomendação</th>
                                        <th>Permissão</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center" id="C-10"><strong>10</strong></td>
                                        <td>Não Recomendado para menores de 10 anos</td>
                                        <td rowspan="4">Permitido a entrada caso pai ou responsável acompanhe a criança
                                            ou jovem
                                            portando,
                                            também, de autorização assinada.</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" id="C-12"><strong>12</strong></td>
                                        <td>Não é recomendado para menores de 12 anos</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" id="C-14"><strong>14</strong></td>
                                        <td>Não é recomendado para menores de 14 anos</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" id="C-16"><strong>16</strong></td>
                                        <td>Não é recomendado para menores de 16 anos</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>18</strong></td>
                                        <td>Não é recomendado para menores de 18 anos</td>
                                        <td>Não permitido a entrada de menores de 18 anos em hipótese alguma</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><strong>ER</strong></td>
                                        <td>Especialmente recomendado para crianças e adolescentes</td>
                                        <td rowspan="2">Entrada livre para todos</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center" id="C-L"><strong>L</strong></td>
                                        <td>Livre para todos os públicos</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php require('footer.html');?>
        </div>
    </div>
</body>

</html>