var burger_menue=document.querySelector(".burger_menue");
var dorp_down_menue=document.querySelector(".dorp_down_menue");
burger_menue.onclick=function(){
    dorp_down_menue.classList.toggle("show_burger_menue");
}
var search_input=document.querySelectorAll(".search_input");
var cards=document.querySelectorAll(".card");
var book=document.querySelectorAll(".book_name_span");
search_input.forEach(s_input=>{
    s_input.onkeyup=function(){
        if(s_input.value!=""){
        for(let i=0;i < book.length;i++)
        if(book[i].innerHTML.toUpperCase().indexOf(s_input.value.toUpperCase())==-1){
         console.log( book[i].innerHTML);
        cards[i].style.display="none" ;
        }
        else{
        cards[i].style.display="block";
        }
        }
        }

});


// var basktet_items_added =document.querySelectorAll(".basktet_items_added");

// var basket_icon =document.querySelectorAll(".basket_icon");
// console.log(typeof(basket_icon));
// var basktet_items=0;
// if(localStorage.getItem("m")==null){
//     basktet_items_added[0].innerHTML= "0";
//     basktet_items_added[1].innerHTML= "0";

// }
// else{
// basktet_items_added[0].innerHTML= basktet_items_added.innerHTML= localStorage.getItem("m");
// basktet_items_added[1].innerHTML= basktet_items_added.innerHTML= localStorage.getItem("m");
// }

// basket_icon.forEach(icon => {
// icon.onclick=function(){

// if(localStorage.getItem("m")==null){
//  basktet_items=1;
//  localStorage.setItem("m",1);
//  basktet_items_added[0].innerHTML= "1";
//  basktet_items_added[1].innerHTML= "1";

// }
// else{
// basktet_items= localStorage.getItem("m");
// basktet_items++;
// localStorage.setItem("m",basktet_items);
// basktet_items_added[0].innerHTML= localStorage.getItem("m");
// basktet_items_added[1].innerHTML=localStorage.getItem("m");

// }


// }

// });


var close_signin =document.querySelector(".close_signin");
var close_signup =document.querySelector(".close_signup");
var overly=document.querySelectorAll(".overly");
var sign_upbtn=document.querySelectorAll(".sign_upbtn");
var sign_up=document.querySelector(".signup");
var sign_in=document.querySelector(".signin");
var sign_inbtn=document.querySelectorAll(".sign_inbtn");

for(let i=0;i<sign_inbtn.length;i++){
sign_inbtn[i].onclick=function(){
overly[0].style.visibility="visible";
}
}
close_signin.onclick=function(){
console.log("hello");
overly[0].style.visibility="hidden";

}    
console.log();
console.log("close  "+sign_upbtn);
for(let i=0;i<sign_upbtn.length;i++){
sign_upbtn[i].onclick=function(){
overly[1].style.visibility="visible";
}
}


close_signup.onclick=function(){
console.log("hello");
overly[1].style.visibility="hidden";

}