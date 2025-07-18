<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Data Praktikum</title>
    <style>
        body {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .action-link {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 4px;
        }

        .action-link:hover {
            background-color: #0056b3;
        }

        .no-data {
            text-align: center;
            color: #777;
            margin-top: 30px;
        }
    </style>
</head>

<body>

    <h1>Daftar Data Mahasiswa</h1>

    <a href="<?= site_url('form') ?>" class="action-link">Tambah Data Baru</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Kelas</th>
                <th>Mata Kuliah</th>
                <th>Dosen</th>
                <th>Asisten</th>
                <th>Waktu Input</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($list_data_mahasiswa) && is_array($list_data_mahasiswa)): ?>
                <?php foreach ($list_data_mahasiswa as $key => $item): ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td><?= esc($item->nama) ?></td>
                        <td><?= esc($item->nim) ?></td>
                        <td><?= esc($item->kelas) ?></td>
                        <td><?= esc($item->matakuliah) ?></td>
                        <td><?= esc($item->dosen_pengampu) ?></td>
                        <td><?= esc($item->asisten_praktikum) ?></td>
                        <td><?= esc($item->created_at) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="8" class="no-data">Belum ada data yang disimpan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>