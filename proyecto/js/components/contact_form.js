const contactForm = () => {
  /* Event Delegation */
  document.addEventListener('submit', e => {
    if (e.target.matches('.ContactForm')) {
      e.preventDefault()
      //alert('Perocesando formulario')
      const xhr = new XMLHttpRequest()

      let formData = new FormData(e.target)
      console.log(formData)

      xhr.open('POST', './send_form.php', true)

      xhr.addEventListener('load', e => {
        console.log(xhr)
        let message = document.querySelector('.u-message')

        message.textContent = 'Cargando...'

        if (xhr.status >= 200 && xhr.status < 400) {
          let res = JSON.parse(xhr.responseText)
          console.log(res)
          message.textContent = res.message
        }

      })

      xhr.send(formData)
    }
  })
}

export default contactForm
