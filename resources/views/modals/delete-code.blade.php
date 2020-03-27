<!-- Modal -->
<div class="modal fade" id="deleteCodeModal" tabindex="-1" role="dialog" aria-labelledby="deleteCodeModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCodeModalLabel">Are you sure?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                You are about to delete this code. This action cannot be reversed.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" onclick="window.deleteCode(this)" data-id="{{ $code->id }}" data-url="{{ route('code.destroy') }}">Understand</button>
            </div>
        </div>
    </div>
</div>
