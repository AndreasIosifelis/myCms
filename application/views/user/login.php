<?php $this->load->view("widgets/header"); ?>
<h4 class="panel">Login / Register</h4>
<dl class="accordion" data-accordion>
    <dd class="accordion-navigation">
        <a href="#panel1">Login</a>
        <div id="panel1" class="content active">
            <form>
                <div class="row">
                    <div class="large-4 large-centered columns">
                        <label>Username
                            <input type="text" placeholder="large-12.columns" />
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-4 large-centered columns">
                        <label>Password
                            <input type="password" placeholder="large-12.columns" />
                        </label>
                    </div>
                </div>
            </form>
        </div>
    </dd>
    <dd class="accordion-navigation">
        <a href="#panel2">Create An Account</a>
        <div id="panel2" class="content">
            Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
    </dd>
</dl>
<?php $this->load->view("widgets/footer"); ?>

