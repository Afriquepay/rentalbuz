<!-- start: header -->
<header class="header">
    <div class="logo-container">
        <a href="" class="logo">
            <img src="<?=base_url();?>uploads/img/logo-8.png" style="max-width: 120px; max-height: auto;" alt="AfriquePay Logo" />
        </a>

        <!-- <div class="d-md-none toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div> -->

    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <span class="separator"></span>

        <ul class="notifications">
            <li>
                <a href="#" class="notification-icon">
                    <i class="bx bx-scan"></i>
                </a>
            </li>
            <li>
                <a href="#" class="notification-icon">
                    <i class="bx bx-search"></i>
                </a>
            </li>
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="#" data-bs-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="<?=base_url();?>uploads/img/timi.jpg" alt="Joseph Doe" class="rounded" data-lock-picture="<?=base_url();?>uploads/img/timi.jpg" />
                </figure>
                <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                    <span class="name text-light">Oladepo Olushina</span>
                    <span class="role" style="color: #FFA753;">N 200,000</span>
                </div>

                <i class="fa custom-caret"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled mb-2">
                    <li class="divider"></li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="profile"><i class="bx bx-user-circle"></i> Profile</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="transactions"><i class='bx bx-transfer'></i> Transaction</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="withdraw"><i class='bx bxs-right-arrow-square'></i> Withdraw</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="fundpacket"><i class='bx bx-wallet-alt'></i> Fund Packet</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="resetpin"><i class='bx bx-reset'></i> Reset Pin</a>
                    </li>
                    <!-- <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class='bx bxs-up-arrow-square'></i> Generate Token</a>
                    </li> -->
                    <li>
                        <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class='bx bxs-contact'></i> Contact Us</a>
                    </li>
                    <li>
                        <a role="menuitem" tabindex="-1" href="logout"><i class="bx bx-power-off"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
<!-- end: header -->