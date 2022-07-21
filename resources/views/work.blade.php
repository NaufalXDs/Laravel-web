@include('templates.main')

<div class="container-fluid" style="height: 100%;">

    <div class="row main-site-row" style="height: 100%;">
        <div class="col-md-2 col-sm-3 col-12 sidebar">
            <!-- include menu-samping -->
            @include('templates.sidebar')
        </div>
        <!-- Content -->
        <div class="col-md-10 col-sm-9 col-12 mainContent">
            <!-- <section id="filter-tags">
                <span onclick=" filterTag('all')" class="filter-tag filter-tag-active">
                    All
                </span>
                <span onclick="filterTag('discord-bots')" class="filter-tag">
                    Discord Bots
                </span>
                <span onclick="filterTag('minecraft')" class="filter-tag">
                    Minecraft
                </span>
            </section> -->
            <!-- jumbotron -->
            <section id="page-jumbo" class="jumbo-top">
                <h1 class="page-title">Work</h1>
                <p class="page-jumbo-text">
                    This is a small part of my project
                </p>
            </section>
            <div class="row" id="column">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="work-inner">
                        <img src="/public/assets/img/1.png" draggable="false" alt="Sandorns Bot" class="work-img">
                        <div class="work-info work-arrow-disable">
                            <p class="work-name">Sandorns Bot</p>
                            <p class="work-type">Discord Bot </p>
                            <span class="work-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="work-inner">
                        <img src="/public/assets/img/1.png" draggable="false" alt="Sandorns Bot" class="work-img">
                        <div class="work-info work-arrow-disable">
                            <p class="work-name">Sandorns Bot</p>
                            <p class="work-type">Discord Bot </p>
                            <span class="work-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="work-inner">
                        <img src="/public/assets/img/1.png" draggable="false" alt="Sandorns Bot" class="work-img">
                        <div class="work-info work-arrow-disable">
                            <p class="work-name">Sandorns Bot</p>
                            <p class="work-type">Discord Bot </p>
                            <span class="work-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="work-inner">
                        <img src="/public/assets/img/1.png" draggable="false" alt="Sandorns Bot" class="work-img">
                        <div class="work-info work-arrow-disable">
                            <p class="work-name">Sandorns Bot</p>
                            <p class="work-type">Discord Bot </p>
                            <span class="work-arrow">
                                <i class="fas fa-arrow-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
