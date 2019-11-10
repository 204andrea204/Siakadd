<form class="form-horizontal m-t-20" action="/halaman/proses-register" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="nama" required="" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="email" name="email" required="" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="username" required="" placeholder="Username">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="password" name="password" required="" placeholder="Password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" name="nohp" required="" placeholder="No HP">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea class="form-control" type="text" name="alamat" required="" placeholder="Alamat"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input class="form-control" type="file" name="foto" required="" placeholder="Foto">
                            </div>
                        </div>

                        {{-- <div class="form-group">
                            <div class="col-xs-12">
                                <div class="checkbox checkbox-primary">
                                    <input id="checkbox-signup" type="checkbox" checked="checked">
                                    <label for="checkbox-signup">
                                        I accept <a href="#">Terms and Conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>

                        <div class="form-group m-t-30 m-b-0">
                            <div class="col-sm-12 text-center">
                                <a href="/halaman/login" class="text-muted">Already have account?</a>
                            </div>
                        </div>

                    </form>