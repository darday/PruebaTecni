
                <div class="list-group">
               
                <a href="{{ url('/add-email') }}" class="list-group-item list-group-item-action">Registrar de Emails</a>
                <a href="{{ url('/list-messages') }}" class="list-group-item list-group-item-action">Envio de Emails</a>
                <a href="{{ url('/list-messages') }}" class="list-group-item list-group-item-action">Consulta de Emails</a>
                <a href="{{ url('/perfil-user') }}" class="list-group-item list-group-item-action">Mis Datos</a>
                <a class="dropdown-item"  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>
                
                </div>
              