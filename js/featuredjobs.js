

document.onload = init();

function init(){
  loadJobs();
  loadCategories();
}

function loadCategories(){
  const container = document.getElementById('job_featured_container');
  let content =  '';
  container.innerHTML = content;
  
  $.ajax({
    url:`/api/jobs/fetchCategory.php`,
    method:'GET'
    }).done(data => {
      console.log(data)
      let _data =  data.data;
      _data.forEach(element => {
        content +=  `<div class="four wide column">
        <div class="ui cards">
            <div class="card categories-card">
                ${element.icon}
                <div class="content content-border">
                  <div class="header">${element.display_name}</div>
                  <div class="meta">
                    <a href='jobs.php?c_id=${element.job_category_id}&top=${Math.random()* Math.PI}'>${element.available_jobs} open positions</a>
                  </div>
                 
                </div>
            </div>
        </div>
    </div>
        `;    
      });
      container.innerHTML = content;
    
    }).fail(err => {
      console.log(err)
    })

}
function loadJobs(){
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
