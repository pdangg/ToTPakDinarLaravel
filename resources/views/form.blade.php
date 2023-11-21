<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="{{route('perumahan.store')}}" method="post">
        @csrf
        <label>Nama Perumahan</label>
        <input type="text" name="nama_perumahan" required>
        <label>Luas Perumahan</label>
        <input type="number" name="luas_perumahan" required>
        <label>harga_perumahan</label>
        <input type="number" name="harga_perumahan" required>
        <button type="submit">Submit</button>
       
    </form>
</body>
</html>