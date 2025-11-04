<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Buku Tamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 min-h-screen p-8">

    <div class="max-w-6xl mx-auto bg-white shadow-lg rounded-2xl p-6">
        <div class="flex flex-col sm:flex-row justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-indigo-500">Daftar Buku Tamu</h1>

            <form method="get" class="flex gap-2 items-center mt-4 sm:mt-0">
                <input type="date" name="tanggal" class="ring ring-indigo-200 focus:outline-none rounded-md px-3 py-1"
                    value="<?= esc($_GET['tanggal'] ?? '') ?>">
                <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700">Filter</button>
                <a href="<?= base_url('admin') ?>"
                    class="px-3 py-2 rounded-lg border text-gray-600 hover:bg-gray-100">Reset</a>
                <a href="<?= base_url('admin/exportCsv') ?>"
                    class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600">Export CSV</a>
            </form>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-indigo-100 text-indigo-600">
                        <th class="py-3 px-4 text-left">#</th>
                        <th class="py-3 px-4 text-left">Nama</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Pesan</th>
                        <th class="py-3 px-4 text-left">Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(empty($tamu)): ?>
                    <tr>
                        <td colspan="5" class="text-center py-6 text-gray-500 bg-gray-50">Belum ada data tamu.</td>
                    </tr>
                    <?php else: ?>
                    <?php $no=1; foreach($tamu as $row): ?>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4"><?= $no++ ?></td>
                        <td class="py-3 px-4 font-medium text-gray-800"><?= esc($row['nama']) ?></td>
                        <td class="py-3 px-4 text-gray-600"><?= esc($row['email']) ?></td>
                        <td class="py-3 px-4 text-gray-700"><?= esc($row['pesan']) ?></td>
                        <td class="py-3 px-4 text-gray-500"><?= esc($row['tanggal']) ?></td>
                    </tr>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <div class="text-center mt-6">
            <a href="<?= base_url('/') ?>" class="text-indigo-600 hover:underline">Kembali ke Form Buku Tamu</a>
        </div>
    </div>

</body>

</html>