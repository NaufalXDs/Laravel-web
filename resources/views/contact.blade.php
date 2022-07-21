@include('templates.main')

<div class="container-fluid" style="height: 100%;">

    <div class="row main-site-row" style="height: 100%;">
        <div class="col-md-2 col-sm-3 col-12 sidebar">
            <!-- include menu-samping -->
            @include('templates.sidebar')
        </div>
        <!-- Content -->
        <div class="col-md-10 col-sm-9 col-12 mainContent">
            <section id="page-jumbo" class="jumbo-top">
                <h1 class="page-title">Contact Me</h1>
                <p class="page-jumbo-text">
                    Want to request a quote?This is the place to do so.
                </p>
            </section>

            <div class="row">
                <div class="col-md-9 col-sm-7 col-12">
                    <div class="alert alert-success">
                        You quote request has been submitted. You should receive a response in the next 48 hours.
                    </div>
                    <!-- <div class="alert alert-danger">
                        Development Stage.. Contact in <a href="discord.com"
                            style="text-decoration: none; color: #00ff6a;">Discord</a> ! NFLDXD#0011
                    </div> -->
                </div>
                <!-- <div class="contact-section">
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-12">
                                <label for="name-input" class="contact-label">Name</label>
                                <input type="text" name="name" placeholder="Naufal" class="form-control contact-input"
                                    id="name-input">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12">
                                <label for="email-input" class="contact-label">Name</label>
                                <input type="email" name="email" placeholder="ghost@example.com"
                                    class="form-control contact-input" id="email-input">
                            </div>
                            <div class="col-md-6 col-sm-6 col-12 ">
                                <label for="service-input" class="contact-label"></label>
                            </div>
                        </div>
                    </form>
                </div> -->
                <div class="col-md-4 col-sm-5 col-12">
                    @include('templates.contact-sidebar')
                </div>
            </div>
        </div>
    </div>
</div>

@include('templates.footer')
