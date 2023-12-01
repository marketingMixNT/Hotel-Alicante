const nav = document.querySelector(".desktop-nav-container");
const bookBtn = document.querySelector('#tourmaster-room-navigation-checkout-button')
const menuItems = document.querySelectorAll('.menu-ite a')
const dropdown = document.querySelector('.menu-item.menu-item-has-children.hotale-normal-menu a')


console.log(dropdown);
const height = 250;

window.addEventListener("scroll", () => {
    const actualPos = window.scrollY;

    if (actualPos >= height) {
        nav.classList.add("change-bgc");
        bookBtn.classList.remove('btn--secondary')
        bookBtn.classList.add('btn--third')
        menuItems.forEach(item=>item.style.color='white')
        dropdown.style.color='white'

    }else{
        nav.classList.remove("change-bgc");
        bookBtn.classList.add('btn--secondary')
        bookBtn.classList.remove('btn--third')
        menuItems.forEach(item=>item.style.color='black')
        dropdown.style.color='black'
    }
});