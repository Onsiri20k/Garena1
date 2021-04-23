<!DOCTYPE html>
<html lang="en">
<head>
  <title>Find Patch Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Find Patch Game</h1>
  <p>This webpage you can find patch game that you need!</p> 
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">My Page:</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://127.0.0.1:8000">Home</a></li>
      <li><a href="http://127.0.0.1:8000/member">Update Patch Game</a></li>
      
    </ul>
  </div>
</nav>




<div class="container">
  <h2>Find Patch Game Table :</h2>
  <p>Type something in the input field to search the table for patch version, game or description:</p>  
  
 
  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Patch version</th>
        <th>Game</th>
        <th>Description</th>
        <th>Author</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>

        <p><td>{{$patv}}</td></p>
        <p><td>{{$games}}</td></p>
        <p><td>{{$desc}}</td></p>
        <p><td>{{$address}}</td></p>
        
       
      </tr>
    
      

      </tr>
    </tbody>
  </table>
  
  
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>


</body>
</html>