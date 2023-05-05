

// JavaScript Document
$(document).ready(function() {

    "use strict";

    $(".comment-form").submit(function(e) {
        e.preventDefault();
        var typteEntite = $(".typteEntite");
        var name = $(".name");
        var lien = $(".url").val();
        var csrf = $("._csrf").val();
        var email = $(".email");
        var tel = $(".tel");
        var flag = false;
        if (typteEntite.val() == "") {
            typteEntite.closest(".form-control").addClass("error");
            typteEntite.focus();
            flag = false;
            return false;
        } else {
            typteEntite.closest(".form-control").removeClass("error").addClass("success");
        } 
        
        if (name.val() == "") {
            name.closest(".form-control").addClass("error");
            name.focus();
            flag = false;
            return false;
        } else {
            name.closest(".form-control").removeClass("error").addClass("success");
        } 
        if (email.val() == "") {
            email.closest(".form-control").addClass("error");
            email.focus();
            flag = false;
            return false;
        } else {
            email.closest(".form-control").removeClass("error").addClass("success");
        } if (tel.val() == "") {
            tel.closest(".form-control").addClass("error");
            tel.focus();
            flag = false;
            return false;
        } else {
            tel.closest(".form-control").removeClass("error").addClass("success");
            flag = true;
        }
       
       

       
        var dataString ="csrf= "+  csrf+ "&typteEntite=" + typteEntite.val() +"&name=" + name.val() + "&email=" + email.val() + "&tel=" + tel.val();
        $(".loading").fadeIn("slow").html("Traitement en cours...");

        $(".comment-form").attr('action', lien);
        // $.ajax({
        //     type: "POST",
        //     data: dataString,
        //     url: lien,
        //     cache: false,
        //     success: function (d) {
        //         $(".form- ").removeClass("success");
        //      if(d == 'success') // Message Sent? Show the 'Thank You' message and hide the form
        //    $('.loading').fadeIn('slow').html('<font color="#48af4b">Mail sent Successfully.</font>').delay(3000).fadeOut('slow');

        //         else
        //         $('.loading').fadeIn('slow').html('<font color="#ff5607">Mail not sent.</font>').delay(3000).fadeOut('slow');

        //     }
        // });
        // return false;
    });
    $("#reset").on('click', function() {
        $(".form-control").removeClass("success").removeClass("error");
    });
    
})



