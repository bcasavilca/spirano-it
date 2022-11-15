<!DOCTYPE html>
<html lang="pt-br">
  
 <head>
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
  <div class="navbar">
  <a href="http://localhost/cursophp/cursophp.html" class="active">Formulario</a>
  <a href="http://localhost/cursophp/respostas.php">Respostas</a> 
  <a href="http://localhost/cursophp/grafico.php">Grafico</a>  
</div>
        
        <div id="chart_container"></div>
      </body>
</html>