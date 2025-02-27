<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
    <link rel="stylesheet" href="{{asset('../css/porteiro/exibir_relatorio.css')}}">
    <link rel="stylesheet" href="{{asset('../css/style.css')}}">
</head>

<body>
    <section class="documento">
        <div class="inline">
            <figure>
                <img src="{{asset('../img/girassol.png')}}" alt="">
                <h1>Condomínio Girassol</h1>
            </figure>
            <div class="line btn-oculto">
                <button type="button" id="printButton" onclick="printDocument()">
                    <img src="{{asset('../img/print.png')}}" alt="">
                    Imprimir
                </button>
                <button type="button">
                    <img src="{{asset('../img/pdf.png')}}" alt="">
                    Exportar PDF
                </button>
                <button type="button" onclick="location.href='relatorio'">Voltar</button>
            </div>
        </div>
        <h1 class="titulo">Relatório de movimentação</h1>
        <div class="flex">
            <figure>
                <img src="{{asset('../img/avatar3.png')}}" alt="">
            </figure>
            <div class="row-wrap">
                <div class="block">
                    <h3>Nome completo</h3>
                    <p>Mauricio Luis Dias</p>
                </div>
                <div class="block">
                    <h3>Nº do Bilhete</h3>
                    <p>000875267ALDE</p>
                </div>
                <div class="block">
                    <h3>Data de nascimento</h3>
                    <p>23/09/2000</p>
                </div>
                <div class="block">
                    <h3>Email</h3>
                    <p>mauriociodias@gmail.com</p>
                </div>
                <div class="block">
                    <h3>Telefone</h3>
                    <p>934 323 454</p>
                </div>
                <div class="block">
                    <h3>Classificado</h3>
                    <p>Visita</p>
                </div>
                <div class="block">
                    <h3>Observação</h3>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab id velit totam dignissimos sapiente iusto accusamus impedit expedita consectetur? Ratione odio ipsa repudiandae ad quod quisquam ex, sint iusto nulla. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci et necessitatibus, cumque eveniet nisi culpa? Reiciendis, sapiente maxime adipisci tempore culpa ex architecto mollitia expedita labore aperiam voluptatum rem natus? lo</p>
                </div>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Morador visitado</th>
                    <th>Nº do apartamento</th>
                    <th>Entrada</th>
                    <th>Saída</th>
                    <th>Permanência</th>
                    <th>Porteiro</th>
                    <th>Associados</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Jorge Milton Moras</td>
                    <td>A234</td>
                    <td>22/12/2024 <span>15:00</span></td>
                    <td>22/12/2024 <span>18:00</span></td>
                    <td>04:00 <span>horas</span></td>
                    <td>João Marcos Rui</td>
                    <td>3</td>
                </tr>
            </tbody>
        </table>
    </section>

    <script>
        function printDocument() {
            var btnOculto = document.querySelector('.btn-oculto')
            btnOculto.style.display = 'none'            
            window.print();
        }
        window.addEventListener('afterprint', function () {
            var btnOculto = document.querySelector('.btn-oculto')
            btnOculto.style.display = 'flex'    
        })
    </script>
</body>

</html>