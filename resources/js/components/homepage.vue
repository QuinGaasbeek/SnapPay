<template>
  <div class="font-sans antialiased bg-gray-50">
    <!-- ========================================= -->
    <!-- HERO SECTION - van de oude code overgenomen -->
    <!-- ========================================= -->
    <header class="relative min-h-screen flex items-center overflow-hidden bg-gradient-to-br from-[#0A2463] to-[#3E92CC]">
      <!-- Floating Elements -->
      <div class="absolute inset-0 pointer-events-none">
        <div
            v-for="(item, i) in floatingElements"
            :key="i"
            class="absolute animate-float"
            :style="{
            left: item.left + '%',
            top: item.top + '%',
            animationDelay: item.delay + 's',
            transform: `scale(${item.scale})`
          }"
        >
          <div class="w-24 h-24 bg-white/10 backdrop-blur-sm rounded-lg shadow-xl transform rotate-45"></div>
        </div>
      </div>

      <navigation></navigation>

      <!-- Hero Content -->
      <div class="container mx-auto px-6 relative z-10">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div class="text-white">
            <h1 class="text-5xl md:text-6xl font-bold mb-6 leading-tight">
              Maak lenen <span class="text-[#7CB4E4]">eenvoudig</span> en <span class="text-[#7CB4E4]">transparant</span>
            </h1>
            <p class="text-xl mb-8 text-white/90">
              SnapPay maakt het proces van geld lenen tussen vrienden en familie simpel, veilig en overzichtelijk.
            </p>
            <div class="flex flex-wrap gap-4">
              <!-- Knop verwijst nu naar register -->
              <a
                  href="register"
                  class="bg-white text-[#0A2463] px-8 py-4 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105"
              >
                Begin Gratis
              </a>
              <button
                  @click="scrollToFeatures"
                  class="border-2 border-white/50 text-white px-8 py-4 rounded-full font-medium hover:bg-white/10 transition-all duration-300"
              >
                Ontdek Meer
              </button>
            </div>
          </div>

          <!-- Isometrische items (oude stijl) -->
          <div class="relative hidden md:block">
            <div class="relative w-full h-[600px]">
              <div
                  v-for="(item, index) in isometricItems"
                  :key="index"
                  class="absolute transform transition-all duration-500 hover:scale-110"
                  :style="{
                  left: item.left + '%',
                  top: item.top + '%',
                  transform: `rotate(${item.rotate}deg) scale(${item.scale})`
                }"
              >
                <div class="w-32 h-32 bg-gradient-to-br from-[#3E92CC] to-[#7CB4E4] rounded-lg shadow-2xl flex items-center justify-center">
                  <component :is="item.icon" class="w-12 h-12 text-white" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- EINDE HERO SECTION -->

    <!-- ========================= -->
    <!-- Hieronder de 'nieuwe' secties -->
    <!-- ========================= -->

    <!-- Features Section - Improved mobile grid -->
    <section id="features" class="py-16 sm:py-24 bg-white">
      <div class="container mx-auto px-4">
        <div class="text-center mb-12 sm:mb-16">
          <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-[#0A2463] mb-4">Waarom kiezen voor SnapPay?</h2>
          <p class="text-base sm:text-xl text-gray-600 max-w-2xl mx-auto">
            Ontdek hoe SnapPay het proces van persoonlijke leningen transformeert
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
          <div
              v-for="feature in features"
              :key="feature.title"
              class="group p-6 rounded-2xl bg-white border border-gray-100 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2"
          >
            <div
                class="w-12 h-12 sm:w-16 sm:h-16 rounded-full bg-[#3E92CC]/10 flex items-center justify-center mb-6 group-hover:bg-[#3E92CC] transition-colors duration-300"
            >
              <component
                  :is="feature.icon"
                  class="w-6 h-6 sm:w-8 sm:h-8 text-[#3E92CC] group-hover:text-white transition-colors duration-300"
              />
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-[#0A2463] mb-4">{{ feature.title }}</h3>
            <p class="text-gray-600">{{ feature.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- How It Works -->
    <section id="how-it-works" class="py-24 bg-gray-50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2463] mb-4">Hoe het werkt</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            In vier eenvoudige stappen aan de slag met SnapPay
          </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div
              v-for="(step, index) in steps"
              :key="index"
              class="relative"
          >
            <div
                class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300"
            >
              <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-full bg-[#3E92CC]/10 flex items-center justify-center mb-6">
                <component :is="step.icon" class="w-6 h-6 sm:w-8 sm:h-8 text-[#3E92CC]" />
              </div>
              <h3 class="text-lg sm:text-xl font-bold text-[#0A2463] mb-4">{{ step.title }}</h3>
              <p class="text-gray-600">{{ step.description }}</p>
            </div>
            <div
                v-if="index < steps.length - 1"
                class="hidden lg:block absolute top-1/2 left-full w-full h-0.5 bg-[#3E92CC]/20"
            >
              <div class="absolute right-0 -top-2 w-4 h-4 rounded-full bg-[#3E92CC]"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Unique Functionalities Section -->
    <section class="py-24 bg-white">
      <div id="unique-features" class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2463] mb-4">Ontdek meer met SnapPay</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Unieke functies die SnapPay onderscheiden
          </p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
              v-for="feature in uniqueFeatures"
              :key="feature.title"
              class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300"
          >
            <div class="w-12 h-12 sm:w-16 sm:h-16 rounded-full bg-[#3E92CC]/10 flex items-center justify-center mb-6">
              <component :is="feature.icon" class="w-6 h-6 sm:w-8 sm:h-8 text-[#3E92CC]" />
            </div>
            <h3 class="text-lg sm:text-xl font-bold text-[#0A2463] mb-4">{{ feature.title }}</h3>
            <ul class="text-gray-600 list-disc list-inside space-y-2">
              <li v-for="point in feature.points" :key="point">{{ point }}</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Application Example Section -->
    <section class="py-24 bg-gray-50">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2463] mb-4">Een kijkje in SnapPay</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Ontdek hoe eenvoudig en intuïtief SnapPay werkt
          </p>
        </div>
        <div class="grid md:grid-cols-2 gap-8 items-center">
          <div class="space-y-6">
            <h3 class="text-2xl font-bold text-[#0A2463]">Overzichtelijk Dashboard</h3>
            <p class="text-gray-600">Bekijk al je actieve en voltooide leningen in één oogopslag.</p>
            <h3 class="text-2xl font-bold text-[#0A2463]">Eenvoudig Leningen Aanmaken</h3>
            <p class="text-gray-600">Stel in enkele stappen een nieuwe lening op met duidelijke voorwaarden.</p>
            <h3 class="text-2xl font-bold text-[#0A2463]">Slimme Herinneringen</h3>
            <p class="text-gray-600">Ontvang tijdig meldingen over aankomende betalingen en updates.</p>
          </div>
          <div class="relative">
            <img
                src="/placeholder.svg?height=600&width=400"
                alt="SnapPay App Mockup"
                class="rounded-2xl shadow-2xl"
            >
            <div
                class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent rounded-2xl flex items-end justify-center p-6"
            >
              <button
                  @click="showDemoVideo = true"
                  class="bg-white text-[#0A2463] px-6 py-3 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105 flex items-center"
              >
                <PlayIcon class="w-5 h-5 mr-2" />
                Bekijk Demo
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="py-24 bg-white">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl sm:text-4xl font-bold text-[#0A2463] mb-4">Wat onze gebruikers zeggen</h2>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Ontdek waarom duizenden mensen SnapPay vertrouwen
          </p>
        </div>
        <div class="relative">
          <div class="overflow-hidden">
            <div
                class="flex transition-transform duration-500"
                :style="{ transform: `translateX(-${currentTestimonial * 100}%)` }"
            >
              <div
                  v-for="testimonial in testimonials"
                  :key="testimonial.id"
                  class="w-full flex-shrink-0 px-4"
              >
                <div class="bg-white rounded-2xl p-8 shadow-lg max-w-2xl mx-auto">
                  <div class="flex items-center mb-6">
                    <div
                        class="w-12 h-12 sm:w-16 sm:h-16 rounded-full bg-[#3E92CC]/10 flex items-center justify-center"
                    >
                      <UserIcon class="w-6 h-6 sm:w-8 sm:h-8 text-[#3E92CC]" />
                    </div>
                    <div class="ml-4">
                      <div class="font-bold text-[#0A2463]">{{ testimonial.name }}</div>
                      <div class="text-gray-600">{{ testimonial.title }}</div>
                    </div>
                  </div>
                  <p class="text-gray-600 text-lg italic">
                    {{ testimonial.quote }}
                  </p>
                </div>
              </div>
            </div>
          </div>
          <button
              @click="prevTestimonial"
              class="absolute top-1/2 -left-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg hover:shadow-xl transition-all duration-300"
          >
            <ChevronLeftIcon class="w-6 h-6 text-[#0A2463]" />
          </button>
          <button
              @click="nextTestimonial"
              class="absolute top-1/2 -right-4 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-lg hover:shadow-xl transition-all duration-300"
          >
            <ChevronRightIcon class="w-6 h-6 text-[#0A2463]" />
          </button>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="py-24 bg-[#0A2463]">
      <div id="contact" class="container mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl font-bold text-white mb-8">
          Klaar om te beginnen?
        </h2>
        <p class="text-xl text-white/90 mb-12 max-w-2xl mx-auto">
          Join duizenden tevreden gebruikers en ervaar hoe eenvoudig leningbeheer kan zijn
        </p>
        <a
            href="register"
            class="bg-white text-[#0A2463] px-8 py-4 rounded-full font-medium hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105"
        >
          Start Gratis
        </a>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
      <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-12">
          <div>
            <img
                src="https://cdn.discordapp.com/attachments/1331273355118247936/1331277862338166794/Untitled_design_1.png"
                alt="SnapPay Logo"
                class="h-8 w-auto sm:h-10 mb-6"
            >
            <p class="text-gray-400">
              Maak lenen tussen vrienden en familie eenvoudig en transparant
            </p>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Product</h3>
            <ul class="space-y-2">
              <li
                  v-for="link in footerLinks.product"
                  :key="link"
              >
                <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors duration-300"
                >
                  {{ link }}
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Bedrijf</h3>
            <ul class="space-y-2">
              <li
                  v-for="link in footerLinks.company"
                  :key="link"
              >
                <a
                    href="#"
                    class="text-gray-400 hover:text-white transition-colors duration-300"
                >
                  {{ link }}
                </a>
              </li>
            </ul>
          </div>
          <div>
            <h3 class="text-lg font-bold mb-4">Volg ons</h3>
            <div class="flex space-x-4">
              <a
                  v-for="social in socials"
                  :key="social.name"
                  :href="social.url"
                  class="text-gray-400 hover:text-white transition-colors duration-300"
              >
                <component :is="social.icon" class="w-6 h-6" />
              </a>
            </div>
          </div>
        </div>
        <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
          <p>&copy; {{ new Date().getFullYear() }} SnapPay. Alle rechten voorbehouden.</p>
        </div>
      </div>
    </footer>

    <!-- Demo Video Modal -->
    <div
        v-if="showDemoVideo"
        class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50"
    >
      <div class="bg-white rounded-2xl p-4 max-w-3xl w-full m-4 transform transition-all duration-300">
        <div class="flex justify-end mb-2">
          <button @click="showDemoVideo = false" class="text-gray-400 hover:text-gray-600">
            <XIcon class="w-6 h-6" />
          </button>
        </div>
        <div class="aspect-w-16 aspect-h-9">
          <iframe
              :src="youtubeVideoUrl"
              frameborder="0"
              allow="autoplay; encrypted-media"
              allowfullscreen
              class="w-full h-full rounded-lg"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import {
  MenuIcon,
  XIcon,
  UserIcon,
  ChevronLeftIcon,
  ChevronRightIcon,
  CreditCardIcon,
  BellIcon,
  ShieldCheckIcon,
  SmartphoneIcon,
  RefreshCwIcon,
  UserPlusIcon,
  UsersIcon,
  CalendarIcon,
  ActivityIcon,
  FacebookIcon,
  TwitterIcon,
  InstagramIcon,
  LinkedinIcon,
  PiggyBankIcon,
  BriefcaseIcon,
  PlayIcon
} from 'lucide-vue-next'

// ===========================================================
// 1) NAVIGATIE EN MOBILE MENU
// ===========================================================
const mobileMenuOpen = ref(false)
const showDemoVideo = ref(false)
const youtubeVideoUrl = ref('https://www.youtube.com/watch?v=pmbttoZLxeo')

// Voor het navigatiemenu in de hero
const navLinks = [
  { text: 'Features', href: '#features' },
  { text: 'Hoe het werkt', href: '#how-it-works' },
  { text: 'Unieke Functies', href: '#unique-features' },
  { text: 'Contact', href: '#contact' },
]

// ===========================================================
// 2) SECTIES (FEATURES, STEPS, UNIEKE FEATURES, TESTIMONIALS)
// ===========================================================
const features = [
  {
    icon: CreditCardIcon,
    title: 'Slim Leningbeheer',
    description: 'Beheer al je leningen op één plek met duidelijke voorwaarden en termijnen.'
  },
  {
    icon: BellIcon,
    title: 'Slimme Herinneringen',
    description: 'Ontvang automatische meldingen voor aankomende betalingen en deadlines.'
  },
  {
    icon: ShieldCheckIcon,
    title: 'Veilig & Betrouwbaar',
    description: 'Je gegevens zijn beveiligd met de nieuwste encryptietechnologie.'
  },
  {
    icon: SmartphoneIcon,
    title: 'Altijd Toegankelijk',
    description: 'Beheer je leningen vanaf elk apparaat, waar je ook bent.'
  },
  {
    icon: RefreshCwIcon,
    title: 'Real-time Updates',
    description: 'Blijf op de hoogte van elke wijziging in je leningsstatus.'
  },
  {
    icon: UsersIcon,
    title: 'Voor Iedereen',
    description: 'Of je nu student bent of ondernemer, SnapPay werkt voor iedereen.'
  }
]

const steps = [
  {
    icon: UserPlusIcon,
    title: 'Account Aanmaken',
    description: 'Registreer je in enkele minuten en begin direct.'
  },
  {
    icon: CreditCardIcon,
    title: 'Lening Aanmaken',
    description: 'Stel eenvoudig een nieuwe lening op met duidelijke voorwaarden.'
  },
  {
    icon: CalendarIcon,
    title: 'Planning Maken',
    description: 'Kies een terugbetalingsschema dat voor beide partijen werkt.'
  },
  {
    icon: ActivityIcon,
    title: 'Beheren & Volgen',
    description: 'Monitor de voortgang en ontvang automatische updates.'
  }
]

const uniqueFeatures = [
  {
    icon: PiggyBankIcon,
    title: 'Start een Potje',
    points: [
      'Maak een gezamenlijke spaarpot',
      'Kies een verantwoordelijke beheerder',
      'Nodig vrienden of familie uit',
      'Stel samen doelen',
      'Volg inleg en voortgang',
      'Maak elk potje op maat'
    ]
  },
  {
    icon: CreditCardIcon,
    title: 'Persoonlijke Lening',
    points: [
      'Stel een lening op voor een vriend of familielid',
      'Nodig de ontvanger uit via e-mail of sms',
      'Bepaal zelf terugbetalingsperiodes en voorwaarden',
      'Overzichtelijk beheer met herinneringen en updates'
    ]
  },
  {
    icon: BriefcaseIcon,
    title: 'Voor Ondernemers',
    points: [
      'Beheer zakelijke transacties',
      'Regel voorschotten of leningen binnen je team',
      'Zorg voor duidelijke afspraken en inzicht',
      'Ideaal voor kleine ondernemers'
    ]
  }
]

const testimonials = [
  {
    id: 1,
    name: 'Lisa van Dijk',
    title: 'Student',
    quote: 'SnapPay heeft het proces van geld lenen tussen vrienden compleet veranderd. Geen gedoe meer met het bijhouden van wie wat verschuldigd is!'
  },
  {
    id: 2,
    name: 'Mark de Vries',
    title: 'Ondernemer',
    quote: 'Als ondernemer gebruik ik SnapPay dagelijks voor het beheren van kleine leningen. Het is professioneel, betrouwbaar en super gebruiksvriendelijk.'
  },
  {
    id: 3,
    name: 'Sophie Jansen',
    title: 'Freelancer',
    quote: 'De automatische herinneringen en het overzichtelijke dashboard maken SnapPay onmisbaar voor mijn financiële planning.'
  }
]

const currentTestimonial = ref(0)
const nextTestimonial = () => {
  currentTestimonial.value = (currentTestimonial.value + 1) % testimonials.length
}
const prevTestimonial = () => {
  currentTestimonial.value =
      (currentTestimonial.value - 1 + testimonials.length) % testimonials.length
}

// ===========================================================
// 3) FOOTER LINKS
// ===========================================================
const footerLinks = {
  product: ['Features', 'Prijzen', 'FAQ', 'Support'],
  company: ['Over ons', 'Blog', 'Carrières', 'Contact']
}
const socials = [
  { name: 'Facebook', icon: FacebookIcon, url: '#' },
  { name: 'Twitter', icon: TwitterIcon, url: '#' },
  { name: 'Instagram', icon: InstagramIcon, url: '#' },
  { name: 'LinkedIn', icon: LinkedinIcon, url: '#' }
]

// ===========================================================
// 4) OUDE HERO-ELEMENTEN (Floating + Isometric Items)
// ===========================================================
const floatingElements = [
  { left: 10, top: 20, delay: 0, scale: 0.8 },
  { left: 85, top: 15, delay: 0.5, scale: 1 },
  { left: 70, top: 70, delay: 1, scale: 0.6 },
  { left: 20, top: 80, delay: 1.5, scale: 0.9 }
]
const isometricItems = [
  { icon: CreditCardIcon, left: 20, top: 20, rotate: 15, scale: 1 },
  { icon: BellIcon, left: 60, top: 10, rotate: -15, scale: 0.8 },
  { icon: ShieldCheckIcon, left: 80, top: 40, rotate: 30, scale: 0.9 },
  { icon: SmartphoneIcon, left: 40, top: 60, rotate: -30, scale: 1.1 },
  { icon: RefreshCwIcon, left: 70, top: 80, rotate: 15, scale: 0.7 }
]

// ===========================================================
// 5) EXTRA: TYPEWRITER-EFFECT, ETC. (UIT NIEUWE SNIPPET)
// ===========================================================

// Referentie voor subtitel (typewriter)
const subtitleRef = ref(null)

// Typewriter-functie
const typewriterEffect = (element, text, speed = 50) => {
  let i = 0
  const timer = setInterval(() => {
    if (i < text.length) {
      element.textContent += text.charAt(i)
      i++
    } else {
      clearInterval(timer)
    }
  }, speed)
}

onMounted(() => {
  // Voor de typed-subtitle (als je hem toch gebruikt in een andere plek)
  if (subtitleRef.value) {
    typewriterEffect(
        subtitleRef.value,
        'SnapPay maakt het proces van geld lenen tussen mensen veilig en helder.'
    )
  }
})

// Scroll naar Features
const scrollToFeatures = () => {
  document.getElementById('features')?.scrollIntoView({ behavior: 'smooth' })
}

// Einde script
</script>

<style>
@keyframes float {
  0% {
    transform: translateY(0px) rotate(45deg);
  }
  50% {
    transform: translateY(-20px) rotate(45deg);
  }
  100% {
    transform: translateY(0px) rotate(45deg);
  }
}

.animate-float {
  animation: float 6s ease-in-out infinite;
}

/* Hero (nieuw had fade-in-up, etc. maar die kun je weglaten of hergebruiken) */
.fade-in-up {
  animation: fadeInUp 1s ease-out;
}
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.float-logo {
  animation: floatLogo 3s ease-in-out infinite;
}
@keyframes floatLogo {
  0%,
  100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

/* Typewriter styles */
.typewriter {
  overflow: hidden;
  border-right: 0.15em solid #7cb4e4;
  white-space: nowrap;
  margin: 0 auto;
  letter-spacing: 0.15em;
  animation: typing 3.5s steps(40, end), blink-caret 0.75s step-end infinite;
}
@keyframes typing {
  from {
    width: 0;
  }
  to {
    width: 100%;
  }
}
@keyframes blink-caret {
  from,
  to {
    border-color: transparent;
  }
  50% {
    border-color: #7cb4e4;
  }
}
@media (max-width: 640px) {
  .typewriter {
    white-space: normal;
    border-right: none;
    letter-spacing: normal;
    animation: none;
  }
}

/* Overige */
.mobile-menu-enter-active,
.mobile-menu-leave-active {
  transition: opacity 0.2s ease, transform 0.2s ease;
}
.mobile-menu-enter-from,
.mobile-menu-leave-to {
  opacity: 0;
  transform: translateY(-10px);
}
.backdrop-blur-md {
  transition: backdrop-filter 0.3s ease;
}
@media (max-width: 640px) {
  .animate-float {
    animation-duration: 4s;
  }
}
</style>
