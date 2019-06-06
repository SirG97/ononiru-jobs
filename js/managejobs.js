document.onload = init();

function init(){
  loadCompanyJobs();
  
}

function loadCompanyJobs(){
    const company_jobs = document.getElementById('company_jobs');
    let content =  '';
    company_jobs.innerHTML = content;
    
    $.ajax({
        url:`/api/jobs/company/jobs.php`,
        method:'GET',
        beforeSend: function(){
        company_jobs.innerHTML = 'loading...';
        }
    }).done(res => {
        let response  = res.data;
        console.log(res);
        response.forEach(job => {
          console.log(job);
          let status ='inactive';
          if(job.status == 1){
             status = 'active'
          }else{
             status = 'inactive'
          }
            content += `
            <tr>
            <td data-label="Title">${job.title}</td>
            <td data-label="Age">${job.visits}</td>
            <td data-label="Job">${job.created_at}</td>
            <td data-label="status">${status}</td>
            <td data-label="Action">
                <div class="ui icon buttons">
                    <a class="ui blue button" href="../job.php?id=${job.job_id}">
                            <i class="eye icon"></i>
                    </a>
                    <button class="ui yellow button" disabled>
                        <i class="pencil icon"></i>
                    </button>
                    <button class="ui red button" id="delete_job_btn">
                        <i class="trash alternate outline icon"></i>
                    </button>
                </div>
            </td>
        </tr>
            `;
        });

        company_jobs.innerHTML = content;
    }).fail(err => {
        console.error(err);
    })
}
