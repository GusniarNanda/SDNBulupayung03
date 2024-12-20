<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="/lte/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/lte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/assets/vendor/toasteditor/toastui-editor.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="dashboard" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin/dashboard" class="brand-link">
                <img src="/lte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">SDN</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/admin/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item" id="loginIcon">
                            <a href="/" target="_blank" class="nav-link">
                                <i class="nav-icon fas fa-user-circle" style="font-size: 1.5em;"></i>
                                <p>
                                    Lihat Website
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Data Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview" id="nav-datamaster">
                                <li class="nav-item">
                                    <a href="/admin/sliders"
                                        class="nav-link {{ request()->is('admin/sliders*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Highlight Sekolah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/visimisi"
                                        class="nav-link {{ request()->is('admin/visimisi*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Visi Misi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/services"
                                        class="nav-link  {{ request()->is('admin/services*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Prestasi</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/testimonial"
                                        class="nav-link  {{ request()->is('admin/testimonial*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sarana & Prasarana</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/portofolio"
                                        class="nav-link {{ request()->is('admin/portofolio*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Galeri Sekolah</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/clients"
                                        class="nav-link  {{ request()->is('admin/clients*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Client</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/teams"
                                        class="nav-link  {{ request()->is('admin/teams*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Data Guru</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/kategori"
                                        class="nav-link  {{ request()->is('admin/kategori*') ? 'active' : '' }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Kategori Gambar</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/berita"
                                class="nav-link  {{ request()->is('admin/berita*') ? 'active' : '' }}">
                                <i class="fa fa-solid fa-bullhorn"></i>
                                <p>
                                    Berita
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/contact"
                                class="nav-link  {{ request()->is('admin/kontak*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-phone"></i>
                                <p>
                                    Kontak
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/logout" class="nav-link">
                                <i class="nav-icon fas fa-arrow-left"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">@yield('title')</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- /.col-md-6 -->
                        <div class="col-lg-12">

                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="m-0">@yield('title')</h5>
                                </div>
                                <div class="card-body">
                                    @yield('content')



                                </div>
                            </div>
                        </div>
                        <!-- /.col-md-6 -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                You Can Call Me Anything you want
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; {{ date('Y') }} <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All
            rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="/lte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/lte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/lte/dist/js/adminlte.min.js"></script>
    <script src="/assets/vendor/toasteditor/toastui-editor-all.min.js"></script>
    <script>
        function initEditor(selector, value, options = {}) {
            return new toastui.Editor({
                el: document.querySelector(selector),
                height: '400px',
                initialEditType: 'wysiwyg',
                placeholder: 'Ketik...',
                usageStatistics: false,
                initialValue: value,
                toolbarItems: [
                    ['heading', 'bold', 'italic', 'strike'],
                    ['hr', 'quote'],
                    ['ul', 'ol', 'task', 'indent', 'outdent'],
                ],
                ...options
            });
        }

        const navDataMasterEl = document.getElementById("nav-datamaster");
        const activeDataMasterLinks = navDataMasterEl.querySelectorAll(".nav-item .nav-link.active")
        if (activeDataMasterLinks.length > 0) {
            navDataMasterEl.parentNode.classList.add("menu-open");
        }
    </script>
    @yield('scripts', '')
</body>

</html>
