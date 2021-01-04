$(function(){

    function getData()
    {
        $.get("admin/data",function(data){
            $("#loading").css("display","none")
            $("#students").html(data)
       
        })
    }

    getData()



})