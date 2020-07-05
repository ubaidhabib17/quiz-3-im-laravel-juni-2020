@extends('layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Artikel</h3>
        </div>

        <div class="card-body">
            @if (!empty($artikel_list))
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Isi</th>
                        <th>Tag</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($artikel_list as $artikel) ?>
                    <tr>
                        <td>{{ $artikel->judul }}</td>
                        <td>{{ $artikel->isi }}</td>
                        <td>{{ $artikel->tag }}</td>
                    <td><a class="btn btn-success btn-sm" href="{{ url('artikel/' . $artikel->id ) }}">Detail</a></td>
                    </tr>
                </tbody>
            </table>
            @else
            <p>Tidak Ada Data</p>
            @endif
        </div>
    </div>
@endsection

@push('name')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
@endpush
