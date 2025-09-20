<div class="modal fade" id="itemDeleteModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="avatar avatar-xl bg-transparent-danger text-danger mb-3">
                    <i class="ti ti-trash-x fs-36"></i>
                </span>
                <h4 class="mb-1">Confirm Delete</h4>
                <p class="mb-3 fs-5">Delete this item? This can't be undone.</p>
                <div class="d-flex justify-content-between">
                    <button type="button" class="btn btn-success me-3" data-bs-dismiss="modal">Cancel</button>
                    <a href="#" id="itemConfirmBtn" class="btn btn-danger">Yes, Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("click", function(e) {
        if (e.target.closest(".itemDeleteBtn")) {
            let url = e.target.closest(".itemDeleteBtn").dataset.url;
            document.getElementById("itemConfirmBtn").setAttribute("href", url);
            new bootstrap.Modal(document.getElementById("itemDeleteModal")).show();
        }
    });
</script>