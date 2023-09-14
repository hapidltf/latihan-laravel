<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Siswa</title>
</head>



<body>


    <table align="center" width="80%" class="table table-striped">
    
        <thead>
            <tr class="table-primary">
                <th>No.</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @php 
            $no = 1;
            @endphp
            @foreach ($query as $student)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $student->nis }}</td>
                <td>{{ $student->nama }}</td>
                <td>{{ $student->kelas }}</td>
                <td>{{ $student->alamat }}</td>
                <td>
                    <a href="#">Edit</a>
                    <br>
                    <a href="{{ url('students/delete') }}/{{ $student->id }}">Hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="">
    <a href="{{ url('students/create') }}/{{ $student->id }}" class="btn text-white btn-primary ">tambah data</a>
    </div>
</body>
</html>