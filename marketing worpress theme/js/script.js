const app={};


app.responsiveMenuClicked=()=>{

   if (!($("#dropdownClick").hasClass("responsiveMenu"))){
    $("#dropdownClick").addClass("responsiveMenu");
    
   
   }
   
else
{
    $("#dropdownClick").removeClass("responsiveMenu");

}

}
app.showImages=()=>{
    $(".active").removeClass("active");
        $(".tabAllImages").css("display","none");
        
}

app.init=()=>{
    $("#dropDownIcon").on("click", function(){
        app.responsiveMenuClicked();
        
        
    })

    $(".tabs").on("click", function(){
        $(".tabs h3").removeClass("tabsColor");
        $(this).find("h3").addClass("tabsColor");

    })

    $(".tabAll").on("click", function(){
       
        $(".active").removeClass("active");
        $(".tabAllImages").css("display","grid");
        
    })
    $(".tabWesite").on("click", function(){
        
        app.showImages();
        $(".tabWebsiteImages").addClass("active");
    })
    $(".tabBranding").on("click", function(){
        app.showImages();
        $(".tabBrandingImages").addClass("active");
        
    })
    $(".tabSocial").on("click", function(){
        app.showImages();
        $(".tabSocialImages").addClass("active");
        
    })
    $(".tabOnline").on("click", function(){
        
        app.showImages();
        $(".tabOnlineImages").addClass("active");
        
    })
}

$(function(){
    app.init();
})