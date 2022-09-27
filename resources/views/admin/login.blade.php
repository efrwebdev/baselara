@extends('admin.layout.main')

@section('content')

<div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
  <div class="row w-100">
    <div class="col-lg-4 mx-auto">
      <?php //notification(); ?>
      <div class="auto-form-wrapper">
        <form action="" method="POST" action="{{ route('admin.login') }}">
          @csrf
          <div class="row text-center">
            <div class="col-12">
              <h1 style="font-weight: 600">Admin Login</h1>
            </div>
          </div>
          <div class="form-group">
            <label class="label">Email</label>
            <div class="input-group">
              <input type="email" name="email" class="form-control" placeholder="Email">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label class="label">Password</label>
            <div class="input-group">
              <input type="password" name="password" class="form-control" placeholder="*********">
              <div class="input-group-append">
                <span class="input-group-text">
                  <i class="mdi mdi-check-circle-outline"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="form-group">
            <button type="submit" name="submit" value="1" class="btn btn-primary submit-btn btn-block">Login</button>
          </div>

        </form>
      </div>
      <ul class="auth-footer">
        <li>
          <a href="#">Conditions</a>
        </li>
        <li>
          <a href="#">Help</a>
        </li>
        <li>
          <a href="#">Terms</a>
        </li>
      </ul>
      <p class="footer-text text-center">copyright &copy; 2019 . All rights reserved.</p>
    </div>
  </div>
</div>

@endsection        