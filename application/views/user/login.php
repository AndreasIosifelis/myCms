<?php $this->load->view("widgets/header"); ?>
<h4 class="panel">Login / Register</h4>
<dl class="accordion" data-accordion>
    <dd class="accordion-navigation">
        <a href="#panel1">Login</a>
        <div id="panel1" class="content active">
            <form method="POST" action="<?= site_url("user/doLogin") ?>" data-type="login">
                <input type="hidden" name="sessionId" id="sessionId" value="<?= $this->session->userdata("session_id") ?>" maxlength="32" required="true" />
                <div class="row">
                    <div class="large-5 large-centered columns">
                        <div data-alert class="alert-box" id="formMessagePanel" style="display:none;">
                           
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 large-centered columns">
                        <label>Username
                            <input type="text" placeholder="Username" name="username" id="username" maxlength="15" required="true"/>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 large-centered columns">
                        <label>Password
                            <input type="password" placeholder="Password"  name="password" id="password" maxlength="15" required="true"/>
                        </label>
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 large-centered columns">
                        Remember me
                        <div class="switch">
                            <input id="exampleCheckboxSwitch" type="checkbox" name="rememberme">
                            <label for="exampleCheckboxSwitch"></label>
                        </div> 
                    </div>
                </div>
                <div class="row">
                    <div class="large-5 large-centered columns">
                        <input type="submit" class="button expand" value="Login" />
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

