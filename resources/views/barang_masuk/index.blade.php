@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Halaman Barang Masuk</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang_masuk.create') }}"> Input Barang Masuk</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No</th>
            <th>Nama Barang</th>
            <th width="280px"class="text-center">Jumlah Barang Masuk</th>
            <th width="280px"class="text-center">Total Harga</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($stok as $stoks)
        <tr>
            <td class="text-center"></td>
            <td></td>
            <td>{{ $stoks[$income->barang_masuk] }}</td>
            {{-- <td>{{ $incomes->barang_masuk * $incomes->stok->barang_harga}}</td> --}}
            {{-- <td class="text-center">

            </td> --}}
        </tr>
        @endforeach
    </table>



@endsection
