<?php
include("header.php");
include("config.php");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <!-- <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div> -->
            <!-- <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div> -->
        </div>
        <div class="card" style="color: blue;">
            <div class="card-header">
                <h4 class="card-title">Request Details</h4>
            </div>






            <div class="card-body">
                <div class="basic-form">
                    <form action="#" method="post" enctype="multipart/form-data">

                        <?php
                        
                            $sql = mysqli_query($con,"SELECT * FROM tblrubberbooking a inner join tblrubbercustomer b on a.customerid=b.customerid 
                            inner join tblrubberplant c on a.rubberplantid=c.rubberplantid ");
                            $display = mysqli_fetch_array($sql);
                        
                            $_SESSION['bid']=$display["bookingid"]
                        ?>
                        <div class="form-row">
                           

                            <div class="form-group col-md-6">
                                <label>Customer Name</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="customername" style="width:500px;" value="<?php echo $display['customername']; ?>" readonly>
                                </div>
                            </div>

                            

                            <div class="form-group col-md-6">
                                <label>Quantity</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="quantity" style="width:500px;" value="<?php echo $display['quantityc']; ?>" readonly>
                                </div>
                            </div>



                            <div class="form-group col-md-6">
                                <label>Amount</label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="amount" style="width:500px;" value="<?php echo $display['amount']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Postdate</label>
                                <div class="col-md-6">
                                    <input type="date" class="form-control" name="date" style="width:500px;" value="<?php echo $display['bookingdate']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Plant Growth</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="plantgrowth" style="width:500px;" value="<?php echo $display['plantgrowth']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="description" style="width:500px;" value="<?php echo $display['description']; ?>" readonly>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Total amount</label>

                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="total" style="width:500px;" value="<?php echo $display['total']; ?>" readonly>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-3" style="text-align:right">
                                    <label>Product Image </label>
                                </div>
                                <div class="col-md-6">
                                   
                                    
                                    <img src="../Admin/images/<?php echo $display['productimage']; ?>"  style="width:150px;height:150px;"/>
                                   
                                </div>
                            </div>





                        </div>
                        <a href="accept.php?bookingid=<?php echo $display['bookingid'];?>"><button type="button" class="btn rounded-pill btn-primary">Accept</button></a>
                      <a href="reject.php?bookingid=<?php echo $display['bookingid'];?>"><button type="button" class="btn rounded-pill btn-primary">Decline</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>