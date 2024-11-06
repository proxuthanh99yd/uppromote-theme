window.addEventListener('DOMContentLoaded',() => {
	if(window.innerWidth >= 640) {
		const headerPc = document.querySelector('header.header__container');
		window.addEventListener('scroll',() => {
			if(window.pageYOffset > 0 ){
				headerPc.classList.add('active')
			}else {
				headerPc.classList.remove('active')
			}
		})
	}else{
	  const menu_items = document.querySelectorAll(".menu__item");
	  const menuIcon = document.querySelector('.header__right > button')
	  const btnClose = document.querySelector('.header__right > button.btn-close')
	  const menu = document.querySelector('#menu__mobile')
	  menu_items.forEach((menuItem) => {
		const subMenu = menuItem.querySelector(".submenu__content");
		if (subMenu) {
		  menuItem.addEventListener("click", () => {
			if (subMenu.classList.contains("active")) {
			  // Close the submenu
			  subMenu.classList.remove("active");
			  menuItem.classList.remove("active");
			  subMenu.style.height = "0";
			} else {
			  // Open the submenu
			  subMenu.classList.add("active");
			  menuItem.classList.add("active");
			  subMenu.style.height = `${subMenu.scrollHeight}px`;
			}
		  });
		}
	  });
		
      if(menuIcon && btnClose){
		  menuIcon.addEventListener('click',() => {
			  menu.classList.add('active')
		  })
		  btnClose.addEventListener('click',() => {
			  menu.classList.remove('active')
		  })
	  }
	}
})