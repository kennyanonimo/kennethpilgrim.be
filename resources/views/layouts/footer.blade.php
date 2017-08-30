<footer id="kpFooter">
    <div class="navbar navbar-inverse navbar-fixed-bottom">
        <div class="container-fullwidth">
            <div class="navbar-collapse collapse" id="footer-body">
                <ul class="nav navbar-nav">
                    <li>
                        <div id="kpFooterContainer" class="container">
                            <div class="row">
                                <div id="getInTouch" class="col-xs-12 col-sm-4">
                                    <p><span class="lead">Get in touch!</span></p>
                                    <table border="1" cellpadding="1" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-envelope-o"></i></td>
                                                <td><a href="mailto:kenneth@kennethpilgrim.be"><span>kenneth@kennethpilgrim.be</span></a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-envelope-o"></i></td>
                                                <td><a href="mailto:root@root.land"><span>root@root.land</span></a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-phone"></i></td>
                                                <td><a href="tel:+32495706598">+32 495 70 65 98</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div>
                                        <ul class="list-inline">
                                            @foreach($sociallinkArray as $link)
                                                <li><a target="_blank" href="{{$link->link}}"><i class="fa {{$link->icon}}"></i></a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div id="contactHours" class="col-xs-12 col-sm-4">
                                    <p><span class="lead">Contact hours</span></p>
                                    <table border="1" cellpadding="1" cellspacing="1">
                                       <tbody>
                                           <tr><td><i class="fa fa-clock-o"></i></td><td>Weekdays</td><td>20:00</td><td>22:00</td></tr>
                                           <tr><td><i class="fa fa-clock-o"></i></td><td>Saturday</td><td>12:00</td><td>20:00</td></tr>
                                            <tr><td><i class="fa fa-clock-o"></i></td><td>Sunday</td><td>12:00</td><td>16:00</td></tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div id="copyright" class="col-xs-12 col-sm-4">
                                    <p><span class="lead">Legal</span></p>
                                    <table border="1" cellpadding="1" cellspacing="1">
                                        <tbody>
                                            <tr>
                                                <td><i class="fa fa-copyright"></i></td>
                                                <td><a href="./mit">Kenneth Pilgrim &middot; 2017</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user-secret"></i></td>
                                                <td><a href="./privacy">Privacy Policy</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-user-secret"></i></td>
                                                <td><a href="./terms">Terms of Service</a></td>
                                            </tr>
                                            <tr>
                                                <td><i class="fa fa-server"></i></td>
                                                <td>Created by <a href="https://root.land" target="_blank">RootLand</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#footer-body">
                    <i class="fa fa-info"></i>
                </button>
            </div>
        </div>
    </div>
</footer>