@extends('layouts.app')

@section('content')
<div class="container px-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm rounded border-0">
                <h5 class="m-3 mb-0 pb-3" style="border-bottom: 1px solid #8888">Form Order</h5>
                <div class="p-3">
                    <section class="d-flex flex-column">
                        <label class="mb-2" for="name">Nama pelanggan</label>
                        <input class="w-100" type="text" placeholder="Masukkan nama pelanggan">
                    </section>
                    <section class="d-flex flex-column mt-2">
                        <label class="mb-2" for="name">Berat / jumlah barang</label>
                        <input class="w-100" type="text" placeholder="Masukkan Total barang">
                    </section>
                    <section class="d-flex flex-column mt-2">
                        <label class="mb-2" for="name">Tanggal Masuk</label>
                        <input class="w-100" type="date">
                    </section>
                    <section class="d-flex flex-column mt-2">
                        <label class="mb-2" for="name">Tanggal Selesai</label>
                        <input class="w-100" type="date">
                    </section>
                    <section class="d-flex flex-column mt-2">
                        <label for="jasa">Pilih Layanan</label>
                        <select name="jasa" class="form-select" aria-label="Default select example">
                            <option selected>Cuci Kilat</option>
                            <option value="1">Cuci Setrika</option>
                            <option value="2">Cuci kering</option>
                            <option value="3">Cuci basah</option>
                            <option value="3">Setrika</option>
                            <option value="3">Cuci Sepatu</option>
                            <option value="3">Cuci Helm</option>
                            <option value="3">Bedcover</option>
                            <option value="3">Selimut</option>
                            <option value="3">Lainnya</option>
                        </select>
                    </section>
                    <section class="d-flex flex-column mt-2">
                        <label class="mb-2" for="name">Total keseluruhan</label>
                        <input class="w-100" type="text" readonly placeholder="terisi otomatis">
                    </section>
                    <button class="bg-black border-none w-100 text-center text-white mt-4 py-2 rounded-lg">Buat Pesanan</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
