<?php 

require_once '../config_parks.php';
require_once '../db_connect.php';
require_once '../Input.php';

function checkValues()
{
    return Input::notEmpty('park') && Input::notEmpty('location') && Input::notEmpty('date_established') && Input::notEmpty('area_in_acres') && Input::notEmpty('description');
}

function insertPark($dbc) 
{
    $errors = [];

    try {
        $park = Input::has('park') ? Input::getString('park') : null;
    } catch (Exception $e) {
        array_push($errors, $e->getMessage());
    }
    try {
        $location = Input::has('location') ? Input::getString('location') : null;
    } catch (Exception $e) {
        array_push($errors, $e->getMessage());
    }
    try {
        $date_established = Input::has('date_established') ? Input::getDate('date_established') : null;
        $date_established = $date_established->format('Y-m-d');
    } catch (Exception $e) {
        array_push($errors, $e->getMessage());
    }
    try {
        $area_in_acres = Input::has('area_in_acres') ? Input::getNumber('area_in_acres') : null;
    } catch (Exception $e) {
        array_push($errors, $e->getMessage());
    }
    try {
        $description = Input::has('description') ? Input::getString('description') : null;
    } catch (Exception $e) {
        array_push($errors, $e->getMessage());
    }
    if (!empty($errors)) {
        return $errors;
    }

    $query = "INSERT INTO national_parks (park, location, date_established, area_in_acres, description) VALUES (:park, :location, :date_established, :area_in_acres, :description)";

    $stmt = $dbc->prepare($query);
    $stmt->bindValue(':park', $park, PDO::PARAM_STR);
    $stmt->bindValue(':location', $location, PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $date_established, PDO::PARAM_STR);
    $stmt->bindValue(':area_in_acres', $area_in_acres, PDO::PARAM_STR);
    $stmt->bindValue(':description', $description, PDO::PARAM_STR);

    $stmt->execute();

    return $errors;
}

function deletePark($dbc) 
{
    if (Input::has('id')) {
        $delete_column = "DELETE FROM national_parks WHERE id = :id";
        $del = $dbc->prepare($delete_column);
        $del->bindValue(':id', Input::get('id'), PDO::PARAM_STR);
        $del->execute();
    }
}

function pageController($dbc)
{
    $errors = null;

    if (!empty($_POST)) {
        if (checkValues()) {
            $errors = insertPark($dbc);
        } else {
            $message = "Invalid format. Do over!";
            $javascript = "<script type='text/javascript'>alert('$message');<?script>";
            echo $javascript;
        }
    }
    deletePark($dbc);

    // Count
    $countAll = 'SELECT count(*) FROM national_parks';
    $count_stmt = $dbc->query($countAll);
    $count = $count_stmt->fetchColumn();
    $limit = 2;
    $max_page = ceil($count / $limit);

    // Sanitizing
    $page = Input::has('page') ? Input::get('page') : 1;
    $page = ($page > 1) ? $page : 1;  // Is value greater than 0 if not set to 1.
    $page = (is_numeric($page)) ? $page : 1; // If input not numeric then return 1.
    $page = ($page <= $max_page) ? $page : $max_page;

    // Offset
    $offset = $page * $limit - $limit;
    $selectAll = "SELECT * FROM national_parks LIMIT $limit OFFSET $offset";
    $stmt = $dbc->query($selectAll);
    $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $parks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return array(
        'page' => $page,
        'parks' => $parks,
        'errors' => $errors,
        'max_page' => $max_page,
        'limit' => $limit
        );
}
extract(pageController($dbc));

//     $limit = Input::has('limit') ? Input::get('limit') : 4;
// if(!empty($_POST)) {
//     echo 'notempty';
//         if($park != '' && $date_established != '' && $area_in_acres != '' && $description != '' && $location != '') {
//             echo 'inserted';
//             insertPark($dbc, $park, $date_established, $description, $area_in_acres, $location);
//         }
//     }

// }


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
            <form method="POST">
                    <?php if(!empty($errors)): ?>
                        <?php foreach ($errors as $errorMessage): ?> 
                            <h4><?= $errorMessage ?></h4>
                        <?php endforeach ?>
                    <?php endif ?>
        
                <div class="form-group">
                    <label for="park">Enter a National Park:</label>
                    <input type="text" class="form-control" name="park" id="park">
                </div>
                <div class="form-group">
                    <label for="location">Enter a Location:</label>
                    <input type="text" class="form-control" name="location" id="location">
                </div>
                <div class="form-group">
                    <label for="area_in_acres">Enter Acres:</label>
                    <input type="text" class="form-control" name="area_in_acres" id="area_in_acres">
                </div>
                <div class="form-group">
                    <label for="date_established">Enter Date Established:</label>
                    <input type="text" class="form-control" name="date_established" id="date_established">
                </div>
                <div class="form-group">
                    <label for="description">Enter a Description:</label>
                    <input type="text" class="form-control" name="description" id="description">
                </div>
                <div class="form-group">
                    <button>Submit</button>
                </div>
            </form>
        <table class="table table-striped">
            <tr>
                <th>Park Name</th>
                <th>Location</th>
                <th>Area in Acres</th>
                <th>Date Established</th>
                <th>Description</th>
            </tr>
        <?php
            foreach($parks as $park): ?>
                <tr>
                        <td><?= $park['park'] ?></td>
                        <td><?= $park['location']?></td>
                        <td><?= $park['area_in_acres']?></td>
                        <td><?= $park['date_established']?></td>
                        <td><?= $park['description'] ?></td>
                </tr> 
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>