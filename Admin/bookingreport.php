<?php
include("header.php");
  $connect = mysqli_connect("127.0.0.1","root","","dbrubbernursery");  
 $query ="SELECT count(*) as count,rubberplant FROM tblrubberbooking b inner join tblrubberplant r on b.rubberplantid=r.rubberplantid where b.bookingstatus='Accepted' group by  b.rubberplantid";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>    
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['district', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          { 
					echo "['".$row["rubberplant"]."', ".$row["count"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Percentage ',  
                      //is3D:true,  
                      pieHole: 0.4  
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px; margin-top:6%; margin-left:555px;">  
                <h3 align="center">Pie Chart showing the Count of Rubberplant Booking Accepted</h3>  
                <br />  
                <div id="piechart" style="width: 900px; height: 500px;"></div>  
           </div>  
      </body>  
 </html>  
</body>
</html>
<?php
include("footer.php");
?>