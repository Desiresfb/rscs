/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./src/**/*.{js,ts,jsx,tsx,html}",
    "./public/**/*.html",
    "./**/*.html"
  ],
  theme: {
    extend: {
      colors: {
        // Charte graphique RCSC 974
        orangeSecurite: {
          DEFAULT: '#FF6D00',
          50: '#FFF0E6',
          100: '#FFD9CC',
          200: '#FFC2B3',
          300: '#FFB099',
          400: '#FF8D4D',
          500: '#FF6D00',
          600: '#E55D00',
          700: '#CC4D00',
          800: '#993600',
          900: '#661F00'
        },
        bleuOutremer: {
          DEFAULT: '#1A237E',
          50: '#E8EAFF',
          100: '#D1D8FF',
          200: '#A3B3FF',
          300: '#758EFF',
          400: '#4769FF',
          500: '#1A237E',
          600: '#151B63',
          700: '#101348',
          800: '#0B0D2D',
          900: '#050615'
        },
        grisSoutien: {
          DEFAULT: '#F7FAFC',
          50: '#FAFBFC',
          100: '#F7FAFC',
          200: '#EDF2F7',
          300: '#E2E8F0',
          400: '#CBD5E0',
          500: '#A0AEC0',
          600: '#718096'
        },
        blancPur: '#FFFFFF'
      },
      
      fontFamily: {
        display: ['Bebas Neue', 'Impact', 'sans-serif'],
        body: ['Arial', 'Helvetica', 'sans-serif']
      },
      
      fontSize: {
        xs: ['12px', '16px'],
        sm: ['14px', '20px'],
        base: ['16px', '24px'],
        lg: ['18px', '28px'],
        xl: ['20px', '28px'],
        '2xl': ['24px', '32px'],
        '3xl': ['30px', '36px'],
        '4xl': ['36px', '40px'],
        '5xl': ['48px', '52px'],
        '6xl': ['60px', '66px'],
        '7xl': ['72px', '78px']
      },
      
      spacing: {
        'logo-protection': '10%'
      },
      
      letterSpacing: {
        'display': '0.08em',
        'wide': '0.05em',
        'widest': '0.1em'
      },
      
      borderRadius: {
        DEFAULT: '6px',
        sm: '4px',
        md: '8px',
        lg: '12px',
        xl: '16px',
        '2xl': '20px',
        full: '9999px'
      },
      
      boxShadow: {
        'sm': '0 1px 2px 0 rgba(0, 0, 0, 0.05)',
        DEFAULT: '0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06)',
        'md': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
        'lg': '0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)',
        'xl': '0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04)',
        'bleu': '0 8px 16px rgba(26, 35, 126, 0.1)',
        'bleu-hover': '0 12px 24px rgba(26, 35, 126, 0.15)',
        'orange': '0 8px 16px rgba(255, 109, 0, 0.3)'
      },
      
      animation: {
        'fade-in': 'fadeIn 0.3s ease-in',
        'slide-up': 'slideUp 0.4s ease-out',
        'pulse-subtle': 'pulseSubtle 2s cubic-bezier(0.4, 0, 0.6, 1) infinite'
      },
      
      keyframes: {
        fadeIn: {
          '0%': { opacity: '0' },
          '100%': { opacity: '1' }
        },
        slideUp: {
          '0%': { transform: 'translateY(10px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' }
        },
        pulseSubtle: {
          '0%, 100%': { opacity: '1' },
          '50%': { opacity: '.9' }
        }
      }
    }
  },
  plugins: []
}