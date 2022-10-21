<?php
    use App\Models\mahasiswa;
?>
<html>
    <head>
        <title>Index Mahasiswa</title>
    </head>

    <body>
        <h1>Index Mahasiswa</h1>
        <style>
            table tr {
                padding: 15px;
            }
        </style>
        <table> 
            <tr>
              <td>Nama</td>
              <td> : Amelia Tanwijaya</td>
            </tr>
            
            <tr>
              <td>Student ID</td>
              <td> : 03081200036</td>
            </tr>
            
            <tr>
              <td>Term</td>
              <td> : 4</td>
            </tr>
            
            <tr>
              <td>Total SKS</td>
              <td> : 22</td>
            </tr>
          </table>
        </div>
        <table>
            <th>
                <tr>No</tr>
                <tr>Nama Mata Kuliah</tr>
                <tr>SKS</tr>
            </th>
            <?php
            $mahasiswas = mahasiswa::get();

            foreach ($mahasiswas as $mahasiswa) {
                echo "<tr>";
                echo "<td>".$mahasiswa->studentId."</td>";
                echo "<td>".$mahasiswa->nama."</td>";
                echo "<td>".$mahasiswa->jurusan."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>