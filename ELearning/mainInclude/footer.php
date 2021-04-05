<!-- Start Footer -->
<footer class="container-fluid bg-dark text-center p-2">
                <small class="text-white">Copyright &copy; 2021 || Designed By
                Arpy & Biva || <a href="#login" data-bs-toggle="modal" 
                data-bs-target="#adminLoginModalCenter">Admin Login</a></small>
            </footer>
            <!-- End Footer -->

            <!-- Start Student Registration -->

            <!-- Modal -->
            <div class="modal fade" id="stuRegModalCenter" tabindex="-1" 
            role="dialog" aria-labelledby="stuRegModalCenterLabel" 
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stuRegModalCenterLabel">Student Registration</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Start Student Registration Form -->
                            <?php include('studentRegistration.php'); ?>
                            <!-- End Student Registration Form -->
                        </div>
                        <div class="modal-footer">
                            <span id="successMsg"></span>
                            <button type="button" class="btn btn-primary" 
                            onclick="addStu()" id="signup">Sign Up</button>
                            <button type="button" class="btn btn-secondary" 
                            data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Student Registration -->

            <!-- Start Student LogIn -->

            <!-- Modal -->
            <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" 
            role="dialog" aria-labelledby="stuLoginModalCenterLabel" 
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="stuLoginModalCenterLabel">Student LogIn</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Start Student Login Form -->
                            <form id="stuLoginForm">
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i><label for="stuLogemail"
                                    class="pl-2 font-weight-bold" style="padding: 5px;">Email</label><input
                                    type="email"
                                        class="form-control" placeholder="Email"
                                        name="stuLogemail" id="stuLogemail">
                                </div> 
                                <div class="form-group">
                                    <i class="fas fa-key"></i><label for="stuLogpass"
                                    class="pl-2 font-weight-bold" style="padding: 5px;">Password
                                        </label><input type="password"
                                        class="form-control" placeholder="Password"
                                        name="stuLogpass" id="stuLogpass">
                                </div>   
                            </form>
                            <!-- End Student Login Form -->
                        </div>
                        <div class="modal-footer">
                            <small id="statusLogMsg"></small>
                            <button type="button" class="btn btn-primary"
                            id="stuLoginBtn" onclick="checkStuLogin()">Log In</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Student Login -->

            <!-- Start Admin LogIn Modal -->

            <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" 
            role="dialog" aria-labelledby="adminLoginModalCenterLabel" 
            aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin LogIn</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Start Admin Login Form -->
                            <form id="adminLoginForm">
                                <div class="form-group">
                                    <i class="fas fa-envelope"></i><label for="adminLogemail"
                                    class=" font-weight-bold" style="padding: 5px;">Email</label><input
                                    type="email"
                                        class="form-control" placeholder="Email"
                                        name="adminLogemail" id="adminLogemail">
                                </div> 
                                <div class="form-group">
                                    <i class="fas fa-key"></i><label for="adminLogpass"
                                    class=" font-weight-bold" style="padding: 5px;">Password
                                        </label><input type="password"
                                        class="form-control" placeholder="Password"
                                        name="adminLogpass" id="adminLogpass">
                                </div>   
                            </form>
                            <!-- End Admin Login Form -->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary"
                            id="adminLoginBtn" onclick="checkAdminLogin()">Log In</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Admin Login Modal -->


            <!-- Jquery and Bootstrap JavaScript -->
            <script src="js/jquery.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>

            <!-- Font Awesome JS -->
            <script src="js/all.min.js"></script>

            <!-- Student Ajax Call JavaScript -->
            <script type="text/javascript" src="js/ajaxrequest.js"></script>

            <!-- Admin Ajax Call JavaScript -->
            <script type="text/javascript" src="js/adminajaxrequest.js"></script>
         </body>
    </html>