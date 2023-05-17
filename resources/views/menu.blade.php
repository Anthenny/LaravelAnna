<div class="menuwrapper">
    <div class="fullwidth fwMenu">
        <div class="container cMenu">
            <div class="left__col">
                <div class="menu__toggler__wrapper js-menu-toggler">
                    <span class="open">Menu</span>
                    <span class="close">Close</span>
                    <div class="menu__toggler">
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
            <div class="mid__col">
                <a  class="logo" href="#">
                    <img src="{{url('/images/logo-small-v2.webp')}}" alt="Image"/>
                </a>
            </div>
            <div class="right__col">
                <a href="#" class="js-search">
                    <i class="icon icon-search"></i>
                    <i class="icon icon-cancel-circled"></i>

                </a>
                <a href="#">
                    <i class="icon icon-user"></i>
                </a>
                <a href="#">
                    <i class="icon icon-heart"></i>
                </a>
                <a href="#">
                    <i class="icon icon-basket"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="fullwidth fwSearch">
        <div class="container cSearch">
            <form class="searchy" action="">
                <input class="inputy" type="text" autocomplete="off" placeholder="Zoeken...">
                <button class="buttony">Zoeken</button>
            </form>
        </div>
    </div>
</div>
@include('offcanvas')
