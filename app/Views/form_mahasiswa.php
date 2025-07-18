<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
    <style>
        body { font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; max-width: 600px; margin: 40px auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; background-color:rgb(255, 255, 255); }
        label { display: block; margin-bottom: 8px; font-weight: bold; }
        input[type="text"] { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; background-color: #f45771; color: white; padding: 12px 15px; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; font-weight: bold; }
        button:hover { background-color:rgb(231, 68, 95); }
        h1 { text-align: center; color: #333; }
        .errors, .success-message { border-radius: 4px; padding: 15px; margin-bottom: 20px; }
        .errors { border: 1px solid red; background-color: #ffecec; color: #58151c; }
        .errors ul { padding-left: 20px; margin: 0; }
        .success-message { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
    </style>
</head>
<body>
    <
    <div style="text-align: right; margin-bottom: 15px;">
        <a href="<?= site_url('form/views_dataMahasiswa') ?>" style="text-decoration: none; padding: 10px 15px; background-color: #28a745; color: white; border-radius: 4px;">Lihat Semua Data</a>
    </div>

    <h1>Form Data Mahasiswa</h1>

    <?php if (session()->getFlashdata('success')): ?>
        <div class="success-message">
            <?= session()->getFlashdata('success') ?>
        </div>
    <?php endif; ?>

    <?php $errors = session()->getFlashdata('errors'); ?>
    <?php if ($errors): ?>
        <div class="errors">
            <b>Terjadi kesalahan validasi:</b>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('/form/submit') ?>" method="POST">
        
        <?= csrf_field() ?>

        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama" value="<?= old('nama') ?>" required>

        <label for="nim">NIM:</label>
        <input type="text" id="nim" name="nim" value="<?= old('nim') ?>" required>

        <label for="kelas">Kelas:</label>
        <input type="text" id="kelas" name="kelas" value="<?= old('kelas') ?>" required>

        <label for="matakuliah">Mata Kuliah:</label>
        <input type="text" id="matakuliah" name="matakuliah" value="<?= old('matakuliah') ?>" required>

        <label for="dosen_pengampu">Dosen Pengampu:</label>
        <input type="text" id="dosen_pengampu" name="dosen_pengampu" value="<?= old('dosen_pengampu') ?>" required>

        <label for="asisten_praktikum">Asisten Praktikum:</label>
        <input type="text" id="asisten_praktikum" name="asisten_praktikum" value="<?= old('asisten_praktikum') ?>" required>

        <button type="submit">Submit</button>
    </form>

</body>
</html>