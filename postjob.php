<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <link rel="stylesheet" href="semantic/dist/semantic.min.css">
        <link rel='stylesheet' type='text/css' href='css/space_app.css'/>
        <link rel='stylesheet' type='text/css' href='css/style.css'/>
<style>
*{
    padding: 0;
    margin: 0;
}
</style>
    </head>
    <body>
      <?php include 'includes/company_sidebar_menu.php' ?>
        <div class='page-div'>
            <div>
                <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <div class="row">
                        <h1 class="ui huge dividing header">Manage Jobs</h1>
                    </div>
                    <div class="ui grid padded">    
                        <div class="ui sixteen wide column">
                          <form action="" class="ui form" id="create_job">
                            <div class="ui equal width form">
                                <div class="fields">
                                  <div class="field">
                                    <label>Job Title</label>
                                    <input type="text" id="job_title" placeholder="Junior Software Developer" required>
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Description</label>
                                    <textarea id="job_description" placeholder="Job Description" required></textarea>
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Job type</label>
                                    <select id="sector" name="sector" class="ui search dropdown" required>
                                      <option value="programming">Programming</option>
                                      <option value="Human resource">Human Resource</option>
                                      <option value="finance">Finance</option>
                                      <option value="Web">Web Design</option>
                                    </select>
                                  </div>
                                  <div class="field">
                                      <label>Gender</label>
                                      <select id="gender" name="dropdown" class="ui dropdown" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                      </select>
                                  </div>
                                  
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Company Name</label>
                                      <input type="text" id="company_name" placeholder="Company" required>
                                    </div>
                                    <div class="field">
                                        <label>Experience Level</label>
                                        <select id="experience_level" class="ui search dropdown" required>
                                          <option value="1">1 year</option>
                                          <option value="2">2 years</option>
                                          <option value="3">3 years</option>
                                          <option value="4">4 years</option>
                                          <option value="5+">5+ years</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Minimum Age</label>
                                      <input type="number" min="18" max="40" id="min_age" placeholder="18" required>
                                    </div>
                                    <div class="field">
                                      <label>Minimum Age</label>
                                      <input type="number" max="40" id="max_age" placeholder="40" required>
                                    </div>
                                    <div class="field">
                                        <label>Location</label>
                                        <input type="text" id="location" placeholder="Location" required>
                                    </div>
                                </div>
                              
                                <div class="fields">
                                    <div class="field">
                                      <label>Salary Range</label>
                                      <input type="text" id="salary" placeholder="Lagos, Nigeria" required>
                                    </div>
                                    <div class="field">
                                        <label>Working Hours</label>
                                        <input type="text" id="working_hours" placeholder="8:00am - 4:00pm GMT+1" required>
                                    </div>
                                </div>
                            </div>
                            <button class="ui green button right floated submit" id="submit-btn">Submit</button>
                            <div class="ui error message"></div>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
        <script src="js/createjob.js"></script>
        <script>

        </script>
    </body>
</html>