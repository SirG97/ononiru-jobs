$(document).ready(function(){
    // Input to show when a user selects a plan
  let subs_btn = $("#subscribe_btn");

  $("#phone_container").css("display","none");
  $("#cv_container").css("display","none");

  let plan = $("#plan");
  plan.on('change', function(){
    if(plan.val() == 'basic'){
      $("#phone_container").css("display","none");
      $("#cv_container").css("display","none");

      $("#amount").val(0);
    }else if(plan.val() == 'classic'){
      $("#phone_container").css("display","block");
      $("#cv_container").css("display","block");
      $("#amount").val(50);
    }else if(plan.val() == 'premium'){
      $("#phone_container").css("display","block");
      $("#cv_container").css("display","block");
      $("#amount").val(100);
    }
  });

  subs_btn.on('click', function(e){
      e.preventDefault();

      //check whether the inputs are empty

      // Append form data and send ajax request
      let data = new FormData();

      data.append('plan_id', $("#plan_id").val());
      data.append('location_id', $("#job_location").val());
      data.append('category_id', $("#job_category").val());
      data.append('email', $("#email").val());

      // For already logged in users
      if(plan.val() == 'basic'){
        data.set('plan_id', 'e4eaaaf2-d142-11e1-b3e4-080027620cdd');
      }else if(plan.val() == 'classic'){
        data.set('plan_id', '25769c6c-d34d-4bfe-ba98-e0ee856f3e7a');
        data.append('phonenumber', $("#phone_number").val());
      }else if(plan.val() == 'premium'){
        data.set('plan_id', '11a38b9a-b3da-360f-9353-a5a725514269');
        data.append('phonenumber', $("#phone_number").val());
        data.append('cv', $("#cv").prop('files')[0]);
      }

    //   For users who are not logged in that are subscribing from the homepage form
      if(data.get('plan_id') == 'e4eaaaf2-d142-11e1-b3e4-080027620cdd'){
        data.append('phone_number', '');
        data.append('cv', '');
      }else if(data.get('plan_id') == '25769c6c-d34d-4bfe-ba98-e0ee856f3e7a'){

        data.append('phonenumber', $("#phone_number").val());
        data.append('cv', $("#cv").prop('files')[0]);

      }else if(data.get('plan_id') == '11a38b9a-b3da-360f-9353-a5a725514269'){

        data.append('phonenumber', $("#phone_number").val());
        data.append('cv', $("#cv").prop('files')[0]);

      }

      for(var pair of data.entries()) {
        console.log(pair[0]+ ', '+ pair[1]); 
     }

      $.ajax({
        url: '/api/Jobs/subscribe.php',
        method: 'POST',
        cache: false,
        contentType: false,
        processData: false,
        data
    }).done(data=> {
        console.log(data);
        if(data.status_code == 200 && data.status == 'success'){
            iziToast.success({
                title: 'Great!',
                message: data.message,
                timeout: 5000,
                position: 'topCenter',
            });

        }else if(data.status == 'failed' && data.status_code == 409 ){

            iziToast.error({
                title: 'Oops!',
                message: data.message,
                timeout: 5000,
                position: 'topCenter',

            });
        }else if(data.status == 'failed' && data.status_code == 403){
            iziToast.error({
                title: 'Oops!',
                message: data.message,
                timeout: 5000,
                position: 'topCenter',
            });
        }

    }).fail(err=>{
        console.log(err);
        iziToast.error({
            title: 'Oops!',
            message: 'Couldn\'t process the request. Please try again',
            timeout: 5000,
            position: 'topCenter',
        });
    });

  });
});