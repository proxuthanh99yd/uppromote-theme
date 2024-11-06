let paged = 1;
let total_pages = 0; // Khởi tạo biến tổng số trang

const button_loadmore = document.querySelector("#article .btn__loadmore");
const container_article = document.querySelector("#article .article__box");

// Hàm để cập nhật URL và lưu trạng thái vào history
function updateURL(paged) {
  const url = new URL(window.location);
  url.searchParams.set("page", paged); // Cập nhật tham số page trong URL
  window.history.pushState({ paged: paged }, "", url); // Lưu trạng thái page vào history
}

// Hàm fetch API với giá trị page hiện tại
async function fetchPosts() {
  try {
    const res = await fetch(
      `/wp-json/okhub/v1/posts-stephen?category=uppromote&page=${paged}`
    );
    if (!res.ok) {
      throw new Error(res.statusText);
    }
    const data = await res.json();
    total_pages = data.total_pages;

    renderPosts(data.posts);
    toggleLoadMoreButton();
  } catch (error) {
    console.log(error);
  }
}

// Hàm để render posts ra HTML
function renderPosts(posts) {
  container_article.innerHTML = "";
  posts.forEach((post) => {
    let categoriesHTML = ''; // Biến chứa HTML của danh sách category
    post.categories.forEach((category) => {
      categoriesHTML += `<span class="info__cate">${category}</span>`;
    });

    container_article.innerHTML += `
            <a href="${post.slug}" class="article__item">
                <img src="${post.feature_image}" alt="">
                <div class="article__info">
                    <div class="info__top">
                        <span class="info__date">${post.date}</span>
                        ${categoriesHTML}
                    </div>
                    <h5 class="title">${post.title}</h5>
                    <p class="desc">${post.excerpt}</p>
                    <div class="section-link-btn">Read more
                        <img src="/wp-content/uploads/2024/08/Arrow_Left_MD.svg" alt="">
                    </div>
                </div>
            </a>`;
  });
}


// Hàm để kiểm tra và hiển thị/ẩn nút load more
function toggleLoadMoreButton() {
  if (paged >= total_pages) {
    button_loadmore.style.display = "none";
  } else {
    button_loadmore.style.display = "block";
  }
}

// Hàm xử lý nút "Load More"
function loadMore() {
  paged++;
  updateURL(paged);
  fetchPosts();
}

// Sự kiện khi người dùng nhấn nút Back hoặc Forward
window.addEventListener("popstate", function (event) {
  if (event.state && event.state.paged) {
    paged = event.state.paged; // Lấy lại giá trị paged từ history
    fetchPosts(); // Gọi lại API
  }
});

// Khi trang được tải lần đầu
document.addEventListener("DOMContentLoaded", function () {
  const params = new URLSearchParams(window.location.search);
  paged = parseInt(params.get("page")) || 1; // Nếu không có page trong URL, mặc định là 1
  window.history.replaceState({ paged: paged }, "", window.location.href); // Lưu trạng thái ban đầu vào history
  fetchPosts(); // Gọi API với trang hiện tại
});

// Gắn sự kiện cho nút "Load More"
button_loadmore.addEventListener("click", loadMore);
