<?php
    include("header.php");
    include("config.php");
    ?>  
    <div class="content-body">
        <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>PRODUCT VIEW</h4>
                    <p class="mb-0">Categorytwise view</p>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                </ol>
            </div>
        </div>
        <form action="" method="POST">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                         <h4>Rubber Category</h4>
                       
                        <?php
                        $sql=mysqli_query($con,"select * from tblrubbercategory ");
                        ?>
                        <select name="drpcategory" class="form-control" id="drpcategory" onchange="this.form.submit()" style="width:500px;" >
                        <option value="0">---Select---</option>
                        <?php
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?php echo $row['categoryid'] ?>"> <?php echo $row['category'];?> </option>
                        <?php
                        }
                        ?>
                        </select>
                    </div><br><br>
                    <!-- <input type="submit" name="btnsubmit" value="Submit"  class="btn btn-primary" style="margin-left:63%;margin-bottom:2%"> -->

                </div>
            </div>
        </form>
        <?php
        if(isset($_POST["drpcategory"]))
        
        

            $category=$_POST["drpcategory"];
            // $todate=$_POST["todate"]; 
            $_SESSION['category']=$category;
   
            // $_SESSION['tdate']=$todate;
            $s=1;
        ?>
        <script>
document.getElementById("drpcategory").value="<?php echo $category; ?>";

</script>
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Rubber Plant</h4>
                        <a href="productreg.php"><button type="button" class="btn btn-rounded btn-primary"><span
                                class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                        </span>Add</button></a>
                        </div>
                    <div class="card-body">
                            <table class="table">
                                <thead class="thead-primary">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Image</th>
                                        <th scope="col">Rubber plant</th>
                            
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Amount</th>
                                        <th scope="col">Post Date</th>
                                        <th scope="col">Plant Growth</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Actions</th>
                                        <!-- <th scope="col">Last</th>
                                        <th scope="col">Handle</th>
                                        <th scope="col">Actions</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sql=mysqli_query($con,"SELECT * FROM tblrubberplant WHERE categoryid='$category'");
                                    // console.log($sql);
                                    while($display=mysqli_fetch_array($sql))
                                    {
                                        echo "<tr>";
                                        echo"<td>".$s++."</td>";
                                        ?>
                                        <td><img src='./images/<?php echo $display["productimage"] ?>'height="80" width="80"/></td>
                                        <?php
                                        echo "<td>".$display["rubberplant"]."</td>";
                                        echo "<td>".$display["quantity"]."</td>";
                                        echo "<td>".$display["amount"]."</td>";
                                        echo "<td>".$display["postdate"]."</td>";
                                        echo "<td>".$display["plantgrowth"]."</td>";
                                        echo "<td>".$display["description"]."</td>";
                                    
                                  ?>
                                  <td>
                                                <div class="btn-group" role="group">
                                                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Chose Your Action</button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="editproduct.php?rubberplantid=<?php echo $display['rubberplantid']; ?>">Edit</a>
                                                        <a class="dropdown-item" onclick="return confirm('Are you sure you want to delete?')" href="deleteproduct.php?rubberplantid=<?php echo $display['rubberplantid']; ?>">Delete</a>

                                                    </div>
                                                </div>
                                            </td>
                                    </tr>
                                            <?php
                                                
                                    }
                                    echo "</table>";
                                
                                    ?>
                                    <!-- <div class="card"> -->                        
                                </tbody>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
<?php
    include("footer.php");
    
?>