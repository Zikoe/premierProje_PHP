

$(document).ready(function(){

    /*  tout element cacher a debut */
    $("#container-pays").hide();
    $("#Femme").hide();

    $("#Homme").click(function(){
        $("#Homme").hide("pulsate");
        $("#Femme").show("pulsate");
    });
    $("#Femme").click(function(){
        $("#Femme").hide("pulsate");
        $("#Homme").show("pulsate");
    });

    /*=============  Validation de tout input text : ===============================================================*/
    $("#commentForm").validate({
            rules: {
                /* Name   ( Nom ) :    */
                "user[lastname]": {
                    required: true,
                    minlength: 2,
                    maxlength: 10
                },
                "user[name]": {
                    required: true,
                    minlength: 2,
                    maxlength: 10
                },
                "user[old]": {
                    required: true,
                    number: true,
                    minlength: 1,
                    maxlength: 2
                },

                /* Mail ......   */
                "user[email]": {
                    required: true,
                    email: true
                },

                /* radio button */
                "myoptions[]":{ required:true },

                /*  Commenter   */
                "user[comment]": {
                    required: true,
                    minlength: 5,
                    maxlength: 40
                }

            },
            messages: {
                /* Name   ( Nom ) :    */
                "user[lastname]": {
                    required: "Entreez votre Prenom!",
                //    minlength: jQuery.format("Min {0} characters!"),
                    maxlength: jQuery.format("Max {0} characters!")
                },
                "user[name]": {
                    required: "Entreez votre Nom!",
                    minlength: jQuery.format("Min {0} characters!"),
                    maxlength: jQuery.format("Max {0} characters!")
                },
                /* Age ................ */
                "user[old]": {
                    required: "Entreez votre Age!",
                    minlength: jQuery.format("Min {0} Number!"),
                    maxlength: jQuery.format("Max {0} Number!")
                },

                /* Mail ......   */
                "user[email]":{
                    required: "Votre  eMAil S.V.P ?",
                    email:"Ex: name@domain.com !"
                },
                 /* Radio Button */
                "myoptions[]": {
                    required: "@__"
                },
                /*  Commenter   */
                "user[comment]": {
                    required: "Votre commenter ?",
                    minlength: jQuery.format("Min {0} characters!"),
                    maxlength: jQuery.format("Max {0} characters!")
                }



            }

        }

    );

    /*==========================================================================================================*/
    /*   changer le images par apor de select options:                                           */

    $("#select-option").on('change', function() {
       //   alert( this.value ); // or $(this).val();
        if(this.value == 0){ $("#container-pays").hide("explode"); }
        else if(this.value == 1){
            $("#images-pays").attr("src","assets/images/c.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 2){
            $("#images-pays").attr("src","assets/images/u.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 3){
            $("#images-pays").attr("src","assets/images/r.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 4){
            $("#images-pays").attr("src","assets/images/b.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 5){
            $("#images-pays").attr("src","assets/images/f.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 6){
            $("#images-pays").attr("src","assets/images/t.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 7){
            $("#images-pays").attr("src","assets/images/br.jpg");
            $("#container-pays").show("explode");
        }
        else if(this.value == 8){
            $("#images-pays").attr("src","assets/images/g.jpg");
            $("#container-pays").show("explode");
        }
    });




});  /*   Finish ready..........   */
