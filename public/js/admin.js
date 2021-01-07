 $(function(){

    function getData()
    {
        $.get("admin/data",function(data){
            $("#loading").css("display","none")
            $("#students").html(data)
            $('.modalMeg form').submit((e) => {
                e.preventDefault(); // avoid to execute the actual submit of the form.

                var form = $(e.target);
                form.find("#error-modal").text("")
                //console.log(form, this);
                var url = form.attr('action');
                
                $.ajax({
                       type: "POST",
                       url: url,
                       data: form.serialize(), // serializes the form's elements.
                       success: function(data){
                           
                            form.find(".close").click()
                            $("#students").html("")
                            $("#loading").css("display","flex")
                            getData()
                       },
                       error: function(err){
                           //console.log(err)
                           var errorJSON = JSON.parse(err.responseText);
                           form.find("#error-modal").text(errorJSON.errors.incident[0])

                       } 

                     });   

            })
        })
    }

    getData()

}) 