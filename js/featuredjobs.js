

document.onload = init();

function init(){

  checkUser();
  loadJobs();

}
function checkUser(){
  //check if user is logged in using cookies or tokens
  const user_token  =  window.localStorage.getItem('user_token');
  if(user_token !== ''){
    //api request to get user details
  }
}
function loadJobs(){
    const container = document.getElementById('featured_jobs');
    let content =  '';
    container.innerHTML = content;
    
    $.ajax({
        url:`http://localhost:4000/api/jobs/read.php`,
        method:'GET',
        beforeSend: function(){
        container.innerHTML = 'loading...';
        }
    }).done(res => {
            console.log(res);
        let response  = res.data.records;


        response.forEach(element => {
            content += `
            
            <div class="item" style="padding-top: 20px;">
            <div class="image">
              <img src="static/images/avatar/nan.jpg" style="width: 8em; height: 8em; max-width: 100%; border-radius: 50%;margin:auto">
            </div>
            <div class="content">
              <a class="header">${element.title}</a>
              <p>This is a paragraph to test whether things are working very well
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis repellendus nemo voluptatibus quae praesentium. Itaque sit labore commodi facere rerum optio inventore quisquam. Dignissimos officia placeat totam nemo, impedit doloribus.</p>
              <div class="meta">
                <span class="cinema">${element.location}</span>
              </div>
              <div class="description">
                <p>
                ${element.description}
                </p>
              </div>
              <div class="extra">
                  <button class="ui right floated primary basic button apply"><a href="/job.html?id=${element.id}&s=1&u=true">More</a></button>
                <div class="ui label">${element.sector}</div>
              </div>
            </div>
            </div>
            `;
        });

        container.innerHTML = content;
    }).fail(err => {
        console.log(err);
    })
}