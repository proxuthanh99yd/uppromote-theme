document.addEventListener("scroll", function () {
    const supportSection = document.querySelector(".support-at-every-step");
    const stickyNav = document.querySelector(".pin-nav-sticky-all-step");

    if (supportSection && stickyNav) {
        // Lấy vị trí trên cùng của .support-at-every-step so với đầu trang và chiều cao của nó
        const sectionOffsetTop = supportSection.offsetTop;
        const sectionHeight = supportSection.offsetHeight;
        
        // Kiểm tra nếu vị trí cuộn vượt quá chiều cao của phần tử
        if (window.scrollY > sectionOffsetTop + sectionHeight) {
            stickyNav.classList.add('active')
        } else {
            stickyNav.classList.remove('active') 
        }
    }
	
	
	const sections = document.querySelectorAll(".section");
    const navItems = document.querySelectorAll(".item-nav-sticky");

//     sections.forEach((section, index) => {
//         const sectionTop = section.getBoundingClientRect().top;
//         const sectionHeight = section.offsetHeight;

//         // Kiểm tra xem phần section đã vào viewport hay chưa
//         if (sectionTop <= window.innerHeight / 2 && sectionTop + sectionHeight >= window.innerHeight / 2) {
//             // Loại bỏ class 'active' khỏi tất cả các mục điều hướng
//             navItems.forEach(item => item.classList.remove("active"));

//             // Thêm class 'active' vào mục điều hướng tương ứng
//             navItems[index].classList.add("active");
//         }
//     });
		sections.forEach((section, index) => {
			const sectionTop = section.getBoundingClientRect().top;

			// Kiểm tra nếu phần trên của section cách đầu viewport 100px
			if (sectionTop <= 100 && sectionTop + section.offsetHeight > 100) {
				// Loại bỏ class 'active' khỏi tất cả các mục điều hướng
				navItems.forEach(item => item.classList.remove("active"));

				// Thêm class 'active' vào mục điều hướng tương ứng
				navItems[index].classList.add("active");
			}
		});


	
	navItems.forEach((navItem, index) => {
    navItem.addEventListener("click", function () {
        // Cuộn đến section tương ứng
        sections[index].scrollIntoView({
            behavior: "smooth", // Cuộn mượt mà
            block: "start"      // Cuộn đến phần đầu của section
        });

        // Xóa class 'active' khỏi tất cả các mục điều hướng
        navItems.forEach(item => item.classList.remove("active"));

        // Thêm class 'active' vào mục điều hướng được nhấp vào
        navItem.classList.add("active");
    });
});
});
