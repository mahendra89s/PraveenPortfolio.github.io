AOS.init();
const mainpg_content = document.querySelector('.mainpage');
const mainpage_image = document.querySelector('.mainpage_image');
const menubar = document.querySelector('#menubar');
const side_navbar = document.querySelector('#side_navbar');

const tl = new TimelineMax();

setTimeout(function () {

    tl.fromTo(mainpg_content, 2, { x: "-100%" }, { x: "-1%", ease: Power2.easeInOut })
        .fromTo(menubar, 2, { x: "-200%" }, { x: "0%", ease: Power2.easeInOut }, "-=2");

    const btn = document.querySelector('#menubar');
    btn.onclick = function () {
        tl.fromTo(side_navbar, 1, { x: "-100%" }, { x: "0%", ease: Power2.easeInOut });
    };


}, 2000)









    // tl.fromTo(mainpg_content, 2, { width: "0%" }, { width: "98.6vw", ease: Power2.easeInOut })