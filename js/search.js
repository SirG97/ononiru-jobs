var searchKeyWord;
var container =  document.getElementById('search_result');
var search_btn = document.getElementById('search_btn');
var search_input  = document.getElementById('search_input');
container.style.display = 'none';


function instantiateSearch(val) {
    
    searchKeyWord = val;
    container.innerHTML = '';
    container.style.display = 'block';
    container.style.backgroundColor = '#b13030';



    if(searchKeyWord != ''){
        container.style.textAlign = 'left';
        container.style.width = '100%';
        container.style.backgroundColor = '#78a2c1';

        $.ajax({
            url:`http://localhost:4000/api/jobs/search.php?s=${searchKeyWord}`,
            method:'GET',
            beforeSend: function(){
    container.innerHTML = 'loading...';
            }
        }).done(res => {
            let response = res.data;
    container.innerHTML = '';
            response.forEach(element => {
        container.innerHTML += `<small><a href=http://localhost:4000/job.php?id=${element.id}>`+ element.title + '</small> <br/>';
            });
        }).fail(err => {
        container.style.backgroundColor = '#b13030';
            container.innerHTML = err.status  == 404 ? 'Not results found!' : ''
        })
    }else{
    container.style.display = 'none';

    }
    
}

function searchinit(){
    //get input element
    let search_String = search_input.value;
    if(search_String == '' || search_String == null){
        
container.style.display = 'block';
container.innerHTML = 'Search Field cannot be left empty';
        return false;
    }


    //redirect to jobs page
    window.location.href = `jobs.php?s=${search_String}`;
}