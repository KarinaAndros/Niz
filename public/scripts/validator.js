(function () {
    'use strict'

    var forms = document.querySelectorAll('.needs-validation')
    var inputs = document.querySelectorAll('.user-field')
    var feedbacks = document.querySelectorAll('.invalid-feedback')

    Array.prototype.slice.call(forms)
        .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()

                    for (let i = 0; i < inputs.length; i++) {
                        inputs[i].classList.add('invalid-input')
                    }
                }

                form.classList.add('was-validated')
                for (let i = 0; i < feedbacks.length; i++) {
                    feedbacks[i].classList.remove('invalid-feedback');
                    feedbacks[i].classList.add('invalid-feedback-custom-style');
                }
            }, false)
        })
})()
