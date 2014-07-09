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
            errorFn = function(data){
                console.log(data.error);
                console.log(data);
            },
            successFn = function(data){                
                console.log(data.error);
                console.log(data);
            },
            callBackFunction = function(data){                
                $("#generalWaitModal").foundation("reveal", "close");
                if(data.error)
                    errorFn(data);
                else
                    successFn(data);                
            };       
        
        $("#generalWaitModal").data("options", {
            animation: "fade",
            animation_speed: 100,
            close_on_background_click: false
        });
        $("#generalWaitModal").foundation("reveal", "open");
        
        $.ajax({
            url: url,
            method: method,
            data: data,
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


