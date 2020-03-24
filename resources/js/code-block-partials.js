(function() {
  let twoFactor = require('node-2fa');
  let bars = [];

  var generatedCodes = document.querySelectorAll('.generated-code');
  let remainingTimes = document.querySelectorAll('.remaining-time');
  setInterval(function() {
    let remainingTime = (30 - Math.floor((new Date()).getTime() / 1000.0 % 30));

    Array.prototype.forEach.call(generatedCodes, function(code) {
      let token = twoFactor.generateToken(code.dataset.secret).token;

      if ($(code).html() !== token) {
        $(code).animate({'opacity': 0}, 400, function() {
          $(this).html(twoFactor.generateToken(code.dataset.secret).token).animate({'opacity': 1}, 400);
        });
      }
    });

    Array.prototype.forEach.call(remainingTimes, function(remaining) {
      remaining.innerHTML = remainingTime + ' sec.';
    });

    Array.prototype.forEach.call(bars, function(bar) {
      bar.set(remainingTime / 30 * 100, true);
    });
  }, 1000);

  var ldBars = document.querySelectorAll('.ldBar-code');
  Array.prototype.forEach.call(ldBars, function(bar) {
    let _bar = new ldBar(bar);

    bars.push(_bar);
    _bar.set(0);
  });

  $('.ldBar-label').hide();

  let deleteCode = function(element) {
    let id = element.dataset.id;
    let csrfToken = document.getElementsByName('csrf-token')[0].getAttribute('content');

    $.ajax({
      url: element.dataset.url,
      method: 'POST',
      data: {
        id: id,
        _token: csrfToken,
      },
      success: (data) => {

      },
      error: (data) => {

      },
    });
  };

  window.deleteCode = deleteCode;
})();
