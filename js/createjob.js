
let submit_btn = $("#submit-btn");

submit_btn.on('submit', function(e){
    e.preventDefault();
    // var validator = $( "#create_job_form" ).validate();
    
        data = {
            title: $("#job_title").val(),
            description : $("#job_description").val(),
            sector:  $("#sector").val(),
            gender: $("#gender").val(),
            experience_level: $("#experience_level").val(),
            age: $("#min_age").val() +'-'+ $("#max_age").val(),
            location: $("#location").val(),
            qualification: 'You must be a douchebag',
            salary_range: $("#salary_range").val(),
            working_hours:$('#working_hours').val()
        }

        for (const key in data) {
            console.log(data[key])

            if (data.hasOwnProperty(key)) {
                if(data[key] == ''){
                    iziToast.warning({
                        title: 'Oops!',
                        message: key + ' should not be left empty',
                        timeout: 3000,
                        position:'topRight'
                    });
                    return false;
                }
            }
        }
        console.log(data);
  
        $.ajax({
            url: '/api/Jobs/create.php',
            method: 'POST',
            data
        }).done(data=> {
            
            if(data.status_code == 200 && data.status == 'success'){
                iziToast.success({
                    title: 'Great!',
                    message: data.message,
                    timeout: 3000,
                    position:'topRight'
                });

                setTimeout(() => {
                    window.location.href = window.location.origin + '/dashboard/jobs.php';
                },2500)
            }

        }).fail(err=>{
            if(err.status == 409 || err.status == 403){
                iziToast.error({
                    title: 'Oops!',
                    message: err.responseJSON.message,
                    timeout: 5000,
                });
            }
            console.log(err);
        });
    



});
