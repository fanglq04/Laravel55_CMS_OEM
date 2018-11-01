@extends('layouts')
@section('main')
    <!-- banner -->
    <div class="banner1">
        <h3>产品展示</h3>
    </div>
    <!-- //banner -->
    <!-- portfolio -->
    <div class="portfolio">
        <div class="container">
            <h3 class="agile_head">Portfolio</h3>
            <p class="w3_agile_para">Suspendisse bibendum ex sit amet tellus finibus</p>
        </div>
        <div class="w3_agile_portfolio_grids">
            <div class="agile_portfolio_grid">
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/6.jpg" >
                        <div class="view effect">
                            <img src="theme/images/6.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/1.jpg" >
                        <div class="view effect">
                            <img src="theme/images/1.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="agile_portfolio_grid">
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/15.jpg" >
                        <div class="view effect">
                            <img src="theme/images/15.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/5.jpg" >
                        <div class="view effect">
                            <img src="theme/images/5.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="agile_portfolio_grid">
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/3.jpg" >
                        <div class="view effect">
                            <img src="theme/images/3.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="w3_agileits_portfolio_grid">
                    <a href="images/4.jpg" >
                        <div class="view effect">
                            <img src="theme/images/4.jpg" alt=" " class="img-responsive" />
                            <div class="mask"></div>
                            <div class="content">
                                <h4>Lucrative</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- //portfolio -->
    <script type="text/javascript"  src="theme/js/jquery.gallery.js" ></script>
    <script>
        $(function() {
            $('.w3_agile_portfolio_grids').createSimpleImgGallery();
        });
    </script>
@endsection