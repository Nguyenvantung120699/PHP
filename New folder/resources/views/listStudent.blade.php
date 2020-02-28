<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>danh sách sinh viên</h1>
    <table class="table">
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mark</th>
        <tbody>
           <?php foreach($Students as $s):?>
                <tr>
                    <td><?php echo $s['id']; ?></td>
                    <td><?php echo $s['name']; ?></td>
                    <td><?php echo $s['mail']; ?></td>
                    <td><?php echo $s['mark']; ?></td>
                </tr>
           <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>