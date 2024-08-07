@extends('layouts.app')
@section('content')
    @include('layouts.sidebar')
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('layouts.navbar')

            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Retur</h1>
                    <ul class="list-inline mb-0 float-end">
                        <li class="list-inline-item">
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Download PDF</a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i> Download Excel</a>
                        </li>
                    </ul>
                </div>

                <div class="container-fluid pt-2 px-2">
                    <div class="bg-white justify-content-between rounded shadow p-4">
                        <div class="table-responsive">
                            <table class="table text-center align-middle table-bordered table-hover mb-0 datatable"
                                id="ProductTable" style="90%">
                                <thead style=" background-color: rgb(1, 1, 95);">
                                    <tr style="color: white">
                                        <th scope="col" style="width: 150px; color:white">Nama Barang</th>
                                        <th scope="col" style="width: 200px; color:white">Kode Barang</th>
                                        <th scope="col" style="width: 150px; color:white">Pihak Yang Mengajukan</th>
                                        <th scope="col" style="width: 150px; color:white">Kategori Barang</th>
                                        <th scope="col" style="width: 250px; color:white">Jumlah Barang</th>
                                        <th scope="col" style="width: 150px; color:white">Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bekasBergaransis as $bekasbergaransi)
                                        <tr>
                                            <td>{{ $bekasbergaransi->Nama_Barang }}</td>
                                            <td>{{ $bekasbergaransi->Kode_Barang }}</td>
                                            <td>{{ $bekasbergaransi->Pihak_Pemohon }}</td>
                                            <td>{{ $bekasbergaransi->Kategori_Barang }}</td>
                                            <td>{{ $bekasbergaransi->Jumlah_Barang }}</td>
                                            <td><a href="" class="btn btn-info">See
                                                    Details</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
