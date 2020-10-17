<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="{{url('/Admin/dashbord')}}">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">

                    <li class="nav-item ">
                        <a class="nav-link "></a>
                    </li>


                    <li class="nav-item ">
                        <a class="nav-link" href="{{url('/Admin/dashbord')}}"> <i
                                class="fas fa-fw fa-chart-pie"></i>Dashboard </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-user"></i>Users</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Users.index')}}">Users Show</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('Users.create')}}">User Add</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3"><i class="fa fa-file"></i>Blogs</a>

                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blogs.index')}}">Blogs Show</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('blogs.create')}}">New Blog</a>
                                </li>
                            </ul>
                        </div>
                    </li>


                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="fab fa fa-cubes"></i>Categorys</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('categorys.index')}}">Categorys Show</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('categorys.create')}}">Category Add</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i
                                class="fas fa fa-laptop"></i>Products</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product.index')}}">Products Show</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('product.create')}}">New Product</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Admin/transaction/tables')}}">Product
                                        Transaction</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-6" aria-controls="submenu-6"><i
                                class="fas fa fa-desktop"></i>Sliders</a>
                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('sliders.index')}}">Sliders Show</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('sliders.create')}}">Add Sliders</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7"
                            aria-controls="submenu-7"><i class="fas fa fa-cog"></i>Settings</a>
                        <div id="submenu-7" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('aboutUs.index')}}">About Us</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('Admin/setting/support')}}">Support</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                        data-target="#submenu-8" aria-controls="submenu-8">Contact Us</a>
                                    <div id="submenu-8" class="collapse submenu" style="">
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="">Setting</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="">Messages</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>


                            </ul>
                        </div>
                    </li>


                </ul>
            </div>
        </nav>
    </div>
</div>