@extends('base.base')

@section('base')
<div class="card">
    <div class="card-header">
        Tambah Lahan Parkir
    </div>
    <form action="{{ url('parking/simpan') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Gambar Lokasi</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile" name="image" accept="image/*" required>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <label>Nama Lokasi</label>
                <input type="text" class="form-control" name="name" required>
            </div>
        </div>
        <div class="card-footer">
            <div class="float-right">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<!-- bs-custom-file-input -->
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>

<script>
    $(function () {
      bsCustomFileInput.init();
    });
</script>
@endpush
