<!-- Header-->
    @include('shared.headLayout')

<!-- Menu-->
    @include('shared.menu')

<!-- CONTACT HEADER -->

{{--
<section id="contacto-header">
    <div class="container">
        <div class="d-none d-sm-block text-left mb-3">
            <h3 class="display-3"><span class="textoFondoTitulo">Contáctanos</h1>
            <p class="lead d-none d-md-block"><span class="textoFondo">y cuéntanos qué necesitas. ¡Te responderemos rápido!</span></p>
        </div>
    </div>
</section> --}}

<!-- CONTACTO SECTION -->
<section id="contacto-section">
    <div class="container">
        <div class="row">
            {{--
            <div class="col-md-6 offset-3 col-sm-12"> --}}
                <div class="">
                    {{--
                    <div> --}} {{-- <img src="{{ asset('img/LOGO_SUMA_1200X400.jpg')}}" alt="Logo Suma" class="img-fluid"> --}}
                        {{-- </div> --}}

                    <div id="contacto-datos" class="col-md-3">
                        <div class="">
                            <h3 class="display-7 text-muted">Visítanos en nuestras oficinas de</h3>
                            <p class="display-7"><i class="fas fa-map-marker-alt"></i> C/Sant Marian 57, 1º-2ª, Terrassa </p>
                            <p class="display-7 text-muted">o envíanos un mail a...</p>
                            <a href="mailto:info@sumaempresa.com" class="display-7"><i class="fas fa-at fa-lg"></i> info@sumaempresa.com</a>
                            <p class="small text-muted pt-1 px-4">(Inscrita en el Registro Mercantil de Barcelona: Tomo 44243, Folio 139 Hoja 450748 en fecha 31
                                de marzo de 2014. CIF B66260076)</p>
                        </div>
                    </div>
                    <div></div>
                </div>
                {{--
                <div class="col-md-6">
                    <div class="card p-6">
                        <div class="card-body">
                            <h3 class="display-7 text-muted">... o contacta con nuestro equipo</h3>
                            <div class="d-flex">
                                <div class="col-2 p-0 m-0">
                                    <img src="{{ asset('img/person1.jpg')}}" alt="Marta Ruiz" class="img-fluid rounded-circle mb-2">
                                </div>
                                <div class="col-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-user text-muted"></i>Marta Ruiz</li>
                                        <li><i class="fa-li fa fa-at text-muted"></i><a href="mailto:marta.ruiz@sumaempresa.com"><span class="text-muted">marta.ruiz@sumaempresa.com</span></a></li>
                                        <li><i class="fa-li fa fa-mobile-alt text-muted"></i>659 50 13 89</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-2 p-0 m-0">
                                    <img src="{{ asset('img/person2.jpg')}}" alt="Susana Martinez" class="img-fluid rounded-circle mb-2">
                                </div>
                                <div class="col-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-user text-muted"></i>Susana Martinez</li>
                                        <li><i class="fa-li fa fa-at text-muted"></i><a href="mailto:susana.martinez@sumaempresa.com"><span class="text-muted">susana.martinez@sumaempresa.com</span></a></li>
                                        <li><i class="fa-li fa fa-mobile-alt text-muted"></i>696 22 36 72</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-2 p-0 m-0">
                                    <img src="{{ asset('img/person3.jpg')}}" alt="Alexander Arregui" class="img-fluid rounded-circle mb-2">
                                </div>
                                <div class="col-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-user text-muted"></i>Alexander Arregui</li>
                                        <li><i class="fa-li fa fa-at text-muted"></i><a href="mailto:alex.arregui@sumaempresa.com"><span class="text-muted">alex.arregui@sumaempresa.com</span></a></li>
                                        <li><i class="fa-li fa fa-mobile-alt text-muted"></i>638 12 26 14</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-2 p-0 m-0">
                                    <img src="{{ asset('img/person4.jpg')}}" alt="Dolors Celdran" class="img-fluid rounded-circle mb-2">
                                </div>
                                <div class="col-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-user text-muted"></i>Dolors Celdrán</li>
                                        <li><i class="fa-li fa fa-at text-muted"></i><a href="mailto:dolors.celdran@sumaempresa.com"><span class="text-muted">dolors.celdran@sumaempresa.com</span></a></li>
                                        <li><i class="fa-li fa fa-mobile-alt text-muted"></i>653 93 96 29</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="col-2 p-0 m-0">
                                    <img src="{{ asset('img/person4.jpg')}}" alt="Miriam Marin" class="img-fluid rounded-circle mb-2">
                                </div>
                                <div class="col-10">
                                    <ul class="fa-ul">
                                        <li><i class="fa-li fa fa-user text-muted"></i>Miriam Marin</li>
                                        <li><i class="fa-li fa fa-at text-muted"></i><a href="mailto:miriam.marin@sumaempresa.com"><span class="text-muted">miriam.marin@sumaempresa.com</span></a></li>
                                        <li><i class="fa-li fa fa-mobile-alt text-muted"></i>690 07 61 54</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
</section>

<!-- Footer-->
    @include('shared.footer')
