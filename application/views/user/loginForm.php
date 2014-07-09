            <form method="POST" action="<?= site_url("user/doLogin") ?>" data-type="login">
                <input type="hidden" name="sessionId" value="<?= $this->session->userData("session_id") ?>" maxlength="32" required="true" />
                <div class="row" id="formErrorPanel">
                    <!--<div data-alert class="alert-box alert">
                        Error1<br />
                        Error2
                        <a href="#" class="close">&times;</a>
                    </div>-->
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