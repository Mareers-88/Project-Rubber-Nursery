    <?php
    include("header.php");
    ?>

    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <!-- <div class="welcome-text">
                        <h4>Hi, welcome back!</h4>
                        <p class="mb-0">Your business dashboard template</p>
                    </div> -->
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <!-- <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Table</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Bootstrap</a></li>
                    </ol> -->
                </div>
            </div>
            <form action="" method="post">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b>REQUESTS</b></h4>


                            </div>
                            <div class="card-body">
                                <table class="table">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Customer Name</th>
                                            <th scope="col">Rubber Plant </th>

                                            <th scope="col">Quantity</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Plant Growth</th>
                                            <th scope="col">Actions</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("config.php");
                                        $s = 1;
                                        $sql = mysqli_query($con, "SELECT * FROM tblrubberbooking a inner join tblrubbercustomer b on a.customerid=b.customerid 
                                                                                                 inner join tblrubberplant c on a.rubberplantid=c.rubberplantid " );
                                                                                                //  WHERE bookingstatus='pending'

                                        while ($display = mysqli_fetch_array($sql)) {
                                        ?>

                                            <tr>
                                            <tr>
                                                <td><?php echo $s++ ?></td>
                                                <td><?php echo $display["customername"] ?></td>
                                                <td><?php echo $display["rubberplant"] ?></td>
                                                <td><?php echo $display["quantityc"] ?></td>
                                                <td><?php echo $display["bookingdate"] ?></td>
                                                <td><?php echo $display["plantgrowth"] ?></td>
                                                


                                                <td>
                                                    <!-- <a href=".php"><button type="button" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-info"><i class="fa fa-plus color-info"></i>
                                                            </span>View More</button></a> -->
                                                    <div class="btn-group" role="group">
                                                        <a href="requviewmore1.php?bookingid=<?php echo $display['bookingid'];?>"><button type="button" class="btn btn-rounded btn-primary">View more</button></a>


                                                    </div>
                            </div>
                            </td>
                            </tr>
                            <div class="card">
                                </tbody>
                            <?php
                                            echo "</tr>";
                                        }
                            ?>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>

    <?php
    include("footer.php");
    ?>