window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.$ = window.jQuery = require('../../node_modules/jquery/dist/jquery.min');
window.popperjs = require('../../node_modules/@popperjs/core/dist/cjs/popper');
window.bootstrap = require('../../node_modules/bootstrap/dist/js/bootstrap.min');
require('./loading-bar.min');
