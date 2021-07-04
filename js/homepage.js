
var changeBook = document.querySelector('#second-section img');


var i = 1;
setInterval(() => {
    changeBook.setAttribute("src", `images/book${i}.jpg`);
    i++;
    if(i === 5){
        i = 1;
    }
}, 5000);


var typed = new Typed('#heading', {
    strings : [
        "SELL",
        "BUY"
    ],
    typeSpeed : 120,
    backSpeed : 120,
    loop : true
  });
