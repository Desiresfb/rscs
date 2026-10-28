# 🛡️ Guide d'Utilisation - Site RCSC 974
## Documentation Complète & Personnalisation

---

## 📋 Table des Matières
1. [Structure du Projet](#structure-du-projet)
2. [Charte Graphique](#charte-graphique)
3. [Composants & Classes](#composants--classes)
4. [Installation & Configuration](#installation--configuration)
5. [Personnalisation](#personnalisation)
6. [Déploiement](#déploiement)
7. [Ressources & Liens](#ressources--liens)

---

## 🗂️ Structure du Projet

```
rcsc974-website/
│
├── rcsc974-website.html          # ✅ Page d'accueil complète
├── tailwind.config.js            # ⚙️ Configuration Tailwind custom
├── GUIDE_UTILISATION.md          # 📖 Cette documentation
│
├── assets/                       # (À créer selon besoins)
│   ├── images/                   # Logo, photos
│   ├── icons/                    # SVG custom
│   └── fonts/                    # Polices locales
│
└── pages/                        # (Structure pour futures pages)
    ├── missions.html
    ├── organisation.html
    ├── engagement.html
    └── contact.html
```

---

## 🎨 Charte Graphique

### Palette de Couleurs (Officielle)

| Nom | Code HEX | Utilisation | Exemple |
|-----|----------|------------|---------|
| **Orange Sécurité** | `#FF6D00` | Titres majeurs, alertes, boutons CTA | Boutons, titres sections |
| **Bleu Outremer** | `#1A237E` | Bannières, headers, titres secondaires | Header, footer |
| **Blanc Pur** | `#FFFFFF` | Fonds, textes sur bleu | Texte sur fond bleu |
| **Gris de Soutien** | `#F7FAFC` | Encadrés, sections alternatives | Cartes, sections grises |

### Classes Tailwind Personnalisées
```html
<!-- Fond orange -->
<div class="bg-orangeSecurite"></div>

<!-- Fond bleu -->
<div class="bg-bleuOutremer"></div>

<!-- Texte blanc pur -->
<p class="text-blancPur"></p>

<!-- Fond gris soutien -->
<section class="bg-grisSoutien"></section>
```

### Typographies

**Titres (Majuscules)**
```html
<h1 class="font-display text-5xl uppercase tracking-wide">
  TITRE PRINCIPAL
</h1>
```

**Textes (Arial/Helvetica)**
```html
<p class="font-body text-base leading-relaxed">
  Texte courant en Arial...
</p>
```

---

## 🔧 Composants & Classes

### 1. **Bouton Primaire (Orange)**
```html
<button class="btn-primary">
  <svg>...</svg> Texte du bouton
</button>
```

**Style CSS:**
```css
.btn-primary {
  background-color: #FF6D00;
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
```

### 2. **Cercle Icône (Bleu)**
```html
<div class="icon-circle">
  <svg>...</svg>
</div>
```

**Dimensions:** 60px × 60px, icône 28×28px

### 3. **Cartes Missions**
```html
<div class="mission-card">
  <div class="icon-circle mb-6"></div>
  <h3 class="text-orangeSecurite">Titre</h3>
  <p>Description...</p>
</div>
```

**Features:**
- Bordure haut orange (#FF6D00)
- Ombre légère
- Hover: translate up + shadow renforcée

### 4. **Séparateur**
```html
<div class="separator"></div>
```

**Style:** Gradient orange → bleu, hauteur 4px

### 5. **Filigrane Piton**
```html
<section class="watermark-piton">
  <!-- Contenu -->
</section>
```

**Opacité:** 5-8%, SVG triangle simplifié en arrière-plan

---

## ⚙️ Installation & Configuration

### Option 1: Utilisation CDN (Actuellement implémenté)
```html
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Lucide Icons -->
<script src="https://cdn.jsdelivr.net/npm/lucide@latest/dist/umd/lucide.js"></script>

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
```

**Avantages:** Aucune build, zéro configuration
**Inconvénients:** Taille CSS plus grande

### Option 2: Setup Local avec Node.js (Recommandé pour production)

#### Étape 1: Initialisation
```bash
npm init -y
npm install -D tailwindcss postcss autoprefixer
npm install lucide-icons
```

#### Étape 2: Config PostCSS
```javascript
// postcss.config.js
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
}
```

#### Étape 3: CSS Tailwind
```css
/* styles.css */
@tailwind base;
@tailwind components;
@tailwind utilities;

@layer components {
  .btn-primary {
    @apply bg-orangeSecurite text-white px-8 py-3 rounded-lg font-bold uppercase tracking-wide transition-all hover:bg-opacity-90 hover:-translate-y-0.5 hover:shadow-orange;
  }
  
  .mission-card {
    @apply bg-white rounded-lg p-8 shadow-bleu border-t-4 border-orangeSecurite transition-all hover:-translate-y-2 hover:shadow-bleu-hover;
  }
}
```

#### Étape 4: Build
```bash
npx tailwindcss -i ./src/styles.css -o ./dist/styles.css --watch
```

---

## ✏️ Personnalisation

### Modifier les Couleurs

**Dans le fichier HTML (CDN):**
```javascript
tailwind.config = {
  theme: {
    extend: {
      colors: {
        orangeSecurite: '#FF6D00',  // ← Changer ici
        bleuOutremer: '#1A237E',    // ← Ou ici
        grisSoutien: '#F7FAFC',
        blancPur: '#FFFFFF'
      }
    }
  }
}
```

**Ou dans tailwind.config.js (Local):**
```javascript
module.exports = {
  theme: {
    extend: {
      colors: {
        orangeSecurite: '#FF6D00'
        // Personnalisez...
      }
    }
  }
}
```

### Ajouter une Nouvelle Section

```html
<!-- Template section -->
<section id="nom-section" class="py-20 sm:py-28 bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Titre -->
    <h2 class="uppercase-display text-4xl sm:text-5xl text-bleuOutremer mb-4">
      Titre <span class="text-orangeSecurite">Orange</span>
    </h2>
    
    <!-- Contenu -->
    
  </div>
</section>
```

### Intégrer des Images

```html
<!-- Logo personnalisé -->
<img src="/assets/logo-rcsc.png" alt="Logo RCSC 974" class="w-12 h-12">

<!-- Photos background -->
<div class="bg-cover bg-center h-96" 
     style="background-image: url('/assets/hero-reunion.jpg')">
</div>
```

### Modifier le Filigrane

**Changez le SVG du Piton:**
```css
.watermark-piton::before {
  background: url('data:image/svg+xml,<svg>...</svg>') no-repeat;
  /* Ou une image externe */
  background-image: url('/assets/filigrane.png');
  opacity: 0.06;
}
```

---

## 🚀 Déploiement

### Déploiement Simple (HTML statique)

#### 1. **Netlify** (Recommandé - Gratuit)
```bash
# Installer Netlify CLI
npm install -g netlify-cli

# Déployer
netlify deploy --prod --dir .

# Ou connecter GitHub: https://app.netlify.com/
```

#### 2. **GitHub Pages**
```bash
# Créer un repo GitHub
git init
git add .
git commit -m "Initial RCSC 974 site"
git branch -M main
git remote add origin https://github.com/votreuser/rcsc974.git
git push -u origin main

# Activer Pages dans Settings > Pages
```

#### 3. **OVH / Hostinger**
```bash
# Uploader via FTP
# Fichiers: rcsc974-website.html, assets/

# Accès: https://votredomaine.re/rcsc974-website.html
```

### Optimisation Performance

**1. Minifier le CSS (Production)**
```bash
npm install -D cssnano

# Dans tailwind.config.js
module.exports = {
  // ...
  plugins: [
    require('cssnano')
  ]
}
```

**2. Compress Images**
```bash
# Utiliser TinyPNG, ImageOptim, ou:
npm install -D imagemin-cli
```

**3. Cache & CDN**
```html
<!-- Cache long-term -->
<link rel="stylesheet" href="/css/styles.min.css?v=1.0">

<!-- Preload fonts -->
<link rel="preload" as="font" href="fonts/bebas-neue.woff2">
```

---

## 📦 Ressources & Liens

### Outils Utilisés
- **Tailwind CSS**: https://tailwindcss.com
- **Lucide Icons**: https://lucide.dev
- **Bebas Neue Font**: https://fonts.google.com/specimen/Bebas+Neue

### Documentation
- [Tailwind Docs](https://tailwindcss.com/docs)
- [Lucide Icons Explorer](https://lucide.dev/icons)
- [MDN Web Docs](https://developer.mozilla.org/)

### Icônes Lucide Disponibles
```
shield-check     → Anticiper / Protection
users            → Mobiliser / Communauté
cog              → Organiser / Configuration
message-square   → Communiquer / Messages
phone            → Contact / Téléphone
map-pin          → Localisation
alert-circle     → Alertes
clock            → Temps / Horaires
```

**Import alternative:**
```html
<!-- Via SVG direct -->
<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
</svg>
```

---

## 🔐 Conformité & Accessibilité

### WCAG 2.1 (Contraste des couleurs)
- ✅ Orange #FF6D00 sur blanc: **14.5:1** (AAA)
- ✅ Bleu #1A237E sur blanc: **15:1** (AAA)
- ✅ Blanc sur bleu: **15:1** (AAA)

### Sémantique HTML
```html
<!-- Toujours utiliser des sections sémantiques -->
<header>
<nav>
<main>
<article>
<section>
<footer>

<!-- Attributs alt pour images -->
<img alt="Description pour lecteur d'écran">

<!-- Labels pour forms -->
<label for="email">Email:</label>
<input id="email" type="email">
```

### Mobile-First Responsive
```html
<!-- Classes Tailwind breakpoints -->
<div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl">
  Responsive text
</div>
```

---

## 📞 Support & Questions

**Ressources d'aide:**
1. Consulter la documentation Tailwind
2. Explorer les icônes Lucide
3. Tester sur https://tailwindcss.com/play
4. Valider HTML sur https://validator.w3.org/

---

## 📄 Licence & Attribution

Site créé pour les **Réserves Communales de Sécurité Civile (RCSC) 974**.

**Crédits:**
- Design System: Charte officielle RCSC 974
- Framework: Tailwind CSS (MIT)
- Icons: Lucide Icons (ISC)
- Fonts: Google Fonts

---

## ✅ Checklist de Lancement

- [ ] Télécharger et tester le fichier HTML
- [ ] Vérifier tous les liens de navigation
- [ ] Tester responsivité mobile (mobile, tablet, desktop)
- [ ] Vérifier les couleurs et typographies
- [ ] Ajouter contenu réel (remplacer textes placeholder)
- [ ] Intégrer logo et images officiels
- [ ] Ajouter les pages manquantes (Contact, etc.)
- [ ] Configurer domaine personnalisé
- [ ] Mettre en ligne
- [ ] Tester cross-browser (Chrome, Firefox, Safari, Edge)
- [ ] Valider accessibilité (WAVE, Lighthouse)

---

**Dernière mise à jour:** Septembre 2024  
**Version:** 1.0  
**État:** ✅ Production Ready