let namebox = document.querySelector('#yourname12');
let phonenumberbox = document.querySelector('#phonenumber1');
let emailbox = document.querySelector('#email1');


// console.log(namebox , phonenumberbox, emailbox);

// selecting the div with the DOM

let your_name_div = document.querySelector(".your-name-div");
let phone_number_div = document.querySelector(".phone-number-div");
let email_div = document.querySelector(".email-div");

// console.log(your_name_div, phone_number_div, email_div);

let yournamedivelement = document.createElement("div");
yournamedivelement.setAttribute("id", "emailHelp");
yournamedivelement.setAttribute("class","form-text ms-4");
yournamedivelement.innerHTML = "please enter your full name";
yournamedivelement.style.color = "red";

let phonenumberdivelement = document.createElement("div");
phonenumberdivelement.setAttribute("id", "emailHelp");
phonenumberdivelement.setAttribute("class","form-text ms-4");
phonenumberdivelement.innerHTML = "please check your phone number";
phonenumberdivelement.style.color = "red";

let emaildivelement = document.createElement("div");
emaildivelement.setAttribute("id", "emailHelp");
emaildivelement.setAttribute("class","form-text ms-4");
emaildivelement.innerHTML = "please check you Email";
emaildivelement.style.color = "red";

let regname = /^\D+\s+\D+$/;
let regphonenumber = /^\d+$/;
let regemail = /\w+\@\D+\.\D+/;



namebox.addEventListener("blur", function(){
    if(namebox.value.length< 20 && regname.test(namebox.value)){
        if(your_name_div.children.length == 4){
            your_name_div.removeChild(yournamedivelement)
        }
    }
    else{
        your_name_div.appendChild(yournamedivelement);
    }
})


phonenumberbox.addEventListener("blur", function(){
    if(phonenumberbox.value.length == 10 && regphonenumber.test(phonenumberbox.value)){
        if(phone_number_div.children.length == 4){
            phone_number_div.removeChild(phonenumberdivelement)
        }
    }
    else{
        phone_number_div.appendChild(phonenumberdivelement);
    }
})

emailbox.addEventListener("blur", function(){
    if(emailbox.value.length > 9 && regemail.test(emailbox.value)){
        if(email_div.children.length == 4){
            email_div.removeChild(emaildivelement)
        }
    }
    else{
        email_div.appendChild(emaildivelement);
    }
})

 


setInterval(() => {
    var signup_btn = document.querySelector("#signup_btn");
    let namebox = document.querySelector('#yourname12');
    let phonenumberbox = document.querySelector('#phonenumber1');
    let emailbox = document.querySelector('#email1');


    if(namebox.value.length > 5){
        if(phonenumberbox.value.length > 5){
            if(emailbox.value.length > 5){
                signup_btn.classList.remove("disabled");
            }else{
                signup_btn.classList.add(" disabled");
            }
        }else{
            signup_btn.classList.add(" disabled");
        }
    }else{
        signup_btn.classList.add(" disabled");
    }


   
}, 1000);



