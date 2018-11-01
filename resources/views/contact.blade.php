@extends('layouts')
@section('main')
    <style type="text/css">
        #allmap {width: 1170px;height: 780px;overflow: hidden;margin:0 auto;font-family:"微软雅黑";}
    </style>
    <!-- banner -->
    <div class="banner1">
        <h3>联系我们</h3>
    </div>
    <!-- //banner -->
    <!-- contact -->
    <div class="services">
        <div class="container">
            <h3 class="agile_head">Contact Us</h3>
            <p class="w3_agile_para">Suspendisse bibendum ex sit amet tellus finibus</p>
            <div class="agileits_w3layouts_contact_grids">
                <div class="col-md-5 agileits_w3layouts_contact_gridl">
                    <div class="agileits_mail_grid_right_grid">
                        <h4>About Us</h4>
                        <p>Itaque earum rerum hic tenetur a sapiente delectus,
                            ut aut reiciendis voluptatibus maiores alias consequatur.</p>
                    </div>
                    <div class="agileits_mail_grid_right_grid">
                        <h4>Social Media</h4>
                        <ul class="wthree_mail_social">
                            <li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="agile_twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                            <li><a href="#" class="w3_agile_vimeo"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="agileits_mail_grid_right_grid">
                        <h4>Contact Info</h4>
                        <ul class="contact_info">
                            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, 3FB3240, Ukraine.</li>
                            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7 agileits_w3layouts_contact_gridr">
                    <form action="#" method="post">
                        <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
                        <div class="agileits_leave">
                            <label>Name :</label>
                            <input type="text" name="Name" placeholder=" " required="" />
                        </div>
                        <div class="agileits_leave">
                            <label>Email :</label>
                            <input type="email" name="Email" placeholder=" " required="" />
                        </div>
                        <div class="agileits_leave">
                            <label>Subject :</label>
                            <input type="text" name="Subject" placeholder=" " required="" />
                        </div>
                        <div class="clearfix"> </div>
                        <input type="submit" value="Submit">
                    </form>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="map">
        <div id="allmap"></div>
    </div>
    <!-- //contact -->
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=xaKr9skHnHhnywwrFsRwzoj4"></script>
    <script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("allmap");    // 创建Map实例
        map.centerAndZoom(new BMap.Point(116.404, 39.915), 14);  // 初始化地图,设置中心点坐标和地图级别
        //添加地图类型控件
        map.addControl(new BMap.MapTypeControl({
            mapTypes:[
                BMAP_NORMAL_MAP,
                BMAP_HYBRID_MAP
            ]}));
        map.setCurrentCity("北京");          // 设置地图显示的城市 此项是必须设置的
        map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    </script>
@endsection