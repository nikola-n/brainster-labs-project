<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brainster Labs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>


<body>

    <nav class="navbar navbar-default col-md-12 col-sm-12 col-xs-12">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-md-2 col-sm-12 col-xs-12">
                    <a class="navbar-brand text-center " href="index.php">
                        <img src="img/Brainster-Logo-031.png" class="logo" alt="logo">
                    </a>
                </div>
                <div class="container">
                    <div class="navigation">
                        <div onclick="showSidebar()" class="toggle-nav">
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="sidebar">
                            <a onclick="closeSidebar()"><i class="fa fa-times fa-2x"></i></a>
                            <a href="">Академија за маркетинг</a>
                            <a href="">Академија за програмирање</a>
                            <a href="">Академија за data science</a>
                            <a href="">Академија за дизајн</a>
                            <a class="button-a" href="/form.php" target="_blank"><button type="submit" class="btn btn-danger nav-btn-1">Вработи наш студент</button></a>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav col-md-8 center hidden-sm">
                        <li><a href="https://www.brainster.io/marketpreneurs" target="_blank">Академија за
                                маркетинг<span class="sr-only">(current)</span></a></li>
                        <li><a href="http://codepreneurs.co/" target="_blank">Академија за програмирање</a></li>
                        <li><a href="#">Академија за data science</a></li>
                        <li><a href="https://www.brainster.io/design" target="_blank">Академија за дизајн</a></li>
                    </ul>
                    <div class="navbar-right col-md-2 hidden-sm">
                        <form class="navbar-form">
                            <div class="form-group">
                                <button type="submit" class="btn btn-danger nav-btn"><a class="button-a" href="/form.php" target="_blank">Вработи наш студент</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <h1 class="form-title text-center">Вработи студенти</h1>
        </div>
    </div>
    <form action="database.php" method="post">
        <div class="container-fluid col-md-6 col-md-offset-3 form">
            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="name"><b>Име и презиме</b></label>
                    <input type="text" class="form-control" name="name" required placeholder="Вашето име и презиме">
                </div>
                <div class="form-group col-md-6 col-xs-12">
                    <label for="company-name"><b>Име на компанија</b></label>
                    <input type="text" class="form-control" name="company_name" required placeholder="Име на вашата компанија">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="email"><b>Контакт имејл</b></label>
                    <input type="email" class="form-control" name="email" required placeholder="Контакт имејл на вашата компанија">
                </div>
                <div class="form-group col-md-6  col-xs-12">
                    <label for="text"><b>Контакт телефон</b></label>
                    <input type="text" class="form-control" id="text" name="phone_number" required placeholder="Контакт телефон на вашата компанија">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6 col-xs-12">
                    <label for="type">Тип на студенти</label>
                    <select name="type" class="form-control" id="sel1" style="font-size: 12px; height: 51px; font-weight: bold;">
                        <option class="selectPlaceholder" selected disabled hidden>Изберете тип на студент </option>
                        <option name="marketing" value="marketing">Студенти од маркетинг</option>
                        <option name="developer" value="developer">Студенти од програмирање</option>
                        <option name="science" value="science">Студенти од data science</option>
                        <option name="design" value="design">Студенти од дизајн</option>
                    </select>
                </div>


                <!-- <div class="form-group col-md-6 col-xs-12">
                    <label for="dropdown"><b>Тип на студенти</b></label>
                    <div class="dropdown">
                        <button class="btn btn-block form-control dropdown-toggle selected-style" type="button" name="type"
                            id="dropdownMenu1565" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <b name ="type"class="float-left">Изберете тип на студент</b>
                            <i class="fas fa-check float-right"></i>
                        </button>
                        <ul class="dropdown-menu form-control" name="type" required aria-labelledby="dropdownMenu1565">

                            <li name="marketing" value="marketing"><a onclick="dropdownMenu1565Set(this);" name="marketing" value="science">Студенти од
                                    маркетинг</a></li>
                            <li name="developer" value="developer"><a onclick="dropdownMenu1565Set(this);" name="developer" value="science">Студенти од
                                    програмирање</a></li>
                            <li name="science" value="science"><a onclick="dropdownMenu1565Set(this);"  name="science" value="science">Студенти од data science</a></li>
                            <li name="design" value="design"><a onclick="dropdownMenu1565Set(this);" name="design" value="design">Студенти од дизајн</a>
                            </li>
                        </ul>
                    </div>
                </div> -->

                <div class="form-group col-md-6  col-xs-12">
                    <button type="submit" class="btn btn-block form-control form-button">ИСПРАТИ</button>
                </div>
            </div>
        </div>
    </form>


    <div class="container-fluid col-md-12 background-2 col-sm-12 col-xs-12">
        <div class="row">
            <div class="text-center mobile-text">Изработено со <span class="amp">&hearts;</span> од студентите на
                Brainster</div>
        </div>
    </div>






    <script src="main.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>

</html>