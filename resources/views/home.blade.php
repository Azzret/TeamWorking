@extends('layouts.app')

@section('styles')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href ="http://www.fas.nus.edu.sg/templates/fass_nus/css/template-default.css" rel="stylesheet" type="text/css">
@endsection


@section('content')










    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner align-content-end" role="listbox">
            <div class="item active" style="align-content: center">
                <img src="image\first.jpg" alt="">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            <div class="item flex-center">
                <img src="image\second.jpg" alt="" style="align-content: center">
                <div class="carousel-caption">
                    ...
                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    </div>
    <div style="text-align:center">
        <h2>Факультеты</h2>
        <p>Click on the boxes below:</p>
    </div>

    <!-- Three columns -->
    <div class="row">
        <div class="column" onclick="openTab('b1');" style="background:#474953;">
            Факультет Информационных Технологий
        </div>
        <div class="column" onclick="openTab('b2');" style="background:#474953;">
            Технологический Факультет
        </div>
        <div class="column" onclick="openTab('b3');" style="background:#474953;">
            Энергетический Факультет
        </div>

    </div>

    <!-- Full-width columns: (hidden by default) -->
    <div id="b1" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <a href="/software" style="color: white;" target="_blank">Программная инженерия</a>
        <br>
        <a href="#" style="color: white;" target="_blank">Информационная безопасность</a>

    </div>
    <div id="b2" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <a href="#" style="color: white;" target="_blank">Технология производство продукта растительного сырья</a>
        <br>
        <a href="#" style="color: white;" target="_blank">Технология консервирования</a>

    </div>
    <div id="b3" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <a href="#" style="color: white;" target="_blank">Электроэнергетика и электротехника</a>
        <br>
        <a href="#" style="color: white;" target="_blank">Энергосбережение в электротехнике</a>
    </div>
    <div class="row">
        <div class="column" onclick="openTab('b4');" style="background:#474953;">
            Инженерно-экономический факультет
        </div>
        <div class="column" onclick="openTab('b5');" style="background:#474953;">
            Факультет транспорта и машиностроения
        </div>
        <div class="column" onclick="openTab('b6');" style="background:#474953;">
            Эколого-экономический факультет
        </div>

    </div>

    <div id="b4" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <a href="#" style="color: white;" target="_blank">Маркетинг в промышленности</a>
        <br>
        <a href="#" style="color: white;" target="_blank">Финансы и кредит</a>

    </div>

    <div id="b5" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
        <a href="#" style="color: white;" target="_blank">Автомобили и автомобильное хозяйство</a>
        <br>
        <a href="#" style="color: white;" target="_blank">Автомобильный сервис</a>
    </div>

    <div id="b6" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

    </div>

    <div class="row">
        <div class="column" onclick="openTab('b7');" style="background:#474953;">
            Инженерно-экономический факультет
        </div>
        <div class="column" onclick="openTab('b8');" style="background:#474953;">
            Факультет транспорта и машиностроения
        </div>


    </div>

    <div id="b7" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>


    </div>

    <div id="b8" class="containerTab" style="display:none;background:gray">
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

    </div>



    <div class="flex-center position-ref full-height">

        <div class="col-4">

        </div>
    </div>
<br><br><br><br>
    <br><br><br><br>
    <br><br><br><br><br><br><br><br>




    <section id="yt_spotlight8" class="block">
        <div class="container">

            <div id="bottom4" class="col-md-3 col-sm-6">

                <div class="module  get-in-touch ">
                    <h3 class="modtitle"></h3>
                    <div class="razd-info">



                        <p style="text-align: center; color: gray;">720044, г. Бишкек, пр. Чынгыза Айтматова (быв. пр. Мира) 66, КГТУ, к.1/324</p>
                        <p style="text-align: center;color: gray;">Тел. (0312) 54-51-77 (приемная комиссия)</p>
                        <p style="text-align: center;color: gray;">e-mail: tagaeva_72@mail.ru</p>
                        <p style="text-align: center;color: gray;">&nbsp;(0312) 54-51-51 (для иностранных студентов),</p>
                        <p style="text-align: center;color: gray;">e-mail: intoffice.kstu@gmail.com</p>
                        <p style="text-align: center;color: gray;">Факс: +966 (312) 54-51-62</p>
                        <p style="text-align: center;color: gray;">rector@kstu.kg</p>


                    </div>
                </div>

                <div class="module  social-icon ">
                    <div class="modcontent clearfix">

                        <div class="list-icon" style="text-align: left;"><div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb rss default  cicle color" title="" href="http://blog.nus.edu.sg/fassnews/" data-original-title="FASSNews"><i class="fa fa-rss"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb facebook default  cicle color" title="" href="https://www.facebook.com/nusfass" data-original-title="Facebook"><i class="fa fa-facebook"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb twitter default  cicle color" title="" href="https://twitter.com/fassnews" data-original-title="Twitter"><i class="fa fa-twitter"></i></a></div> <div class="yt-socialbt"><a data-placement="top" target="_blank" class="sb linkedin default  cicle color" title="" href="https://www.linkedin.com/groups/1917151" data-original-title="Linkedin"><i class="fa fa-linkedin"></i></a></div></div>
                    </div>
                </div>

            </div>
        </div>
        </div>

    </section>

        <script>
            function openTab(tabName) {
                var i, x;
                x = document.getElementsByClassName("containerTab");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                document.getElementById(tabName).style.display = "block";
            }
        </script>
@endsection
