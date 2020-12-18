<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('lapor') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">
        Pengirim:
        <input type="text" name="pengirim" required>
    </label>
    <label for="">
        Judul:
        <input type="text" name="judul" required>
    </label>
    <label for="">
        Laporan:
        <textarea name="isilaporan" rows="4" column="50" required></textarea>
    </label>
    <label for="">
        Aspek:
        <select name="aspect" id="">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="Dosen">Dosen</option>
            <option value="Pengajaran">Pengajaran</option>
            <option value="Infrastruktur">Infrastruktur</option>
        </select>
    </label>
    <label for="">
        File:
        <input type="file" name="file">
    </label>
    <button type="submit">Lapor</button>
    </form>
</body>
</html>