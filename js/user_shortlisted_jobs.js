document.onload = init();

function init() {
    loadShortlisted();

}

function loadShortlisted() {
    const container = document.getElementById('applied_job_row');
    let content = '';
    container.innerHTML = content;

    $.ajax({
        url: `/api/jobs/company/shortlisted.php`,
        method: 'GET',
        beforeSend: function () {
            container.innerHTML = 'loading...';
        }
    }).done(res => {
        let response = res.data;
        response.forEach(element => {
            content += `
            <tr>
                                            <td data-label="Name">${element.title}</td>
                                            <td data-label="Action">
                                                
                                                    <div class="ui icon buttons">
                                                        <a class="ui green button" href="inbox.php?id=${element.job_id}">
                                                             View Confirmation Message
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
