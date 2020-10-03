const texts = ['Architectural', 'and', 'Interior Designer'];
var count = 0;
var index = 0;
var contentText = "";
var letter = "";
(function type() {
    if (count === texts.length) {
        count = 0;
    }
    contentText = texts[count];
    letter = contentText.slice(0, ++index);
    document.querySelector('.typing').textContent = letter;
    if (contentText.length === letter.length) {
        index = 0;
        count++;
    }
    setTimeout(type, 200);
})();