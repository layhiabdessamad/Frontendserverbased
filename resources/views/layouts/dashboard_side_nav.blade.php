        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">{{ config('app.name', 'Laravel') }}</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>{{ __('interface.title') }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading
            <div class="sidebar-heading">
                Interface
            </div> -->

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fas fa-users"></i>
                    <span>Clients</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="buttons.html"><i class="fas fa-plus-circle mr-2"></i>Ajouter un client</a>
                        <a class="collapse-item" href="buttons.html"><i class="fas fa-list-ol mr-2"></i>Liste des clients</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-bars"></i>
                    <span>Produits</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="utilities-color.html"><i class="fas fa-plus-circle mr-2"></i>Ajouter un produit</a>
                        <a class="collapse-item" href="utilities-color.html"><i class="fas fa-list-ol mr-2"></i>Liste des produits</a>
                        <a class="collapse-item" href="utilities-border.html"><i class="fas fa-plus-circle mr-2"></i>Ajouter une categorie</a>
                        <a class="collapse-item" href="utilities-animation.html"><i class="fas fa-plus-circle mr-2"></i>Ajouter sous-categorie</a>
                        
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="far fa-registered"></i>
                    <span>Réservations</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="login.html"><i class="fas fa-list-ol mr-2"></i>Liste des réservations</a>
                        <a class="collapse-item" href="register.html"><i class="fas fa-list-ol mr-2"></i>En attente de validation</a>
                        <a class="collapse-item" href="forgot-password.html"><i class="fas fa-list-ol mr-2"></i>Pour aujourd'hui</a>
                        
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-ad"></i>
                    <span>Promotions</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    
                    <a class="collapse-item" href="login.html"><i class="fas fa-plus-circle mr-2"></i>Ajuter une promotion</a>    
                    <a class="collapse-item" href="login.html"><i class="fas fa-list-ol mr-2"></i>Liste des promotions</a>
                                                
                    </div>
                </div>
            </li>

           

           <!-- Divider -->
           <hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>         
            <div class="sidebar-card">
                <!-- <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt=""> -->
                <p class="text-center mb-2"><strong>ABRAJBLADI</strong> est disponible pour Android</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Appstore</a>
            </div>

        </ul>

        
        <!-- End of Sidebar -->