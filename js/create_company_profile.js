
let submit_btn = $("#submit-btn");
let company_profile = $("#company_profile");

company_profile.on('submit', function(e){
    e.preventDefault();
    // var validator = $( "#create_job_form" ).validate();
        // logo_img = $("#logo").prop('files')[0];
         let data = new FormData();
         data.append('company_name', $("#company_name").val());
         data.append('about', $("#about").val());
         data.append('sector', $("#sector").val());
         data.append('rcc', $("#rcc").val());
         data.append('logo', $("#logo").prop('files')[0]);
         data.append('facebook', $("#facebook").val());
         data.append('twitter', $("#twitter").val());
         data.append('linkedin', $("#linkedin").val());
         data.append('phone1', $("#phone1").val());
         data.append('phone2', $("#phone2").val());
         data.append('website', $("#website").val());
         data.append('email', $("#email").val());
         data.append('fax', $('#fax').val());
         data.append('address', $("#address").val());
         data.append('location', $("#city").val());
         
        //  for (var value of data.values()) {
        //     console.log(value); 
        //  }
        for(var pair of data.entries()) {
            console.log(pair[0]+ ', '+ pair[1]); 
         }
    

        $("#logo").change(function(){
            let file = this.files[0];
            let image_type = file.type;
            var match= ["image/jpeg","image/png","image/jpg"];
            if(!((image_type==match[0]) || (image_type==match[1]) || (image_type==match[2]))){
                iziToast.error({
                    title: 'Oops!',
                    message: 'Please select a jpeg, png or jpg image',
                    timeout: 5000,
                });
                $("#file").val('');
                return false;
            }
        });
  
        $.ajax({
            url: '/api/Jobs/company/create.php',
            method: 'POST',
            cache: false,
            contentType: false,
            processData: false,
            data
        }).done(data=> {
            console.log(data);
            if(data.status_code == 200 && data.status == 'success'){
                iziToast.success({
                    title: 'Great!',
                    message: data.message,
                    timeout: 5000,
                });

            }else if(data.status == 'failed' && data.status_code == 409 && data.message == "Unable to create job. Data is incomplete."){
    
                iziToast.error({
                    title: 'Oops!',
                    message: data.message,
                    timeout: 5000,
                });
            }else if(data.status == 'failed' && data.status_code == 403 && data.message == "Opps! Something went wrong"){
                iziToast.error({
                    title: 'Oops!',
                    message: data.message,
                    timeout: 5000,
                });
            }

        }).fail(err=>{
            console.log(err);
        });
    



});
function post_new_job(){

}