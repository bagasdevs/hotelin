@if (session('status')=='store')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Disimpan!</strong> Data telah berhasil disimpan.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>

@endif

@if (session('status')=='update')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Diubah!</strong> Data telah berhasil diubah.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>

@endif

@if (session('status')=='destroy')
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil Dihapus!</strong> Data telah berhasil dihapus.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        <span class="sr-only">Close</span>
    </button>
</div>

@endif
