const modalTrigger = document.querySelector(".modal-trigger");
const modal = document.querySelector(".modal");

modalTrigger.addEventListener("click", function (event) {
  event.preventDefault();
  const dataModal = this.getAttribute("data-modal");
  document.querySelector(`#${dataModal}`).style.display = "block";
});

document
  .querySelectorAll(".close-modal, .modal-sandbox")
  .forEach(function (closeBtn) {
    closeBtn.addEventListener("click", function () {
      document.querySelectorAll(".modal").forEach(function (modal) {
        modal.style.display = "none";
      });
    });
  });
