<!DOCTYPE html>
<html lang="de" class="scroll-smooth">

<head>
        <title>Webdesign Agentur | webstudios.ch</title>
    <meta name="description" content="webstudios ist Ihre Webdesign-Agentur in Küssnacht (SZ). Wir erstellen moderne, schnelle Webseiten & digitale Lösungen für KMU. Jetzt Erstgespräch vereinbaren!">
    <meta property="og:title" content="webstudios | Professionelles Webdesign aus Küssnacht">
    <meta property="og:description" content="Ihre Experten für moderne Webseiten, AI-Integration und digitale Präsenz in der Region Schwyz.">
    <meta property="og:image" content="https://www.webstudios.ch/social-preview.png"> <meta property="og:url" content="https://www.webstudios.ch/"> <meta property="og:type" content="website">
    <meta property="og:site_name" content="webstudios">

    <?php include '_head-common.php'; ?>
</head>
<script src="https://app.privacybee.io/cookie-banner.js" website-id="cmhjhi5b404opy97sv5uffi8j" defer></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/de.js"></script>

    <script src="script.js"></script>
    
    <script>
      requestAnimationFrame(() => {
        document.body.style.visibility = 'visible';
        document.body.style.opacity = '1';
      });
    </script>
    
</body>

<body class="bg-[#F8F7F4] text-[#2c2c2c]">


    <header class="fixed top-0 w-full z-50 p-4 flex justify-center">
        <nav class="relative w-full max-w-6xl flex justify-between items-center px-6 py-2 bg-white/50 backdrop-blur-lg rounded-full border border-gray-200">
            
        <div class="flex-shrink-0 flex items-center">
            <a href="./">
                <img src="logo.png" alt="webstudios Logo" class="h-32 w-auto -mt-10 -mb-10 shimmer-logo"> 
            </a>
        </div>

            <div class="hidden md:flex absolute left-1/2 -translate-x-1/2 space-x-10">
                <a href="./services" class="text-gray-500 hover:text-black font-medium transition-colors duration-300 text-lg">Services</a>
                <a href="./prozess" class="text-gray-500 hover:text-black font-medium transition-colors duration-300 text-lg">Prozess</a>
                <a href="./über-uns" class="text-gray-500 hover:text-black font-medium transition-colors duration-300 text-lg">Über uns</a>
                <a href="./kontakt" class="text-gray-500 hover:text-black font-medium transition-colors duration-300 text-lg">Kontakt</a>
            </div>
            
            <div class="hidden md:flex items-center">
                <a href="./kontakt" class="bg-[#E86A33] hover:bg-[#D05F2C] text-white font-bold py-2 px-5 rounded-full transition-colors duration-300">
                    Gratis Offerte anfragen
                </a>
            </div>

            <button id="mobile-menu-button" class="md:hidden text-gray-600 hover:text-black focus:outline-none">
                <span class="sr-only">Menü öffnen</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" /></svg>
            </button>
        </nav>
    </header>
    <div id="mobile-menu" class="hidden md:hidden fixed top-24 left-4 right-4 z-40 bg-white/90 backdrop-blur-lg rounded-2xl border border-gray-200 p-4 space-y-2">
        <a href="./services" class="block text-center py-2 px-4 text-gray-600 hover:text-black rounded-lg hover:bg-gray-100">Services</a>
        <a href="./prozess" class="block text-center py-2 px-4 text-gray-600 hover:text-black rounded-lg hover:bg-gray-100">Prozess</a>
        <a href="./über-uns" class="block text-center py-2 px-4 text-gray-600 hover:text-black rounded-lg hover:bg-gray-100">Über uns</a>
        <a href="./kontakt" class="block text-center py-2 px-4 text-gray-600 hover:text-black rounded-lg hover:bg-gray-100">Kontakt</a>
        <a href="./kontakt" class="block text-center py-3 px-4 mt-2 text-white font-semibold bg-[#E86A33] hover:bg-[#D05F2C] rounded-lg">Gratis Offerte anfragen</a>
    </div>

    <main>
        <section id="hero-and-über-uns" class="relative overflow-hidden bg-gradient-to-b from-orange-50/50 to-gray-50/50">
            
            <div class="pt-48 pb-16 flex items-center justify-center">
                <div class="absolute inset-0 z-0 opacity-20">
                    <div class="absolute top-1/4 left-1/4 w-96 h-96 bg-orange-300 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
                    <div class="absolute top-1/2 right-1/4 w-80 h-80 bg-red-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
                    <div class="absolute bottom-1/4 left-1/2 w-72 h-72 bg-orange-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
                </div>
                <div class="container mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 fade-in-up">
                    <h1 class="text-5xl sm:text-[4.75rem] md:text-[5.5rem] font-extrabold mb-6 leading-tight text-gray-900">
                        <span class="shimmer-text block mb-2">Ihre digitale Präsenz.</span>
                        <span class="block">Neu definiert.</span>
                    </h1>
                    <p class="text-lg sm:text-xl text-gray-600 max-w-3xl mx-auto mb-10">
                        Der unkomplizierte Weg zu Ihrer performanten Webseite. In Rekordzeit online, ohne Kompromisse bei der Qualität.
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-6">
                        <a href="./services" class="inline-block bg-[#E86A33] hover:bg-[#D05F2C] text-white font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 glow-on-hover">
                            Leistungen ansehen
                        </a>
                        <a href="./kontakt" class="inline-block bg-white hover:bg-gray-100 text-gray-700 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 border-2 border-gray-300">
                            Kostenloses Erstgespräch
                        </a>
                    </div>
                </div>
            </div>

            <div class="pt-32 pb-32">
                <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center fade-in-up">
                        <div class="space-y-4 p-4 group">
                            <svg class="h-16 w-16 text-[#E86A33] mx-auto icon-glow-on-hover" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                            <h3 class="text-3xl font-semibold text-gray-900">Innovation</h3>
                            <p class="text-gray-500 text-lg">Wir nutzen modernste Technologien, um Webseiten zu schaffen, die sich von der Masse abheben.</p>
                        </div>
                        <div class="space-y-4 p-4 group">
                            <svg class="h-16 w-16 text-[#E86A33] mx-auto transition-transform duration-500 ease-in-out group-hover:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.438.995s.145.755.438.995l1.003.827c.424.35.534.954.26 1.431l-1.296 2.247a1.125 1.125 0 01-1.37.49l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.063-.374-.313-.686-.645-.87a6.52 6.52 0 01-.22-.127c-.324-.196-.72-.257-1.075-.124l-1.217.456a1.125 1.125 0 01-1.37-.49l-1.296-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.437-.995s-.145-.755-.437-.995l-1.004-.827a1.125 1.125 0 01-.26-1.431l1.296-2.247a1.125 1.125 0 011.37-.49l1.217.456c.355.133.75.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <h3 class="text-3xl font-semibold text-gray-900">Massarbeit</h3>
                            <p class="text-gray-500 text-lg">Jedes Projekt ist einzigartig. Wir entwickeln Lösungen, die exakt auf Ihre Vision zugeschnitten sind.</p>
                        </div>
                        <div class="space-y-4 p-4 group">
                            <svg class="h-16 w-16 text-[#E86A33] mx-auto icon-vibrate-on-hover" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                            <h3 class="text-3xl font-semibold text-gray-900">Partnerschaft</h3>
                            <p class="text-gray-500 text-lg">Wir sind Ihr verlässlicher Partner, von der ersten Idee bis zur laufenden Wartung.</p>
                        </div>
                    </div>
                    <div class="text-center mt-12 fade-in-up">
                        <a href="./über-uns" class="inline-block bg-transparent hover:bg-orange-50 text-orange-600 hover:text-orange-700 font-bold py-3 px-8 rounded-full transition duration-300 ease-in-out transform hover:scale-105 border-2 border-orange-500 hover:border-orange-600">
                            Mehr über uns erfahren
                        </a>
                    </div>
                </div>
            </div>
        </section>
        
<section id="packages-preview" class="py-32 bg-[#F8F7F4]">
     <div class="container mx-auto px-4 sm:px-6 lg:px-8">
          <div class="text-center mb-16">
               <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 fade-in-up">Unsere beliebtesten Pakete</h2>
               <p class="text-gray-600 mt-4 max-w-2xl mx-auto fade-in-up">Der perfekte Startpunkt für Ihr Projekt. Alle Pakete sind vollständig anpassbar.</p>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
               
               <div class="bg-white border border-gray-200 rounded-3xl p-8 card-hover fade-in-up">
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Starter</h3>
                    <p class="text-[#E86A33] text-4xl font-bold mb-6">CHF 99.90</p>
                    <ul class="space-y-3 text-gray-600 text-left mb-8">
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Moderne Landing Page
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Responsive Design
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Kontaktformular
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Social-Media-Verknüpfung
                         </li>
                    </ul>
                    <a href="./services" class="w-full text-center inline-block bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-8 rounded-full transition duration-300">
                         Mehr erfahren
                    </a>
               </div>
               
               <div class="bg-white ring-2 ring-orange-500 rounded-3xl p-8 card-hover fade-in-up relative transform scale-105 package-pulse">
                    <span class="absolute top-0 right-0 bg-[#E86A33] text-white text-xs font-bold px-3 py-1 rounded-bl-lg rounded-tr-2xl">Beliebteste Wahl</span>
                    <h3 class="text-2xl font-semibold text-gray-900 mb-2">Business</h3>
                    <p class="text-[#E86A33] text-4xl font-bold mb-6">CHF 249.90</p>
                    <ul class="space-y-3 text-gray-600 text-left mb-8">
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Bis zu 5 Seiten
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Individuelles Design
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              SEO-Grundlagen
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              KI-gestützte Funktionen
                         </li>
                    </ul>
                    <a href="./services" class="w-full text-center inline-block bg-[#E86A33] hover:bg-[#D05F2C] text-white font-bold py-3 px-8 rounded-full transition duration-300">
                         Mehr erfahren
                    </a>
               </div>
               
               <div class="bg-white border border-gray-200 rounded-3xl p-8 card-hover fade-in-up">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Premium</h3>
                    <p class="text-[#E86A33] text-4xl font-bold mb-6">Auf Anfrage</p>
                    <ul class="space-y-3 text-gray-600 text-left mb-8">
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Umfassende Lösungen
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              E-Commerce / CMS
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Fortschrittliche KI-Integration
                         </li>
                         <li class="flex items-start">
                              <span class="flex-shrink-0 w-2 h-2 bg-[#E86A33] rounded-full mt-[0.45rem] mr-3"></span>
                              Workflow-Automatisierung
                         </li>
                    </ul>
                    <a href="./services" class="w-full text-center inline-block bg-gray-100 hover:bg-gray-200 text-gray-800 font-bold py-3 px-8 rounded-full transition duration-300">
                         Mehr erfahren
                    </a>
               </div>

          </div>
     </div>
</section>

        <section id="faq" class="py-32 bg-white">
             <div class="container mx-auto px-4 sm:px-6 lg:px-8 max-w-3xl">
                <div class="text-center mb-16">
                    <h2 class="text-4xl sm:text-5xl font-bold text-gray-900 fade-in-up">Noch Fragen?</h2>
                    <p class="text-gray-500 mt-4 max-w-2xl mx-auto fade-in-up">Ein paar schnelle Antworten auf die wichtigsten Dinge.</p>
                </div>
                
                <div class="space-y-6">
                    <div class="flex justify-end fade-in-up" style="animation-delay: 0.2s;">
                        <div class="bg-orange-500 text-white p-4 rounded-2xl rounded-br-none max-w-md">
                            <p>Warum sollten wir uns für euch entscheiden?</p>
                        </div>
                    </div>
                    <div class="flex justify-start fade-in-up" style="animation-delay: 0.4s;">
                        <div class="bg-gray-200 text-gray-800 p-4 rounded-2xl rounded-bl-none max-w-md">
                            <p>Weil wir den schnellsten und unkompliziertesten Weg zu einer professionellen Webseite bieten. Zuverlässig, kostenfair und immer direkt an Ihrer Seite.</p>
                        </div>
                    </div>
                    <div class="flex justify-end fade-in-up" style="animation-delay: 0.6s;">
                        <div class="bg-orange-500 text-white p-4 rounded-2xl rounded-br-none max-w-md">
                            <p>Wie lange dauert es, bis unsere Webseite fertig ist?</p>
                        </div>
                    </div>
                    <div class="flex justify-start fade-in-up" style="animation-delay: 0.8s;">
                        <div class="bg-gray-100 text-gray-800 p-4 rounded-2xl rounded-bl-none max-w-md">
                            <p>In der Regel steht Ihr Webauftritt innerhalb von 2-3 Wochen – transparent und termingerecht. Die genaue Dauer hängt von einem guten Austausch und schnellem Feedback ab.</p>
                        </div>
                    </div>
                    <div class="flex justify-end fade-in-up" style="animation-delay: 1s;">
                        <div class="bg-orange-500 text-white p-4 rounded-2xl rounded-br-none max-w-md">
                            <p>Für welche Branchen arbeitet ihr?</p>
                        </div>
                    </div>
                    <div class="flex justify-start fade-in-up" style="animation-delay: 1.2s;">
                        <div class="bg-gray-200 text-gray-800 p-4 rounded-2xl rounded-bl-none max-w-md">
                            <p>Wir sind branchenübergreifend tätig. Ob Tech-Startup, lokales Restaurant, Handwerksbetrieb oder Online-Shop – wir entwickeln für jeden Sektor die passende digitale Lösung.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-20 fade-in-up" style="animation-delay: 1.4s;">
                    <a href="./kontakt" class="w-full flex items-center justify-between bg-gray-100 hover:bg-gray-200 rounded-full p-2 pl-6 transition-colors duration-300 group">
                        <span class="text-gray-500">Noch eine Frage? Schreib uns...</span>
                        <span class="bg-[#E86A33] text-white rounded-full p-2 group-hover:scale-110 transition-transform">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </span>
                    </a>
                </div>
            </div>
        </section>
    </main>
    
    <footer class="bg-white text-gray-500 py-12 border-t border-gray-200">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8 text-center md:text-left">
            
<div class="space-y-4 md:pt-10"> 
    <a href="./" class="inline-block">
        <img src="logo.png" alt="webstudios Logo" class="h-32 w-auto -mt-[6.7rem] -mb-10 shimmer-logo mx-auto md:mx-0"> 
    </a>
    <p class="text-sm relative -top-8">Ihre Vision, digital realisiert.</p> 
</div>
            
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Navigation</h3>
                <ul class="space-y-2">
                    <li><a href="./services" class="hover:text-black transition-colors">Services</a></li> 
                    <li><a href="./prozess" class="hover:text-black transition-colors">Prozess</a></li>
                    <li><a href="./über-uns" class="hover:text-black transition-colors">Über uns</a></li>
                    <li><a href="./kontakt" class="hover:text-black transition-colors">Kontakt</a></li>
                </ul>
            </div>
            
            <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Folge uns</h3>
                <div class="flex justify-center md:justify-start space-x-6 text-2xl text-gray-500">
                    <a href="#" class="hover:text-black transition-colors" title="TikTok"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="hover:text-black transition-colors" title="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-black transition-colors" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="hover:text-black transition-colors" title="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            
            <div class="h-28"> 
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Standort</h3>
                <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d43470.35993454665!2d8.407150865533291!3d47.0814737112267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478fff689318855b%3A0x13ef2f955593cce!2zS8O8c3NuYWNodCAoU1opLCBLw7Bzcm5hY2h0!5e0!3m2!1sde!2sch!4v1757784524249!5m2!1sde!2sch" 
                    class="w-full h-full rounded-lg border-2 border-gray-200"
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        
       <div class="mt-10 border-t border-gray-200 pt-6 text-center text-sm">
    <p>© 2025 Scherrer WebStudios. Alle Rechte vorbehalten. | <a href="/impressum" class="hover:text-black transition-colors">Impressum</a> | <a href="/datenschutz" class="hover:text-black transition-colors">Datenschutzerklärung</a> | <a href="#" class="privacybee-display-preferences hover:text-black transition-colors">Cookie-Einstellungen</a></p>
</div>
    </div>
</footer>

    <?php include '_scripts-footer.php'; ?>
    
</body>
</html>