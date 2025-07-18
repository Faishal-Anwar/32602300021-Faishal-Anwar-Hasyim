<?= $this->extend('layouts/template'); ?>

<?= $this->section('content'); ?>

<main>
    <div class="title">
        <h1>Data Mahasiswa</h1>
        <a href="/crud/tambah"><button>Tambah Data</button></a>
    </div>

    <div class="table">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Universitas</th>
                <th>No. HP</th>
                <th>Action</th>
            </tr>

            <?php
            if (empty($mahasiswa)) {
            ?>
                <tr>
                    <td colspan="7">Tidak ada data</td>
                </tr>
            <?php
            } else {
                $i = 1;
                foreach ($mahasiswa as $m) {
            ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $m['nim']; ?></td>
                        <td><?= $m['nama']; ?></td>
                        <td><?= $m['prodi']; ?></td>
                        <td><?= $m['universitas']; ?></td>
                        <td><?= $m['no_hp'];?></td>
                        <td class="action">
                            <a href="/crud/hapus/<?= $m['nim']; ?>">
                                <button class="btn-delete" onclick="return confirm('Are You sure to Delete Nim <?= $m['nim'] ?>')">Delete</button>
                            </a>
                            <a href="/crud/edit/<?= $m['nim']; ?>"><button class="btn-update">Update</button></a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</main>

<?= $this->endSection(); ?>
