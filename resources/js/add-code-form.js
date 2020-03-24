(function() {
  let submitCodeButton = document.getElementById('submitSecretCode');

  if (submitCodeButton) {
    submitCodeButton.addEventListener('click', function() {
      let secretCodeField = document.getElementById('secretCode');
      let codeName = document.getElementById('name');
      let csrfToken = document.getElementsByName('csrf-token')[0].getAttribute('content');

      if (secretCodeField.value !== '' && codeName.value !== '') {
        $.ajax({
          url: submitCodeButton.dataset.url,
          method: 'POST',
          data: {
            secretCode: secretCodeField.value,
            name: codeName.value,
            _token: csrfToken,
          },
          success: (data) => {

          },
          error: (data) => {

          },
        });

      }
    });
  }
})();
