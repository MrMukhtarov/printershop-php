@include('front.layouts.includes.head')
<main class="login-bg">
    <form action="{{route('client.signin')}}" method="post">
        @csrf
        <div class="login-form-area">
            <div class="login-form">

                <div class="login-heading">
                    <span>Login</span>
                    <p>Enter Login details to get access</p>
                </div>

                <div class="input-box">
                    <div class="single-input-fields">
                        <label>Email Address</label>
                        <input type="text" placeholder="Email address" name="email">
                    </div>
                    <div class="single-input-fields">
                        <label>Password</label>
                        <input type="password" placeholder="Enter Password" name="password">
                    </div>
                    <div class="single-input-fields login-check">
                        <input type="checkbox" id="fruit1" name="keep-log">
                        <label for="fruit1">Keep me logged in</label>
                        <a href="#" class="f-right">Forgot Password?</a>
                    </div>
                </div>

                <div class="login-footer">
                    <p>Don’t have an account? <a href="{{route("client.register")}}">Sign Up</a> here</p>
                    <button type="submit" class="submit-btn3">Login</button>
                </div>
            </div>
        </div>
    </form>

</main>
@include('front.layouts.includes.foot')
