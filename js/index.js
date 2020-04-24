$(document).ready(function(){
    enableBtn();
});

function enableBtn(){
  $('.form-control').on('change',function(){

    if($('#state').val()!=0 && $('#blood_Type').val()!=0){ $('#btn_search').attr("disabled", false);}else{$('#btn_search').attr("disabled", true);}
      
  });
}

function search(){

    var jsondata;
    let x = $('.form-control').serialize();

    $.ajax({url: 'includes/validate.php',
        type: 'POST',
        data: x,
        async: false,
        success: function(data){
         jsondata = data;
        }
});

     $('table').removeAttr('hidden');

    $('table tbody').empty();
    console.log(jsondata.length);
     if (jsondata.length == 0){
         $('table').find('tbody').append(`<tr><td colspan="7"><h4 class="lead text-center"> No vallentaire <h4/></td></tr>`);
     }else{
         jsondata.map(obj=> {

             $('table').find('tbody').append(`<tr><td>${obj.full_name}</td><td>${obj['phone']}</td><td>${obj['email']}</td><td>${obj['bloodType']}</td><td>${obj['nom']}</td><td>${obj['nom_com']}</td><td>${obj['gender']}</td></tr>`);
         });
     }




}