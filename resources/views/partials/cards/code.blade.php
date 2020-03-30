<?php
/**
 * Template to show authentication code with timer.
 */

?>

<div class="card text-white">
    <div class="d-flex justify-content-end align-items-right pb-0">
        <button class="btn text-white mb-0 pb-0 mt-1" onclick="window.deleteCode(this)" data-id="{{ $code->id }}" data-url="{{ route('code.destroy') }}">
            <span class="material-icons">delete</span>
        </button>
    </div>
    <div class="card-body pt-0 mt-0">
        <div class="d-flex justify-content-between pb-2 align-items-center">
            <h2 class="font-weight-semibold mb-0 generated-code" data-secret="{{ $code->secretCode }}">
                <div class="ldBar mb-4" data-stroke="data:ldbar/res,stripe(#5768f3,#1c45ef,1)" data-value="100"></div>
            </h2>
            <div class="loading-holder mr-0">
                <div class="ldBar ldBar-code" id="loader-{{ $code->id }}" data-preset="rainbow"></div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <h5 class="font-weight-semibold mb-0">{{ $code->name }}</h5>
            <p class="text-white mb-0 remaining-time"></p>
        </div>
    </div>
</div>
