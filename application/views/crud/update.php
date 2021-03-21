<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
</head>
<body>
<h2>Edit Data</h2>
    <?php foreach ($content->result() as $key): ?>
        <form action="<?= base_url(); ?>crud/action_update/<?php echo $key->id ?>" method="post">
            <input type="text" name="nama" placeholder="Masukan Nama" value="<?= $key->nama ?>"> <br>
            <input type="text" name="status" placeholder="Masukan Status" value="<?= $key->status ?>"> <br>
            <input type="text" name="jurusan" placeholder="Masukan Jurusan" value="<?= $key->jurusan ?>"> <br> <br>
            <input type="submit" value="Save"> 
        </form>
    <?php endforeach ?>
</body>
</html>                                                                                                                               