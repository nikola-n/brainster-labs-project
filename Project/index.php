<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Brainster Labs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-default col-md-12 col-sm-12 col-xs-12">
        <div class="container-fluid">
            <div class="row">
                <div class="navbar-header col-md-2">
                    <a class="navbar-brand text-center" href="index.php">
                        <img src="Brainster-Logo-031.png" class="logo" alt="logo">
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
                            <a class="button-a" href="/form.php" target="_blank"><button type="submit"
                                    class="btn btn-danger nav-btn-1">Вработи наш студент</button></a>
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
                        <form class="navbar-form" action="form.php" method="post">
                            <div class="form-group ">
                                <button onclick="location.href='/form.php'" type="submit" class="btn  nav-btn"><a class="button-a" >Вработи наш студент</a></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-fluid background">
        <div class="row">
            <h1 class="text-center title">Brainster Labs</h1>
        </div>
    </div>

    <ul class="academies">
        <li onclick="setActive('marketing')" class="active">Проекти на студенти од академијата<br /> за маркетинг<i
                class="fa fa-check-circle"></i></li>
        <li onclick="setActive('developer')">Проекти на студенти од академијата<br /> за програмирање<i
                class="fa fa-check-circle"></i></li>
        <li onclick="setActive('design')">Проекти на студенти од академијата<br /> за дизајн<i
                class="fa fa-check-circle"></i></li>
    </ul>

    <div class="container-fluid cards col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
        <div class="row">
            <h1 class="text-center title-1 col-xs-12 col-sm-12">Проекти</h1>
        </div>
        <div class="row">
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card1.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card2.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card3.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card4.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card5.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="myFunction()" class="col-sm-6 col-md-4 marketing card-holder">
                <div class="thumbnail">
                    <img src="card6.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Mаркетинг</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="design()" class="col-sm-6 col-md-4 design card-holder">
                <div class="thumbnail">
                    <img src="card7.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Дизајн</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="design()" class="col-sm-6 col-md-4 design card-holder">
                <div class="thumbnail">
                    <img src="card8.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Дизајн</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="design()" class="col-sm-6 col-md-4 design card-holder">
                <div class="thumbnail">
                    <img src="card9.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Дизајн</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
            <div onclick="design()" class="col-sm-6 col-md-4 design card-holder">
                <div class="thumbnail">
                    <img src="card10.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Дизајн</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card11.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card12.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card13.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card14.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card15.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card16.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card17.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card18.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card19.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>

            <div onclick="myDeveloper()" class="col-sm-6 col-md-4 developer card-holder">
                <div class="thumbnail">
                    <img src="card20.jpg" class="img-edit" alt="...">
                    <div class="caption">
                        <span class="borders">Академија за Програмирање</span>
                        <h3 class="font-1"><b>Име на проектот стои овде <br>
                                во две линии</b></h3>
                        <p class="font-2">Краток опис во кој студентите ќе можат <br>да допишат за што се работи во
                            проектот.</p>
                        <span class="font"><b>Април - Октомври 2019</b></span>
                        <p class="text-right"><a href="#" class="btn btn-danger left" role="button">Дознај повеќе</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid col-md-12 col-sm-12 col-xs-12 background-2">
        <div class="row">
            <div class="text-center mobile-text">Изработено со <span class="amp">&hearts;</span> од студентите на
                Brainster</div>
        </div>
    </div>




    <script src="main.js"></script>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

</body>



</html>