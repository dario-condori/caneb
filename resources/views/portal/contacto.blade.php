<section class="module" id="contacto">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2 class="module-title font-alt">Contacta con Nosotros</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8">
                <form id="contactForm" role="form" method="POST" action="{{ route('portal.guardarContactoWeb') }}">
                    @csrf
                    <div class="form-group">
                        <label class="sr-only" for="nombre">Nombre</label>
                        <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Su nombre*" required="required" data-validation-required-message="Favor ingresar su nombre."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="email">Correo electronico</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="Su correo electronico*" required="required" data-validation-required-message="Favor ingresar su email."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="asunto">Asunto o tema</label>
                        <input class="form-control" type="text" id="asunto" name="asunto" placeholder="Asunto o tema*" required="required" data-validation-required-message="Favor ingresar su asunto."/>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" rows="7" id="mensaje" name="mensaje" placeholder="Su mensaje*" required="required" data-validation-required-message="Favor ingrese su mensaje."></textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-block btn-round btn-d" id="cfsubmit" type="submit">Enviar mensaje</button>
                    </div>
                </form>
                <div class="ajax-response font-alt" id="contactFormResponse"></div>
            </div>
            <div class="col-sm-4">
                <div class="alt-features-item mt-0">
                    <div class="alt-features-icon"><span class="icon-map"></span></div>
                    <h3 class="alt-features-title font-alt">OFICINA CENTRAL</h3>Camara Nacional de Exportadores de Bolivia
                    <br/>Av. Arce No 2017 esq. C. Goitia<br/>La Paz – Bolivia
                </div>
                <div class="alt-features-item mt-xs-60">
                    <div class="alt-features-icon"><span class="icon-megaphone"></span></div>
                    <h3 class="alt-features-title font-alt">Escribanos</h3>
                    Email: info@caneb.org
                    <br/>Teléfonos: (591-2) 2443529 - 2441294 - 2443529 - 2440943
                    <br/>Fax: (591 - 2) 2441491 - Casilla: 12145
                </div>
            </div>
        </div>
    </div>
</section>
<hr class="divider-d">