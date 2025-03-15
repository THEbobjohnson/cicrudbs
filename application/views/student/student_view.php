<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Student Data</h1>
        <a href="<?= site_url('student/add'); ?>" class="btn btn-primary mb-3">Add Data</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($student as $row): ?>
                <tr>
                    <td><?= $row->id; ?></td>
                    <td><?= $row->name; ?></td>
                    <td><?= $row->address; ?></td>
                    <td><?= $row->phone_number; ?></td>
                    <td>
                        <a href="<?= site_url('student/edit/' . $row->id); ?>" class="btn btn-warning">Edit</a>
                        <a href="<?= site_url('student/delete/' . $row->id); ?>" class="btn btn-danger" onclick="return confirm('you sure bud?');">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>