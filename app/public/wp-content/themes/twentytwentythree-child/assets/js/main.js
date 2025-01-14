    function nextStep(step) {
      if (validateStep(step - 1)) {
        document.querySelector('.wizard-step:not([style*="display: none"])').style.display = 'none';
        document.getElementById('step-' + step).style.display = 'flex';
        updateProgressBar(step);
        if (step === 3) {
          calculatePrice();
        }
      }
    }

    function prevStep(step) {
      document.querySelector('.wizard-step:not([style*="display: none"])').style.display = 'none';
      document.getElementById('step-' + step).style.display = 'flex';
      updateProgressBar(step);
    }

    function validateStep(step) {
      const form = document.getElementById('step-' + step + '-form');
      return form.checkValidity();
    }

    function calculatePrice() {
      const quantity = parseInt(document.getElementById('quantity').value, 10);
      let price = 0;
      if (quantity >= 1 && quantity <= 10) {
        price = 10;
      } else if (quantity >= 11 && quantity <= 100) {
        price = 100;
      } else if (quantity >= 101 && quantity <= 1000) {
        price = 1000;
      }
      document.getElementById('total-price').innerText = '$' + price;
    }

    function updateProgressBar(step) {
      document.querySelectorAll('.progressbar-item').forEach((item, index) => {
        if (index === step) {
          item.classList.add('current');
        } else {
          item.classList.remove('current');
        }
      });
    }

    function sendEmail() {

      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const phone = document.getElementById('phone').value;
      const quantity = document.getElementById('quantity').value;
      const price = document.getElementById('total-price').innerText;

      fetch(ajax_object.ajax_url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
          action: 'send_wizard_email',
          name: name,
          email: email,
          phone: phone,
          quantity: quantity,
          price: price,
        }),
      }).then(response => response.json())
        .then(data => {
          document.querySelector('.wizard-step:not([style*="display: none"])').style.display = 'none';
          document.getElementById('step-4').style.display = 'flex';
          document.getElementById('result-message').innerText = '✅ Your email was send successfully';
          updateProgressBar(4);

        })
        .catch(error => {
          document.querySelector('.wizard-step:not([style*="display: none"])').style.display = 'none';
          document.getElementById('step-4').style.display = 'flex';
          document.getElementById('result-message').innerText = '⚠️ We cannot send you email right now. Use alternative way to contact us';
          updateProgressBar(4);
        });
    }

    function startAgain() {
      document.querySelectorAll('.wizard-step input').forEach(input => {
        input.value = '';
    });

      document.querySelectorAll('.wizard-step').forEach(step => step.style.display = 'none');
      document.getElementById('step-1').style.display = 'flex';
      updateProgressBar(1);
    }