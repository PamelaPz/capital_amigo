@extends('layouts.front')

@section('content')

<!-- Main Section start -->
<section id="inicio" class="p-0 no-transition h-100vh">
    <h2 class="d-none">heading</h2>
    <!--Main Slider-->
    <div id="revo_thumbs_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="secondary-banner" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.1">
            <ul>
                <!-- SLIDE 1 -->
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('capital_amigo/img/full7.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="0" data-no-retina>
                    <div class="bg-overlay bg-black opacity-7"></div>
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-8 bg-blue blue-box"
                         data-x="['center','center','center','center']" data-hoffset="['80','80','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','10']"
                         data-whitespace="nowrap"
                         data-width="['615px','615px','490px','292px']" data-height="['500px','500px','425px','261px']"
                         data-responsive_offset="on"

                         data-frames='[{"delay":319.921875,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 0;">

                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','left','center','center']" data-hoffset="['70','70','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-105','-105','-105','-90']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','left','center','center']"
                         data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">Capital Amigo es un
                    </div>
                    <div class="tp-caption tp-resizeme bg-green"
                         data-x="['left','left','center','center']" data-hoffset="['75','75','5000','5000']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','20']"
                         data-width="['45px','45px','45px','45px']"
                         data-height="['4px','4px','4px','4px']"
                         data-whitespace="nowrap"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"delay":319.921875,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 0;">
                        <div class="rs-looped rs-slideloop d-none d-md-block" data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0" data-origin="50% 50%"> </div>

                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','left','center','center']" data-hoffset="['150','150','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-15']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','left','center','center']"
                         data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1500" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">fondo diversificado

                        <div class="rs-looped rs-slideloop d-none d-md-block" data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0" data-origin="50% 50%"> </div>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['left','left','center','center']" data-hoffset="['70','70','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','50']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['left','left','center','center']"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                         data-start="2000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 500; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">de capital privado.
                    </div>
                </li>
                <!-- SLIDE 2 -->
                <li data-index="rs-04" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('capital_amigo/img/full8.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="0" data-no-retina>
                    <div class="bg-overlay bg-black opacity-7"></div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-135','-120']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">Sólidas plataformas 
                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-55']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1500" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 500; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">para invertir en el
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['5','5','5','15']"
                         data-fontsize="['55','55','55','25']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                         data-start="2000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">desarrollo, construcción, operación y
                    </div>
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['75','5','5','65']"
                         data-fontsize="['55','55','55','25']"
                         data-whitespace="['nowrap','nowrap','nowrap','wrap']" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                         data-start="2000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">adquisición de activos inmobiliarios.
                    </div>
                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['145','75','75','135']"
                         data-fontsize="['22','22','24','16']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['center','center','center','center']"
                         data-transform_idle="o:1;"
                         data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                         data-transform_out="s:20;e:Power4.easeInOut;s:20;e:Power4.easeInOut;"
                         data-start="800" data-splitin="none" data-splitout="none"
                         style="z-index:4; font-weight: 200; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">Capital Amigo • Inversiones Inmobiliarias
                    </div>
                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['215','145','145','210']"
                         data-width="['180','180','180','180']"
                         data-frames='[{"delay":600,"speed":2000,"frame":"0","from":"sX:1;sY:1;opacity:0;fb:40px;","to":"o:1;fb:0;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['center','center','center','center']"
                         style="z-index:99; max-width: 960px">
                        <a href="#aboutus" class="scroll btn-setting btn-scale btn-green text-white">Leer más</a>
                    </div>

                </li>
                <!-- SLIDE 3 -->
                <li data-index="rs-03" data-transition="fade" data-slotamount="default" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="">
                    <!-- MAIN IMAGE -->
                    <img src="{{ asset('capital_amigo/img/full20.jpg')}}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="0" data-no-retina>
                    <div class="bg-overlay bg-black opacity-7"></div>
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-8 bg-green blue-box"
                         data-x="['center','center','center','center']" data-hoffset="['-160','-160','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','10']"
                         data-whitespace="nowrap"
                         data-width="['615px','615px','490px','292px']" data-height="['500px','500px','425px','261px']"
                         data-responsive_offset="on"

                         data-frames='[{"delay":319.921875,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 0;">

                    </div>
                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','right','center','center']" data-hoffset="['70','70','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-105','-105','-105','-90']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','center','center']"
                         data-frames='[{"delay":0,"speed":2000,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 300; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">Experiencia probada en 
                    </div>
                    <div class="tp-caption tp-resizeme bg-blue"
                         data-x="['right','right','center','center']" data-hoffset="['800','300','5000','5000']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','20']"
                         data-width="['45px','45px','45px','45px']"
                         data-height="['4px','4px','4px','4px']"
                         data-whitespace="nowrap"

                         data-type="image"
                         data-responsive_offset="on"

                         data-frames='[{"delay":319.921875,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power2.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]"

                         style="z-index: 0;">
                        <div class="rs-looped rs-slideloop d-none d-md-block" data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0" data-origin="50% 50%"> </div>

                    </div>
                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','right','center','center']" data-hoffset="['75','75','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-15']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','center','center']"
                         data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                         data-start="1500" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 500; line-height: 60px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal">originación, estructuración,

                        <div class="rs-looped rs-slideloop d-none d-md-block" data-speed="5" data-xs="-10" data-xe="10" data-ys="0" data-ye="0" data-origin="50% 50%"> </div>
                    </div>
                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption tp-resizeme"
                         data-x="['right','right','center','center']" data-hoffset="['70','70','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['40','40','40','50']"
                         data-fontsize="['55','55','55','35']"
                         data-whitespace="nowrap" data-responsive_offset="on"
                         data-width="['none','none','none','none']" data-type="text"
                         data-textalign="['right','right','center','center']"
                         data-frames='[{"delay":1500,"speed":1500,"frame":"0","from":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"x:[100%];opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","ease":"Power4.easeInOut"}]'
                         data-start="2000" data-splitin="none" data-splitout="none"
                         style="z-index:1; font-weight: 500; line-height: 65px; color: #ffffff;font-family: 'Raleway', sans-serif;text-transform:normal"> desarrollo y monetización.
                    </div>
                </li>
                
            </ul>
        </div>
    </div>
    <!--Main Slider ends -->
</section>
<!-- Main Section end -->

<!-- About start -->
<section id="aboutus" class="bg-light-gray3 pb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{ $about->h5 }} </h5>
                    <h2> {{ $about->h2 }} </h2>

                    <p class="mb-4">{{ $about->p1 }}</p>
                    <p> {{ $about->p2 }} </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full py-4">
        <div class="row">
            <div class="col-md-4 col-sm-12 p-0">
                <div class="about-box center-block wow zoomIn" data-wow-delay="400ms">
                    <div class="about-opacity-icon"> <i class="fas fa-bullseye" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fas fa-bullseye" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-3">MISIÓN</h5>
                    <p>Administrar y maximizar rendimiento y rentabilidad de los fondos, inversionistas y clientes impulsando el desarrollo del país.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-0">
                <div class="about-box center-block wow zoomIn" data-wow-delay="400ms">
                    <div class="about-opacity-icon"> <i class="fa fa-lightbulb" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-lightbulb" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-3">VISIÓN</h5>
                    <p>Ser promotores de la inversión en México enfocados en la maximización de la rentabilidad de los inversionistas, clientes y empleados para lograr el desarrollo de proyectos inmobiliarios exitosos que incentiven el crecimiento de la industria.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 p-0">
                <div class="about-box center-block wow zoomIn" data-wow-delay="600ms">
                    <div class="about-opacity-icon"> <i class="fa fa-chart-line" aria-hidden="true"></i> </div>
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-chart-line" aria-hidden="true"></i>
                    </div>
                    <h5 class="mb-3">VALOR</h5>
                    <p>Completa y total transparencia en cada uno de los proyectos que administramos, tanto con nuestros aliados estratégicos, como con nuestros clientes para asegurar su inversión. Sus intereses son los nuestros.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About ends -->

<!-- Team start -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <!-- <h5> Nuestro Equipo </h5> -->
                    <h2> Conoce a <b>nuestro</b> equipo </h2>
                    <p>Somos un equipo local multidisciplinario con un promedio de 15+ años de experiencia en los sectores
                        financiero, inmobiliario, regulatorio, infraestructura y de administración de activos.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="team-classic owl-team owl-carousel text-center wow fadeInUp">
                    @foreach ($teams as $team)
                        <div class="item">
                            <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                                <div class="image">
                                    <img src="{{ asset('storage/'.$team->imagen)}}" alt="team" class="img-responsive" data-no-retina>
                                    <div class="team-overlay center-block">
                                        <ul class="social_icon d-flex justify-content-center noborder">
                                            <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                            <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                            <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i> </a> </li>
                                            <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-classic-content">
                                    <h5 class="color-black font-weight-600 mb-2 text-capitalize">{{ $team->name }}</h5>
                                    <p class="color-black font-weight-normal font-16 ">{{ $team->puesto }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--<div class="item">
                        <div class="team-data-img wow fadeIn" data-wow-delay="350ms">
                            <div class="image">
                                <img src="{{ asset('capital_amigo/img/full5.jpg')}}" alt="team" class="img-responsive" data-no-retina>
                                <div class="team-overlay center-block">
                                    <ul class="social_icon d-flex justify-content-center noborder">
                                        <li><a class="facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i> </a> </li>
                                        <li><a class="twitter" href="javascript:void(0)"><i class="fab fa-twitter"></i> </a> </li>
                                        <li><a class="google" href="javascript:void(0)"><i class="fab fa-google"></i> </a> </li>
                                        <li><a class="insta" href="javascript:void(0)"><i class="fab fa-instagram"></i> </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-classic-content">
                                <h5 class="color-black font-weight-600 mb-2 text-capitalize">Carlos Valladares</h5>
                                <p class="color-black font-weight-normal font-16 ">Socio fundador del Fondo</p>
                            </div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team ends -->

<section class="py-0">    
    <div class="half-section p-0 bg-change bg-green">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 p-0 order-lg-2">
                    <div class="hover-effect">
                        <img alt="stats" src="{{ asset('capital_amigo/img/full21.jpg')}}" class="about-img">
                    </div>
                </div>
    
                <div class="col-lg-8 col-md-12 p-lg-0 mt-4">
                    <div class="split-container-setting style-three">
                        <div class="main-title mb-3 text-lg-left wow fadeIn" data-wow-delay="300ms">
                            <h4 class="m-0"> Trayectoria </h4>
                        </div>
                        <ul class="text-left">
                            <li class="custom-progress wow fadeInLeft">
                                <div class="font-18">
                                    <p class="color-white text-normal">
                                        El equipo de inversión y administración tiene experiencia probada de más de 100
                                        activos reales desde 2007 enfocados en el sector industrial, comercial usos mixtos , turismo,
                                        comunidades planeadas e infraestructura
                                    </p>
                                </div>
                            </li>
                        </ul>
                    
                        <div class="main-title mb-3 text-lg-left wow fadeIn" data-wow-delay="300ms">
                            <h4 class="m-0"> Desarrollo y estructuración de <b>proyectos complejos</b> </h4>
                        </div>
                        <ul class="text-left">
                            <li class="custom-progress wow fadeInLeft">
                                <div class="font-18">
                                    <p class="color-white text-normal">
                                        El equipo está integrado por expertos en el
                                        sector y cuenta con la integración de equipos y asesores especializados para el desarrollo de
                                        proyectos
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="main-title mb-3 text-lg-left wow fadeIn" data-wow-delay="300ms">
                            <h4 class="m-0"> Mercado </h4>
                        </div>
                        <ul class="text-left">
                            <li class="custom-progress wow fadeInLeft">
                                <div class="font-18">
                                    <p class="color-white text-normal">
                                        Derivado de la situación actual del mercado global y nacional , la modena local se ha
                                        visto con lo que las propiedades son un activo que difícilmente pierden su valor, debido a que, con
                                        el paso del tiempo y el aumento de la plusvalía de la zona geográfica hará que tu inversión obtenga
                                        rendimientos sobre el valor de la propiedad , logrando así una mayor rentabilidad de forma
                                        segura
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cases start -->
<section id="cases">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h5> {{ $project->h5 }} </h5>
                    <h2> {{ $project->h2 }} </h2>
                    <p> {{ $project->p1 }} </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="wrapper-cases">
                    @foreach ($grid_projects as $grid_project)
                        <div class="case-item wow zoomIn">
                            <div class="case-img {{ $grid_project->status }}">
                                <img src="{{ asset('storage/'.$grid_project->imagen)}}" alt="">
                            </div>
                            <a href="#" class="case-activeWrap hover-effect">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        <div class="cases-image-inner">
                                            <span class="cases-line top"></span>
                                            <span class="cases-line top-right"></span>
                                            <span class="cases-line bottom"></span>
                                            <span class="cases-line bottom-left"></span>
                                            <h6 class="text-white text-uppercase font-14 font-secondary font-weight-light">{{ $grid_project->name }}</h6>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    {{--<div class="case-item wow zoomIn">
                        <div class="case-img proximamente">
                            <img src="{{ asset('capital_amigo/img/full17.jpg')}}" alt="">
                        </div>
                        <a href="#" class="case-activeWrap hover-effect">  
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cases-image-inner">
                                        <span class="cases-line top"></span>
                                        <span class="cases-line top-right"></span>
                                        <span class="cases-line bottom"></span>
                                        <span class="cases-line bottom-left"></span>
                                        <h6 class="text-white text-uppercase font-14 font-secondary font-weight-light">Proximamente</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="case-item wow zoomIn">
                        <div class="case-img proximamente">
                            <img src="{{ asset('capital_amigo/img/full18.jpg')}}" alt="">
                        </div>
                        <a href="#" class="case-activeWrap hover-effect">
                            <div class="cbp-l-caption-alignCenter">
                                <div class="cbp-l-caption-body">
                                    <div class="cases-image-inner">
                                        <span class="cases-line top"></span>
                                        <span class="cases-line top-right"></span>
                                        <span class="cases-line bottom"></span>
                                        <span class="cases-line bottom-left"></span>
                                        <h6 class="text-white text-uppercase font-14 font-secondary font-weight-light">Proximamente</h6>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Cases ends -->

<!-- Price start -->
<section id="prices" class="bg-light-gray price-style2 mb-0 pb-0 bg-green">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn" data-wow-delay="300ms">
                    <h2 class="text-white"> Estrategía de <b>Inversión</b> </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="half-section p-0 bg-change bg-green">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-12 p-0">
                <div class="hover-effect">
                    <div class="" style="background-image: url('capital_amigo/img/full14.jpg'); background-size: cover; width: 100%; height: 30rem; background-position: center;"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-lg-0 ">
                <div class="split-container-setting style-two text-center text-lg-left">
                    <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                        <h5 class="font-18"> Propiedades </h5>
                        <h2 class="mb-0">Valor <br> <b>Agregado</b> </h2>
                    </div>
                    <p class="color-white mb-5">A través de nuestra gran red en la industria, la Firma tiene acceso a oportunidades únicas de adquisición, financiamiento y desarrollo. </p>
                    <!-- <a href="javascript:void(0)" class="btn-setting btn-transparent btn-hvr-blue color-white">learn more</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-lg-0 ">
                <div class="split-container-setting style-two text-center text-lg-right">
                    <div class="main-title mb-5 text-lg-right wow fadeIn" data-wow-delay="300ms">
                        <h5 class="font-18"> Segmento </h5>
                        <h2 class="mb-0"> <b>Urbano</b> </h2>
                    </div>
                    <p class="color-white mb-5">
                        Existe una oportunidad particular en proyectos residenciales dentro de áreas urbanas en todo el país a medida que crece la clase media aumenta el poder adquisitivo, aumenta la disponibilidad de crédito y cambian las preferencias de vida. </p>
                    <!-- <a href="javascript:void(0)" class="btn-setting btn-transparent btn-hvr-blue color-white">learn more</a> -->
                </div>
            </div>
            <div class="col-lg-2 col-md-12 p-0">
                <div class="hover-effect">
                    <div class="" style="background-image: url('capital_amigo/img/full19.jpg'); background-size: cover; width: 100%; height: 30rem; background-position: center;"></div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-2 col-md-12 p-0">
                <div class="hover-effect">
                    <div class="" style="background-image: url('capital_amigo/img/full13.jpg'); background-size: cover; width: 100%; height: 30rem; background-position: center;"></div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-lg-0 ">
                <div class="split-container-setting style-two text-center text-lg-left">
                    <div class="main-title mb-5 text-lg-left wow fadeIn" data-wow-delay="300ms">
                        <h5 class="font-18"> Socios </h5>
                        <h2 class="mb-0"> <b>Estratégicos</b> </h2>
                    </div>
                    <p class="color-white mb-5">
                        Colaboramos con socios estratégicos de clase mundial que complementan nuestras capacidades con experiencia y talentos adicionales en todos nuestros proyectos a través de la participación en áreas que incluyen Arquitectura, Diseño, Supervisión de Obra, Ingeniería. </p>
                    <!-- <a href="javascript:void(0)" class="btn-setting btn-transparent btn-hvr-blue color-white">learn more</a> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-12 p-lg-0 ">
                <div class="split-container-setting style-two text-center text-lg-right">
                    <div class="main-title mb-5 text-lg-right wow fadeIn" data-wow-delay="300ms">
                        <h5 class="font-18"> Cadena de </h5>
                        <h2 class="mb-0"> <b>Valor</b> </h2>
                    </div>
                    <p class="color-white mb-5">
                        La capacidad del equipo de administración y de todos los integrantes de la Firma hacen que nuestra capacidad de originación, estructuración, adquisición, desarrollo, gestión de activos y ejecución de los proyectos nos permitan controlar toda la cadena de valor con el objetivo de lograr el mayor rendimiento para nuestro fondo, nuestros inversionistas y clientes finales. </p>
                    <!-- <a href="javascript:void(0)" class="btn-setting btn-transparent btn-hvr-blue color-white">learn more</a> -->
                </div>
            </div>
            <div class="col-lg-2 col-md-12 p-0">
                <div class="hover-effect">
                    <div class="" style="background-image: url('capital_amigo/img/full26.jpg'); background-size: cover; width: 100%; height: 30rem; background-position: center;"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Price ends -->

<!-- Brands starts -->
<section class="bg-black3">
    <div class="py-4">
      <h2 class="d-none">heading</h2>
       <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title wow fadeIn pb-2" data-wow-delay="300ms">
                    <h2 class="text-white"> Socios <b>Estratégicos</b> </h2>
                </div>
            </div>
        </div>
        <div class="brand-carousel owl-carousel owl-theme">
            @foreach ($socios as $socio)
                <div class="item" id="socio">
                    <img src="{{ asset('storage/'.$socio->imagen)}}" alt="Logo">
                </div>
            @endforeach
        </div>
    </div>
    </div>
</section>
<!-- Brands ends -->

<!-- Contact & Map starts -->
<section id="contact" class="w-100 bg-light-gray2 py-5">
    <div class="container contact-shadow">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 pr-lg-0">
                <div class="contact-box box-shadow-contact">
                    <div class="main-title text-center text-md-left mb-4">
                        <h2 class="font-weight-normal">{{ $contact->h2 }}</h2>
                        <h5> {{ $contact->h5 }} </h5>
                    </div>
                    <div class="text-center text-md-left">
                        <p class="mb-3">
                        <a class="color-black" href="https://www.google.com/maps/place/Av.+Pdte.+Masaryk+61,+Polanco,+Polanco+V+Secc,+Miguel+Hidalgo,+11560+Ciudad+de+M%C3%A9xico,+CDMX/@19.4316156,-99.1858359,17z/data=!4m5!3m4!1s0x85d1f8acb1b568ef:0x418e9c27c5a8301a!8m2!3d19.4316159!4d-99.183647" target="_blank" rel="noopener noreferrer">
                            {{ $contact->address }}
                        </a> 
                        </p>
                        <p class="mb-3"> Office Telephone : <a href="tel:+52 (55) 5293 9213" class="text-white">{{ $contact->phone }}</a></p>
                        <p class="mb-3"> Email: <a href="mailto:contacto@capitalamigo.mx" class="color-black">{{ $contact->email }}</a> </p>
                        <!-- <p class="mb-3">Mon-Sat: 9am to 6pm</p> -->
                        <div class="address-social black">
                        <ul class="list-unstyled">
                            <li><a class="facebook-bg-hvr ml-0" href="javascript:void(0);"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                            <li><a class="twitter-bg-hvr" href="javascript:void(0);"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a class="google-bg-hvr" href="javascript:void(0);"><i class="fab fa-google" aria-hidden="true"></i></a></li>
                            <li><a class="linkedin-bg-hvr" href="javascript:void(0);"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a class="instagram-bg-hvr mr-0" href="javascript:void(0);"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 split-box-container-setting text-center p-4 btn-green">
                <div class="split-container-setting-contacto">
                    <div class="main-title text-center text-lg-left mb-lg-4 wow fadeIn" data-wow-delay="300ms">
                       <h3 class="mb-1rem text-white"> Envíanos un <b>mensaje</b></h3>
                       <h5 class="text-white"> Te responderemos a la brevedad </h5>
                    </div>
                    <div class="request-form">
                        <form class="request-form-outer" id="contact-form-data">
                            <div class="row">
                                <!-- <div class="col-sm-12" id="result"></div> -->
                                <div class="col-md-12 col-sm-12">
                                    <div class="request-form-textfield pb-4">
                                        <input type="text" placeholder="Nombre Completo" class="form-control mb-0 bg-white" required id="name" name="userName">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="request-form-textfield pb-4">
                                        <input type="tel" placeholder="Asunto" class="form-control mb-0 bg-white" required id="phone" name="userPhone">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="request-form-textfield pb-4">
                                        <input type="email" placeholder="Email" class="form-control mb-0 bg-white" required id="email" name="userEmail">
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12">
                                    <div class="request-form-textfield pb-4">
                                        <textarea  placeholder="Mensaje" class="form-control mb-0 bg-white" rows="5" required id="name" name="userName"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 pt-xs-25px text-lg-left text-center">
                                    <a href="javascript:void(0)" class="btn-setting btn-scale btn-blue contact_btn">Enviar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!-- <div class="col-lg-6 col-md-6 col-sm-12 p-0 col-map box-shadow-map">
                <div id="google-map" class="bg-light-gray map"></div>
            </div> -->
        </div>
    </div>
</section>
<!-- Contact & Map ends -->


@endsection