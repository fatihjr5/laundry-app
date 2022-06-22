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
                <th scope="col">Status</th>
                <th scope="col">kode</th>
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
                <td>
                    <select name="jasa" class="form-select" aria-label="Default select example">
                        <option selected>Cuci</option>
                        <option value="1">Pengeringan</option>
                        <option value="2">Setrika</option>
                        <option value="2">Packing</option>
                        <option value="2">Selesai</option>
                    </select>
                </td>
                <td>CS900</td>
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
                <td>
                    <select name="jasa" class="form-select" aria-label="Default select example">
                        <option selected>Cuci</option>
                        <option value="1">Pengeringan</option>
                        <option value="2">Setrika</option>
                        <option value="2">Packing</option>
                        <option value="2">Selesai</option>
                    </select>
                </td>
                <td>CS900</td>
                <td class="d-flex">
                    <button class="btn btn-warning text-white me-2">Ubah</button>
                    <button class="btn btn-danger text-white">Hapus</button>
                </td>
              </tr>
            </tbody>
      </table>
    </div>
@endsection
