<div class="container-fluid header_menu " style="padding-top:5px; padding-bottom:5px;">
    <div class="row">
        <div class="col-md-6">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 " id="search" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 icon-search" type="submit"> <i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <div class="col-md-3">
        </div>
        <div class="col-md-1" style="">
            <a href="#"><i class="fa fa-shopping-cart" aria-hidden="true" style=""></i></a>

        </div>
        <div class="col-md-1 " >
            <a href="#" class="a-login"><i class="fa fa-sign-in" aria-hidden="true"></i>Login</a>

        </div>
        <div class="col-md-1 ">
            <a href="#" class="a-logout"><i class="fa fa-sign-out" aria-hidden="true"></i></span> Logout</a>

        </div>

    </div>


</div>
<!-- <div class="div-logo" style="taxt-align:center">
    <a class="header__shop-name" href="#" id="logo">DUCNGUYEN</a>
</div> -->
<nav class="navbar navbar-expand-lg navbar-light bg-color">

    <div class="container menu">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="header__shop-name" href="#" id="hid-logo">DUCNGUYEN</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-full justify-content-around">
                <li class="nav-item">
                    <a class="nav-link" href="#">Bảng Giá</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Khách Hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Con Nguoi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Kho Ứng Dụng</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle dropdowndiv" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="" aria-expanded="false">
                        Thêm
                    </a>
                    <div class="dropdown-menu" aria-labelledby="">
                        <a class="dropdown-item" href="#">Item 1</a>
                        <a class="dropdown-item" href="#">Item 2 Item 2</a>
                        <a class="dropdown-item" href="#">Item 3 Item3 Item 3</a>
                    </div>
                </li>

            </ul>
        </div>


    </div>

</nav>
<style>
    /* .icon-search:hover .form-control{
        display: none;
    } */
    .header_menu a {
        text-decoration: none;
    }

    

    .header_menu {
        background-color: #ddd;

    }

    /* .header_menu li{
        background-color: #ddd;
        display: block;
    } */
    .form-control {
        display: none;
    }

    .menu {
        position: relative;
        text-align: center;
    }

    .dropdown-menu a:hover {}

    .dropdown:hover .dropdowndiv {}

    .dropdown {
        position: relative;
        display: inline-block;
    }

    .dropdowndiv {
        color: white;
        padding: 8px;
        font-size: 20px;
        border: none;
    }

    .dropdown-menu {
        margin-top: 0px;
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 160px;
        box-shadow: 0px 0px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    #hid-logo {
        /* // display: none; */
        font-size: 35px;
        color: brown !important;
        text-decoration: none;
    }

    .dropdown-menu a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .bg-color {
        background: bisque;
    }

    #navbarSupportedContent {
        padding-left: 100px;
    }

    .nav-item {
        padding: 0 5px;
        font-size: 20px;
    }

    @media(max-width:1199px) {
        .nav-item {
            padding: 0 0px;
        }

        #navbarSupportedContent {
            padding-left: 5px;
        }
    }

    .nav-item:hover {
        color: red !important;

    }

    .div-logo {
        text-align: center;
    }

    #logo {
        font-size: 25px;
        color: brown !important;
        text-decoration: none;
    }

    @media (min-width: 776px) {
        .dropdown:hover .dropdown-menu {
            display: block;
        }
    }

    @media (max-width: 991px) {
        /* #hid-logo{
            display: block;
        }
        .div-logo{
            display: none;
        } */
    }
</style>