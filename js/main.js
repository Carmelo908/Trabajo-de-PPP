let popup = document.getElementById("popup")

let copiables = document.getElementsByClassName("copiable")

function showPopup() {
  popup.style.display = "flex"
  popup.style.opacity = "1.0"
  setTimeout(() => {
    popup.style.opacity = "0.0"
  }, 1500)
  setTimeout(() => {
    popup.style.display = "none"
  }, 2000)
}

for (const element of copiables) {
  element.onclick = () => {
    navigator.clipboard.writeText(element.dataset.clipboard);
    showPopup()
  }
}