<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Untitled Document</title>
  <style>
    .ufe-btn,
    .ufe-btnd {
      background: rgb(255 76 76);
      padding: 8px 10px;
      border-radius: 4px;
      box-shadow: 0 2px 0 rgb(255 255 255);
      font-size: 15px;
      border: none;
      transition: all .2s ease-in;
      outline: none;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: inherit !important;
      color: #fff;
      position: relative;
      width: 50%;
      height: 40px;
    }

    .ufe-5f6daca830f2baadc5d05ca2 * {
      font-family: inherit !important;
    }

    .ufe-core *,
    .ufe-core input {
      padding: 0;
      box-sizing: border-box;
      max-width: 100%;
    }

    .ufe-btnd img.ufe-ico,
    .ufe-btn img.ufe-ico {
      width: 20px;
      height: 20px;
      margin-right: 5px;
      transition: all .3s ease;
    }

    .foodview {
      color: black;
      font-size: medium;
      margin: 28px;
    }
  </style>
</head>


<body>
  <?php
  include("header.php");
  include("config.php");
  $rubberplantid = $_GET["rubberplantid"];

  $result = mysqli_query($con, "SELECT * FROM tblrubberplant f inner join tblrubbercategory c on f.categoryid=c.categoryid WHERE f.rubberplantid='$rubberplantid'");
  $display = mysqli_fetch_array($result);
  ?>
  <!-- style="" ittila -->
  <form action="viewmoreaction.php" method="post">
    <div class="container" style="margin-left:124px; margin-bottom:5%;padding-left:-25px;  border-radius: 4px; top: 14px;padding-top:2%">

      <input type="hidden" value="<?php echo $rubberplantid ?>" name="hiddenpid" />

      <div class="row" style="margin-top:50px;box-shadow: 1px 5px 23px black; padding: 27px;border-radius: 19px;">
        <div class="col-md-4" style="margin-top: 91px;">

          <img src="../Admin/images/<?php echo $display['productimage'] ?>" width="300px" style="box-shadow: 2px 2px 10px #1b93e1; border-radius:  3%; margin-bottom:8%" />



        </div>

        <div class="col-md-6">
          <h3 style=" margin-top:1px;font-family:sans-serif; font-size: 33px;text-transform: uppercase;color: #ff3c41;font-weight: 600; text-align: center;"> <?php echo $display['rubberplant'] ?></h3>
          <hr>



          <p class="foodview">Category:
            <b>
              <?php echo $display['category'] ?>
            </b>
          </p>



          <p class="foodview">Description:
            <b>
              <?php echo $display['description'] ?>
            </b>
          </p>

          <p class="foodview">amount:

            <!--            <b>
              Rs.<?php /*echo $display['amount'] */ ?>.00 /-
            </b>-->
            <?php
            echo '<b><span id="price">' . $display['amount'] . '.00</span></b>';
            ?>
          </p>
          <p class="foodview">Quantity: </p>
          <h5 style="color:black; ">
            <input type="number" name="txtqty" id="txtqty" value="" style="margin: 28px;" class="form-control" style="width: 180px;" autofocus onchange="funcation1()" required />
          </h5><br>
          <div class="row">
            <div class="col-md-3">
              <h2 style="color:black;  margin-bottom:8%">Total </h2>
            </div>

            <div class="col-md-4" style="margin-left:226px"><input type="text" name="totamt" id="totamt" value="0" readonly class="form-control" style="width:208px;" autofocus required><br></label>
            </div>
          </div>

          <input type="hidden" value=" <?php echo $display['plantgrowth'] ?>" name="plantgrowth" id="plantgrowth" class="form-control" />

          <input type="hidden" value=" <?php echo $display['amount'] ?>" name="txtamount" id="txtamount" class="form-control" />
          <input type="hidden" value=" <?php echo $display['rubberplantid'] ?>" name="txtrubberplantid" id="txtfoodid" class="form-control" />

          </b></p>


          <div class="row">
            <div class="col-md-6">
              <input type="submit" class="btn button-style" name="btn-add" value="Add to cart " style="height:45px;    width: 581px;background: #ff3c41;color: #fff;text-transform: uppercase;font-weight: 700;" />
            </div>
          </div>

          <?php /*?><a href='booking.php?fur_id=<?php echo $display["furniture_id"]?>'<?php */ ?>

        </div>
      </div>
    </div>
    <script>
      function funcation1() {
        let qtys = document.getElementById("txtqty").value;
        if (isNaN(qtys))
          return;
        let qty = parseInt(qtys);
        if (qty <= 0) {
          document.getElementById("totamt").value = 0;
          return;
        }
        let amount = document.getElementById("price").textContent;
        if (isNaN(amount))
          return;

        amount = parseInt(amount);



        let total = qty * amount;
        document.getElementById("totamt").value = total;
      }
    </script>

  </form>

</body>

</html>