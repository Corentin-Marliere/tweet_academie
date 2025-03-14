document.addEventListener("DOMContentLoaded", () => {

  const tweetBtn = document.getElementById("tweet_btn")
  const tweetForm = document.getElementById("tweet_form")
  console.log("test")

  tweetBtn.addEventListener("click", function () {
      document.getElementById("tweet_form").hidden = false
  })
})