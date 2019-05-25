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
                            <div class="ui equal width form">
                                <div class="fields">
                                  <div class="field">
                                    <label>Job Title</label>
                                    <input type="text" placeholder="Junior Software Developer">
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Description</label>
                                    <textarea placeholder="Job Description"></textarea>
                                  </div>
                                </div>
                                <div class="fields">
                                  <div class="field">
                                    <label>Job type</label>
                                    <select class="ui search dropdown">
                                      <option value="">Programming</option>
                                      <option value="AF">Human Resource</option>
                                      <option value="AX">Finance</option>
                                      <option value="AL">Web Design</option>
                                    </select>
                                  </div>
                                  <div class="field">
                                      <label>Gender</label>
                                      <select class="ui search dropdown">
                                        <option value="">Male</option>
                                        <option value="AF">Female</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Company Name</label>
                                      <input type="text" placeholder="Company">
                                    </div>
                                    <div class="field">
                                        <label>Company ID</label>
                                        <input type="text" placeholder="Salary Range">
                                      
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Company Logo</label>
                                      <input type="file" placeholder="Location">
                                    </div>
                                    <div class="field">
                                        <label>Location</label>
                                        <input type="text" placeholder="Location">
                                    </div>
                                </div>
                                <div class="fields">
                                    <div class="field">
                                      <label>Salary Range</label>
                                      <input type="text" placeholder="Lagos, Nigeria">
                                    </div>
                                    <div class="field">
                                        <label>Working Hours</label>
                                        <input type="text" placeholder="8:00am - 4:00pm GMT+1">
                                    </div>
                                </div>
                            </div>
                            <button class="ui green button right floated">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
    </body>
</html>