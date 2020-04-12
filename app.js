window.addEventListener('load', init);

function init() {
    console.log('DOM is loaded');
}

function gradeColor() {
    if (document.getElementsByClassName("cijfer").value < 5.5) {
        document.getElementsByClassName("cijfer").style.background = red;
    } else if (document.getElementsByClassName("cijfer").value > 5.49) {
        document.getElementsByClassName("cijfer").style.color = green;
    }
}

gradeColor();