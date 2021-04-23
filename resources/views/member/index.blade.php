<!DOCTYPE html>
<html lang="en">
<head>

  <title>Update Patch Game</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Update Patch Game</h1>
  <p>This webpage can update and show patch from all game in this world!</p> 
</div>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand">My Page:</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="http://127.0.0.1:8000">Home</a></li>
      <li><a href="http://127.0.0.1:8000/about">Find Patch Game</a></li>
      
    </ul>
  </div>
</nav>



<form class="form-horizontal" action="/action_page.php">
  <div class="form-group">
    <label class="control-label col-sm-2" for="patch">Patch version:</label>
    <div class="col-sm-8">
      <input type="patch" class="form-control" id="patch" placeholder="Enter patch version">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="game">Game:</label>
    <div class="col-sm-8"> 
      <input type="game" class="form-control" id="game" placeholder="Enter game">
    </div>
  </div>
  
  <div class="form-group">
    <label class="control-label col-sm-2" for="desc">Description:</label>
    <div class="col-sm-8"> 
      <input type="desc" class="form-control" id="desc" placeholder="Enter descriptions">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-sm-2" for="auth">Author:</label>
    <div class="col-sm-8"> 
      <input type="auth" class="form-control" id="auth" placeholder="Enter author">
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>



<div class="container">

  <h2>Patch Game :</h2>
  <p>Information for all game and can update in this table</p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Patch version</th>
        <th>Game</th>
        <th>Description</th>
        <th>Author</th>
        <th>Edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>



        <p><td>{{$mayom}}</td></p>
        <p><td>{{$luca}}</td></p>
        <p><td>{{$oppa}}</td></p>
        <p><td>{{$jiso}}</td></p>

        <td><button type="button" class="btn btn-warning active">edit</button></td>
        <td><button type="button" class="btn btn-danger active">delete</button></td>


      </tr>
    </tbody>
  </table>
</div>


</body>
</html>

