@extends('layouts.app')

@section('content')
<section class="font-mono" id="hero">
        <!-- Flex Container -->
        <div class="container items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
            <div>
                <h1 class="text-center text-3xl mb-5">O nama</h1>
                <article class="mb-5">
                    Športsko-ribolovni klub "Jug 2" osnovan je 1998. godine radi čuvanja prirode, poribljavanja i očuvanja okoliša, razvijanja športskog ribolova i rekreacije te ljubavi prema prirodi. Od osnutka kluba članovi kluba i drugi građani osječkog naselja Jug 2 pristupili su čišćenju bajera s kojeg je odvezeno stotine kamiona smeća te posađeno na stotine sadnica vrbe, oraha, jasena i drugog drveća kako bi okoliš oko bajera postao ono što je danas.
                    Iz vodene površine bajera izvađeno je mnogo automobilskih guma i drugog otpada. Uz pomoć Gradskog poglavarstva uredili smo igralište za odbojku na pijesku, sagrađeno je dječje igralište i postavljen sanitarni čvor. Članovi ŠRK "Jug 2" uz pomoć Elektroslavonije postavili su šest rasvjetnih stupova kako bi se građani Juga 2 mogli i po noći neometano šetati. U početku revitalizacije jezera obavljena je analiza vode i možemo sa zadovoljstvom reci da je kvaliteta vode druge kategorije i da zadovoljava propise kako za poribljavanje tako i za kupače. Velikim zauzimanjem članova kluba postavljena je i montažna kučica koja služi kao tajništvo kluba i za druženje članova i mladeži. Prošlih godina sagrađene su pristupne staze bajeru, a postavljen je i ponton kako bi kupaći mogli uživati tijekom ljetnih mjeseci jer je ovaj bajer i omiljeno kupalište Osječana koji žive u južnom dijelu grada. U ribičkim natjecanjima članovi kluba postigli su zavidne rezultate tako su juniori kluba osvojili prvo mjesto u Županiji osječko-baranjskoj, a veterani su osvojili prvo mjesto u Zajednici športskih ribolovnih društava Osijek. 
                    U vitrinama kluba imamo više od 100 pehara koje su članovi osvojili na raznim natjecanjima i kupovima. Naš rad prepoznali su i u Gradskom poglavarstvu, tako da smo dobili priznanje grada Osijeka - Pečat grada za nesebično očuvanje prirode i okoliša. 2001. godine ŠRK "Jug 2" dobiva i Zelenu povelju Osječko-baranjske županije, što je veliko priznanje članovima kluba i velika obaveza za budući rad. ŠRK "Jug 2" učlanjen je u Zajednicu ŠRD Osijek koja ima devetnaest članica u kojoj je naš klub po broju članstva na četvrtom mjestu. 
                </article>
           </div>
           <div>
                <h1 class="text-center text-3xl mb-5">Bajer Jug 2</h1>
                <article class="mb-5">
                    JEZERO JUG 2 - Zauzima 5 hektara ribolovne vode a nalazi se na području gradskog rajona. Jezero se poribljava godišnje s oko 2000 kg ribe - šaran, amur, a love se još štuka i som. Svake se godine u jezero postavlja više komada smuđevskih gnijezda, kako bi smuđ imao što kvalitetnije uvjete za mrijest. Prošlih godina ulovljeno je više kapitalnih somova, a Zdravko Hajduković ulovio je soma teškog 31 kg, Stojan Ptiček ulovio je soma teškog 25 kg. Na vodu možete doći iz Divaltove prema Tenji, ili uz nogometno igralište NK Metalca.
                </article>
           </div>
            <div class="flex flex-col-reverse items-center px-6 mx-auto mt-10 space-y-0 md:space-y-0 md:flex-row">
                <div class="md:w-1/2 m-3">
                    <img src="{{ URL('images/bajer1.jpg')}}" alt="Bajer jug 2" />
                </div>
                <div class="md:w-1/2 m-3">
                    <img src="{{ URL('images/bajer2.jpg')}}" alt="Bajer jug 2" />
                </div>
            </div> 
            <div>
                <h1 class="text-center text-3xl mb-5">Vodstvo kluba</h1>
                <div class="flex flex-col-reverse md:flex-row mb-7">
                    <div class="md:w-1/3 mb-5">
                        <h1 class="md:text-2xl mb-5">Izvršni odbor:</h1>
                        <li>Tomislav Gerovac - Predsjednik Izvršnog odbora</li>                 
                        <li>Josip Sabo - Dopredsjednik Izvršnog odbora</li> 
                        <li>Rudolf Kalmar - Dopredjednik</li> 
                        <li>Bernard Opančar - Tajnik</li> 
                        <li>Franjo Koškanj - Komisija za natjecanja</li> 
                        <li>Željko Tubić - član</li>
                        <li>Damir Majer - član</li>
                    </div>
                    <div class="md:w-1/3 mb-5">
                        <h1 class="md:text-2xl mb-5">Nadzorni odbor:</h1>
                        <li>Željko Bohović - Predsjednik Nadzornog odbora</li>                 
                        <li>Milan Cindrić - član</li> 
                        <li>Goran Majer - član</li>                        
                    </div>
                    <div class="md:w-1/3 mb-5">
                        <h1 class="md:text-2xl mb-5">Stegovni sud:</h1>
                        <li>Željko Novaković - Predsjednik stegovnog suda</li>                 
                        <li>Dragan Dundić - član </li> 
                        <li>Ivica Lenger - član</li>                        
                    </div>
                </div>
                
                <div class="flex flex-col-reverse md:flex-row items-center justify-center">
                    <div class="md:w-1/3 mb-5 ">
                        <h1 class="md:text-2xl mb-5">Predsjednik kluba:</h1>
                        <li>Tomislav Gerovac - tel : 098 528 666</li>                                    
                    </div>
                    <div class="md:w-1/3 mb-5 mt-3">
                        <h1 class="md:text-2xl mb-5">Podaci kluba:</h1>
                        <li>Adresa: Južno predgrađe 21, 31000 Osijek</li> 
                        <li>MB: 1355775</li>    
                        <li>ŽR: 2393000-1102024170 </li>                              
                    </div>
                </div>
           </div>       
        </div>
    </section>
@endsection