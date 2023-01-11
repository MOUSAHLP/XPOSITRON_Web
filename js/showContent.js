let h1 = document.querySelectorAll("section .about .article.hint .title.first");

h1.forEach(element => {
    element.onclick = function() {
        showContent(this);
    };
});

let content = document.querySelectorAll("section .about .article.hint .content");

content.forEach(element => {
    element.onclick = function() {
        showContent(this);
    };
});


function showContent(click) {
    let parent = click.parentElement;
    let h1 = parent.children[0];
    let content = parent.children[1];
    let arrow = h1.children[0];
    if (content.classList.contains("show")) {
        content.classList.remove("show");
        h1.classList.remove("show");
        arrow.style.cssText = "transform: rotate(0deg);";
    } else {
        content.classList.add("show");
        h1.classList.add("show");
        arrow.style.cssText = "transform: rotate(90deg);";
    }
    window.scrollTo({
        top: parent.offsetTop - 40,
        behavior: "smooth"
    });
}