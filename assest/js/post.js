// var modal = document.getElementById("myModal");

var btns = document.querySelectorAll(".see_all");

var spans = document.querySelectorAll(".close-span");

btns.forEach((btn) => {
  btn.addEventListener("click", () => {
    removeShow();
      const modal = btn.parentElement.querySelector(".modal-popup");
    modal.classList.add("show");
  });
});
function removeShow () {
  document.querySelector(".show")?.classList.remove("show");
}
spans.forEach(span => {
    span.addEventListener("click", removeShow)
})

// btn.onclick = function() {
//   modal.style.display = "block";
// }

// z;

// window.onclick = function (event) {
  // if (event.target == modal) {
    // modal.style.display = "none";
  // }
// };
// document.getElementById("myBtn").onclick(ev => ev.preventDefault())
