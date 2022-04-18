<?php
    include "../assets/php/conecta.php";
    session_start();
    $user = $_SESSION['id'];

    $sql =  mysqli_query($conexao, "select * from usuarios where id = $user;");
    while($linha = $sql->fetch_array()){
        $nome = $linha['nome'];
        $email = $linha['email'];
    }

    $id = $_GET['page'];
    $type = $_GET['type'];

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de controle</title>

    <!-- Links css -->
    <link rel="stylesheet" href="./assets/styles/global.css">
    <link rel="stylesheet" href="./assets/styles/navbar.css">
    <link rel="stylesheet" href="./assets/styles/leftbar.css">
    <link rel="stylesheet" href="./assets/styles/main.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700&display=swap" rel="stylesheet">

    <!-- Frameworks -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
    <div class="container">
        <div class="leftbar">
            <div class="logo"></div>
            <div class="menus">
                <p id='tt'>NAVIGATION</p>
                <div class="menu"><img src="./assets/imgs/home.png" alt=""> <p>Dashboard</p></div>
                <div class="menu"><img src="./assets/imgs/pointer.png" alt=""> <a style="color: #444444;" href="<?php echo "http://localhost/Landing%20Pages%20Builder/assets/php/pagina.php?page=" . $id . "&type=" . $type; ?>">Acessar página</a></div>
            </div>
        </div>
        <div class="right">
            <div class="navbar">
                <img src="./assets/imgs/pagina.png" alt="">
                <p>Nome da página</p>
                <div class="perfil">
                    <img src="http://clapps-com-br.apache7.cloudsector.net/uploads/images/pm.jpg" alt="">
                    <p><?php echo $nome?></p>
                </div>
                <div class="notificacao"><img src="./assets/imgs/notificacao.png" alt=""></div>
            </div>
            <div class="main">
                <div class="cardLine">
                    <div class="cardOne">
                        <div class="top">
                            <div class="tittle">Sessões ativas</div>
                            <div class="valor">700</div>
                        </div>
                        <div class="grafico" id="chart" style="background-color: #fff; margin-top: 0;"></div>
                    </div>
                    <div class="cardOne">
                        <div class="top">
                            <div class="tittle">Acessos totais</div>
                            <div class="valor">2000</div>
                        </div>
                        <div class="grafico" id="chart2" style="background-color: #fff; margin-top: 0;"></div>
                    </div>
                    <div class="cardOne">
                        <div class="top">
                            <div class="tittle">Média de acessos</div>
                            <div class="valor">569</div>
                        </div>
                        <div class="grafico" id="chart3" style="background-color: #fff; margin-top: 0;"></div>
                    </div>
                </div>

                <div class="data">
                    <div class="left">
                        <!-- tempo médio, novos usuarios, retorno visitas -->
                        <div class="card" style="background-color: #FF007C;">
                            <span><img src="./assets/imgs/clock.png" alt=""></span>
                            <p>20m 30s</p>
                            <p id="desc"><b>Tempo médio da visita</b></p>
                        </div> 
                        <div class="card" style="background-color: #00CD98;">
                            <span><img src="./assets/imgs/new.png" alt=""></span>
                            <p>78%</p>
                            <p id="desc"><b>Novos usuários</b></p>
                        </div> 
                        <div class="card" style="background-color: #673AB7;">
                            <span><img src="./assets/imgs/return.png  " alt=""></span>
                            <p>50%</p>
                            <p id="desc"><b>Retorno dos usuários </b></p>
                        </div>
                        <div class="card" style="background-color: #58BDFF;">
                            <span><img src="./assets/imgs/analytics.png" alt=""></span>
                            <p>15%</p>
                            <p id="desc"><b>Taxa de rejeição</b></p>
                        </div> 
                    </div>
                    <div class="right">
                        <p>Dispositivos acessados</p>
                        <div class="graficoDonut" id="chart4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Gráficos -->

    <script>
        var optionsChart1 = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        },],
        chart: {
            height: 150,
            type: 'area',
            toolbar:{
            show: false
            },
            
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
            borderColor: '#fff',
            strokeDashArray: 0,
        }
        
        };

        var optionsChart2 = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        },],
        chart: {
            height: 150,
            type: 'area',
            toolbar:{
            show: false
            },
            
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
            borderColor: '#fff',
            strokeDashArray: 0,
        },
        colors:['#673AB7', '#CAB9E6',]
        };

        var optionsChart3 = {
          series: [{
          name: 'series1',
          data: [31, 40, 28, 51, 42, 109, 100]
        },],
        chart: {
            height: 150,
            type: 'area',
            toolbar:{
            show: false
            },
            
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'smooth'
        },
        grid: {
            borderColor: '#fff',
            strokeDashArray: 0,
        },
        colors:['#F02769', '#FAB3CA',]
        
        };

        var optionsChart4 = {
          series: [44, 55, 41],
          labels: ['Mobile', 'Desktop', 'Tablet'],
          colors: ['#008FFB', '#673AB7', '#F02769'],
          chart: {
          type: 'donut',
        },
        dataLabels: {
          enabled: false
        },
        responsive: [{
          breakpoint: 500,
          options: {
            chart: {
              width: 100
            },
          }
        }],
        plotOptions: {
            pie: {
                donut: {
                    size: '80%'
                }
            }
        },
        legend: {
            position: 'bottom',
            
        },
        fill: {
            colors: ['#008FFB', '#673AB7', '#F02769']
        },
        };

        var chart1 = new ApexCharts(document.querySelector("#chart"), optionsChart1);
        var chart2 = new ApexCharts(document.querySelector("#chart2"), optionsChart2);
        var chart3 = new ApexCharts(document.querySelector("#chart3"), optionsChart3);
        var chart4 = new ApexCharts(document.querySelector("#chart4"), optionsChart4);
        chart1.render();
        chart2.render();
        chart3.render();
        chart4.render();
    </script>

</body>
</html>