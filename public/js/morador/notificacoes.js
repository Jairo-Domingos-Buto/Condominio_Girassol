
document.addEventListener("DOMContentLoaded", function () {
  const filterButtons = document.querySelectorAll(".filter-btn");
  filterButtons.forEach((button) => {
    button.addEventListener("click", function () {
      filterButtons.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");
    });
  });

  const markReadButtons = document.querySelectorAll(".mark-read");
  markReadButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const card = this.closest(".notification-card");
      card.classList.remove("unread");
    });
  });

  const deleteButtons = document.querySelectorAll(".delete");
  deleteButtons.forEach((button) => {
    button.addEventListener("click", function () {
      const card = this.closest(".notification-card");
      card.style.opacity = "0";
      setTimeout(() => card.remove(), 300);
    });
  });

  function showNotification(title, message) {
    const popup = document.querySelector(".notification-popup");
    popup.querySelector(".notification-title").textContent = title;
    popup.querySelector(".notification-message").textContent = message;
    popup.classList.add("show");

    setTimeout(() => {
      popup.classList.remove("show");
    }, 5000);
  }

  setTimeout(() => {
    showNotification("Novo Visitante", "Maria Silva acabou de chegar.");
  }, 3000);

  const searchBar = document.querySelector(".search-bar");
  searchBar.addEventListener("input", function (e) {
    const searchTerm = e.target.value.toLowerCase();
    const notifications = document.querySelectorAll(".notification-card");

    notifications.forEach((card) => {
      const title = card
        .querySelector(".notification-title")
        .textContent.toLowerCase();
      const message = card
        .querySelector(".notification-message")
        .textContent.toLowerCase();

      if (title.includes(searchTerm) || message.includes(searchTerm)) {
        card.style.display = "flex";
      } else {
        card.style.display = "none";
      }
    });
  });

  const filterButtonsNew = document.querySelectorAll(".filter-btn");
  filterButtonsNew.forEach((button) => {
    button.addEventListener("click", function () {
      const filterType = this.textContent.toLowerCase();
      const notifications =
        document.querySelectorAll(".notification-card");

      notifications.forEach((card) => {
        if (filterType === "todas") {
          card.style.display = "flex";
        } else if (filterType === "não lidas") {
          card.style.display = card.classList.contains("unread")
            ? "flex"
            : "none";
        } else if (filterType === "segurança") {
          card.style.display = card.classList.contains("security")
            ? "flex"
            : "none";
        } else if (filterType === "visitantes") {
          card.style.display = card.classList.contains("visitor")
            ? "flex"
            : "none";
        } else if (filterType === "comunicados") {
          card.style.display = card.classList.contains("announcement")
            ? "flex"
            : "none";
        }
      });

      filterButtonsNew.forEach((btn) => btn.classList.remove("active"));
      this.classList.add("active");
    });
  });
});
