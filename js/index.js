$(document).ready(function(){
    
   
   
    enableBtn();
   
      

});


//------------------------
function selected(){

  if($('#state').val() != 0){

 
    let cities = citiesData.communes.filter(city => city.wilaya_id == $('#state').val() );
    $("#town").html('<option selected disabled value="0">--town--</option>');
    cities.map(city => {

      $('#town').append(`<option value=${(city.id)} >${city.nom_com}</option>`);
    });
   
  }else{
    $('#town').html('<option selected disabled value="0">--town--</option>');
  }
} 

 function search(){
   
    let x = $('.form-control').serialize();
    $.post('includes/validate.php',x,function (data){
     // console.log(data[0]["velent_key"]);
       var jsondata = data;
       console.log(jsondata[0]);
        
     
    });
}


function enableBtn(){
  $('.form-control').on('change',function(){

    if(($('#blood_Type').val() != 0) && ($('#state').val()!=0) && ($('#town').val()!=0)){ $('#btn_search').attr("disabled", false);}else{$('#btn_search').attr("disabled", true);}
    
    });
    
}



