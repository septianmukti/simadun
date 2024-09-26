@if (session('success'))
<div class="alert alert-light-success" role="alert">
    <p class="txt-success"><b> Sukses! </b>{{ session('success') }}</p>
</div>
@endif
@if (session('error'))
<div class="alert alert-light-danger" role="alert">
    <p class="txt-danger"><b> Gagal! </b>{{ session('error') }}</p>
</div>
@endif