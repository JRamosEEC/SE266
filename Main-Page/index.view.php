<!DOCTYPE html>
<html lang="en">
<head>
    <!--Justin Ramos-->
    <!--5/30/2021-->
    <!--202130_SE137.13-->
    <!---->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Week 6 Assignment - Software Layout">
    <meta name="author" content="Justin Ramos">
    <title>Justin Ramos - Home Page</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="row nav-bar align-items-center">
        <div id="TitleContainer" class="col-lg-4">
            <h1 class="col-lg-3">Justin Ramos Portfolio</h1>
        </div>
        <div id="ButtonContainer" class="col-lg-8">
            <div class="row p-1">
                <a id="homeB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="#" role="button">Home</a>
                <a id="AssignmentsB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="assignments.php" role="button">Assignments</a>
                <a id="GitRepoB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="https://github.com/JRamosEEC/SE266" role="button" target="_blank">GitHub Repository</a>

                <a id="GitResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="gitResource.php" role="button">GitHub Resources</a>
                <a id="HerokuResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="herokuResource.php" role="button">Heroku Resources</a>
                <a id="PhpResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="phpResource.php" role="button">PHP Resources</a>
            </div>
        </div>
    </div>

    <section id="home" class="">
        <div class="title col-sm-12 center-vertical">Home Page</div>
        
        <div class="row ml-auto">
            <div class=" d-flex flex-column col-sm-6 center-vertical">
                <img src="images/featured.png" alt="featured project image">
                <div class="img-text p-2 bd-highlight center-text section-margin">Featured Project - My Home Page</div>
            </div>

            <p class="featured-desc col-sm-6 center-vertical">This was one of the first iterations of the homepage project, and it served as our introduction to the grid system included with css. We had a some conditions to follow with a lot of room for creative decision.</p>
        </div>
        
        <div class="row desc-bar container-fluid section-margin">
            <p class="desc-bar-title col-md-4 center-text center-vertical">BIO</p>
            <p class="desc-bar-text col-md-8 center-vertical">Hello! My name is Justin Ramos and currently I'm a student for NEIT studying for software engineering. I'm a hardworker and I love to learn new things whenever possible. I would say it's more difficult to find me not looking something up, because whenever I have a question I always need to find some answers or research. I love to program in my free time, when I have it. I like to tackle tough concepts and big projects over the smaller ones, because there's a greater sense of accomplishments. I need a strict schedule, without one I can easily get lost so I love deadlines and a plan of action. Overall I'd say I generally just love this field. I'm learning so many new great things and I feel accomplished as I do so.</p>
        </div>

        <div class="row desc-bar container-fluid section-margin">
            <p class="desc-bar-title col-md-4 center-text center-vertical">Hobbies</p>
            
            <div class="col-md-8 center-vertical">
                <a id="hobIndoor" class="row desc-bar-text center-text center-vertical" href="https://wgi.org/percussion/" role="button" target="_blank">Indoor Percussion</a>
                <a id="hobProgramming" class="row desc-bar-text center-text center-vertical" href="https://hackr.io/blog/what-is-programming" role="button" target="_blank">Programming</a>
                <a id="hobPiano" class="row desc-bar-text center-text center-vertical" href="https://www.youtube.com/watch?v=4y33h81phKU" role="button" target="_blank">Piano - I can play this song :)</a>
            </div>
        </div>

        <div class="row desc-bar container-fluid section-margin">
            <p class="desc-bar-title col-md-4 center-text center-vertical">GitHub</p>
            <p class="desc-bar-text col-md-8 center-vertical">SE266.05 Repository : <a href="https://github.com/JRamosEEC/SE266" target="_blank"><u>https://github.com/JRamosEEC/SE266</u></a></p>
        </div>

        <div class="row desc-bar bar-social center-text container-fluid section-margin">
            <p class="desc-bar-title col-lg-4 center-text center-vertical">Social Media</p>
            <div class="desc-bar-text col-lg-8 center-vertical"><a href="https://www.instagram.com/justin_d_ramos/" target="_blank"><img src="images/InstLogo.png" alt="Instagram icon with embedded link" class="social-icon"></a>                     <a href="https://www.facebook.com/justin.ramos.5872" target="_blank"><img src="images/FacebookLogo.png" alt="Facebook icon with embedded link" class="social-icon"></a></div>
        </div>
    </section>

    <footer class="row container-fluid">
        <div id="Footer" class="footer-bar col-sm-12 center-text center-vertical">&copy; 2021</var></div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        var footer = document.getElementById("Footer");
        var lastUpdate = "";
        
        var client = new XMLHttpRequest();
        client.open('GET', 'lastUpdated.txt');
        client.onreadystatechange = function() {
            footer.innerHTML = "&copy; 2021   -   Last Modified : " + client.responseText;
        }
        client.send(); 
    </script>
</body>

