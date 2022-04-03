//img pop
var img_close=document.querySelector(".close");
var img_overlay=document.querySelector(".img_overlay");
var zoom_img=document.querySelector(".zoom_img");
var img_collecion=document.querySelectorAll(".imgs_opo");

console.log(img_collecion);
img_collecion.forEach(img => {
        img.onclick=function(){
        zoom_img.src=img.src;
     img_overlay.style.visibility="visible";
    }
    
});



// img_overlay

var first_img_array=["img/i_4.jpg","img/i_2.jpg","img/i_3.jpg","img/i_5.jpg"];
    var img_sliding =document.querySelector(".zoom_img");
       var prev =document.getElementById("prev");
       var next =document.getElementById("next");
       var counter = 0;
       next.onclick=function(){
        if(counter<first_img_array.length-1){
            counter++;
            img_sliding.src=first_img_array[counter];
        }
      
       }
       prev.onclick=function(){
           if(counter>0){
            counter--;
            img_sliding.src=first_img_array[counter];
           }
       }

       img_close.onclick=function(){
        img_overlay.style.visibility="hidden";
      }
     