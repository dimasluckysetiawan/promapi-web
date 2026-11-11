@extends('layouts.main')

@section('page-title', $title)

@section('content')
<div class="container py-5">
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h1 class="fw-bold">{{ $title }} PROMAPI</h1>
            <p class="text-muted">Daftar publikasi {{ strtolower($title) }} yang telah diterbitkan.</p>
            <hr class="w-25 mx-auto">
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-striped align-middle mb-0">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col" class="text-center" style="width: 80px;">No</th>
                                    <th scope="col">Nama Jurnal</th>
                                    <th scope="col" class="text-center" style="width: 200px;">Link</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($jurnal as $index => $item)
                                    <tr>
                                        <td class="text-center fw-bold">{{ $index + 1 }}</td>
                                        <td>{{ $item->judul }}</td>
                                        <td class="text-center">
                                            <a href="{{ $item->link }}" target="_blank" class="btn btn-sm btn-primary px-3">
                                                Buka Jurnal <i class="bi bi-box-arrow-up-right ms-1"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="3" class="text-center py-4 text-muted">
                                            Belum ada data {{ strtolower($title) }} yang tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection