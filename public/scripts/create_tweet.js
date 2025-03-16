document.addEventListener("DOMContentLoaded", () => {

  const tweetBtn = document.getElementById("tweet_btn")
  const tweetForm = document.getElementById("tweet_form")

  tweetBtn.addEventListener("click", function () {
    // tweetForm.hidden = false
    if (tweetForm.hidden = false) {
      tweetForm.hidden = true
    }
    else if (tweetForm.hidden = true) {
      tweetForm.hidden = false
    }
  })

})