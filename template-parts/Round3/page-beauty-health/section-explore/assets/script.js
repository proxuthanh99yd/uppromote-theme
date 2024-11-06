window.addEventListener("DOMContentLoaded", () => {
  const listTabExplore = document.querySelectorAll(
    "#explore__customer .explore__tab-item"
  );
  const listContentExplore = document.querySelectorAll(
    "#explore__customer .explore__content__item"
  );
  if (listTabExplore && listContentExplore) {
    listTabExplore.forEach((tab, ind) => {
      tab.addEventListener("click", () => {
        listTabExplore.forEach((item) => {
          item.classList.remove("active");
        });
        tab.classList.add("active");
        listContentExplore.forEach((content) => {
          content.classList.remove("active");
        });
        listContentExplore[ind].classList.add("active");
      });
    });
  }
});
