var search_input=document.getElementById("search_input");
var cards=document.querySelectorAll(".card");
var book=document.querySelectorAll(".book_name_span");
search_input.onkeyup=function(){
    if(search_input.value!=""){
 for(let i=0;i < book.length;i++)
 if(book[i].innerHTML.toUpperCase().indexOf(search_input.value.toUpperCase())==-1){
     console.log( book[i].innerHTML);
    cards[i].style.display="none" ;
}
else{
    cards[i].style.display="block";
}
}
}


