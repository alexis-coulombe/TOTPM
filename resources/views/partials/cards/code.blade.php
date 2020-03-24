<?php
/**
 * Template to show authentication code with timer.
 */

?>

<div class="card text-white">
    <div class="card-body">
        <div class="d-flex justify-content-between pb-2 align-items-center">
            <h2 class="font-weight-semibold mb-0 generated-code" data-secret="{{ $code->secretCode }}">
                <div class="ldBar" data-stroke="data:ldbar/res,stripe(#ff9,#fc9,1)" data-value="100"></div>
            </h2>
            <div class="loading-holder">
                <div class="ldBar ldBar-code" id="loader-{{ $code->id }}" data-preset="rainbow"></div>
            </div>
        </div>
        <div class="d-flex justify-content-between">
            <h5 class="font-weight-semibold mb-0">{{ $code->name }}</h5>
            <p class="text-white mb-0 remaining-time"></p>
        </div>
    </div>
</div>
