

$(document).ready(function(){
///    pour credi card:                 =================================================================================
function check_if_present(data) {
    if (data!='') {
        return true;
    } else {
        return false;
    }
}

function check_url(url) {
    var regex = new RegExp("^(http[s]?:\\/\\/(www\\.)?|www\\.){1}([0-9A-Za-z-\\.@:%_\+~#=]+)+((\\.[a-zA-Z]{2,3})+)(/(.)*)?(\\?(.)*)?");

    if(!regex.test(url)){
        return false;
    }else{
        return true;
    }
}

function check_email(email) {
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,4})$/;
    if (!filter.test(email)) {
        return false;
    } else {
        return true;
    }
}


function check_card_number(cardnumber) {
    if (cardnumber.length!=16) {
        return false;
    }
    i = 0;
    do {
        if (!(cardnumber[i]>='0' && cardnumber[i]<='9')) {
            return false;
        }
        i++;
    } while (i<cardnumber.length);
    return true;
}

function check_item(item, type_item) {
    if (type_item=='email') {
        result = check_email($('#'+item).val());
    } else if (type_item=='creditcard') {
        result = check_card_number($('#'+item).val());
    } else if (type_item=='link') {
        result = check_url($('#'+item).val());
    } else if (type_item=='text') {
        result = check_if_present($('#'+item).val());
    }
    if (result==true) {
        $('#'+item).removeClass('error');
        if ($('#'+item).prev().prop('tagName')=='LABEL') {
            $('#'+item).prev().removeClass('error');
        } else {
            $('#'+item).parent().parent().find('label').removeClass('error');
        }
    } else {
        $('#'+item).addClass('error');
        if ($('#'+item).prev().prop('tagName')=='LABEL') {
            $('#'+item).prev().addClass('error');
        } else {
            $('#'+item).parent().parent().find('label').addClass('error');
        }
    }
}


function valide_formulaire() {
    check_item("email", "email");
    check_item("visanumber", "creditcard");
    check_item("masternumber", "creditcard");
    check_item("url", "link");
    check_item("nom", "text");
    check_item("prenom", "text");
    check_item("test", "text");
}
// finish validation............
//======================================================================================================///


$(document).ready(function() {
    $('#creditcard_type_visa').click(function() {
        $('.visacard').show();
        $('.mastercard').hide();
    })
    $('#creditcard_type_master').click(function() {
        $('.mastercard').show();
        $('.visacard').hide();
    })
    $('#paie').click(function() {
        valide_formulaire();
    })
})
;

	
	

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
