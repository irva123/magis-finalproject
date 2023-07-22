<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table align-items-center mb-0" id="myTable">
                  <thead class="bg-gray-100">
                    <tr>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">No</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Nama</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Foto</th>
                      <th class="text-secondary text-xs font-weight-semibold opacity-7">Deskripsi</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Alamat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Titik koordinat</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Operasional</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Harga Tiket</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Kontak</th>
                      <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">Sosial Media</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($spaces as $space)
                    <tr>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->id}}</p>
                      </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->nama}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"><img src ="{{ public_path('storage/'.$space->foto) }}" alt ="" style="width: 150px;"></span>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->deskripsi}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0">{{ $space->alamat}}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-sm text-dark font-weight-semibold mb-0"> {{ $space->titik_koordinat}}</p>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->jam_buka}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal"> {{ $space->harga_weekday}}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-sm font-weight-normal">{{ $space->kontak}}</span>
                      </td>
                      <td class="align-middle text-center">
                      <span class="text-secondary text-sm font-weight-normal">{{ $space->sosmed}}</span>
                      </td>
                      <td class="align-middle text-center">
                      </td>
                      <td class="align-middle">
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
</body>
</html>