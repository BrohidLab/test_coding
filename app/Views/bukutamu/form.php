<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gradient-to-r from-indigo-50 to-white min-h-screen flex items-center justify-center">

    <div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-lg">
        <h1 class="text-3xl font-bold text-indigo-600 text-center mb-6">Buku Tamu</h1>

        <?php if(session()->getFlashdata('success')): ?>
        <div class="bg-green-100 text-green-700 p-3 mb-4 rounded-lg text-center">
            <?= session()->getFlashdata('success') ?>
        </div>
        <?php endif; ?>

        <?php if(isset($validation)): ?>
        <div class="bg-red-100 text-red-700 p-3 mb-4 rounded-lg">
            <?= $validation->listErrors() ?>
        </div>
        <?php endif; ?>

        <form action="<?= base_url('bukutamu/simpan') ?>" method="post" class="space-y-5">
            <div>
                <label class="block text-gray-700 mb-3 font-medium">Nama</label>
                <input type="text" name="nama"
                    class="w-full rounded-md px-5 py-3 text-sm ring ring-indigo-200 focus:outline-none"
                    placeholder="Masukkan nama Anda" required>
            </div>
            <div>
                <label class="block text-gray-700 mb-3 font-medium">Email</label>
                <input type="email" name="email" placeholder="Masukkan email anda"
                    class="w-full rounded-md px-5 py-3 text-sm ring ring-indigo-200 focus:outline-none" required>
            </div>
            <div>
                <label class="block text-gray-700 mb-3 font-medium">Pesan</label>
                <textarea name="pesan" rows="4" placeholder="Ketik pesan anda disini..."
                    class="w-full rounded-md px-5 py-3 text-sm ring ring-indigo-200 focus:outline-none"
                    required></textarea>
            </div>
            <button type="submit"
                class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-3 rounded-xl transition-all duration-200">
                Kirim Pesan
            </button>
        </form>

        <p class="text-center mt-6 text-sm text-gray-500">
            Lihat daftar tamu di <a href="<?= base_url('admin') ?>" class="text-indigo-600 hover:underline">halaman
                admin</a>
        </p>
    </div>

</body>

</html>