// každý index.hmtl(php) by měl mít jen jeden návazný script.js

// Ověří, zda obsahuje velké písmeno
let loginInputText = document.querySelector("#login__input-text")
loginInputText.addEventListener("keyup", (e) => {
  let value = e.target.value

  let isUpperCase = (value) => {
    return /[A-Z]/.test(value)
  }

  if(isUpperCase(value)){
    console.log("Obsahuje velké písmeno")
  } else {
    console.log("Zatím neobsahuje velké písmeno")
  }
})

// Přepíná display block a none podle toho, zda je heslo kratší/delší než ...
let passwordChecking = document.querySelector("#input-password")
let passwordWarning = document.querySelector(".password--warning")


passwordChecking.addEventListener("input", (e) => {
  let password = e.target.value
  if(password.length < 5) {
    passwordWarning.style.display = "block";
  } else {
    passwordWarning.style.display = "none";
  }
})
