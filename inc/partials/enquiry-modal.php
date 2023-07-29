<div class="modal fade" id="enquiryModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-body">
            <div class="d-flex justify-content-end close">
                <button type="button" class="btn-close m-2" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <?php
                if ($formShortcode != null) {
                    echo do_shortcode($formShortcode);
                } ?>
        </div>
    </div>
</div>