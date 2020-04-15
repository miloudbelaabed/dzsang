$(document).ready(function(){

    getStates();
    
    $('#state').on('change', selected);

});

var citiesData ;
function getStates(){
    
  $.post( "includes/getcities.php",{ cities: "nothing"}, function( data ) {
   
    citiesData = data;

    data.wilayas.map(wilaya => {

      $('#state').append(`<option value=${(wilaya.id)} >${wilaya.nom}</option>`);

    });

});
}

function selected(){

  if($('#state').val() != 0){

    let cities = citiesData.communes.filter(city => city.wilaya_id == $('#state').val() );
    // $("#town").html('<option selected disabled value="0">--town--</option>');
    cities.map(city => {

      $('#town').append(`<option value=${(city.id)} >${city.nom_com}</option>`);
    });
    }else{
     $('#town').html('<option selected disabled value="0">--town--</option>');
   }
} 
