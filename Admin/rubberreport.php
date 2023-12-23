

<style>
body {
    font-size: 0.95em;
    font-family: arial;
    color: #212121;
}

th {
    background: #E6E6E6;
    border-bottom: 1px solid #000000;
}

#table-container {
    width: 850px;
    margin: 50px auto;
}

table#tab {
    border-collapse: collapse;
    width: 100%;
}

table#tab th, table#tab td {
    border: 1px solid #E0E0E0;
    padding: 8px 15px;
    text-align: left;
    font-size: 0.95em;
}

.btn {
    padding: 8px 4px 8px 1px;
}
#btnExport {
    padding: 10px 40px;
    background: #499a49;
    border: #499249 1px solid;
    color: #ffffff;
    font-size: 0.9em;
    cursor: pointer;
}
</style>

  <?php
include("header.php");
include("config.php");
?>
<form action="" method="post">
<div class="container" style="width:100%;margin-left:15%;margin-bottom: 213px;" >
  <div class="row">
    <div class="col-md-9" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:0px; top: 127px; margin-left:199px;">
      <h3 style="text-align: center">RUBBER PLANT DETAILS</h3>
      <div class="form-horizontal" style="margin-left:0px;">
        <div class="form-group">

          <input type="submit" name="export" value="EXPORT" class="btn btn-danger" style="width:75px; height:35px;" formaction="excel_rubber.php">
          <br>
 <table class="table table-hover" style="border: 2px solid #adaaaa; box-shadow: 3px 3px 11px #777777; margin-bottom:7%">
  
<tr>
    <th>Sl No</th>
<th>Rubber Name</th>
<th>Category Name</th>
<th>No of Plant</th>
<th>Rubber Plant Image</th>
<th>Plant Growth</th>
<th>Plant Post Date</th>
<th>Rubber Plant Description</th>
                </tr>

<?php
include("config.php");
$s=1;
$sql=mysqli_query($con,"select * from tblrubberplant p,tblrubbercategory c where p.categoryid=c.categoryid");

while($display=mysqli_fetch_array($sql))

{
	    echo "<tr>";
		echo "<td>".$display["rubberplantid"]."</td>";
		echo "<td>".$display["rubberplant"]."</td>";
    echo "<td>".$display["category"]."</td>";
    echo "<td>".$display["quantity"]."</td>";
    echo "<td><img src='images/".$display["productimage"]."' height='80' width='80'/></td>";
    echo "<td>".$display["plantgrowth"]."</td>";
    echo "<td>".$display["postdate"]."</td>";
    echo "<td>".$display["description"]."</td>";
		
		
		
echo "</tr>";
}
echo "</table>";
						?>
        </table>
         </form>
           </div>
           </div>
           </div>
           </div>
           </div>
<?php
include("footer.php");
?>