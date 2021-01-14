 $(function(){

    function getData()
    {
        $.get("admin/data",function(data){
            $("#loading").css("display","none")
            $("#students").html(data)
            $('.modalMeg form').submit((e) => {
                e.preventDefault();

                const form = $(e.target);
                form.find("#error-modal").text("")
                const url = form.attr('action');
                
                $.ajax({
                       type: "POST",
                       url: url,
                       data: form.serialize(),
                       success: function(data){
                           
                            form.find(".close").click()
                            $("#students").html("")
                            $("#loading").css("display","flex")
                            getData()
                       },
                       error: function(err){
                           const errorJSON = JSON.parse(err.responseText);
                           form.find("#error-modal").text(errorJSON.errors.incident[0])

                       } 

                     });   

            })
        })
    }

    getData()

}) 