<nav class="navbar navbar-default">
    <div class="container-fluid col-md-10 col-md-offset-1 col-xs-12">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
                <div class="navbar-header col-md-2">
                <a href="{{ URL::to ('/home')}}"class="navbar-brand">
                        <img src="/img/logo_footer_black.png" class="logo img-responsive" alt="logo"><span class="logoBr">Brainster</span>
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
                            <a href="http://codepreneurs.co/">Академија за програмирање</a>
                            <a href="https://www.brainster.io/marketpreneurs">Академија за маркетинг</a>
                            <a href="https://www.brainster.io/design">Академија за дизајн</a>
                            <a href="https://blog.brainster.co/">Академија за блог</a>
                            <a href="#" data-toggle="modal" data-target="#myModal" target="_blank">Вработи наши студенти</a>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav col-md-8 col-md-offset-2 center text-center">
                        <li><a href="http://codepreneurs.co/" target="_blank">Академија за програмирање<span class="sr-only">(current)</span></a></li>
                        <li><a href="https://www.brainster.io/marketpreneurs" target="_blank">Академија за
                                маркетинг</a></li>
                        <li><a href="https://www.brainster.io/design" target="_blank">Академија за дизајн</a></li>
                        <li><a href="https://blog.brainster.co/" target="_blank">Блог</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#myModal" target="_blank">Вработи наши студенти</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>

