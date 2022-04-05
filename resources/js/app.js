// get DOM
const courses_parent = document.querySelector("#courses_parent"),
    top_navbar = document.querySelector("#top_navbar"),
    header_btn_action = document.querySelector("#header_btn_action"),
    categories_parent = document.querySelector("#categories_parent");

// make navbar fixed when scroll
window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        top_navbar.classList.add("fixed");
    } else {
        top_navbar.classList.remove("fixed");
    }
});

// scroll when click on header action btn

if (header_btn_action) {
    header_btn_action.addEventListener("click", () => {
        scrollTo({
            top:
                document.querySelector("#courses").getBoundingClientRect().top -
                100,
            left: 0,
            behavior: "smooth",
        });
    });
}

/**
 *
 * fetch in home page
 *
 */

(async () => {
    const apiCourses = await fetch("http://127.0.0.1:8000/api/courses");
    const apiCategories = await fetch("http://127.0.0.1:8000/api/categories");

    const responseCourses = await apiCourses.json();
    const responseCategories = await apiCategories.json();

    // display categories
    let cache_c = "";
    for (let i in responseCategories) {
        if (i == 0) {
            cache_c += `<li class="active" data-filter="-1"> All </li>`;
        }
        cache_c += `<li data-filter="${responseCategories[i].id}" > ${responseCategories[i].name} </li>`;
    }
    if (categories_parent) categories_parent.innerHTML = cache_c;

    if (categories_parent)
    Array.from(categories_parent.children).forEach((ele, i) => {
        ele.onclick = () => {
            getCurrentFilter(ele.getAttribute("data-filter"));
            let a = 0;
            while (a < categories_parent.children.length) {
                let d = categories_parent.children[a++];
                d.classList.remove("active");
            }
            ele.classList.add("active");
        };
    });

    function getCurrentFilter(id) {
        const dataFilter = responseCourses.filter((d) => d.cat_id == id);
        if (id > -1) {
            getDataFiltered(dataFilter);
        } else {
            getDataFiltered(responseCourses);
        }
    }

    // display courses
    getDataFiltered(responseCourses);
    function getDataFiltered(data) {
        let cache = "";
        for (let i in data) {
            cache += `<div class="sec-3-card">
            <header>
                <img src="storage/${data[i].image}" alt="image">
            </header>
            <div class="sec-3-body">
                <h3>${data[i].title}</h3>
                <p>${max_number_letters(data[i].excerpt)}</p>
            </div>
            <div class="sec-3-footer">
                <div class="card-btns d-flex d-justify-between d-align-center">
                    <a href="${data[i].buy_link}" target="_blank">Buy now</a>
                    <a href="/course/${data[i].id}">Details</a>
                </div>
                <div class="card-info d-flex d-justify-between d-align-center">
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M336.2 64H47.8C21.4 64 0 85.4 0 111.8v288.4C0 426.6 21.4 448 47.8 448h288.4c26.4 0 47.8-21.4 47.8-47.8V111.8c0-26.4-21.4-47.8-47.8-47.8zm189.4 37.7L416 177.3v157.4l109.6 75.5c21.2 14.6 50.4-.3 50.4-25.8V127.5c0-25.4-29.1-40.4-50.4-25.8z"/></svg>
                        <i>${data[i].number_videos} Videos</i>
                    </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M256,8C119,8,8,119,8,256S119,504,256,504,504,393,504,256,393,8,256,8Zm92.49,313h0l-20,25a16,16,0,0,1-22.49,2.5h0l-67-49.72a40,40,0,0,1-15-31.23V112a16,16,0,0,1,16-16h32a16,16,0,0,1,16,16V256l58,42.5A16,16,0,0,1,348.49,321Z"/></svg>
                        <i>${data[i].total_time}</i>
                    </span>
                </div>
            </div>
        </div>`;
        }

        if (courses_parent)
        if (data.length > 0) {
            courses_parent.innerHTML = cache;
            courses_parent.style.justifyContent = "";
        } else {
            courses_parent.style.justifyContent = "center";
            courses_parent.innerHTML = `<h2> No Courses </h2>`;
        }
    }
})();

function max_number_letters(string) {
    // const toArr = string.trim().split(" ")
    // const limit = toArr.slice(0, 5).join(" ")
    return string.trim().substr(0, 110) + "...";
}

/**
 *
 * create animations & transitions
 *
 */

// const titles = document.querySelectorAll(".hide-this");
// const obs = new IntersectionObserver((a) => {
//     a.forEach(e => {
//         if (e.isIntersecting) {
//             e.target.classList.add("show-this")
//             obs.unobserve(e.target)
//         }
//     })
// }, {threshold: 1, rootMargin: "20px"})
// titles.forEach(e => obs.observe(e))
