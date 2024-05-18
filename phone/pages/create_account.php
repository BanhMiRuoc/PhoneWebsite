<div>
    <div class="container register-form">
        <div style=" border: solid 2px #F7BDCB; margin: 5rem auto; width: 50rem; height: 30rem;">
            <div class="logo">
                <img src="assets/images/mobile_11.png" width="10%" height="20%" alt="">
                <h1>CREATE ACCOUNT</h1>
            </div>
            <form id="createAccountForm" method="POST" action="modules/user/createAccount.php">
            <div class="form-content" style="margin-left: 5%; margin-right: 5%;">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputName">Full name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name" value="" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;"/>
                        </div>
                        <div class="form-group">
                            <label for="inputPhoneNumber">Phone number</label>
                            <input type="text" id="phone" name="phone" placeholder="Phone Number" value="" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputEmail">Email</label>
                            <input type="text" id="email" name="email" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;" placeholder="Your email" value=""/>
                        </div>
                        <div class="form-group">
                            <label for="inputRole">Role</label>
                            <input type="text" id="role" name="role" placeholder="Role" value="" style="border-radius: 1.5rem; display: block; width: 100%; padding: .375rem .75rem; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529;background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da;"/>
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
                <button type="submit" name="btn_Create" class="btnSubmit" style="border:none; border-radius:1.5rem; padding: 0.5rem 1rem; width: 50%; display: block; margin: auto; cursor: pointer; background: #E37596; color: #fff;">CREATE</button>
            </div>
            </form>
        </div>
    </div>
</div>
