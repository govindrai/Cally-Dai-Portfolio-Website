function forceOverlay(el) {
    el.previousElementSibling.lastElementChild.lastElementChild.style.opacity = 1;
}

function removeOverlay(el) {
    el.previousElementSibling.lastElementChild.lastElementChild.style.opacity = "";
}

function forceUnderline(el) {
    el.parentElement.nextElementSibling.style.textDecoration = "underline";
}

function removeUnderline(el) {
    el.parentElement.nextElementSibling.style.textDecoration = "";
}
