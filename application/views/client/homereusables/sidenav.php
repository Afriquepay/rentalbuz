<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>

				    </div>

				    <div class="nano">
				        <div class="nano-content">
				            <nav id="menu" class="nav-main" role="navigation">

				                <ul class="nav nav-main">
				                    <li>
				                        <a class="nav-link" href="<?=base_url();?>client/dashboard">
				                            <i class="bx bx-home-alt" aria-hidden="true"></i>
				                            <span>Dashboard</span>
				                        </a>
				                    </li>

				                    <li class="nav-parent">
				                        <a class="nav-link" href="#">
				                            <i class="bx bxs-bank" aria-hidden="true"></i>
				                            <span>Loan</span>
				                        </a>
				                        <ul class="nav nav-children">
				                            <li>
												<a class="nav-link" href="<?=base_url();?>client/new_loan">
													<i class="bx bx-radio-circle" aria-hidden="true"></i><span>New Loan</span>
				                                </a>
				                            </li>

				                        </ul>
										<ul class="nav nav-children">
				                            <li>
												<a class="nav-link" href="<?=base_url();?>client/list_loan">
													<i class="bx bx-radio-circle" aria-hidden="true"></i><span>List Loan</span>
				                                </a>
				                            </li>

				                        </ul>
				                    </li>
									<li>
				                        <a class="nav-link" href="<?=base_url();?>client/user_settings">
				                            <i class="bx bx-wrench" aria-hidden="true"></i>
				                            <span>Settings</span>
				                        </a>

				                    </li>

				                </ul>
				            </nav>

				            <hr class="separator" />

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