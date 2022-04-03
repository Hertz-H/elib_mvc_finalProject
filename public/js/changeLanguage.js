var change_language=document.querySelectorAll(".change_language");
var link_href=document.getElementById("language_style");
    var language= link_href.getAttribute("href");
change_language[0].onclick=function(){


    if(language == "css/right.css"){
        link_href.setAttribute("href","css/left.css");
        language=link_href.getAttribute("href");
        console.log( "from right"+link_href.getAttribute("href"));
    }
    else{
        link_href.setAttribute("href","css/right.css");
        console.log( "from left"+link_href.getAttribute("href"));
        language=link_href.getAttribute("href");
    }
    console.log( link_href.getAttribute("href"));
}
change_language[1].onclick=function(){
    if(language == "css/right.css"){
        link_href.setAttribute("href","css/left.css");
        language=link_href.getAttribute("href");
        console.log( "from right"+link_href.getAttribute("href"));
    }
    else{
        link_href.setAttribute("href","css/right.css");
        console.log( "from left"+link_href.getAttribute("href"));
        language=link_href.getAttribute("href");
    }
    console.log( link_href.getAttribute("href"));
    }
