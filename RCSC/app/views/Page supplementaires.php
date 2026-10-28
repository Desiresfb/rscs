<!-- 
  📄 PAGES SUPPLÉMENTAIRES - RCSC 974
  Templates prêts à l'emploi pour enrichir le site
  Contact | FAQ | Agenda | Actualités
-->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RCSC 974 - Pages Supplémentaires</title>
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
        
        .separator {
            height: 4px;
            background: linear-gradient(to right, #FF6D00, #1A237E);
        }
    </style>
</head>
<body class="bg-white font-body">

    <!-- ========================================================
         PAGE 1 : CONTACT
         ======================================================== -->
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4 text-center">
            Page <span class="text-orangeSecurite">Contact</span>
        </h1>
        <p class="text-gray-600 text-center mb-8">Copier le code ci-dessous pour ajouter une page Contact</p>
    </div>

    <section class="bg-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Titre -->
            <div class="text-center mb-12">
                <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4">
                    Nous <span class="text-orangeSecurite">Contacter</span>
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Vous avez une question ? Rejoignez-nous ou envoyez-nous un message. L'équipe RCSC 974 vous répond rapidement.
                </p>
                <div class="separator max-w-24 mx-auto mt-8"></div>
            </div>

            <!-- Contenu Contact -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mb-16">
                
                <!-- Bloc 1: Téléphone -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-bleuOutremer rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-bleuOutremer mb-2">Téléphone</h3>
                    <p class="text-gray-600">+262 (0)2 62 94 95 96</p>
                    <p class="text-sm text-gray-500 mt-2">Lun-Ven : 8h30 - 17h30</p>
                </div>

                <!-- Bloc 2: Email -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-orangeSecurite rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-bleuOutremer mb-2">Email</h3>
                    <p class="text-gray-600"><a href="mailto:contact@rcsc974.fr" class="hover:text-orangeSecurite">contact@rcsc974.fr</a></p>
                    <p class="text-sm text-gray-500 mt-2">Réponse sous 24h</p>
                </div>

                <!-- Bloc 3: Adresse -->
                <div class="text-center">
                    <div class="w-16 h-16 bg-bleuOutremer rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="2">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-bleuOutremer mb-2">Siège Social</h3>
                    <p class="text-gray-600">Saint-Denis<br/>La Réunion 97400</p>
                    <p class="text-sm text-gray-500 mt-2">Sur rendez-vous</p>
                </div>
            </div>

            <!-- Formulaire Contact -->
            <div class="max-w-2xl mx-auto bg-grisSoutien rounded-lg p-12">
                <h2 class="text-3xl font-bold text-bleuOutremer mb-8 text-center">
                    Envoyez-nous <span class="text-orangeSecurite">votre message</span>
                </h2>

                <form class="space-y-6">
                    <!-- Nom -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Nom complet *</label>
                        <input type="text" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" placeholder="Votre nom" />
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Email *</label>
                        <input type="email" required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" placeholder="votre@email.com" />
                    </div>

                    <!-- Téléphone -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Téléphone</label>
                        <input type="tel" class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" placeholder="+262 ..." />
                    </div>

                    <!-- Objet -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Objet du message *</label>
                        <select required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition">
                            <option value="">Choisir un sujet...</option>
                            <option value="rejoindre">Rejoindre la RCSC</option>
                            <option value="formation">Formation</option>
                            <option value="signaler">Signaler un risque</option>
                            <option value="autre">Autre demande</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-bold text-gray-700 mb-2 uppercase">Message *</label>
                        <textarea required class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-orangeSecurite transition" placeholder="Votre message..." rows="6"></textarea>
                    </div>

                    <!-- Checkbox -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="rgpd" required class="mt-1" />
                        <label for="rgpd" class="text-sm text-gray-600">
                            J'accepte les <a href="#" class="text-orangeSecurite hover:underline">conditions de confidentialité</a>
                        </label>
                    </div>

                    <!-- Bouton -->
                    <button type="submit" class="btn-primary w-full justify-center">
                        Envoyer le message
                    </button>
                </form>
            </div>
        </div>
    </section>

    <hr class="my-20" />

    <!-- ========================================================
         PAGE 2 : FAQ
         ======================================================== -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4 text-center">
            Page <span class="text-orangeSecurite">FAQ</span>
        </h1>
        <p class="text-gray-600 text-center mb-8">Foires Aux Questions - Template accordion</p>
    </div>

    <section class="bg-white py-20">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4">
                    Questions <span class="text-orangeSecurite">Fréquentes</span>
                </h1>
                <div class="separator max-w-24 mx-auto"></div>
            </div>

            <!-- Accordion FAQ -->
            <div class="space-y-4">
                
                <!-- Élément 1 -->
                <div class="bg-grisSoutien rounded-lg overflow-hidden border-l-4 border-bleuOutremer">
                    <button class="w-full px-6 py-4 text-left font-bold text-bleuOutremer hover:bg-gray-200 transition flex justify-between items-center" onclick="this.parentElement.classList.toggle('active')">
                        <span>Qui peut rejoindre les RCSC ?</span>
                        <span class="text-xl">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 leading-relaxed">
                        Toute personne majeure, résident ou travaillant à La Réunion, peut rejoindre les réserves communales. Aucune expérience préalable n'est requise. Vous serez formé et encadré pour remplir votre mission.
                    </div>
                </div>

                <!-- Élément 2 -->
                <div class="bg-grisSoutien rounded-lg overflow-hidden border-l-4 border-orangeSecurite">
                    <button class="w-full px-6 py-4 text-left font-bold text-bleuOutremer hover:bg-gray-200 transition flex justify-between items-center" onclick="this.parentElement.classList.toggle('active')">
                        <span>Quelle est la durée d'engagement ?</span>
                        <span class="text-xl">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 leading-relaxed">
                        L'engagement est flexible. Vous pouvez vous engager pour une période déterminée ou indéterminée. Des formations régulières et des exercices sont prévus tout au long de l'année.
                    </div>
                </div>

                <!-- Élément 3 -->
                <div class="bg-grisSoutien rounded-lg overflow-hidden border-l-4 border-bleuOutremer">
                    <button class="w-full px-6 py-4 text-left font-bold text-bleuOutremer hover:bg-gray-200 transition flex justify-between items-center" onclick="this.parentElement.classList.toggle('active')">
                        <span>Y a-t-il une rémunération ?</span>
                        <span class="text-xl">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 leading-relaxed">
                        Les membres des RCSC sont des volontaires. L'engagement est civique et non rémunéré. Cependant, les frais de formation et les indemnités pour certaines missions peuvent être couverts.
                    </div>
                </div>

                <!-- Élément 4 -->
                <div class="bg-grisSoutien rounded-lg overflow-hidden border-l-4 border-orangeSecurite">
                    <button class="w-full px-6 py-4 text-left font-bold text-bleuOutremer hover:bg-gray-200 transition flex justify-between items-center" onclick="this.parentElement.classList.toggle('active')">
                        <span>Quels sont les risques à La Réunion ?</span>
                        <span class="text-xl">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 leading-relaxed">
                        La Réunion est exposée à plusieurs risques majeurs : tremblements de terre, éruptions volcaniques, cyclones tropicaux, inondations et glissements de terrain. Notre rôle est de préparer et sensibiliser les habitants à ces risques.
                    </div>
                </div>

                <!-- Élément 5 -->
                <div class="bg-grisSoutien rounded-lg overflow-hidden border-l-4 border-bleuOutremer">
                    <button class="w-full px-6 py-4 text-left font-bold text-bleuOutremer hover:bg-gray-200 transition flex justify-between items-center" onclick="this.parentElement.classList.toggle('active')">
                        <span>Comment contacter ma RCSC locale ?</span>
                        <span class="text-xl">+</span>
                    </button>
                    <div class="hidden px-6 pb-6 text-gray-700 leading-relaxed">
                        Chaque commune dispose de sa propre RCSC. Contactez votre mairie ou rendez-vous sur notre site pour trouver les coordonnées de votre délégation locale.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="my-20" />

    <!-- ========================================================
         PAGE 3 : AGENDA / ÉVÉNEMENTS
         ======================================================== -->

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
        <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4 text-center">
            Page <span class="text-orangeSecurite">Agenda</span>
        </h1>
        <p class="text-gray-600 text-center mb-8">Événements et formations à venir</p>
    </div>

    <section class="bg-grisSoutien py-20">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16">
                <h1 class="uppercase-display text-5xl text-bleuOutremer mb-4">
                    Agenda <span class="text-orangeSecurite">2024</span>
                </h1>
                <p class="text-gray-700 text-lg">Nos prochains événements, formations et exercices</p>
                <div class="separator max-w-24 mx-auto mt-8"></div>
            </div>

            <!-- Liste d'événements -->
            <div class="space-y-6">
                
                <!-- Événement 1 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition border-l-4 border-orangeSecurite">
                    <div class="flex flex-col sm:flex-row">
                        <!-- Date -->
                        <div class="bg-orangeSecurite text-white p-6 flex flex-col justify-center items-center min-w-[120px]">
                            <span class="text-3xl font-bold">15</span>
                            <span class="text-sm uppercase">Nov 2024</span>
                            <span class="text-xs opacity-75">14h30</span>
                        </div>
                        <!-- Contenu -->
                        <div class="flex-1 p-6">
                            <h3 class="text-xl font-bold text-bleuOutremer mb-2">
                                Formation Secourisme - Niveau 1
                            </h3>
                            <p class="text-gray-700 mb-3">
                                Apprenez les gestes de premiers secours essentiels. Formation reconnue de 6 heures animée par des professionnels.
                            </p>
                            <div class="flex flex-wrap gap-3 text-sm">
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">📍 Saint-Denis</span>
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">👥 20 places</span>
                                <span class="bg-grisSoutien text-orangeSecurite px-3 py-1 rounded font-bold">⭕ COMPLET</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Événement 2 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition border-l-4 border-bleuOutremer">
                    <div class="flex flex-col sm:flex-row">
                        <!-- Date -->
                        <div class="bg-bleuOutremer text-white p-6 flex flex-col justify-center items-center min-w-[120px]">
                            <span class="text-3xl font-bold">22</span>
                            <span class="text-sm uppercase">Nov 2024</span>
                            <span class="text-xs opacity-75">09h00</span>
                        </div>
                        <!-- Contenu -->
                        <div class="flex-1 p-6">
                            <h3 class="text-xl font-bold text-bleuOutremer mb-2">
                                Exercice de simulation - Cyclone
                            </h3>
                            <p class="text-gray-700 mb-3">
                                Exercice pratique pour tester nos plans de contingence en cas de cyclone. Participation bienvenue.
                            </p>
                            <div class="flex flex-wrap gap-3 text-sm">
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">📍 Région Ouest</span>
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">👥 Illimité</span>
                                <button class="btn-primary text-sm py-1 px-3">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Événement 3 -->
                <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition border-l-4 border-orangeSecurite">
                    <div class="flex flex-col sm:flex-row">
                        <!-- Date -->
                        <div class="bg-orangeSecurite text-white p-6 flex flex-col justify-center items-center min-w-[120px]">
                            <span class="text-3xl font-bold">05</span>
                            <span class="text-sm uppercase">Déc 2024</span>
                            <span class="text-xs opacity-75">18h30</span>
                        </div>
                        <!-- Contenu -->
                        <div class="flex-1 p-6">
                            <h3 class="text-xl font-bold text-bleuOutremer mb-2">
                                Réunion d'information - Nouvelles recrues
                            </h3>
                            <p class="text-gray-700 mb-3">
                                Présentation des RCSC et de nos missions. Idéal pour les personnes intéressées par notre engagement citoyen.
                            </p>
                            <div class="flex flex-wrap gap-3 text-sm">
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">📍 En ligne</span>
                                <span class="bg-grisSoutien text-bleuOutremer px-3 py-1 rounded">👥 Illimité</span>
                                <button class="btn-primary text-sm py-1 px-3">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Appel à l'action -->
            <div class="mt-16 text-center">
                <p class="text-gray-700 mb-6">
                    Vous souhaitez proposer un événement ou une formation ?
                </p>
                <button class="btn-primary">
                    Nous Contacter
                </button>
            </div>
        </div>
    </section>

    <!-- Script pour accordion FAQ -->
    <script>
        document.querySelectorAll('.bg-grisSoutien button').forEach(button => {
            button.addEventListener('click', function() {
                const parent = this.parentElement;
                const content = parent.querySelector('div:last-child');
                
                // Fermer les autres
                document.querySelectorAll('.bg-grisSoutien').forEach(item => {
                    if (item !== parent) {
                        item.classList.remove('active');
                        if (item.querySelector('div:last-child')) {
                            item.querySelector('div:last-child').classList.add('hidden');
                        }
                        const btn = item.querySelector('button');
                        if (btn) btn.querySelector('.text-xl').textContent = '+';
                    }
                });
                
                // Toggle current
                parent.classList.toggle('active');
                if (content) content.classList.toggle('hidden');
                this.querySelector('.text-xl').textContent = content.classList.contains('hidden') ? '+' : '×';
            });
        });
    </script>

</body>
</html>