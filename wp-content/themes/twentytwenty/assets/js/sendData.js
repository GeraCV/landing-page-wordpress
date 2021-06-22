const formNewsletter = document.getElementById('form-n')
const containerMessageSubscribe = document.getElementById('container-ms')


formNewsletter.addEventListener('submit', (e) => {
  e.preventDefault()
  const formData = new FormData(formNewsletter)
  fetch('wp-content/themes/twentytwenty/dataUsers/captureData.php', {
    method: 'POST',
    body: formData

  })
    .then(res => res.json())
    .then(data => {
      if (data === 'correct') {
        containerMessageSubscribe.innerHTML = `
          <p class="message-successful"> ¡Felicidades! Haz quedado registrado </p>
           `
        setTimeout(() => {
          containerMessageSubscribe.innerHTML = ``
          formNewsletter.reset()
        }, 3000);

      } else {
        containerMessageSubscribe.innerHTML = `
          <p class="message-error"> ¡Hubo un error! Intentalo nuevamente </p>
          `
        setTimeout(() => {
          containerMessageSubscribe.innerHTML = ``
          formNewsletter.reset()
        }, 3000);
      }

    })
})
