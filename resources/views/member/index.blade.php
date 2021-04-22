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
  <p>information for all game and can update in this table</p></p>            
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
        <td>1.5</td>
        <td>Genshin Impact</td>
        <td>Update Zhongli rerun and new banner Eula</td>
        <td>Noon</td>

        <td><button type="button" class="btn btn-warning active">edit</button></td>
        <td><button type="button" class="btn btn-danger active">delete</button></td>

      </tr>
    </tbody>
  </table>
</div>
<div class="ml-4 text-lg leading-7 font-semibold"><a href="http://127.0.0.1:8001" class="underline text-gray-900 dark:text-white">Patch gaming Homepage</a></div>
</body>
</html>

