@include('Components/head')

    <!-- NAVBAR -->
    @include('Components/navbar')        
        <div class="container" style="padding-top:5vh">
            <div class="row">
                <div class="col-3">
                    @include('Components/sidebar')
                </div>
                <div class="col-9">
                    <div class="card">
                        <div class="card-header">
                            Crear un Usuario
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control"  name="user_name" required>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Cédula</label>
                                            <input type="text" class="form-control"  name="user_ci" required maxlength="11">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Número de Celular</label>
                                            <input type="text" class="form-control"  name="user_cellphone " maxlength="10">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                    <div class="mb-3">
                                            <label class="form-label">Fecha de Nacimiento</label>
                                            <input type="date" class="form-control"  name="user_date" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="user_email">
                                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                            
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">País</label>
                                            <select class="form-select" name="user_country" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Estado</label>
                                            <select class="form-select" name="user_estado" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label class="form-label">Ciudad</label>
                                            <select class="form-select" name="user_country" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="row">                                   
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" name="user_password">
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Confirmar Contraseña</label>
                                            <input type="password" class="form-control" name="user_confirm_password">
                                        </div>
                                    </div>
                                </div>

                                
                                <button type="submit" class="btn btn-primary">Crear Usuario</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </div>

@include('Components/footer')