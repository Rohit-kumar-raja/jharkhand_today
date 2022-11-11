<!-- Large modal -->

<div class="modal fade" id="modal-default{{$ProductCategory->id}}" tabindex="-1" aria-labelledby="modal-default" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="h6 modal-title"> Message</h2><button type="button" class="btn-close"
                    data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               {{ $ProductCategory->massage }}
            </div>

        </div>
    </div>
</div>
