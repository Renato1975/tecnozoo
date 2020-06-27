<?php
// Conexão
require_once 'config.php';

// Sessão
session_start();

// Verificação
if(!isset($_SESSION['logado'])):
  header('Location: index.php');
endif;

// Dados
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM users WHERE id_user = '$id'";
$resultado = mysqli_query($db, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($db);
?>

<html>
  <head>
    <!--Load the AJAX API-->


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
   <script src="https://kit.fontawesome.com/185b20baa0.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Falta de Conhecimento', 3],
          ['Argumentação', 1],
          ['Insegurança', 1],
          ['Sistema', 1],
          ['Fora do Prazo', 2]
        ]);

        // Set chart options
        var options = {'title':'How Much Pizza I Ate Last Night',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>


 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Mes', 'Procedente', 'Improcedente'],
          ['Janeiro',  1000,      400],
          ['Fevereiro',  1170,      460],
          ['Março',  660,       1120],
          ['Abril',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>

  <body>


  	<?php include 'nav.php'; ?>
    <!--Div that will hold the pie chart-->
    <div id="chart_div"></div>


     <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>