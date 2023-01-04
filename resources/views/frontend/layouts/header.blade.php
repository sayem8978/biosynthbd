<header id="header "style="height: 10rem; overflow:hidden;">
    <nav class="navbar navbar-inverse navbar-lg navbar-fixed-top" style="z-index:99;background-color:#fff" >
        <div class="container">
            {{-- <div class=""> --}}
            <div class="navbar-header">
                <a href="{{ url('/') }}" class="navbar-brand brand"><img
                        src="{{ asset('ui/frontend') }}/images/bsclogo.png" alt="logo"></a>
            </div>

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>



            <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right navbar-login">
                    <li>
                        <a href="tel:1886888809"><span class="icon-call"></span> 880-1886888809</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right ">
                    <li class="dropdown mm-menu ">
                        <a class="page-scroll " href="#home">Home</a>

                    </li>

                    <li class="dropdown mm-menu">
                        <a class="page-scroll" href="{{ url('aboutus') }}">
                            <i class="fa fa-user"></i>
                            About Us
                        </a>
                    </li>


                    <li class="dropdown" style="position: relative; opacity: 0.9;">
                        <a class="page-scroll" href="#businesslines">Service</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sourcing</a></li>
                            <li><a class="dropdown-item" href="#">Linking up with manufacturers</a></li>
                            <li><a class="dropdown-item" href="#">Marketing services</a></li>
                            <li><a class="dropdown-item" href="#">Product knowledge & Market survey</a></li>
                        </ul>
                    </li>


                    <li class="dropdown" style="position: relative;">
                        <a class="page-scroll" href="#businesslines">Business Lines</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('business-line') }}">
                                    {{-- <i class="fa-solid fa-hospital"></i> --}}
                                    Pharmaceuticals</a></li>
                            <li><a class="dropdown-item" href="#">Speciality Chemicals</a></li>
                            <li><a class="dropdown-item" href="#">Construction Chemicals</a></li>
                            <li><a class="dropdown-item" href="#">Exports</a></li>
                        </ul>
                    </li>
                    <li class="dropdown mm-menu">
                        <a class="page-scroll" href="#reviews">Partners</a>
                    </li>

                    <li class="dropdown mm-menu">
                        <a class="page-scroll" href="#Carrier">Carrier</a>
                    </li>
                    <li class="dropdown mm-menu">
                        <a class="page-scroll" href="#Contactus">Contact US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
