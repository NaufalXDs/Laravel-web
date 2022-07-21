@include('templates.main')

<div class="container-fluid" style="height: 100%;">
    <div class="row main-site-row" style="height: 100%;">
        <div class="col-md-2 col-sm-3 col-12 sidebar">
            <!-- include menu-samping -->
            @include('templates.sidebar')
        </div>
        <!-- Content -->
        <div class="col-md-10 col-sm-9 col-12 mainContent">
            <!-- jumbotron -->
            <section id="page-jumbo" class="jumbo-top">
                <h1 class="page-title">About</h1>
                <p class="page-jumbo-text">
                    hi my name is Naufal i am a junior high student, this
                    personal website here I show you
                    <a href="#" data-toggle="tooltip" title="Project Gabut"
                        style="
                    text-decoration: none; color: #384d87;">
                        My Project...
                    </a>,although only a little :).
                </p>
            </section>
            <!-- <div class="row">
                <div class="col-md-9 col-sm-7 col-12">
                    <div class="work-inner">
                        <img src="/assets/img/project/1.png" draggable="false" alt="Sandorns Bot" class="work-img">
                        <div class="work-info">
                            <p class="work-name">Sandorns Bot</p>
                            <p class="work-type">Discord Bot </p>
                            <span class="work-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</div>

@include('templates.footer')
