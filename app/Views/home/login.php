<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Presupuesto App</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?=base_url('public/css/dashlite.css?ver=2.4.0')?>">
    <link id="skin-default" rel="stylesheet" href="<?= base_url('public/css/theme.css?ver=2.4.0')?>">
</head>

<body class="nk-body bg-white npc-general pg-auth">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- wrap @s -->
        <div class="nk-wrap nk-wrap-nosidebar">
            <!-- content @s -->
            <div class="nk-content ">
                <div class="nk-split nk-split-page nk-split-md">
                    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white">
                        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                            <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                        </div>
                        <div class="nk-block nk-block-middle nk-auth-body">
                            <div class="brand-logo pb-5">
                                <a href="html/index.html" class="logo-link">
                                    <img class="logo-light logo-img logo-img-lg" src="<?=base_url('public/images/logo.png');?>" srcset="<?=base_url('public/images/logo2x.png');?> 2x"  alt="logo">
                                    <img class="logo-dark logo-img logo-img-lg" src="<?=base_url('public/images/logo-dark.png');?>" srcset="<?=base_url('public/images/logo-dark2x.png');?> 2x" alt="logo-dark">
                                </a>
                            </div>
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h5 class="nk-block-title">Iniciar Sesión</h5>
                                    <div class="nk-block-des">
                                        <p>Para Acceder al sistema ingrese un Usuario y una contraseña.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->
                            <form action="#">
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="default-01">Correo Electrónico</label>
                                        <a class="link link-primary link-sm" tabindex="-1" href="#">¿Necesita Ayuda?</a>
                                    </div>
                                    <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Correo Electrónico">
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <div class="form-label-group">
                                        <label class="form-label" for="password">Contraseña</label>
                                        <a class="link link-primary link-sm" tabindex="-1" href="html/pages/auths/auth-reset.html">¿Olvidó su Contraseña?</a>
                                    </div>
                                    <div class="form-control-wrap">
                                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                        </a>
                                        <input type="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                    </div>
                                </div><!-- .foem-group -->
                                <div class="form-group">
                                    <button class="btn btn-lg btn-success btn-block">Iniciar Sesión</button>
                                </div>
                            </form><!-- form -->
                        </div><!-- .nk-block -->
                        <div class="nk-block nk-auth-footer">
                            <div class="nk-block-between">
                                <ul class="nav nav-sm">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Terminos y Condiciones</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Politica de Privacidad</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Ayuda</a>
                                    </li>
                                </ul><!-- .nav -->
                            </div>
                            <div class="mt-3">
                                <p>&copy; <?= date("Y");?> Presupuesto App. Derechos Reservados.</p>
                            </div>
                        </div><!-- .nk-block -->
                    </div><!-- .nk-split-content -->
                    <div class="nk-split-content nk-split-stretch bg-lighter d-flex toggle-break-lg toggle-slide toggle-slide-right" data-content="athPromo" data-toggle-screen="lg" data-toggle-overlay="true">
                        <div class="slider-wrap w-100 w-max-550px p-3 p-sm-5 m-auto">
                            <div class="slider-init" data-slick=''>
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="<?=base_url('public/images/slides/promo-a.png')?>" srcset="<?=base_url('public/images/slides/promo-a2x.png')?> 2x" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Gastos</h4>
                                            <p>Registre y lleve un control de sus gastos.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="<?= base_url('public/images/slides/promo-b.png')?>" srcset="<?=base_url('public/images/slides/promo-b2x.png')?> 2x" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Gastos</h4>
                                            <p>Guarde reporte de sus gastos y administrelos despues.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                                <div class="slider-item">
                                    <div class="nk-feature nk-feature-center">
                                        <div class="nk-feature-img">
                                            <img class="round" src="<?= base_url('public/images/slides/promo-c.png')?>" srcset="<?=base_url('public/images/slides/promo-c2x.png')?> 2x" alt="">
                                        </div>
                                        <div class="nk-feature-content py-4 p-sm-5">
                                            <h4>Proyecciones</h4>
                                            <p>Realice proyecciones a futuro de acuerdo a sus finanzas registradas.</p>
                                        </div>
                                    </div>
                                </div><!-- .slider-item -->
                            </div><!-- .slider-init -->
                            <div class="slider-dots"></div>
                            <div class="slider-arrows"></div>
                        </div><!-- .slider-wrap -->
                    </div><!-- .nk-split-content -->
                </div><!-- .nk-split -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- content @e -->
    </div>
    <!-- main @e -->
</div>
<!-- app-root @e -->
<!-- JavaScript -->
<script src="<?=base_url('public/js/bundle.js?ver=2.4.0')?>"></script>
<script src="<?=base_url('public/js/scripts.js?ver=2.4.0')?>"></script>

</html>