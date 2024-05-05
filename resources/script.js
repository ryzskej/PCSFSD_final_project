// každý index.hmtl(php) by měl mít jen jeden návazný script.js

// Ověří, zda email v loginu obsahuje velké písmeno
// let loginInputText = document.querySelector("#login-email")
// loginInputText.addEventListener("keyup", (e) => {
//   let value = e.target.value

//   let isUpperCase = (value) => {
//     return /[A-Z]/.test(value)
//   }

//   if(isUpperCase(value)){
//     console.log("Obsahuje velké písmeno")
//   } else {
//     console.log("Zatím neobsahuje velké písmeno")
//   }
// })

// vyhodí warning hlášku, když se hesla neshodují
let pass1 = document.querySelector("#reg-password1")
let pass2 = document.querySelector("#reg-password2")
let credentialWarning = document.querySelector(".credential--warning")

pass2.addEventListener("input", (e) => {

  p1 = pass1.value
  p2 = e.target.value

  if(p1 != p2){
    credentialWarning.style.display = "block";
  } else {
    credentialWarning.style.display = "none";
  }

})

// Přepíná display block a none podle toho, zda je heslo kratší/delší než ...
let passwordChecking = document.querySelector("#login-password")
let passwordWarning = document.querySelector(".password--warning")

passwordChecking.addEventListener("input", (e) => {
  let password = e.target.value
  if(password.length < 5) {
    credentialWarning.style.display = "block";
  } else {
    credentialWarning.style.display = "none";
  }
})

