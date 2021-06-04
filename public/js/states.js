$(function(){

    $('#select-country').on('change',onSelectCountryChange);
    $('#select-state').on('change',onSelectCityChange);

});

function onSelectCountryChange( ){

    var country_id = $(this).val();

    //alert( country_id);

    //ajax

    $.get('api/countries/'+country_id+'/states',function(data){
       // console.log(data);
        var html_select='<option selected value="">Seleccione un Estado</option>'
        for(var i=0; i<data.length;i++)
           html_select += '<option value="'+data[i].state_id+'">'+data[i].state_description+'</option>';

           console.log(html_select);
        $("#select-state").html(html_select);

    });

}

function onSelectCityChange( ){

    var state_id = $(this).val();

    //alert( state_id);

    //ajax

    $.get('api/states/'+state_id+'/cities',function(dataCity){
        console.log(dataCity);
        var html_select2='<option selected value="">Seleccione una Ciudad</option>'
        for(var i=0; i<dataCity.length;i++)
           html_select2 += '<option value="'+dataCity[i].city_id+'">'+dataCity[i].city_description+'</option>';

           console.log(html_select2);
        $("#select-city").html(html_select2);

    });

}



