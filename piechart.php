<?php  
 $connect = mysqli_connect("localhost", "root", "", "project");  
 $query = "SELECT pgender, count(*) as number FROM participants GROUP BY pgender";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Event Reports</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawPchart); 
           google.charts.setOnLoadCallback(drawPiechart)  
               google.charts.setOnLoadCallback(drawBchart);
               google.charts.setOnLoadCallback(drawLike);
           function drawPiechart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['Gender', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["pgender"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage of Male and Female Participants',  
                      is3D:true, 
                    width: 600,
                     height: 400,
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('eventsbar'));  
                chart.draw(data, options);  
                   
           }  
               function drawPchart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Event Name');
        data.addColumn('number', 'No of Events');
        data.addRows([
          ['Machine Learning Workshop', 14],
          ['Cloud Computing Conference', 18],
          ['Data Mining Workshop', 8],
          ['Professional Communication', 25],
          ['Automation & Simulation', 10]
        ]);

        
        var options = {title:'How many events occured in 2019',
                       width:400,
                       height:300};
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
      }
function drawBchart() {
      var data = google.visualization.arrayToDataTable([
        ["Event Name", "No of Occurrence", { role: "style" } ],
       ['Machine Learning Workshop', 14,"blue"],
          ['Cloud Computing Conference', 18,"green"],
          ['Data Mining Workshop', 8,"red"],
          ['Professional Communication', 25,"orange"],
          ['Automation & Simulation', 10,"lightblue"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Number of Registered Participants",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("evesbar"));
      chart.draw(view, options);
  }
               function drawLike() {
        
        var data = google.visualization.arrayToDataTable([
          ['Feedback', 'Like', 'Dislike'],
          ['Machine Learning Workshop',  165,      45],
          ['Cloud Computing Conference',  135,      39],
          ['Data Mining Workshop',  157,      67],
          ['Professional Communication',  139,      19],
          ['Automation & Simulation',  136,      69]
        ]);

        var options = {
          title : 'Feedback Of Participants',
          //vAxis: {title: 'Cups'},
          //hAxis: {title: 'Month'},
          seriesType: 'bars',
          series: {5: {type: 'line'}}
        };

        var chart = new google.visualization.ComboChart(document.getElementById('chart'));
        chart.draw(data, options);
      }
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <h3 align="center">Reports</h3> 
          <div style="border:2px solid lightblue; margin-left:50px; margin-right:50px">
          
                <br />   <div id="chart" style="border:1px solid black;margin-left:21%; margin-right:20% ;width:60%"></div><br><br>
              <div id="evesbar" style="border:1px solid black;margin-left:24%; margin-right:20% ;width:40% border-right:1px solid black"></div> <br /> <br />
             
                <div id="piechart" style="border:1px solid black;margin-left:31%; margin-right:20% ;width:40%"></div>  <br /> <br /> 
               <div id="eventsbar" style="border:1px solid black;margin-left:23%; margin-right:20% ;width:40%  border-right:1px solid black"></div><br /> <br /> 
        
            
              
               </div>    </div>
           </div>  </div>  

      </body>  
 </html>  