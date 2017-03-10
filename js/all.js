$(document).ready(function(){
    $("#switchSideBar").click(function(){
        $("#sidebar").show(100);
        $(".x-sidebar").show(100);
        $(".x-sidebar-top").show(100);
    });
    $(".x-sidebar").click(function(){
        $("#sidebar").hide(100);
        $(".x-sidebar").hide(100);
        $(".x-sidebar-top").hide(100);
    });
    $(".x-sidebar-top").click(function(){
        $("#sidebar").hide(100);
        $(".x-sidebar").hide(100);
        $(".x-sidebar-top").hide(100);
    });


    $("#btn-cowork").click(function(){
        document.getElementById('cowork-panel').style.display="block";
        document.getElementById('cover').style.display="block";
    });
    $(".cover").click(function(){
        document.getElementById('cowork-panel').style.display="none";
        document.getElementById('cover').style.display="none";
    });
    

    
});