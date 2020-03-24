(function() {
  let twoFactor = require('node-2fa');
  let bars = [];

  var generatedCodes = document.querySelectorAll('.generated-code');
  let remainingTimes = document.querySelectorAll('.remaining-time');
  setInterval(function() {
    let remainingTime = (30 - Math.floor((new Date()).getTime() / 1000.0 % 30));

    Array.prototype.forEach.call(generatedCodes, function(code) {
      code.innerHTML = twoFactor.generateToken(code.dataset.secret).token;
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

})();
