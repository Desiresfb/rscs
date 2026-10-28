<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Délégation Départementale de La Réunion des
Réserves Communales de Sécurité Civile</title>
    
    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Lucide Icons via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>
    
    <!-- Google Fonts: Bebas Neue & Arial -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
    <!-- Configuration Tailwind Custom -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        orangeSecurite: '#FF6D00',
                        bleuOutremer: '#1A237E',
                        grisSoutien: '#F7FAFC',
                        blancPur: '#FFFFFF'
                    },
                    fontFamily: {
                        'display': ['Bebas Neue', 'Impact', 'sans-serif'],
                        'body': ['Arial', 'Helvetica', 'sans-serif']
                    },
                    spacing: {
                        'logo-protection': '10%'
                    }
                }
            }
        }
    </script>
    
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        
        .font-display {
            font-family: 'Bebas Neue', 'Impact', sans-serif;
            letter-spacing: 0.05em;
        }
        
        /* Filigrane Piton de la Fournaise */
        .watermark-piton {
            position: relative;
            overflow: hidden;
        }
        
        .watermark-piton::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 600px;
            height: 600px;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><polygon points="100,20 180,180 20,180" fill="%231A237E" opacity="0.05"/><polygon points="100,40 160,160 40,160" fill="%23FF6D00" opacity="0.03"/></svg>') no-repeat;
            background-size: contain;
            opacity: 0.06;
            pointer-events: none;
            z-index: 0;
        }
        
        .watermark-piton > * {
            position: relative;
            z-index: 1;
        }
        
        /* Cercle icône */
        .icon-circle {
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 9999px;
            background-color: #1A237E;
            flex-shrink: 0;
        }
        
        .icon-circle svg {
            width: 28px;
            height: 28px;
            color: white;
            stroke-width: 2;
        }
        
        /* Boutons */
        .btn-primary {
            background-color: #FF6D00;
            color: white;
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #E55D00;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 109, 0, 0.3);
        }
        
        /* Cartes Missions */
        .mission-card {
            background: white;
            border-radius: 12px;
            padding: 32px 24px;
            box-shadow: 0 2px 8px rgba(26, 35, 126, 0.1);
            transition: all 0.3s ease;
            border-top: 4px solid #FF6D00;
        }
        
        .mission-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(26, 35, 126, 0.15);
        }
        
        /* Header sticky */
        header {
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        
        /* Textes majuscules */
        .uppercase-display {
            text-transform: uppercase;
            font-weight: 900;
            font-family: 'Bebas Neue', 'Impact', sans-serif;
            letter-spacing: 0.08em;
        }
        
        /* Séparateur */
        .separator {
            height: 4px;
            background: linear-gradient(to right, #FF6D00, #1A237E);
            margin: 24px 0;
        }
    </style>
</head>
<body class="bg-white font-body">

    <!-- ============================================
         HEADER / NAVIGATION
         ============================================ -->
    <header class="bg-bleuOutremer text-blancPur">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                <!-- Logo à gauche -->
                <div class="flex items-center gap-3 min-w-0">
                    <img src="/assets/img/logo.png" alt="Logo RCSC 974" class="w-12 h-12 object-contain rounded-full bg-white p-1 shadow-sm shrink-0">
                    <div class="hidden sm:block leading-tight">
                        <div class="text-sm font-bold uppercase tracking-widest">RCSC</div>
                        <div class="text-xs opacity-90">Sécurité Civile</div>
                    </div>
                </div>
                
                <!-- Menu Navigation -->
                <nav class="hidden md:flex gap-8">
                    <a href="#accueil" class="hover:text-orangeSecurite transition uppercase text-sm font-bold tracking-wide">Accueil</a>
                    <a href="#missions" class="hover:text-orangeSecurite transition uppercase text-sm font-bold tracking-wide">Missions</a>
                    <a href="#organisation" class="hover:text-orangeSecurite transition uppercase text-sm font-bold tracking-wide">Organisation</a>
                    <a href="#engagement" class="hover:text-orangeSecurite transition uppercase text-sm font-bold tracking-wide">Engagement</a>
                    <a href="#contact" class="hover:text-orangeSecurite transition uppercase text-sm font-bold tracking-wide">Contact</a>
                </nav>
                
                <!-- Logo en haut à droite (version mobile) -->
                <img src="/assets/img/logo.png" alt="Logo RCSC 974" class="md:hidden w-10 h-10 object-contain rounded-full bg-white/10 p-1">
            </div>
        </div>
    </header>

    <!-- ============================================
         HERO SECTION avec FILIGRANE
         ============================================ -->
    <section id="accueil" class="watermark-piton relative bg-gradient-to-br from-bleuOutremer via-bleuOutremer to-bleuOutremer text-blancPur py-24 sm:py-32 lg:py-48">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            
            <!-- Titre principal -->
            <h1 class="uppercase-display text-4xl sm:text-5xl lg:text-7xl leading-tight mb-6">
                Réserves Communales<br/>
                <span class="text-orangeSecurite">Sécurité Civile</span>
            </h1>
            
            <!-- Séparateur -->
            <div class="separator max-w-xs mx-auto mb-8"></div>
            
            <!-- Sous-titre -->
            <p class="text-lg sm:text-xl lg:text-2xl mb-12 opacity-95 font-light max-w-2xl mx-auto">
                Mobiliser, anticiper, organiser et communiquer pour une Réunion résiliente et protégée face aux risques naturels
            </p>
            
            <!-- Bouton CTA -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 4 12 14.01 9 13 2 20"></polyline>
                        <path d="M22 4s-7 1-9 10S2 20 2 20"></path>
                    </svg>
                    Rejoindre la RCSC
                </button>
                <a href="#missions" class="px-8 py-3 border-2 border-blancPur text-blancPur rounded-lg font-bold uppercase tracking-wide hover:bg-blancPur hover:text-bleuOutremer transition inline-flex items-center justify-center gap-2">
                    En savoir plus ↓
                </a>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECTION: NOS MISSIONS
         ============================================ -->
    <section id="missions" class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Titre section -->
            <div class="text-center mb-16">
                <h2 class="uppercase-display text-4xl sm:text-5xl text-bleuOutremer mb-4">
                    Nos Quatre <span class="text-orangeSecurite">Piliers</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Les RCSC agissent selon quatre domaines fondamentaux pour assurer la sécurité et la résilience des communes
                </p>
            </div>
            
            <div class="separator max-w-24 mx-auto mb-12"></div>
            
            <!-- Grille 4 cartes -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <!-- Carte 1: Anticiper -->
                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 12 15 15 10"></polyline>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Anticiper</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Prévoir et évaluer les risques naturels. Mettre en place des plans d'action préventifs adaptés aux spécificités réunionnaises
                    </p>
                </div>
                
                <!-- Carte 2: Mobiliser -->
                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Mobiliser</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Impliquer citoyens et institutions. Créer une culture de prévention et d'engagement collectif
                    </p>
                </div>
                
                <!-- Carte 3: Organiser -->
                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                            <path d="M12 9v6"></path>
                            <path d="M12 3v3"></path>
                            <path d="M12 18v3"></path>
                            <path d="M4.22 4.22l2.12 2.12"></path>
                            <path d="M17.66 17.66l2.12 2.12"></path>
                            <path d="M4.22 19.78l2.12-2.12"></path>
                            <path d="M17.66 6.34l2.12-2.12"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Organiser</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Structurer les équipes et ressources. Coordonner les interventions et les dispositifs de protection
                    </p>
                </div>
                
                <!-- Carte 4: Communiquer -->
                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                            <circle cx="9" cy="10" r="1"></circle>
                            <circle cx="12" cy="10" r="1"></circle>
                            <circle cx="15" cy="10" r="1"></circle>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Communiquer</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Diffuser l'information et les alertes. Maintenir le dialogue transparent avec les habitants
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECTION: LA DÉLÉGATION
         ============================================ -->
    <section id="organisation" class="py-20 sm:py-28 bg-grisSoutien">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                
                <!-- Colonne gauche: Texte -->
                <div>
                    <h2 class="uppercase-display text-4xl sm:text-5xl text-bleuOutremer mb-6">
                        <span class="text-orangeSecurite">La Délégation</span><br/>RCSC 974
                    </h2>
                    
                    <div class="separator mb-8"></div>
                    
                    <div class="space-y-6 text-gray-700 leading-relaxed">
                        <p class="text-lg">
                            Les <strong>Réserves Communales de Sécurité Civile (RCSC)</strong> constituent un instrument essentiel de la politique de sécurité civile à La Réunion, une île exposée à de nombreux risques naturels majeurs: tremblements de terre, éruptions volcaniques, cyclones, inondations et glissements de terrain.
                        </p>
                        
                        <p class="text-lg">
                            Chaque commune dispose de sa propre RCSC, composée de volontaires formés et mobilisés pour renforcer la capacité locale de prévention, de préparation et de gestion des crises. Nous travaillons en étroite collaboration avec les autorités locales, les services de sécurité civile et les institutions nationales.
                        </p>
                        
                        <p class="text-lg">
                            Notre mission transcende les simples interventions d'urgence: nous créons une véritable <strong>culture de la résilience</strong> où chaque citoyen comprend les risques, prépare sa famille et contribue à la sécurité collective.
                        </p>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 mt-8">
                        <button class="btn-primary">Nous rejoindre</button>
                        <button class="px-8 py-3 border-2 border-orangeSecurite text-orangeSecurite rounded-lg font-bold uppercase tracking-wide hover:bg-orangeSecurite hover:text-white transition">
                            Télécharger le guide
                        </button>
                    </div>
                </div>
                
                <!-- Colonne droite: Silhouette Réunion -->
                <div class="flex items-center justify-center">
                    <div class="relative w-full h-96">
                        <svg viewBox="0 0 200 300" xmlns="http://www.w3.org/2000/svg" class="w-full h-full">
                            <!-- Silhouette simplifiée de La Réunion -->
                            <defs>
                                <linearGradient id="reunionGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#FF6D00;stop-opacity:0.15" />
                                    <stop offset="100%" style="stop-color:#1A237E;stop-opacity:0.1" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Île simplifié -->
                            <path d="M 100 50 Q 140 70 145 110 Q 130 140 120 160 Q 110 175 100 185 Q 90 175 80 160 Q 70 140 55 110 Q 60 70 100 50 Z" 
                                  fill="url(#reunionGradient)" stroke="#1A237E" stroke-width="2"/>
                            
                            <!-- Piton de la Fournaise -->
                            <circle cx="100" cy="80" r="8" fill="#FF6D00" opacity="0.6"/>
                            <text x="100" y="110" text-anchor="middle" font-size="14" fill="#1A237E" font-weight="bold">
                                PITON
                            </text>
                            <text x="100" y="125" text-anchor="middle" font-size="12" fill="#666">
                                Résilience
                            </text>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SECTION: ENGAGEMENT CITOYEN
         ============================================ -->
    <section id="engagement" class="py-20 sm:py-28 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Titre -->
            <div class="text-center mb-16">
                <h2 class="uppercase-display text-4xl sm:text-5xl text-bleuOutremer mb-4">
                    Engagement <span class="text-orangeSecurite">Citoyen</span>
                </h2>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    La sécurité collective commence par l'implication de chacun. Rejoignez les réserves et contribuez à la protection de votre commune
                </p>
            </div>
            
            <div class="separator max-w-24 mx-auto mb-12"></div>
            
            <!-- Contenu engagement -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
                
                <!-- Bloc 1 -->
                <div class="bg-grisSoutien rounded-lg p-8 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="icon-circle">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path>
                                <path d="M12 6v6l5 3"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-orangeSecurite mb-3 uppercase">Formé</h3>
                    <p class="text-gray-700">
                        Accès à des formations reconnues en prévention, secourisme et gestion de crise
                    </p>
                </div>
                
                <!-- Bloc 2 -->
                <div class="bg-grisSoutien rounded-lg p-8 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="icon-circle">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-orangeSecurite mb-3 uppercase">Impliqué</h3>
                    <p class="text-gray-700">
                        Participez à des missions concrètes de prévention et d'exercices de sécurité civile
                    </p>
                </div>
                
                <!-- Bloc 3 -->
                <div class="bg-grisSoutien rounded-lg p-8 text-center">
                    <div class="flex justify-center mb-6">
                        <div class="icon-circle">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-lg font-bold text-orangeSecurite mb-3 uppercase">Reconnu</h3>
                    <p class="text-gray-700">
                        Valorisé au sein de votre communauté locale pour votre engagement exemplaire
                    </p>
                </div>
            </div>
            
            <!-- Call to action -->
            <div class="bg-bleuOutremer text-blancPur rounded-lg p-12 text-center">
                <h3 class="uppercase-display text-3xl sm:text-4xl mb-6">
                    Prêt à <span class="text-orangeSecurite">Agir</span> ?
                </h3>
                <p class="text-lg mb-8 opacity-95">
                    Rejoignez une communauté de citoyens engagés dans la protection et la résilience de La Réunion
                </p>
                <button class="btn-primary">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    Nous Contacter
                </button>
            </div>
        </div>
    </section>

    <!-- ============================================
         FOOTER
         ============================================ -->
    <footer class="bg-bleuOutremer text-blancPur py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">
                
                <!-- Bloc 1: Logo & Description -->
                <div>
                    <div class="flex items-center gap-3 mb-4">
                        <img src="/assets/img/logo.png" alt="Logo RCSC 974" class="w-10 h-10 object-contain rounded-full bg-white/10 p-1">
                        <div>
                            <div class="text-sm font-bold uppercase tracking-widest">RCSC 974</div>
                            <div class="text-xs opacity-75">Sécurité Civile</div>
                        </div>
                    </div>
                    <p class="text-sm opacity-90 leading-relaxed">
                        Réserves Communales de Sécurité Civile - La Réunion
                    </p>
                </div>
                
                <!-- Bloc 2: Liens rapides -->
                <div>
                    <h4 class="font-bold uppercase tracking-wide mb-4 text-orangeSecurite">Liens</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Accueil</a></li>
                        <li><a href="#missions" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Missions</a></li>
                        <li><a href="#organisation" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Organisation</a></li>
                        <li><a href="#engagement" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Engagement</a></li>
                    </ul>
                </div>
                
                <!-- Bloc 3: Ressources -->
                <div>
                    <h4 class="font-bold uppercase tracking-wide mb-4 text-orangeSecurite">Ressources</h4>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Guide Prévention</a></li>
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Documents</a></li>
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Agenda</a></li>
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">FAQ</a></li>
                    </ul>
                </div>
                
                <!-- Bloc 4: Réseaux sociaux -->
                <div>
                    <h4 class="font-bold uppercase tracking-wide mb-4 text-orangeSecurite">Suivez-nous</h4>
                    <div class="flex gap-4 mb-6">
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:bg-blancPur hover:text-bleuOutremer transition">
                            f
                        </a>
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:bg-blancPur hover:text-bleuOutremer transition">
                            𝕏
                        </a>
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:bg-blancPur hover:text-bleuOutremer transition">
                            📷
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="separator"></div>
            
            <!-- Hashtags officiels -->
            <div class="mb-8 text-center">
                <p class="text-sm opacity-90 mb-4 font-bold">Hashtags officiels</p>
                <div class="flex flex-wrap justify-center gap-3 text-xs">
                    <span class="text-orangeSecurite">#SécuritéCivile</span>
                    <span class="text-orangeSecurite">#RéservesCommunales</span>
                    <span class="text-orangeSecurite">#Résilience</span>
                    <span class="text-orangeSecurite">#Prévention</span>
                    <span class="text-orangeSecurite">#EngagementCitoyen</span>
                    <span class="text-orangeSecurite">#Collectivités</span>
                    <span class="text-orangeSecurite">#DD974RCSC</span>
                </div>
            </div>
            
            <!-- Copyright & Mentions légales -->
            <div class="text-center text-xs opacity-75 border-t border-bleuOutremer/30 pt-8">
                <p class="mb-3">
                    &copy; 2024 Réserves Communales de Sécurité Civile - La Réunion. Tous droits réservés.
                </p>
                <div class="flex flex-wrap justify-center gap-4">
                    <a href="#" class="hover:text-orangeSecurite transition">Mentions légales</a>
                    <span class="opacity-50">•</span>
                    <a href="#" class="hover:text-orangeSecurite transition">Politique de confidentialité</a>
                    <span class="opacity-50">•</span>
                    <a href="#" class="hover:text-orangeSecurite transition">Conditions d'utilisation</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts d'initialisation Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>

</body>
</html>