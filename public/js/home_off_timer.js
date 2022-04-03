var cards =document.querySelectorAll(".timing_offers .card");

function count(en_date){
  var end_date=new Date(en_date).getTime();
  var current_date=new Date().getTime();
  var remain_time= end_date - current_date;
  var seconds=1000;
  var mins= 60 * seconds;
  var hours= 60 * mins;
  var days= 24 * hours;

  var remain_days= Math.floor(remain_time/days);
  var remain_hours= Math.floor((remain_time%days)/hours);
  var remain_mins= Math.floor((remain_time%hours)/mins);
  var remain_seconds= Math.floor((remain_time%mins)/seconds);

  return remain_days+":"+remain_hours+":"+remain_mins+":"+remain_seconds;
}

function validate_time( e_date,i){

 var time_string= count(e_date);
 var arr=time_string.split(":");
    
    var remain_days_span=document.querySelectorAll("#d");
    // remain_days_span.innerHTML=remain_days;
    var remain_hours_span=document.querySelectorAll("#h");
    // remain_hours_span.innerHTML=remain_hours;
    var remain_mins_span=document.querySelectorAll("#m");
    if(arr[3]<0){
      cards[i].style.display="none";
    }
    else if(arr[0]==0&&arr[1]==0&&arr[2]==0){
      cards[i].style.display="none";

    }
    else{
      remain_days_span[i].innerHTML=arr[0];
    remain_hours_span[i].innerHTML=arr[1];
    remain_mins_span[i].innerHTML=arr[2];


    }
  // for(let i=0;i<remain_days_span.length;i++){
  //   remain_days_span[i].innerHTML=remain_days;
  //   remain_hours_span[i].innerHTML=remain_hours;
  //   remain_mins_span[i].innerHTML=remain_mins;

  //  }
   
   
console.log( ""+arr[0]+":"+ arr[1]+":"+arr[2] +":"+arr[3]);

}

setInterval(validate_time('May 29,2022 00:00:00',0),3000);
setInterval(validate_time('May 1,2022 00:00:00',1),3000);
setInterval(validate_time('May 3,2022 00:00:00',2),3000);
setInterval(validate_time('May 4,2022 00:00:00',3),3000);
setInterval(validate_time('May 6,2022 00:00:00',4),3000);
setInterval(validate_time('May 8,2022 00:00:00',5),3000);

