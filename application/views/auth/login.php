

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Dulu Wir</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?> 
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="Email" name="email"
                                                placeholder="Enter Email Address...">
                                        </div>
                
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="Password" name="Password" placeholder="Password">
                                        </div>
                                        <!--<div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div> 
                                        </div> -->
                                        <login type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </login>
                                        
                                    
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.html">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="<?=base_url('auth/registration')?>">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

   