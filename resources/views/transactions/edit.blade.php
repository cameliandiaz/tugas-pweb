@extends('transactions.layouts.master')
@section('title', 'Ubah Transaksi')
@section('content')
    <form action="{{ route('transactions.update', $transaction->id) }}" method="POST">
        @method('PUT')
        @csrf <!-- CSRF token is required in Laravel forms for security -->
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" class="form-control @error('description') is-invalid @enderror" 
            id="description" name="description" value="{{ old('description', $transaction->description ) }}" >
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="amount" class="form-label">Jumlah</label>
            <input type="text" class="form-control @error('amount') is-invalid @enderror" 
            id="amount" name="amount" value="{{ old('amount', $transaction->amount) }}">
            @error('amount')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipe</label>
            <select id="type" class="form-control @error('type') is-invalid @enderror" 
            name="type">
                <option value="">Pilih Tipe Transaksi</option>
                <option value="income" {{ old('type', $transaction->type) == 'income' ? 'selected' : '' }}>Pemasukan</option>
                <option value="expense" {{ old('type', $transaction->type) == 'expense' ? 'selected' : '' }}>Pengeluaran</option>
            </select>
            @error('type')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Ubah Transaksi</button>
    </form>
@endsection