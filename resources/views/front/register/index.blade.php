@include('front.layouts.includes.head')
<main class="login-bg">
    <form action="{{route('client.signup')}}" method="post">
        @csrf
        <div class="register-form-area">
            <div class="register-form text-center">

                <div class="register-heading">
                    <span>Sign Up</span>
                    <p>Create your account to get full access</p>
                </div>

                <div class="input-box">
                    <div class="single-input-fields">
                        <label>Full name</label>
                        <input type="text" placeholder="Enter full name" name="name">
                    </div>
                    <div class="single-input-fields">
                        <label>Email Address</label>
                        <input type="email" placeholder="Enter email address" name="email">
                    </div>
                    <div class="single-input-fields">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" name="password">
                    </div>
                    <div class="single-input-fields">
                        <label>Confirm Password</label>
                        <input type="password" placeholder="Confirm Password" name="password_confirmation">
                    </div>
                </div>

                <div class="register-footer">
                    <p> Already have an account? <a href="{{route('client.login')}}"> Login</a> here</p>
                    <button class="submit-btn3" type="submit">Sign Up</button>
                </div>
            </div>
        </div>
    </form>
</main>
@include('front.layouts.includes.foot')
