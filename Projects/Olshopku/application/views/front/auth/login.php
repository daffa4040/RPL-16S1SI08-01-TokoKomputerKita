<?php $this->load->view('front/header')?>
  <!-- / menu -->  
 <!-- Cart view section -->
 <section id="aa-myaccount">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-login">
                <h4>Login</h4>
                  <div><?=validation_errors()?></div>
                  <div><?=$this->session->flashdata('error')?></div>
                  <?= form_open('login', ['class'=>'aa-login-form'])?>
                 <form action="" class="aa-login-form" method="POST">
                  <label for="">Username or Email address<span>*</span></label>
                   <input type="text" placeholder="Username or email" name="username">
                   <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <button type="submit" class="aa-browse-btn">Login</button>
                    <label class="rememberme" for="rememberme">
                    <input type="checkbox" id="rememberme"> Remember me </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                  </form>
                </div>
              </div>
              <div class="col-md-6">
                <div class="aa-myaccount-register">           
                 <h4>Register</h4>
                 <div><?=validation_errors()?></div>
                 <div><?=$this->session->flashdata('error')?></div>
                 <?= form_open('register', ['class'=>'aa-login-form'])?>
                 <form action="" class="aa-login-form" method="POST">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email" name="username">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password" name="password">
                    <input type="hidden" name="groups" value="2">
                    <button type="submit" class="aa-browse-btn">Register</button>     
                  </form>
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->
<?php $this->load->view('front/footer')?>