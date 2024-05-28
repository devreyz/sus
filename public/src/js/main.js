document.addEventListener("DOMContentLoaded", function () {
  var dropdownTriggers = document.querySelectorAll(".profile-icon");
  dropdownTriggers.forEach(function (trigger) {
    trigger.addEventListener("click", function (event) {
      event.stopPropagation();
      trigger.classList.toggle("open");
      var dropdownMenu = trigger.querySelector(".dropdown");
      if (dropdownMenu.classList.contains("hidden")) {
        dropdownMenu.classList.remove("hidden");
      } else {
        dropdownMenu.classList.add("hidden");
      }
    });
    const closeDropdown = function (event) {
      dropdownTriggers.forEach(function (trigger) {
        var dropdownMenu = trigger.querySelector(".absolute");
        if (
          !trigger.contains(event.target) &&
          !dropdownMenu.contains(event.target)
        ) {
          dropdownMenu.classList.add("hidden");
        }
      });
    };
    document.addEventListener("scroll", (event) => closeDropdown(event));

    document.addEventListener("click", (event) => closeDropdown(event));
  });
});
