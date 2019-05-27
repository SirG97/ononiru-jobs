
let submit_btn = $("#submit-btn");

submit_btn.on('click', function(e){
    e.preventDefault();
    // var validator = $( "#create_job_form" ).validate();
    
       const data = {
            title: $("#job_title").val(),
            description : $("#job_description").val(),
            sector:  $("#sector").val(),
            gender: $("#gender").val(),
            company_name: $("#company_name").val(),
            experience_level: $("#experience_level").val(),
            age: $("#min_age").val() +'-'+ $("#max_age").val(),
            location: $("#location").val(),
            qualification: 'You must be a douchebag',
            salary_range: $("#salary_range").val(),
            working_hours:$('#working_hours').val()
        }
        console.log(data);
  
        $.ajax({
            url: '/api/Jobs/create.php',
            method: 'POST',
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