<div class="preloader">
	<img src="<?= base_url();?>assets/uploads/preloader/preloader_logo.gif"></img>
</div>
<div class="header">
	<div class="left">
        <a href="<?= base_url(); ?>" class="btn-logo" style="padding-right: 0px;"><img src="<?= base_url().LOGO ?>" style="height: 45px; width: 45px;"></a>
        <a href="<?= base_url(); ?>" style="padding-left: 0px;" class="app-name"><?= APPNAME ?></a>
    </div>
	<div class="right">
		<ul>
            <?php if ($this->session->userdata('user_id')): ?>
                <?php if ($this->session->userdata('user_type') == "user"): ?>
                    <li>
                        <a class="header-btn-cart">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="span-cart-total-product d-none">0</span>
                        </a>
                        <div class="header-dropdown-cart">
                            <span class="bold-title">My Cart</span>
                            <div class="loading-cart-product-container"></div>
                        </div>
                    </li>
                    
                    <li>
                        <a class="header-btn-wishlist">
                            <i class="fa fa-heart"></i>
                            <span class="span-wishlist-total-product d-none">0</span>
                        </a>
                        <div class="header-dropdown-wishlist">
                            <span class="bold-title">My Wishlist</span>
                            <div class="loading-wishlist-container"></div>
                        </div>
                    </li>
                <?php endif ?>
                <li>
                    <a class="header-btn-account">
                        <i class="fa fa-user-circle"></i>&nbsp;
                        <?= $this->session->userdata('user_firstname')." ".$this->session->userdata("user_lastname") ?>&nbsp;
                        <i class="fa fa-caret-down"></i>&nbsp;
                    </a>
                    <div class="header-dropdown-account">
                        <ul>
                            <li>
                                <button class="btn btn-primary btn-my-profile"><i class="fas fa-address-card"></i>&nbsp;My Profile</button>
                            </li>
                            <li>
                                <button class="btn btn-primary btn-change-password"><i class="fas fa-lock"></i>&nbsp;Change Password</button>
                            </li>
                            <li>
                                <button class="btn btn-primary btn-activity-log"><i class="fa-solid fa-list"></i>&nbsp;Activity Log</button>
                            </li>
                            <li>
                                <button class="btn btn-primary btn-logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</button>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a class="header-btn-notifications"><i class="fa fa-bell"></i>&nbsp;<span class="header-btn-notifications-label">Notifications</span><span class="span-total-notif d-none">9+</span></a>
                    <div class="header-dropdown-notifications">
                        <div class="notification-head">
                            <strong>Notification(s)</strong>
                        </div>
                        <hr>
                        <div class="loading-notifications-container"></div>
                        <div class="notification-body">
                            <div class="notification-list">
                                
                            </div>
                        </div>
                    </div>
                </li>
            <?php else: ?>
                <li>
                    <a href="<?= base_url();?>login">Login</a>
                </li>
                <li>
                    <a href="<?= base_url();?>signup">Signup</a>
                </li>
            <?php endif ?>
        </ul>
	</div>
</div>

<?php if ($this->session->userdata('user_id')): ?>

<div class="side-navbar-container">
    <div class="side-navbar-content">
        <div class="side-navbar-header">
            <img src="<?= base_url().LOGO ?>">
        </div>
        <div class="side-navbar-body">
            <!-- FOR PRODUCT MANAGEMENT -->
            <?php if ($this->session->userdata("user_type") == "admin"): ?>
                <a href="<?= base_url(); ?>product" class="btn"><i class="fa-solid fa-box"></i>&nbsp;&nbsp;Product</a><br>
            <?php endif ?>

            <!-- FOR FACE PAY WALLET -->
            <button class="btn-menu" id="facepay_wallet" data-id="sub_menu_facepay_wallet"><i class="fa-solid fa-wallet"></i>&nbsp;&nbsp;FacePay Wallet<i class="fa-solid fa-caret-down caret"></i></button>
            <div class="facepay-wallet-dropdown sub-buttons" id="sub_menu_facepay_wallet">
                <?php if ($this->session->userdata("user_type") == "admin"): ?>
                    <a href="<?= base_url();?>cash-in-v2"><i class="fa-solid fa-wallet"></i>&nbsp;&nbsp;Cash In</a><br>
                    <a href="<?= base_url();?>wallet-transaction"><i class="fa-solid fa-repeat"></i>&nbsp;&nbsp;Transaction</a><br>
                    <a href="<?= base_url();?>points"><i class="fas fa-coins"></i></i>&nbsp;&nbsp;Points</a>
                <?php else: ?>
                    <a href="<?= base_url()?>my-wallet"><i class="fa-solid fa-wallet"></i>&nbsp;&nbsp;My Wallet</a><br>
                    <a href="<?= base_url()?>points/my-points"><i class="fas fa-coins"></i>&nbsp;&nbsp;My Points</a>
                <?php endif ?>
            </div>

            <!-- FOR ORDER MANAGEMENT -->
            <button class="btn-menu" id="order_management" data-id="sub_menu_order_management"><i class="fa-solid fa-bars-progress"></i>&nbsp;&nbsp;Order Management<i class="fa-solid fa-caret-down caret"></i></button>
            <div class="order-management-dropdown sub-buttons" id="sub_menu_order_management">
                <?php if ($this->session->userdata("user_type") == "admin"): ?>
                    <a href="<?= base_url(); ?>ongoing-orders"><i class="fas fa-clipboard-check"></i>&nbsp;&nbsp;Ongoing Orders</a><br>
                    <a href="<?= base_url(); ?>orders-history"><i class="fas fa-clipboard-check"></i>&nbsp;&nbsp;Orders History</a>
                <?php else: ?>
                    <a href="<?= base_url(); ?>dashboard"><i class="fa-solid fa-cart-plus"></i>&nbsp;&nbsp;Add Order</a><br>
                    <a href="<?= base_url(); ?>my-orders"><i class="fas fa-clipboard-check"></i>&nbsp;&nbsp;My Orders</a>                
                <?php endif ?>
            </div>
            <?php if ($this->session->userdata("user_type") == "admin"): ?>
                <!-- FOR USER MANAGEMENT -->
                <button class="btn-menu" id="user_management" data-id="sub_menu_user_management"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;User Management<i class="fa-solid fa-caret-down caret"></i></button>
            
                <div class="user-management-dropdown sub-buttons" id="sub_menu_user_management">
                    <a href="<?= base_url(); ?>customer"><i class="fa-solid fa-users-line"></i>&nbsp;&nbsp;Customer</a><br>
                    <a href="<?= base_url(); ?>employee"><i class="fas fa-user-tie"></i>&nbsp;&nbsp;Employee</a>
                </div>
            <?php endif ?>

            <?php if ($this->session->userdata("user_type") == "admin"): ?>
                <a href="<?= base_url(); ?>audit-trail" class="btn"><i class="fa-solid fa-list"></i>&nbsp;&nbsp;Audit Trail</a><br>
                <a href="<?= base_url(); ?>discount" class="btn"><i class="fa fa-percent"></i>&nbsp;&nbsp;Discounts</a><br>
                <a href="<?= base_url(); ?>wishlist" class="btn"><i class="fa fa-heart"></i>&nbsp;&nbsp;Wishlist</a><br>
            <?php endif ?>

            <div class="mobile-view-buttons-container">
                <button class="btn btn-primary btn-my-profile"><i class="fas fa-address-card"></i>&nbsp;My Profile</button><br>
                <button class="btn btn-primary btn-change-password"><i class="fas fa-lock"></i>&nbsp;Change Password</button><br>
                <button class="btn btn-primary btn-activity-log"><i class="fa-solid fa-list"></i>&nbsp;Activity Log</button><br>
                <button class="btn btn-primary btn-logout"><i class="fas fa-sign-out-alt"></i>&nbsp;Logout</button>
            </div>
        </div>
    </div>
    <button class="btn-toggle-menu" style="right: 0px; z-index: 300;"><i class="fas fa-bars"></i></button>
</div>
<button class="btn-toggle-menu btn-show-menu" style="z-index: 200; left: 0px;position: fixed;"><i class="fas fa-bars"></i></button>

<?php endif; ?>

<div class="modal fade" id="checkout_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Checkout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <span>Date/Time Pickup <span class="text-danger">*</span></span>
                    <input type="datetime-local" class="form-control date-pickup" min="<?= date('Y-m-d H:i') ?>" value="<?= date('Y-m-d H:i') ?>">
                </div>
                <div class="form-group">
                    <span>Special Instruction</span>
                    <textarea rows="3" class="form-control instruction" placeholder="Enter remarks"></textarea>
                </div>
                <div class="warning text-danger"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary btn-place-order">Place Order</button>
                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Cancel</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="terms_for_order_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Terms and Conditions for Order</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Under House Bill No. 6958  </p>
                <p>All orders that have been placed are considered final and immediately prepared and cook, so please consider carefully before placing an order. The <?= APPNAME ?> would have started to prepare the food and therefore no refunds and cancellation would be possible.</p>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dismiss="modal" aria-label="Close">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="global-loading"></div>

<script type="text/javascript" src="<?= base_url();?>/assets/js/layouts/header.js"></script>
<script type="text/javascript" src="<?= base_url();?>/assets/js/layouts/header-side-bar-buttons.js"></script>