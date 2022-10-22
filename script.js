var mytext = document.getElementById("my-text");
var Result = document.getElementById("result");
var limit = 200;
Result.textContent = 0 + "/" + limit;
mytext.addEventListener("input", function () {
  var textLength = mytext.value.length;
  Result.textContent = textLength + "/" + limit;
  if (textLength > limit) {
    mytext.style.bordercolor = "red";
    Result.style.color = "red";
  } else {
    mytext.style.bordercolor = "green";
    Result.style.color = "green";
  }
});
window.onload = function () {
  whatis();
};
