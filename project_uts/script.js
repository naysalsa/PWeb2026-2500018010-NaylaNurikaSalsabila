const text = "NAYE!";
const typing = document.getElementById("typing");

let index = 0;

function typeText() {
  if(index < text.length){
    typing.innerHTML += text.charAt(index);
    index++;
    setTimeout(typeText, 120);
  }
}

typeText();