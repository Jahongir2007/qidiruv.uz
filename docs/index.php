<!doctype html> 
<html lang="en">
<head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!--   <link rel="stylesheet" href="./style.css"> -->
  	<title>Qidiruv.uz</title>
 </head>
 <center>
    <img src="./logo.png">
</center><br>
<div id="canvas" class="container group">
    
    <div id="primaryContent" class="group">
        <center>
       <form id="searchForm">
            <input id="searchInput" class="form-control" style="width: 600px" type="text" placeholder="Qidiruv..." autocomplete="off"><br>
            <button for="search" style="margin-right: 10px" class="btn btn-light">Qidiruv</button>
            <button for="search" class="btn btn-light" data-toggle="modal" data-target="#myModal">Dastur haqida</button>
            <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Dastur haqida</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body" align="left">
        Bu dastur Jahongir Sobirov tomonidan 2021-yilning 10-avgust sanasida ishga tushirildi
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Yopish</button>
      </div>
       </form>
   </center>
       <div id="resultsList"></div>             
    </div> <!-- main content -->
    <!--
    <div id="secondaryContent">    
    </div> right col content --> 
</div>
<script src="script.js"></script>
</body>
</html>
