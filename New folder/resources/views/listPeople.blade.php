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
    <div class="col-md-12 text-center" style="padding:2%">
        <h1>Students List</h1>
    </div>
    <div class="container">
        <table class="table">
            <th>First Name</th>
            <th>Last Name</th>
            <th>Hometown</th>
            <th>Data of Birght</th>
            <th>Created</th>
            <th>Update</th>
            <tbody>
            <?php foreach($tstudents as $a):?>    
                    <tr>
                        <td><?php echo $a['frist_name']; ?></td>
                        <td><?php echo $a['Last_name']; ?></td>
                        <td><?php echo $a['hometown']; ?></td>
                        <td><?php echo $a['birth']; ?></td>
                        <td><?php echo $a['create']; ?></td>
                        <td><?php echo $a['update']; ?></td>
                    </tr>
            <?php endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="col-md-4 col-md-offset-5">
        <form Action="/tungT1904A_laravel/public/edit?">
            <button type="submit" class="btn btn-primary">Edit Info Student</button>
        </form>
    </div>
</body>
</html>