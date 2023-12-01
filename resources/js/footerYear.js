const footerYearSpan = document.querySelector('.footer__year')

const date = new Date()

const currentYear = date.getFullYear()


if(footerYearSpan){
    footerYearSpan.innerHTML = currentYear
}