<!doctype html>
<html>

<head>
  <meta charset="utf-8">
  <title>Untitled Document</title>
  <style>
    /* body {
      background-color: SlateBlue;
      color: blue;
    } */

    h1 {
      background-color: "background-color:#b4b4b4;";
      color: black;
    }

    h1 {
      text-align: center;
    }

    /* div {
      border: 1px solid black;
      margin: 25px;
      background-color: lightblue;
    } */


    textarea {
      width: 70%;
      height: 300px;
      padding: 12px 20px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      background-color: #f8f8f8;
      font-size: 16px;
      resize: none;

      border: 1px solid black;
      outline-style: solid;
      outline-color: red;
      outline-width: thick;


    }

    div.absolute {
      position: absolute;
      top: 400px;
      right: 264px;
      width: 200px;
      height: 100px;

    }



    button {
      background-color: #6A1B9A;
      color: #ffffff;
      border: none;
      border-radius: 50%;
      padding: 10px 20px;
      font-size: 17px;
      font-family: Raleway;
      cursor: pointer
    }
  </style>
</head>


<body>






<!-- Email input -->
<!-- <div class="form-outline mb-4">

    <label class="form-label" for="form4Example2">
      <h1>RESPONSE</h1>
    </label>
  </div> -->


<form action="responseaction.php" method="POST">
  <div class="form-outline mb-4">
    <input type="text" name="response" class="formext-control">
  </div>

  <br>
  <br>
  <div class="col-md-6">
    <input type="submit" value="Response"></a>
  </div>

</form>



<!-- 
    <div class="form-group col-md-6">
      
      <input type="text"  name="response" class="formext-control" >
    </div> -->
<!-- Checkbox -->
<!-- <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form4Example4" checked />
    <label class="form-check-label" for="form4Example4">
      Send me a copy of this message
    </label>
  </div> -->

<!-- Submit button -->
<!-- <div class="absolute"> -->

<!-- <a href="responseaction.php"><input type="submit" class="btn btn-primary btn-block mb-4"></a> -->

<!-- </div> -->

</body>

</html>