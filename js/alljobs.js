document.onload = init();

function init(){
  loadCompanyJobs();
  
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
        let response  = res.data;
        console.log(res.message);
        response.forEach(applicant => {
          console.log(applicant);
            content += `
            <div class="item">
              <div class="ui tiny image">
                  <img src="../uploads/users/">
              </div>
              <div class="content">
                  <div class="header">Stevie Feliciano</div>
                  <div class="meta">
                      <span class="cinema">Union Square 14</span>
                  </div>
                  <div class="description">
                      <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend her time reading, running, and writing.</p>
                  </div>
                  <div class="extra">
                      <div class="ui right floated primary button">
                          shortlist
                          <i class="right chevron icon"></i>
                      </div>
                  </div>
              </div>
          </div>
            `;
        });

        container.innerHTML = content;
    }).fail(err => {
        console.error(err);
    })
}
