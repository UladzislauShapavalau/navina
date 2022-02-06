const links = document.querySelectorAll('a');
const { pathname } = window.location;

links.forEach(link => {
    console.log(link.href)
    if (link.pathname === pathname) {
        link.classList.add('active');
    }
})
