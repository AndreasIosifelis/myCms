/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var cms = cms || {};

cms.serializeForm = function(form) {
    var obj = {},
            arr = form.serializeArray(),
            i, len = 0;

    for (i = 0, len = arr.length; i < len; i++) {
        obj[arr[i].name] = arr[i].value;
    }
    
    return JSON.stringify(obj);
};

cms.formSubmit = function(){
    
    $("form").on("submit", function(e){
        e.preventDefault();
        
        var url = $(this).attr("action"),
            method = $(this).attr("method"),
            data = cms.serializeForm($(this)),
            formMessagePanel = $("#formMessagePanel"),
            displayMessages = function(messages, cls){
                formMessagePanel
                        .removeClass("alert")
                        .removeClass("info")
                        .removeClass("success")
                        .show()
                        .addClass(cls)
                        .html(messages.join("<br />"));
            },
            errorFunction = function(data){                
                displayMessages(data.alert, "alert");
            },
            successFunction = function(data){                
                console.log(data.error);
                console.log(data);
                if(data.info)
                    displayMessages(data.info, "info");
                else if(data.success)
                    displayMessages(data.success, "success");
            },
            callBackFunction = function(data){                
                $("#generalWaitModal").foundation("reveal", "close");
                if(data.error)
                    errorFunction(data);
                else
                    successFunction(data);                
            };
        formMessagePanel
                .html("")
                .hide();
        
        $("#generalWaitModal").data("options", {
            animation: "none",
            animation_speed: 100,
            close_on_background_click: false
        });
        $("#generalWaitModal").foundation("reveal", "open");
        
        $.ajax({
            url: url,
            method: method,
            data: { json : data },
            dataType: "json",
            success: callBackFunction,
            error:function(){
                $("#generalWaitModal").foundation("reveal", "close");
            },
            complete:function(){
                $("#generalWaitModal").foundation("reveal", "close");
            }
        });
            
    });
    
};


