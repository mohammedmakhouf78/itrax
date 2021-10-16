let blogs = document.querySelector(".blogs");
fetch("http://localhost:8088/itrax/session8/backend/api/blogs.php")
  .then((response) => response.json())
  .then((data) => {
    data.forEach((element) => {
      blogs.innerHTML += `
      <div class="blog">
            <div class="col1">
                <img src="../../backend/images/${element.image}" alt="">
            </div>
            <div class="col2">
                <h2>${element.title}</h2>
                <div class="date">
                    <i class="far fa-calendar-alt"></i>
                    <span>${element.created_at}</span>
                    <i class="fas fa-user"></i>
                    <span>${element.user}</span>
                </div>
                <p>${element.description}</p>
                <a href="">
                    <div class="bg"></div>
                    <div class="txt">Read More</div>
                </a>
            </div>
        </div>
        `;
    });
  });
