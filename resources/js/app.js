/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

let twoFactor = require('node-2fa');

let submitCodeButton = document.getElementById('submitSecretCode');

if(submitCodeButton){
  submitCodeButton.addEventListener('click', function(){
    let secretCodeField = document.getElementById('secretCode');

    if(secretCodeField.value !== ''){
      let newToken = twoFactor.generateToken(secretCodeField.value);
      console.log(newToken);

      $.ajax({
        url: this.data('url'),
        method: 'POST',
        data: {},
        success: (data) => {

        },
        error: (data) => {

        }
      })

    }
  });
}

