<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="semantic/dist/semantic.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css">
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body, html, main{
            height: 100%;
            width: 100%
        }

        nav{
            background-color: darkblue;
            width: 270px;
            height: 100%;
            position: absolute;
            transform: translate(-270px, 0);
            transition: transform 0.3s ease;
        }

        nav.open{
            transform: translate(0,0);
        }
        main{
            background-color: lightblue;
        }

        @media screen and (min-width: 600px){
            nav{
                position: relative;
                transform: translate(0,0);

            }

            body{
                display: flex;
                flex-flow: nowrap;
            }
            main{
                width: calc(100% - 270px);
                flex-grow: 1;
            }
        }
    </style>
</head>
<body>
    <nav id="drawer" class="nav">
        <!-- <div class="ui left vertical menu" id="sidebar"> -->
        <div class="ui vertical borderless fluid text menu fixed"></div>
            <a class="active item">Dashboard</a> 
            <a class="item">Company profile</a> 
            <a class="item">Manage Jobs</a>
            <a class="item">Applicants</a> 
            <a class="item">Post new job</a>
            <a class="item">Change password</a> 
            <a class="item">Logout</a> 
        </div>
        <!-- </div> -->
    </nav>
    <main class="">
            <div class="sixteen wide mobile sixteen wide tablet thirteen wide computer right floated column" id="content">
                    <div class="ui padded grid">
                      <div class="row">
                        <h1 class="ui huge dividing header">Dashboard</h1>
                      </div>
                      <div class="center aligned row">
                        <div
                          class="eight wide mobile four wide tablet four wide computer column"
                        >
                          <img
                            class="ui centered small circular image"
                            src="./static/images/wireframe/square-image.png"
                          />
                          <div class="ui large basic label">Label</div>
                          <p>Something else</p>
                        </div>
                        <div
                          class="eight wide mobile four wide tablet four wide computer column"
                        >
                          <img
                            class="ui centered small circular image"
                            src="./static/images/wireframe/square-image.png"
                          />
                          <div class="ui large basic label">Label</div>
                          <p>Something else</p>
                        </div>
                        <div
                          class="eight wide mobile four wide tablet four wide computer column"
                        >
                          <img
                            class="ui centered small circular image"
                            src="./static/images/wireframe/square-image.png"
                          />
                          <div class="ui large basic label">Label</div>
                          <p>Something else</p>
                        </div>
                        <div
                          class="eight wide mobile four wide tablet four wide computer column"
                        >
                          <img
                            class="ui centered small circular image"
                            src="./static/images/wireframe/square-image.png"
                          />
                          <div class="ui large basic label">Label</div>
                          <p>Something else</p>
                        </div>
                      </div>
                      <div class="ui hidden section divider"></div>
                      <div class="row">
                        <h1 class="ui huge dividing header">Section title</h1>
                      </div>
                      <div class="row">
                        <table class="ui single line striped selectable unstackable table">
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Header</th>
                              <th>Header</th>
                              <th>Header</th>
                              <th>Header</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>1,001</td>
                              <td>Lorem</td>
                              <td>ipsum</td>
                              <td>dolor</td>
                              <td>sit</td>
                            </tr>
                            <tr>
                              <td>1,002</td>
                              <td>amet</td>
                              <td>consectetur</td>
                              <td>adipiscing</td>
                              <td>elit</td>
                            </tr>
                            <tr>
                              <td>1,003</td>
                              <td>Integer</td>
                              <td>nec</td>
                              <td>odio</td>
                              <td>Praesent</td>
                            </tr>
                            <tr>
                              <td>1,003</td>
                              <td>libero</td>
                              <td>Sed</td>
                              <td>cursus</td>
                              <td>ante</td>
                            </tr>
                            <tr>
                              <td>1,004</td>
                              <td>dapibus</td>
                              <td>diam</td>
                              <td>Sed</td>
                              <td>nisi</td>
                            </tr>
                            <tr>
                              <td>1,005</td>
                              <td>Nulla</td>
                              <td>quis</td>
                              <td>sem</td>
                              <td>at</td>
                            </tr>
                            <tr>
                              <td>1,006</td>
                              <td>nibh</td>
                              <td>elementum</td>
                              <td>imperdiet</td>
                              <td>Duis</td>
                            </tr>
                            <tr>
                              <td>1,007</td>
                              <td>sagittis</td>
                              <td>ipsum</td>
                              <td>Praesent</td>
                              <td>mauris</td>
                            </tr>
                            <tr>
                              <td>1,008</td>
                              <td>Fusce</td>
                              <td>nec</td>
                              <td>tellus</td>
                              <td>sed</td>
                            </tr>
                            <tr>
                              <td>1,009</td>
                              <td>augue</td>
                              <td>semper</td>
                              <td>porta</td>
                              <td>Mauris</td>
                            </tr>
                            <tr>
                              <td>1,010</td>
                              <td>massa</td>
                              <td>Vestibulum</td>
                              <td>lacinia</td>
                              <td>arcu</td>
                            </tr>
                            <tr>
                              <td>1,011</td>
                              <td>eget</td>
                              <td>nulla</td>
                              <td>Class</td>
                              <td>aptent</td>
                            </tr>
                            <tr>
                              <td>1,012</td>
                              <td>taciti</td>
                              <td>sociosqu</td>
                              <td>ad</td>
                              <td>litora</td>
                            </tr>
                            <tr>
                              <td>1,013</td>
                              <td>torquent</td>
                              <td>per</td>
                              <td>conubia</td>
                              <td>nostra</td>
                            </tr>
                            <tr>
                              <td>1,014</td>
                              <td>per</td>
                              <td>inceptos</td>
                              <td>himenaeos</td>
                              <td>Curabitur</td>
                            </tr>
                            <tr>
                              <td>1,015</td>
                              <td>sodales</td>
                              <td>ligula</td>
                              <td>in</td>
                              <td>libero</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
    </main>
    <script src="js/jquery.min.js"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
      var menu = document.querySelector('#menu');
      var main = document.querySelector('main');
      var drawer = document.querySelector('.nav');

      menu.addEventListener('click', function(e) {
        drawer.classList.toggle('open');
        e.stopPropagation();
      });
      main.addEventListener('click', function() {
        drawer.classList.remove('open');
      });
    </script>
</body>
</html>