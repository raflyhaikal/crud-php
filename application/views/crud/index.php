<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Crud</title>
</head>
<body>
    <a href="<?= base_url(); ?>crud/add">Create</a>
    <table border="2">
        <tr>
            <td>ID</td>
            <td>Nama</td>
            <td>Status</td>
            <td>Jurusan</td>
            <td>Action</td>
        </tr>
        <?php foreach ($content->result_array() as $key): ?>
            <tr>
            <td><?= $key['id'] ?></td>
            <td><?= $key['nama'] ?></td>
            <td><?= $key['status'] ?></td>
            <td><?= $key['jurusan'] ?></td>
            <td>
                <a href="<?= base_url() ?>crud/read/<?= $key['id'] ?>">Read</a> |
                <a href="<?= base_url() ?>crud/update/<?= $key['id'] ?>">Edit</a> |
                <a href="<?= base_url() ?>crud/delete/<?= $key['id'] ?>">Delete</a>
            </td>
           </tr> 
        <?php endforeach ?>
    </table> 
</body>
</html>