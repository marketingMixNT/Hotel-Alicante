const cookieBox = document.querySelector("#cookieBox");
const acceptBtn = document.querySelector("#acceptBtn");

const addCookie = () => {
    document.cookie = "Privacy Policy; max-age=" + 60 * 60 * 24 * 30;

    if (document.cookie.indexOf("Privacy Policy") !== -1) {
        cookieBox.classList.add("hidden");
    }
};

const checkCookie = () => {
    if (document.cookie.indexOf("Privacy Policy") !== -1) {
        cookieBox.classList.add("hidden");
    } else {
        cookieBox.classList.remove("hidden");
    }
};

checkCookie();

acceptBtn.addEventListener("click", () => {
    addCookie();
    checkCookie();
});