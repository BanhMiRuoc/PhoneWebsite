<div class="container register-form">
    <div class="form">
        <div class="logo">
            <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
            <h1>CREATE ACCOUNT</h1>
        </div>
        <div class="form-content" id="createAccountForm" method="POST" action="modules/user/createAccount.php">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputName">Full name</label>
                        <input id="name" name="name" type="text" class="form-control" placeholder="Your Name" value=""/>
                    </div>
                    <div class="form-group">
                        <label for="inputPhoneNumber">Phone number</label>
                        <input id="phone" name="phone" type="text" class="form-control" placeholder="Phone Number" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        <input id="email" name="email" type="text" class="form-control" placeholder="Your email" value=""/>
                    </div>
                    <div class="form-group">
                        <label for="inputRole">Role</label>
                        <input id="role" name="role" type="text" class="form-control" placeholder="Role" value=""/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group ratio-gender">
                        <label for="inputGender">Gender</label>
                        <div>
                            <input type="radio"  name="gender" id="gender-male" value="Male"> Male
                            <input type="radio"  name="gender" id="gender-female" value="Female"> Female

                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="btn_Create" class="btnSubmit">CREATE</button>
        </div>
    </div>
</div>