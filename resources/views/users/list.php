<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feel Good Inc.</title>
</head>
<body>

    <h2>Feel Good Inc</h2>

    <?php foreach($data as $row): ?>

        <ul>
            <li><strong>Name: </strong><?php echo $row->firstName ?></li>
            <li><strong>Email: </strong><?php echo $row->email ?></li>
        </ul>


    <?php endforeach; ?>
</body>
</html>