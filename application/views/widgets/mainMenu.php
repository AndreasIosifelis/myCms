<div class="row">
    <div class="large-12 columns">
        <nav class="top-bar" data-topbar>
            <ul class="title-area">
                <li class="name">
                    <h1><?=anchor("", "My Site")?></h1>
                </li>
                <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
            </ul>

            <section class="top-bar-section">
                <!-- Left Nav Section -->
                <ul class="left">
                    <li><?=anchor("page/1", "Home")?></li>
                    <li><?=anchor("page/2", "Contact")?></li>
                </ul>
                <!-- Right Nav Section -->
                <ul class="right">
                    <li><a href="#">Cart</a></li>
                    <li><?=anchor("user/profile", "Account")?></li>
                </ul>
            </section>
        </nav>

    </div>
</div>