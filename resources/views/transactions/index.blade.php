@extends('transactions.layouts.master')
@section('title', 'Transaksi')
@section('content')
    <div class="mb-3">
        <a class="btn btn-success px-5" href="{{route('transactions.create')}}" role="button">Tambah Data Transaksi +</a>
    </div>
    <table class="table table-bordered table-responsive">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Tipe</th>
                <th scope="col">Terakhir Diperbarui</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach( $transactions as $transaction )
                <tr>
                    <th scope="row">{{$transaction->id}}</th>
                    <td>{{$transaction->description}}</td>
                    <td>@currency($transaction->amount)</td>
                    <td>
                        <span class="badge {{ $transaction->type == 'income' ? 'bg-success' : 'bg-danger' }}">
                            {{ $transaction->type == 'income' ? 'Pemasukan' : 'Pengeluaran' }}
                        </span>
                    </td>
                    <td>{{$transaction->updated_at}}</td>
                    <td>
                        <form action="/transactions/{{$transaction->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a class="btn btn-primary btn-sm btn-icon" href="{{route('transactions.edit', $transaction->id)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                            <button class="btn btn-danger btn-sm btn-icon confirm-delete"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mt-3">
        <h4>Sisa Uang: @currency($balance)</h4>
    </div>
@endsection