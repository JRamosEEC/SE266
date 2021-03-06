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
                <a id="homeB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="index.php" role="button">Home</a>
                <a id="AssignmentsB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="assignments.php" role="button">Assignments</a>
                <a id="GitRepoB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="https://github.com/JRamosEEC/SE266" role="button" target="_blank">GitHub Repository</a>

                <a id="GitResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="gitResource.php" role="button">GitHub Resources</a>
                <a id="HerokuResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="herokuResource.php" role="button">Heroku Resources</a>
                <a id="PhpResourceB" class="col-lg-4 center-vertical btn btn-primary ml-auto nav-button-border" href="#" role="button">PHP Resources</a>
            </div>
        </div>
    </div>

    <section id="home" class="">
        <div class="title col-sm-12 center-vertical">PHP Resources</div>
        <br>
    
        <li><a href="https://phpdelusions.net/pdo" target="_blank"><u>(The only proper) PDO tutorial</u></a></li>
        <li><a href="https://phptherightway.com/" target="_blank"><u>PHP The right way</u></a></li>
        <br>
    </section>

    <footer class="row container-fluid">
        <div class="footer-bar col-sm-12 center-text center-vertical">&copy; 2021</div>
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

