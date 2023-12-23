<?php
include("header.php");
?>
<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Element</span>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>
        </div>
        <div class="card" style="color: blue;">
            <div class="card-header">
                <h4 class="card-title">Category Registrations</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="categoryaction.php" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Category</label>
                                <input type="text" pattern="^[A-Za_z][A-Za-z -]+$" name="txtcategory" class="form-control" placeholder="category">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Description</label>
                                <input type="text" pattern="^[A-Za_z][A-Za-z -]+$" name="txtdescription" class="form-control" placeholder="Description">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Category Image</label>
                                <input type="file"  name="txtcategoryimage" class="form-control" placeholder="Category image">
                            </div>



                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");
?>