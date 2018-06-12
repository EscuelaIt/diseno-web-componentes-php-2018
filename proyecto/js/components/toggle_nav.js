const toggleNav = () => {
  const d = document,
    panelBtn = d.querySelector('.Panel-btn'),
    panel = d.querySelector('.Panel')

  panelBtn.addEventListener('click', e => {
    e.preventDefault()
    panel.classList.toggle('is-active')
    panelBtn.classList.toggle('is-active')
  })
}

export default toggleNav
