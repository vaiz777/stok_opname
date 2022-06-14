@extends('template')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Halaman Barang</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('barang.create') }}"> Input Siswa</a>
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
            <th width="280px"class="text-center">Harga Barang</th>
            <th width="280px"class="text-center">Stok</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($barang as $barangs)
        <tr>
            <td class="text-center">{{ ++$i }}</td>
            <td>{{ $barangs->barang_nama }}</td>
            <td>{{ $barangs->barang_harga }}</td>
            <td>{{ $barangs->barang_stok }}</td>
            <td class="text-center">
                <form action="{{ route('barang.destroy',$barangs->id) }}" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $barang->links() !!}


@endsection
