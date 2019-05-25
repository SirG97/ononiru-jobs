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
       <?php include 'includes/candidate_sidebar_menu.php';?>
        <div class='page-div'>
            <div>
                    <div class="pad-2 sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                            <div class="row">
                                <h1 class="ui huge dividing header">Profile</h1>
                            </div>
                            <div class="ui grid">    
                                <div class="ui sixteen wide column">
                                    <div class="ui equal width form">
                                        <div class="fields">
                                            <div class="field">
                                                <label> Name</label>
                                                <input type="text" placeholder="John Doe">
                                            </div>
                                            <div class="field">
                                                <label>Job title</label>
                                                <input type="text" placeholder="Software Engineer">
                                            </div>
                                        </div>
                                        <div class="fields">
                                            <div class="field">
                                                <label>Industry</label>
                                                <select class="ui search dropdown">
                                                <option value="">Programming</option>
                                                <option value="AF">Human Resource</option>
                                                <option value="AX">Finance</option>
                                                <option value="AL">Web Design</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <label>Experience</label>
                                                <select class="ui search dropdown">
                                                <option value="">Programming</option>
                                                <option value="AF">Human Resource</option>
                                                <option value="AX">Finance</option>
                                                <option value="AL">Web Design</option>
                                                </select>
                                            </div>
                                            <div class="field">
                                                <label>Age</label>
                                                <input type="number" min="15" max="35" placeholder="25">
                                            </div>
                                        </div>
                                        <div class="fields">
                                            <div class="field">
                                            <label>Current salary</label>
                                            <input type="text" placeholder="150k">
                                            </div>
                                            <div class="field">
                                                <label>Expected salary</label>
                                                <input type="text" placeholder="250k">
                                            
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
                                            <div class="field">
                                                <label>Location</label>
                                                <input type="text" placeholder="Location">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                        
                            </div>
                            <div class="row">
                                <h1 class="ui huge dividing header">Social Media information</h1>
                            </div>
                            <div class="ui grid">    
                                    <div class="ui sixteen wide column">
                                        <div class="ui equal width form">
                                            <div class="fields">
                                                <div class="field">
                                                    <label>Facebook</label>
                                                    <input type="text" placeholder="https://facebook.com/acompany">
                                                </div>
                                                <div class="field">
                                                    <label>Twitter</label>
                                                    <input type="text" placeholder="https://twitter.com/acompany">
                                                </div>
                                                <div class="field">
                                                    <label>LinkedIn</label>
                                                    <input type="text" placeholder="https://linkedin.com/acompany">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                            
                            </div>
                            <div class="row">
                                    <h1 class="ui huge dividing header">Contact information</h1>
                                </div>
                                <div class="ui grid">    
                                        <div class="ui sixteen wide column">
                                            <div class="ui equal width form">
                                                <div class="fields">
                                                    <div class="field">
                                                        <label>Phone</label>
                                                        <input type="text" placeholder="+234700004758">
                                                    </div>
                                                    <div class="field">
                                                        <label>Email</label>
                                                        <input type="text" placeholder="admin@acompany.com">
                                                    </div>
                                                    <div class="field">
                                                        <label>Website</label>
                                                        <input type="text" placeholder="https://acompany.com">
                                                    </div>
                                                </div>
                                                <div class="fields">
                                                        <div class="field">
                                                            <label>City</label>
                                                            <input type="text" placeholder="Lagos">
                                                        </div>
                                                        <div class="field">
                                                            <label>Country</label>
                                                            <input type="text" placeholder="Nigeria">
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                                
                                </div>
                        </div>
            </div>
        </div>

        <script src="js/jquery.min.js"></script>
        <script src="semantic/dist/semantic.min.js"></script>
    </body>
</html>