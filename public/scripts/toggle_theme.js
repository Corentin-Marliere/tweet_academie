document.addEventListener("DOMContentLoaded", () => {

  const button = document.getElementById("toogle_Theme")
    console.log("test")

  button.addEventListener("click", () => {
    console.log("testclick")

    let mode = document.querySelector("html")
    mode.classList.toggle("dark");
  })
})