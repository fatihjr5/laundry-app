@extends('layouts.app')

@section('content')
    <div class="container px-5">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Berat/Jumlah</th>
                <th scope="col">Layanan</th>
                <th scope="col">Tgl masuk & jadi</th>
                <th scope="col">Harga</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Painem</td>
                <td>10 kg</td>
                <td>Cuci setrika</td>
                <td>29 Maret & 31 Maret</td>
                <td>100.000</td>
                <td class="d-flex">
                    <button class="btn btn-warning text-white me-2">Ubah</button>
                    <button class="btn btn-danger text-white">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Painem</td>
                <td>10 kg</td>
                <td>Cuci setrika</td>
                <td>29 Maret & 31 Maret</td>
                <td>100.000</td>
                <td class="d-flex">
                    <button class="btn btn-warning text-white me-2">Ubah</button>
                    <button class="btn btn-danger text-white">Hapus</button>
                </td>
              </tr>
            </tbody>
      </table>
    </div>
@endsection
