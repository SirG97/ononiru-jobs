function jobApplyInit(id,company_id){
    let c_id = company_id;
    let jb_id = id;
    //check if user is logged in
   let l_user_id = window.localStorage.getItem('user_id');
    if(!l_user_id){
        location.href = `login.php?prev=${location.href}`;
    }
     data = {
        job_id:jb_id,
        company_id:c_id,
        user_id:l_user_id
    }

    $.ajax({
        url: 'http://localhost:4000/api/Jobs/apply.php',
        method: 'POST',
        data,
    }).done(data => {
        console.log(data);
    }).fail(err => {
        console.log(err)
    })

}