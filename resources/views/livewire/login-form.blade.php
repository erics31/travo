<div>
    <div class="user-imgs"><i class="fa fa-user"></i></div>
    <div>
        <div class="row1">
            @if ($errors->has('username'))
            <label style="color: red;">{{$errors->first('username')}}</label>
            @else
            <label>User name</label>
            @endif
            <input type="text" class="in-fld" placeholder="User name" wire:model="username">
        </div>
        <!--row1-->

        <div class="row1">
            <!-- <label>Passwrod</label> -->
            @if ($errors->has('password'))
            <label style="color: red;">{{$errors->first('password')}}</label>
            @else
            <label>Password</label>
            @endif
            <input type="text" class="in-fld" placeholder="Enter passwrod" wire:model="password">
        </div>
        <!--row1-->

        <div class="rem">
            <div class="passwrod-rem">
                <label class="container11">Remember password
                    <input type="checkbox">
                    <span class="checkmark"></span>
                </label>
            </div>

            <div class="forgot">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
        <!--rem-->

        <div class="row1 row12">
            <button wire:click="login" class="button-log">login</button>
        </div>

        <div class="login-with">
            <div class="or"><span>or</span></div>
            <ul>
                <li><a href=""><i class="fa fa-facebook"></i> Login with facebook</a></li>
                <li><a href=""><i class="fa fa-google"></i> Login with google</a></li>
            </ul>
        </div>
        <!--login-with-->

        <div class="no-ac">Don’t have an account? <a href="#" id="signupop">Sign up</a></div>
    </div>
</div>
