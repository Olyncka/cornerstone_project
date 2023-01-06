<div>
    <!-- WELCOME-->
    <section class="welcome p-t-10">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-4">Welcome
                        <span>{{ Auth::user()->name }}</span>
                    </h1>
                    <hr class="line-seprate">
                </div>
            </div>
        </div>
    </section>
    <!-- END WELCOME-->

    <!-- STATISTIC-->
    <section class="statistic statistic2">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="statistic__item statistic__item--blue">
                        <h2 class="number">{{ $itemsCount }}</h2>
                        <span class="desc">All Needs</span>
                        <div class="icon">
                            <i class="zmdi zmdi-calendar-note"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="statistic__item statistic__item--red">
                        <h2 class="number">150</h2>
                        <span class="desc">All Donors</span>
                        <div class="icon">
                            {{-- <i class="zmdi zmdi-money"></i> --}}
                            <i class="fas fa-donate"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
