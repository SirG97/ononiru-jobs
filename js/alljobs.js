document.onload = init();

function init(){
  loadCompanyJobs();
  
}

function loadCompanyJobs(){
    const container = document.getElementById('featured_jobs');
    let content =  '';
    container.innerHTML = content;
    
    $.ajax({
        url:`/api/jobs/read.php`,
        method:'GET',
        beforeSend: function(){
        container.innerHTML = 'loading...';
        }
    }).done(res => {
        let response  = res.data;
        response.forEach(element => {
            content += `
            
            <div class="item" style="padding-top: 20px;">
            <div class="image">
              <img src="static/images/avatar/nan.jpg" style="width: 8em; height: 8em; max-width: 100%; border-radius: 50%;margin:auto">
            </div>
            <div class="content">
              <a class="header">${element.title}</a>
              <div class="meta">
                <span class="cinema">${element.location}</span>
              </div>
              <div class="description">
                <p>
                ${element.description}
                </p>
              </div>
              <div class="extra">
                  <button class="ui right floated primary basic button apply"><a href="/job.php?id=${element.job_id}&s=1&u=true">More</a></button>
                <div class="ui label">${element.display_name}</div>
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
