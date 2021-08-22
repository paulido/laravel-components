// Author : Paul IDO , paulido92@gmail.com
// software engineer, University Joseph KI-ZERBO

// this is collection of javascripts helpers, it stand for a javascript Library
// Licence MIT



// create array with text beetween html elements tags
// ie <li> texte </li> : texte will be push in returned array

function arrayJSON(elements){

    var val;
    var myarray = []
    $(elements).each(function(index){

        val = $(this).text();

        myarray.push(JSON.parse(val));

    });

    return myarray;
}


//getting data functions section


//serialise form data
function getFormData(form){

    return form.serialize();

}

// Return element data attribute value
function getData(element, target  = "data"){

    if(target === "value")
    {
        return $(element).val();
    }
    else if(target === "text")
    {
        return $(element).text();
    }
    else
    {
      return $(element).attr('data');
    }
}

// set element data
function setData(element, value, target = "data"){
    
    if(target === "value")
    {
        $(element).val(value);
    }
    else if(target === "text")
    {
        $(element).text(value);
    }
    else
    {
        $(element).attr('data', value);
    }
}

// select input helpers

function getValueOnChange(element){

    $(element).change(function(){

        return $(this).val()
        
    })
}

function getManyData(elements, target){   //target is the attribute which hold the data

        var data = []
        if(target === "value"){  //get value attributes values

            $(elements).each(function(index){

                data[index] = $(this).val();
      
              });
        }
        else if(target === "text"){  //get texts values

            $(elements).each(function(index){

                data[index] = $(this).text();
      
              });
        }
        else{  //get data attributes values

            $(elements).each(function(index){

                data[index] = $(this).attr('data');
      
              });

        }
        return data.toString();
}


// ajax requests

function Ajax(data = null, method = 'post', url, fromModal = false, alert = false, sweet = true){
    $.ajax({
        url: url,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        method: 'post',
        data:data,
        success:function(data){

            location.reload();

            if(fromModal)
            {
                $('#actionmodal').modal('hide');
            }
            if(alert)
            {
                $('.alert').alert();
            }
            if(sweet){

                sweetSuccess();
            }
            
            location.reload();
        },
        error:function(xhr)
        {
            // location.reload();
            if(fromModal)
            {
                $('#actionmodal').modal('hide');
            }
            if(alert)
            {
                $('.alert').alert();
            }
            if(sweet){

                sweetFailure();
            }
        }
    });
}


// checkboxes helpers

function checkCheboxes(source, targets){
   
    if($(source).is(':checked')){
        $(targets).prop('checked', true);
    }
    else
    {
        $(targets).prop('checked', false);
    }
    
}
function getCheckboxesData(source, targets = 'data'){
   
    var data = [];
    $(source).each(function(index){
        if($(this).is(':checked')){
            data[index] = getData(this, targets);
        }

    });

    return data.toString();
    
    
}

// refresh content 

function refresh(element, message = ''){

    $(element).fadeOut(200, function(){
        $(element).html(message).fadeIn().delay(200);

    });
}







