<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">

<div class="sidebar-header">
    <div class="sidebar-title">
        Navigation
    </div>
    <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
        <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
    </div>
</div>

<div class="nano">
    <div class="nano-content">
        <nav id="menu" class="nav-main" role="navigation">

            <ul class="nav nav-main">
                <li>
                    <a class="nav-link" href="<?=base_url()?>admin/dashboard">
                        <i class="bx bx-home-alt" aria-hidden="true"></i>
                        <span>Dashboard</span>
                    </a>                        
                </li>
                <li class="nav-parent">
                    <a class="nav-link" href="#">
                        <i class="bx bx-user" aria-hidden="true"></i>
                        <span>Users</span>
                    </a>
                    <ul class="nav nav-children">
                       
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/create-user">
                                Create User
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-user">
                                Manage Users
                            </a>
                        </li>
                       
                        
                        
                    </ul>
                </li>
                <li class="nav-parent">
                    <a class="nav-link" href="#">
                        <i class="bx bx-envelope" aria-hidden="true"></i>
                        <span>Envelope</span>
                    </a>
                    <ul class="nav nav-children">
                       
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-envelope-user">
                                Manage Envelope User
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-envelope">
                                Manage Envelope
                            </a>
                        </li>
                        
                    </ul>
                </li>
                <li class="nav-parent">
                    <a class="nav-link" href="#">
                        <i class="bx bx-basket" aria-hidden="true"></i>
                        <span>Baskets</span>
                    </a>
                    <ul class="nav nav-children">
                       
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-basket">
                                Manage Baskets
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/fund-basket">
                                Fund Baskets
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-parent">
                    <a class="nav-link" href="#">
                        <i class="bx bx-wallet" aria-hidden="true"></i>
                        <span>Wallets</span>
                    </a>
                    <ul class="nav nav-children">
                       
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/fund-user">
                                Fund User
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-transactions">
                                Manage Transactions
                            </a>
                        </li>
                        
                       
                        
                    </ul>
                </li>
                <li class="nav-parent">
                    <a class="nav-link" href="#">
                        <i class="bx bx-user" aria-hidden="true"></i>
                        <span>Escrow</span>
                    </a>
                    <ul class="nav nav-children">
                       
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manageescrow">
                                Manage Escrow
                            </a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?=base_url()?>admin/manage-disputed-escrow">
                                Manage Disputed Escrow
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>

    </div>

    <script>
        // Maintain Scroll Position
        if (typeof localStorage !== 'undefined') {
            if (localStorage.getItem('sidebar-left-position') !== null) {
                var initialPosition = localStorage.getItem('sidebar-left-position'),
                    sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                sidebarLeft.scrollTop = initialPosition;
            }
        }
    </script>

</div>

</aside>
<!-- end: sidebar -->