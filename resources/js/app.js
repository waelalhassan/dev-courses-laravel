// make navbar fixed when scroll
const top_navbar = document.querySelector("#top_navbar");
window.addEventListener("scroll", () => {
    if (window.scrollY > 200) {
        top_navbar.classList.add("fixed");
    } else {
        top_navbar.classList.remove("fixed");
    }
})

// scroll when click on header action btn

const header_btn_action = document.querySelector("#header_btn_action");
header_btn_action.onclick = ()=> {
    scrollTo({
        top:document.querySelector("#sec_3").getBoundingClientRect().top - 100,
        left:0,
        behavior: "smooth"
    })
}
