<!DOCTYPE html>
<html lang="pt-br">
  
 <head>
  
    <!–– site responsivo ––>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!–– css––>
    <link rel="stylesheet" href="style.css" >
        <!–– bootstrap ––>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
        
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript">
          

            function drawChart() {
                // call ajax function to get sports data
                var jsonData = $.ajax({
                    url: "getData.php",
                    dataType: "json",
                    async: false
                }).responseText;
                //The DataTable object is used to hold the data passed into a visualization.
                var data = new google.visualization.DataTable(jsonData);

                // To render the pie chart.
                var chart = new google.visualization.ColumnChart(document.getElementById('chart_container'));
                var options = {width:900,height:540, 
                  hAxis: {title: 'Girassois'},
  vAxis: {title: 'Interventos'}};
                chart.draw(data, options);

            }
            // load the visualization api
            google.charts.load('current', {'packages':['corechart']});

            // Set a callback to run when the Google Visualization API is loaded.
            google.charts.setOnLoadCallback(drawChart);
       
        </script>
  
  </head>
 <body>
  <nav class="navbar fixed-bottom  navbar-light" style="background-color: green;">
  <div class="containerleft">
  <nav class="navbar navbar-expand-lg navbar-light green">
    <a class="navbar-brand" href="http://localhost/cursophp/index.html">Formulario</a>
    <a class="navbar-brand" href="http://localhost/cursophp/respostas.php">Storico</a>
    <a class="navbar-brand" href="http://localhost/cursophp/grafico.php">Grafico</a>
     <a class="navbar-brand" href="javascript:window.print()">Imprimir</a>
    <a class="navbar-brand" href="http://localhost/cursophp/grafico.php">Enviar</a>
  </nav>

</div>
</nav>
        
        <div id="chart_container"></div>
      </body>
</html>