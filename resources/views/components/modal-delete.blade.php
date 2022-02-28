<div class="modal fade" id="modalDelete" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <form class="modal-content" method="POST" action="#">
            @method('delete')
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    <i class="fas fa-trash"> Hapus

                    </i>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah yakin ingin dihapus?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            </div>
        </form>
    </div>
</div>

@push('js')
<script>
    $(function () {
        $('#modalDelete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget)
            var recipient = button.data('link')
            var modal = $(this)
            modal.find('.modal-content').attr('action', recipient)

        })
    });

</script>
@endpush
