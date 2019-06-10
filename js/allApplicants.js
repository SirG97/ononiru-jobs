document.onload = init();

function init(){
  loadCompanyJobs();
  shortlist();
}

function loadCompanyJobs(){
    const applicant = document.getElementById('applicants');
    let content =  '';
    applicant.innerHTML = content;
    
    $.ajax({
        url:`/api/jobs/company/applicants/applicantJob.php`,
        method:'GET',
        beforeSend: function(){
        applicant.innerHTML = 'loading...';
        }
    }).done(res => {
        let response  = res.message.data;
        console.log(res);
        response.forEach(applicant => {
        //   console.log(response);
            content += `
            <div class="item">
              <div class="ui tiny image">
                  <img src="../uploads/users/">
              </div>
              <div class="content">
                  <div class="header">${applicant.name}</div>
                  <div class="meta">
                      <span class="cinema">${applicant.email}</span>
                  </div>
                  <div class="description">
                      <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend her time reading, running, and writing.</p>
                  </div>
                  <div class="extra">
                      <div class="ui right floated primary button" id="shortlist_btn" onclick=shortlist("${applicant.job_id}","${applicant.user_id}")>
                          shortlist
                          <i class="right chevron icon"></i>
                      </div>
                  </div>
              </div>
          </div>
            `;
        });

        applicant.innerHTML = content;
    }).fail(err => {
        console.error(err);
    })
}

function shortlist(job_id,user_id){
    let sjob_id = job_id;
    let suser_id = user_id;

    document.getElementById('shortlist_btn').innerHTML = 'Shortlisting...';
    document.getElementById('shortlist_btn').disabled = 'true';

     data = {
        job_id:sjob_id,
        user_id:suser_id,
    }

    $.ajax({
        url: `/api/jobs/company/applicants/shortlist.php`,
        method: 'POST',
        data,
    }).done(data => {
        console.log(data);
        if(data.status_code == 200 && data.status == 'success'){


            iziToast.success({
                title: 'Great!',
                message: 'Candidate successfully shortlisted!',
            });
            setTimeout(() => {
                window.location.reload();
            }, 3000);
        // document.getElementById('okbtn').innerHTML = 'Great,please wait...';
        setTimeout(() => {
            document.getElementById('shortlist_btn').click();
            document.getElementById('shortlist_btn').innerHTML = 'Shortlisted';
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