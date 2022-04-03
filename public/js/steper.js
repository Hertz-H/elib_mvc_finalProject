

var img_overlay=document.querySelector(".img_overlay");
var check_out=document.querySelector(".check_out");
var payment=document.querySelector(".payment");
var user_info=document.querySelector(".user_info");
var guidlines=document.querySelector(".guidlines");
  var img_close=document.querySelector(".close");
  var iframe_steper = document.getElementById("iframe_steper");
    var circles =document.querySelectorAll(".circle");
    var line_colored=document.querySelector(".line_colored");
     var prevs =document.getElementById("prevs");
     var page_slider =document.querySelector(".page_slider");
     var btn_container =document.querySelector(".btn_container");
    var nexts =document.getElementById("nexts");  
    var circle_heading =document.querySelectorAll(".circle_heading");
    var progeress_container =document.querySelector(".progeress_container");
    
  img_close.onclick=function(){
        img_overlay.style.visibility="hidden";
        
        
      }
  
      iframe_steper.innerHTML=guidlines.innerHTML;
       prevs.style.visibility="hidden";
       nexts.innerHTML="أبدأ";
       var iframe_conter=0;
       var counter = 0;
       nexts.onclick=function(){
            counter++;
            console.log(counter);
        
           if(counter>4){

            counter=4;
           }
           console.log(counter);
           if(counter==1){
            iframe_steper.innerHTML=user_info.innerHTML;
            nexts.innerHTML="التالي ";
            prevs.style.visibility="visible";
            progeress_container.style.display="flex";
            
          
           }
           else if( counter==2){
            iframe_steper.innerHTML=payment.innerHTML;
            nexts.innerHTML="التالي ";
            line_colored.style.width="40%";
           
        
        }
            else if(counter==3){
            iframe_steper.innerHTML=check_out.innerHTML;
            nexts.innerHTML="تأكيد ";
             line_colored.style.width="80%";
         
           
          
            }
            else if(counter==4){
                prevs.style.visibility="hidden";
               img_overlay.style.visibility="visible";

                console.log( "over "+img_overlay);
               
            }
            
           step_item();
        
          
           
       }
    
       prevs.onclick=function(){
         counter--;
           if(counter<=0){
            counter=0;
           }
           console.log(counter);
           if(counter==0){
            iframe_steper.innerHTML=guidlines.innerHTML;
            progeress_container.style.display="none";

            prevs.style.visibility="hidden";
            nexts.innerHTML="أبدأ";
           }
           else if(counter==1){
            iframe_steper.innerHTML=user_info.innerHTML;

            nexts.innerHTML="التالي ";
            line_colored.style.width="0%";
             }
           else if( counter==2){
            iframe_steper.innerHTML=payment.innerHTML;

            nexts.innerHTML="التالي ";
            line_colored.style.width="40%";
            console.log(line_colored.width);
          
        
        }
           step_item();

       }

function step_item(){
    circles.forEach((circle,i)=>{

        if(i<counter){
            circle.style.backgroundColor="#0052cc";
            circle.style.color="white";
            circle_heading[i].classList.add("font_colored");
            console.log( circle);
            console.log( " i="+i+ "counter=" +counter);
            console.log( circle_heading[i]);
         
        }
        else{
            circle.style.backgroundColor="#e0e0e0";
            circle.style.color="grey";
            circle_heading[i].classList.remove("font_colored");
            
        }
        
    });
}

     