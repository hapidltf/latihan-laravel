<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Students </title>
</head>
<body>
<table>
        <form action="POST">
             <!-- Nis -->
             <tr>
                <td><label for="nis">Nis:</label></td>
                <td><input type="text" id="nis" name="nis" required></td>
            </tr>

            <!-- Nama -->
            <tr>
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" id="nama" name="nama" required></td>
            </tr>

            <!-- Kelamin -->
            <tr>
                <td><label>Jenis Kelamin:</label></td>
                <td>
                    <input type="radio" id="pria" name="kelamin" value="Pria" required>
                    <label for="pria">Pria</label>
                    <input type="radio" id="wanita" name="kelamin" value="Wanita" required>
                    <label for="wanita">Wanita</label>
                </td>
            </tr>

            <!-- religion -->
            <tr>
                <td><label for="religion">Agama:</label></td>
                <td>
                    <input type="text" id="religion" name="religion" required>
                </td>
            </tr>

            <!-- Tanggal lahir -->
            <tr>
                <td><label for="birth_day">tanggal lahir:</label></td>
                <td>
                    <input type="date" id="birth_day" name="birth_day" required>
                </td>
            </tr>

           <!-- kelas -->
           <tr>
                <td><label for="class">Kelas:</label></td>
                <td>
                    <input type="text" id="class" name="class" required>
                </td>
            </tr>

            <!-- alamat -->
            <tr>
                <td><label for="alamat">Alamat:</label></td>
                <td><textarea id="address" name="address" cols="30" rows="6"></textarea></td>
            </tr>
        </table>
        
    <div class="">
        <a href=" # "class="btn text-white btn-primary ">tambah data</a>
    </div>

</body>
</html>