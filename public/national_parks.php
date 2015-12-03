<?php 

require_once '../config_parks.php';
require_once '../db_connect.php';
require_once '../Input.php';

$page = Input::has('page') ? Input::get('page') : 1;

$page = ($page > 1) ? $page : 1;  // Is value greater than 0 if not set to 1.

$page = (is_numeric($page)) ? $page : 1; // If input not numeric then return 1.


$limit = Input::has('limit') ? Input::get('limit') : 4;

$offset = $page * $limit - $limit;

$selectAll = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";

$stmt = $dbc->query($selectAll);

$parks = $stmt->fetchAll(PDO::FETCH_ASSOC);


// $max_page = ceil($count / $limit)
// SELECT  location
// FROM    national_parks
// LIMIT 5 OFFSET 50;


// var_dump($parks);


?>
<!doctype HTML>
<html>
<head>
    <title>National Parks</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
    <div class="container">

        <?php echo "You are on page $page"; ?>
        <?php if($page > 1): ?>
            <a href="?limit=<?= $limit?>&page=<?php echo $page-1;?>" class="btn btn-default btn-lg">Previous</a>
        <?php endif;?>
        <a href="?limit=<?= $limit?>&page=<?php echo $page+1;?>" class="btn btn-primary btn-lg">&nbsp;&nbsp;&nbsp;&nbsp;Next&nbsp;&nbsp;&nbsp;&nbsp;</a>
        <h2>National Parks</h2>
        <h3>Database Driven Web Application</h3>
        <form method="GET">
            <div class="form-group">
              <label for="sel1">Number of results per page:</label>
              <select class="form-control" name="limit" id="sel1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
              </select>
              <button>Submit</button>
            </div>
            </form>
        <table class="table table-striped">
            <tr>
                <th>Park Name</th>
                <th>Location</th>
                <th>Area in Acres</th>
                <th>Date Established</th>
            </tr>
        <?php
            foreach($parks as $park): ?>
                <tr>
                        <td><?= $park['park'] ?></td>
                        <td><?= $park['location']?></td>
                        <td><?= $park['area_in_acres']?></td>
                        <td><?= $park['date_established']?></td>
                </tr> 
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>