<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once "design/dependecies.php"; ?>
</head>
<body>
<?php require_once "design/nav.php";?>
<section class="results padding-all not-fullscreen flex column padding200 ">
    <div class="box-header width100 flex row">
        <form class="search-box flex1" action="#">
            <button class="flex1 button-search" type="submit"><i class="fa fa-search"></i></button>
            <input class="input-button flex1" type="text" placeholder="caută serviciul de care ai nevoie" name="search">
            <ul class="flex1">
                <li class="dropdown-v2 ">
                    <button onclick="myFunction()" class="dropbtn-v2 nav-link">unde ai nevoie de ajutor?</button>
                    <div id="myDropdown-v2" class="dropdown-content-v2">
                        <a href="analiza-discord.html">In asteptare</a>
                        <a href="incepatori.html">Comenzi noi</a>
                        <a href="intermediar.html">Comenzi terminate</a>
                    </div>
                </li>
            </ul>
            <button class="search-button flex1">caută</button>
        </form>
        <button class="searh"><i class="fa fa-map-marker black" aria-hidden="true"></i></button>
    </div>
</section>

<section class="rezultate padding-all not-fullscreen flex column">
    <h2 class="title">Rezultate pentru ”curățenie în casă”</h2>
    <ul class="flex row width100">
        <a class="blue-color" href="">Categorie</a>    
        <a class="blue-color" href="">Buget</a>    
        <a class="blue-color width200 " href="">Ordonează după: preț crescător</a>    
        <a class="blue-color" href="">Salvează căutarea</a>    
        <a class="blue-color" href=""><i class="fa fa-heart-o" aria-hidden="true"></i></a>
    </ul>
</section>
<section class="grid-promovati flex not-fullscreen padding-all column">
    <h2 class="title">To do-eri promovați</h2>
    <div class="grid clearfix">
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card">
                <div class="item-card-img img-tri">
                    <div class="item-text">
                        <h6>PROMOVAT</h6>
                    </div>
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="grid-promovati grid-gasiti flex not-fullscreen padding-all column">
    <h2 class="title">To do-eri găsiți</h2>
    <h3 class="title sub-title">(am găsit 352 to do-eri)</h3>
    <div class="grid clearfix">
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
        <div class="grid-box box-quarter">
            <div class="item-card white">
                <div class="item-card-img img-tri">
                </div>
                <div class="item-card-text">
                    <h2>Ana Paraschiv</h2>
                    <div class="item-card-stars">
                        <div class="flex">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        </div>
                        <h6>(32 reviews)</h6>
                    </div>
                    <h5 class="location"><i class="fas fa-map-marker-alt"></i> București</h5>
                    <div class="services">
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Curățenie</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Plimbare câini</h4>
                        <h4 class="service-item"><i class="fa fa-check" aria-hidden="true"></i> Babysitter</h4>
                    </div>
                </div>
                <div class="item-promovat">
                    <h5>13-18 lei/oră</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<ul class="pagination">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
</ul>

<?php require_once "design/footer-not.php";?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
    responsive:{
        0:{
            items:1,
            nav:false
        },
        700:{
            items:2,
            nav:false
        },
        1000:{
            items:3,
            nav:false
        },
        1500:{
            items:4,
            nav:false
        }
    }
})
</script> 
</body>
</html>