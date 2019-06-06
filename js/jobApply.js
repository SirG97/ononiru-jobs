

function jobApplyInit(id,company_id){
    let c_id = company_id;
    let jb_id = id;

    document.getElementById('okbtn').innerHTML = 'Applying...';
    document.getElementById('okbtn').disabled = 'true';

    document.getElementById('canclebtn').style.display = 'none';

     data = {
        job_id:jb_id,
        company_id:c_id,
    }

    $.ajax({
        url: 'http://localhost:4000/api/Jobs/user/apply.php',
        method: 'POST',
        data,
    }).done(data => {
        console.log(data);
        if(data.status_code == 200 && data.status == 'success'){


            iziToast.success({
                title: 'Great!',
                message: 'You\'ve applied successfully!',
            });
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        // document.getElementById('okbtn').innerHTML = 'Great,please wait...';
        setTimeout(() => {
            document.getElementById('canclebtn').click();
            document.getElementById('job_status').innerHTML =  `
            <div class="ui green horizontal label">Applied</div>
            `;
        },2500)


        }else if(data.status == 'failed' && data.status_code == 409 && data.message == "You cannot apply for this job a second time"){

            iziToast.error({
                title: 'Oops!',
                message: data.message,
                timeout: 5000,
            });
            document.getElementById('okbtn').innerHTML = 'Apply';
            document.getElementById('canclebtn').style.display = 'inline';
            document.getElementById('alertdesc').innerHTML = data.message;
        
        }


    }).fail(err => {
        console.log(err)
    })

}


$('.message .close').on('click',function(){
$(this).closest('.message').transition('fade');
});