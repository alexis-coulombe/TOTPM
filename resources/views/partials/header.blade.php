<?php
    /**
     * Main header template.
     * Contains filters.
     */
?>

<div class="row page-title-header" style="margin: 90px 10px 10px 0;">
    <div class="col-12">
        <div class="page-header">
            <div class="input-group mb-3 ml-1">
                <div class="input-group-prepend">
                    <label for="secretCode" class="input-group-text">Enter your code</label>
                </div>
                <input type="text" class="form-control" id="secretCode" name="secretCode">
            </div>
            <div class="input-group mb-3 ml-1">
                <div class="input-group-prepend">
                    <label for="name" class="input-group-text">Give it a name</label>
                </div>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="input-group mb-3 ml-1">
                <button type="button" class="btn btn-primary" id="submitSecretCode" data-url="{{ route('code.store') }}">Process</button>
            </div>

        </div>
    </div>
</div>
