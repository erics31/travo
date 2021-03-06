<div>
    <div class="user-imgs"><i class="fa fa-user"></i></div>
    <div>
        <div class="rr">
            <div class="row1">

                @if ($errors->has('firstname'))
                <label style="color: red;">{{$errors->first('firstname')}}</label>
                @else
                <label>First name</label>
                @endif
                <input type="text" class="in-fld" placeholder="First name" wire:model="firstname">
            </div>
            <!--row1-->

            <div class="row1">
                @if ($errors->has('lastname'))
                <label style="color: red;">{{$errors->first('lastname')}}</label>
                @else
                <label>First name</label>
                @endif
                <input type="text" class="in-fld" placeholder="Last name" wire:model="lastname">
            </div>
            <!--row1-->
        </div>

        <div class="row1">
            @if ($errors->has('phonenumber'))
            <label style="color: red;">{{$errors->first('phonenumber')}}</label>
            @else
            <label>Phone Number</label>
            @endif
            <input type="text" class="in-fld" placeholder="Phone number" wire:model="phonenumber">
        </div>
        <!--row1-->

        <div class="row1">
            @if ($errors->has('password'))
            <label style="color: red;">{{$errors->first('password')}}</label>
            @else
            <label>Password</label>
            @endif
            <input type="text" class="in-fld" placeholder="Enter passwrod" wire:model="password">
        </div>
        <!--row1-->

        <div class="row1">
            <label>Confirm passwrod</label>
            <input type="text" class="in-fld" placeholder="Enter passwrod" name="">
        </div>
        <!--row1-->

        <div class="row1 row12">
            <button wire:click="register" class="button-log">Sign up</button>
        </div>

        <div class="login-with">
            <div class="or"><span>or</span></div>
            <ul>
                <li><a href=""><i class="fa fa-facebook"></i> Login with facebook</a></li>
                <li><a href=""><i class="fa fa-google"></i> Login with google</a></li>
            </ul>
        </div>
        <!--login-with-->

        <div class="no-ac">Already have an account? <a href="#" id="loginpop">Login</a></div>
    </div>
</div>
