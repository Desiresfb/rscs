<!-- 
  🎨 BIBLIOTHÈQUE DE COMPOSANTS RÉUTILISABLES
  Site RCSC 974 - Copier-coller directement dans le HTML
  Tailwind CSS + Lucide Icons
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Composants RCSC 974</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    
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
                    }
                }
            }
        }
    </script>
    
    <style>
        .font-display {
            font-family: 'Bebas Neue', 'Impact', sans-serif;
            letter-spacing: 0.05em;
        }
        
        .uppercase-display {
            text-transform: uppercase;
            font-weight: 900;
            font-family: 'Bebas Neue', 'Impact', sans-serif;
            letter-spacing: 0.08em;
        }
        
        .btn-primary {
            background-color: #FF6D00;
            color: white;
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: bold;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: #E55D00;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px rgba(255, 109, 0, 0.3);
        }
        
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
        
        .separator {
            height: 4px;
            background: linear-gradient(to right, #FF6D00, #1A237E);
            margin: 24px 0;
        }
        
        .mission-card {
            background: white;
            border-radius: 12px;
            padding: 32px 24px;
            box-shadow: 0 2px 8px rgba(26, 35, 126, 0.1);
            border-top: 4px solid #FF6D00;
            transition: all 0.3s ease;
        }
        
        .mission-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 24px rgba(26, 35, 126, 0.15);
        }

        .demo-section {
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 24px;
            margin-bottom: 32px;
            background: #fafafa;
        }

        .demo-title {
            font-size: 18px;
            font-weight: bold;
            color: #1A237E;
            margin-bottom: 16px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .demo-subtitle {
            font-size: 12px;
            color: #888;
            font-family: monospace;
            margin-bottom: 16px;
        }
    </style>
</head>
<body class="bg-white font-body">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        
        <div class="mb-12 text-center">
            <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4">
                Composants <span class="text-orangeSecurite">Réutilisables</span>
            </h1>
            <p class="text-gray-600 text-lg">
                Bibliothèque de composants pour le site RCSC 974 - Copier/coller directement
            </p>
            <div class="separator max-w-24 mx-auto mt-6"></div>
        </div>

        <!-- ====================================================== -->
        <!-- 1. BOUTONS -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Boutons</div>
            <div class="demo-subtitle">Variantes des boutons CTA</div>
            
            <div class="space-y-4">
                <!-- Bouton Principal -->
                <div>
                    <p class="text-sm text-gray-600 mb-2">Bouton Primaire (Orange)</p>
                    <button class="btn-primary">
                        Rejoindre la RCSC
                    </button>
                </div>

                <!-- Bouton avec Icône -->
                <div>
                    <p class="text-sm text-gray-600 mb-2">Avec Icône</p>
                    <button class="btn-primary">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm3.5-9c.83 0 1.5-.67 1.5-1.5S16.33 8 15.5 8 14 8.67 14 9.5s.67 1.5 1.5 1.5zm-7 0c.83 0 1.5-.67 1.5-1.5S9.33 8 8.5 8 7 8.67 7 9.5 7.67 11 8.5 11zm3.5 6.5c2.33 0 4.31-1.46 5.11-3.5H6.89c.8 2.04 2.78 3.5 5.11 3.5z"></path>
                        </svg>
                        Nous Contacter
                    </button>
                </div>

                <!-- Bouton Secondaire (Bordure) -->
                <div>
                    <p class="text-sm text-gray-600 mb-2">Bouton Secondaire (Bordure)</p>
                    <button class="px-8 py-3 border-2 border-bleuOutremer text-bleuOutremer rounded-lg font-bold uppercase tracking-wide hover:bg-bleuOutremer hover:text-white transition">
                        En savoir plus
                    </button>
                </div>

                <!-- Bouton Blanc sur Bleu -->
                <div class="bg-bleuOutremer p-4 rounded">
                    <p class="text-sm text-white mb-2">Bouton Blanc sur Fond Bleu</p>
                    <a href="#" class="px-8 py-3 border-2 border-white text-white rounded-lg font-bold uppercase tracking-wide hover:bg-white hover:text-bleuOutremer transition inline-block">
                        Bouton Blanc ↓
                    </a>
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 2. CERCLES ICÔNES -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Cercles Icônes</div>
            <div class="demo-subtitle">Format de base pour toutes les icônes principales</div>
            
            <div class="flex flex-wrap gap-8">
                <!-- Shield Check -->
                <div class="text-center">
                    <div class="icon-circle mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 12 15 15 10"></polyline>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-600">shield-check</p>
                </div>

                <!-- Users -->
                <div class="text-center">
                    <div class="icon-circle mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-600">users</p>
                </div>

                <!-- Cog -->
                <div class="text-center">
                    <div class="icon-circle mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6M4.22 4.22l4.24 4.24m2.12 4.24l4.24 4.24M1 12h6m6 0h6M4.22 19.78l4.24-4.24m2.12-4.24l4.24-4.24"></path>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-600">cog</p>
                </div>

                <!-- Message Square -->
                <div class="text-center">
                    <div class="icon-circle mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-600">message-square</p>
                </div>

                <!-- Alert Circle -->
                <div class="text-center">
                    <div class="icon-circle mb-4">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="12" y1="8" x2="12" y2="12"></line>
                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-600">alert-circle</p>
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 3. CARTES -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Cartes Missions</div>
            <div class="demo-subtitle">Grille responsive de cartes</div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            <polyline points="9 12 12 15 15 10"></polyline>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Anticiper</h3>
                    <p class="text-gray-700">
                        Prévoir et évaluer les risques. Plans d'action préventifs adaptés.
                    </p>
                </div>

                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Mobiliser</h3>
                    <p class="text-gray-700">
                        Impliquer citoyens et institutions. Culture de prévention.
                    </p>
                </div>

                <div class="mission-card">
                    <div class="icon-circle mb-6">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M12 1v6m0 6v6M4.22 4.22l4.24 4.24m2.12 4.24l4.24 4.24M1 12h6m6 0h6M4.22 19.78l4.24-4.24m2.12-4.24l4.24-4.24"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-orangeSecurite mb-3 uppercase tracking-wider">Organiser</h3>
                    <p class="text-gray-700">
                        Structurer équipes et ressources. Coordonner interventions.
                    </p>
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 4. ENCADRÉS & ALERTS -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Encadrés & Alertes</div>
            <div class="demo-subtitle">Différentes boîtes d'information</div>
            
            <div class="space-y-6">
                <!-- Encadré Info Bleu -->
                <div class="bg-bleuOutremer text-white rounded-lg p-6 border-l-4 border-orangeSecurite">
                    <h4 class="font-bold uppercase mb-2">ℹ️ Information</h4>
                    <p>Les RCSC constituent un instrument essentiel de la sécurité civile à La Réunion.</p>
                </div>

                <!-- Encadré Alert Orange -->
                <div class="bg-orangeSecurite text-white rounded-lg p-6 border-l-4 border-bleuOutremer">
                    <h4 class="font-bold uppercase mb-2">⚠️ Alerte</h4>
                    <p>Toute personne peut rejoindre les réserves communales de sécurité civile.</p>
                </div>

                <!-- Encadré Gris -->
                <div class="bg-grisSoutien rounded-lg p-6 border-l-4 border-bleuOutremer">
                    <h4 class="font-bold text-bleuOutremer uppercase mb-2">📌 Conseil</h4>
                    <p class="text-gray-700">Préparez votre famille aux risques naturels. Connaître les bons gestes sauve des vies.</p>
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 5. SECTIONS COMPLÈTES -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Sections Complètes</div>
            <div class="demo-subtitle">Bloc titre + contenu réutilisable</div>
            
            <!-- Section texte + image -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center bg-white p-8 rounded border border-gray-200">
                <div>
                    <h2 class="uppercase-display text-4xl text-bleuOutremer mb-4">
                        <span class="text-orangeSecurite">Titre</span><br/>Sous-titre
                    </h2>
                    <div class="separator mb-6"></div>
                    <p class="text-gray-700 text-lg leading-relaxed mb-6">
                        Paragraphe explicatif. Vous pouvez ajouter plusieurs paragraphes, listes, ou autres éléments.
                    </p>
                    <ul class="space-y-3 text-gray-700 mb-6">
                        <li class="flex items-start gap-3">
                            <span class="text-orangeSecurite font-bold">✓</span>
                            <span>Point 1</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-orangeSecurite font-bold">✓</span>
                            <span>Point 2</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <span class="text-orangeSecurite font-bold">✓</span>
                            <span>Point 3</span>
                        </li>
                    </ul>
                    <button class="btn-primary">Appel à l'action</button>
                </div>
                <div class="bg-grisSoutien h-96 rounded-lg flex items-center justify-center text-gray-400">
                    [Image ou illustration ici]
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 6. FOOTER BLOCKS -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Éléments Footer</div>
            <div class="demo-subtitle">Composants pour le pied de page</div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 p-6 bg-bleuOutremer text-white rounded-lg">
                <!-- Column 1 -->
                <div>
                    <h4 class="font-bold uppercase tracking-wide mb-4 text-orangeSecurite">Liens Rapides</h4>
                    <ul class="space-y-2 text-sm">
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Accueil</a></li>
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Missions</a></li>
                        <li><a href="#" class="opacity-75 hover:opacity-100 hover:text-orangeSecurite transition">Contact</a></li>
                    </ul>
                </div>
                
                <!-- Column 2 -->
                <div>
                    <h4 class="font-bold uppercase tracking-wide mb-4 text-orangeSecurite">Suivez-nous</h4>
                    <div class="flex gap-3">
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:opacity-90">f</a>
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:opacity-90">𝕏</a>
                        <a href="#" class="w-10 h-10 bg-orangeSecurite rounded-full flex items-center justify-center hover:opacity-90">📷</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ====================================================== -->
        <!-- 7. FORMULAIRES -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Éléments de Formulaires</div>
            <div class="demo-subtitle">Inputs stylisés</div>
            
            <form class="max-w-md space-y-6">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Nom complet</label>
                    <input type="text" placeholder="Votre nom" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" />
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Email</label>
                    <input type="email" placeholder="votre@email.com" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" />
                </div>
                
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Message</label>
                    <textarea placeholder="Votre message..." rows="5" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition"></textarea>
                </div>
                
                <button type="submit" class="btn-primary w-full justify-center">Envoyer</button>
            </form>
        </div>

        <!-- ====================================================== -->
        <!-- 8. TYPOGRAPHIES -->
        <!-- ====================================================== -->
        <div class="demo-section">
            <div class="demo-title">Typographies</div>
            <div class="demo-subtitle">Styles de texte officiels</div>
            
            <div class="space-y-8">
                <div>
                    <p class="text-xs text-gray-500 mb-2">H1 - Titre Principal (Bebas Neue, Uppercase)</p>
                    <h1 class="uppercase-display text-6xl">Titre H1</h1>
                </div>
                
                <div>
                    <p class="text-xs text-gray-500 mb-2">H2 - Titre Section</p>
                    <h2 class="uppercase-display text-4xl">Titre <span class="text-orangeSecurite">Orange</span></h2>
                </div>
                
                <div>
                    <p class="text-xs text-gray-500 mb-2">H3 - Titre Sous-section</p>
                    <h3 class="text-2xl font-bold text-bleuOutremer">Titre H3</h3>
                </div>
                
                <div>
                    <p class="text-xs text-gray-500 mb-2">Body - Texte courant (Arial)</p>
                    <p class="text-base leading-relaxed max-w-2xl">
                        Les Réserves Communales de Sécurité Civile constituent un instrument essentiel de la politique de sécurité civile à La Réunion. Chaque commune dispose de sa propre RCSC, composée de volontaires formés et mobilisés.
                    </p>
                </div>
                
                <div>
                    <p class="text-xs text-gray-500 mb-2">Small - Petit texte</p>
                    <p class="text-sm text-gray-600">Texte de petite taille pour annotations ou descriptions secondaires.</p>
                </div>
            </div>
        </div>

    </div>

</body>
</html>