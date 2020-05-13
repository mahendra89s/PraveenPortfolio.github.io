AOS.init();
const mainpg_content = document.querySelector('.mainpage');
const mainpage_image = document.querySelector('.mainpage_image');
const menubar = document.querySelector('#menubar');
const side_navbar = document.querySelector('#side_navbar');
const menu_close = document.querySelector('#menu_close');
const pgimg = document.querySelector('.pgimg');
const mainpg = document.querySelector('.mainpg_content');

const tl = new TimelineMax();

tl.fromTo(mainpg, 2, { x: "-120%" }, { x: "0%", ease: Power2.easeInOut })
    .fromTo(menubar, 2, { x: "-200%" }, { x: "0%", ease: Power2.easeInOut }, "-=2")
    .fromTo(pgimg, 2, { opacity: 0 }, { opacity: 1, ease: Power2.easeInOut }, "-=2");

const btn = document.querySelector('#menubar');
btn.onclick = function () {
    tl.fromTo(side_navbar, 1, { x: "-100%" }, { x: "0%", ease: Power2.easeInOut });
}

    // tl.fromTo(mainpg_content, 2, { width: "0%" }, { width: "98.6vw", ease: Power2.easeInOut })