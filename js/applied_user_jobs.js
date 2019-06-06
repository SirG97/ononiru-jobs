document.onload = init();

function init() {
    loadCompanyJobs();

}

function loadCompanyJobs() {
    const container = document.getElementById('applied_job_row');
    let content = '';
    container.innerHTML = content;

    $.ajax({
        url: `/api/jobs/user/appliedJobs.php`,
        method: 'GET',
        beforeSend: function () {
            container.innerHTML = 'loading...';
        }
    }).done(res => {
        let sl;
        let response = res.data;
        response.forEach(element => {
            if(element.is_shortlisted == 1){
                 sl = 'Shortlisted'
            }else{
                sl = 'Pending..'
            }
            content += `
            <tr>
                                            <td data-label="Name">${element.title}</td>
                                            <td data-label="company">${element.location}</td>
                                            <td data-label="Job">${element.created_at}</td>
                                            <td data-label="status">${sl}</td>
                                            <td data-label="Action">
                                                
                                                    <div class="ui icon buttons">
                                                        <a class="ui blue button" href="job.php?id=${element.job_id}">
                                                                <i class="eye icon"></i>
                                                        </a>
                                                        <a class="ui yellow button" disabled href="#">
                                                            <i class="pencil icon"></i>
                                                        </a>
                                                        <a class="ui red button" href="api/jobs/user/unapply.php?job_id=${element.job_id}">
                                                            <i class="trash alternate outline icon"></i>
                                                        </a>
                                                    </div>
                                            
                                            </td>
                                            </tr>
            `;
        });

        container.innerHTML = content;
        document.getElementById('pagination_row').innerHTML = `
        <tr>
        <th colspan="5">
            <div class="ui right floated pagination menu">
            <a class="icon item" disabled><i class="left chevron icon"></i></a>
            <a class="item">1</a>
            <a class="icon item" disabled><i class="right chevron icon"></i></a>
            </div>
        </th>
    </tr>
        `;
    }).fail(err => {
        console.error(err);
    })
}
