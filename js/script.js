const hamburger = document.querySelector(".line-wrap");
const MenuList = document.querySelector(".navigation-menu");
const MenuList_li = document.querySelectorAll(".menu-list li");
const MenuList_li_a = document.querySelectorAll(".menu-list li a");
let active = true;
let delay = 110;

const menuListAction = function () {
    if (active) {
        document.body.classList.add("active-menu-body")
        hamburger.classList.add("line-wrap-active");
        MenuList.classList.add("navigation-menu-active");
        setTimeout(() => {
            MenuList_li.forEach((li, index) => {
                setTimeout(() => {
                    li.classList.add("active-li");
                }, delay * index);
            })

        }, 1800)
        active = !active;
    } else if (!active) {
        document.body.classList.remove("active-menu-body")
        hamburger.classList.remove("line-wrap-active");
        MenuList.classList.remove("navigation-menu-active");
        // setTimeout(() => {
        MenuList_li.forEach((li) => {

            li.classList.remove("active-li");

        })

        // }, 100)
        active = !active;
    }


}

hamburger.addEventListener("click", () => {
    menuListAction()
})

MenuList_li_a.forEach((a) => {
    a.addEventListener("click", () => {
        menuListAction()
    })

})




const box = document.querySelector(".intro-text");
const text = ["Seminar ", "28 April 2024 ", "Marco Canha "]

let wordIndex = 0;
let textIndex = 0;
let oldTime = 0;
let speed = 50;

const typing = (newTime) => {
    if (newTime - oldTime > speed) {
        if (wordIndex === text[textIndex].length - 1) {
            if (textIndex === text.length - 1) {
                return
            }
            return setTimeout(() => {
                box.textContent = "";
                textIndex++;
                wordIndex = 0;
                requestAnimationFrame(typing)
            }, 1000)
        }
        oldTime = newTime;
        const letter = text[textIndex].substr(wordIndex, 1);
        box.textContent += letter;
        wordIndex++
    }
    requestAnimationFrame(typing)
}
setTimeout(() => {
    typing();
}, 2000)
