<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NOVA - Assurance des particuliers, professionnels et associations</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#0066CC',
                        secondary: '#C62222',
                        dark: '#1a1a1a',
                        light: '#f9f9f9',
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .animate-float {
            animation: float 3s ease-in-out infinite;
        }

        /* Gradient text */
        .gradient-text {
            background: linear-gradient(135deg, #0066CC 0%, #00A3E0 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* Glass morphism effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #0066CC;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #0052A3;
        }

        /* Image overlay effect */
        .image-overlay {
            position: relative;
            overflow: hidden;
        }

        .image-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(0, 102, 204, 0.8) 0%, rgba(198, 34, 34, 0.8) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .image-overlay:hover::before {
            opacity: 1;
        }

        /* Blob shapes */
        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: blob-animation 8s ease-in-out infinite;
        }

        @keyframes blob-animation {
            0%, 100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
            25% {
                border-radius: 58% 42% 75% 25% / 76% 46% 54% 24%;
            }
            50% {
                border-radius: 50% 50% 33% 67% / 55% 27% 73% 45%;
            }
            75% {
                border-radius: 33% 67% 58% 42% / 63% 68% 32% 37%;
            }
        }
    </style>
</head>
<body class="bg-white">
    <!-- Header -->
    <header class="bg-white shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <!-- Top Bar -->
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-2xl font-bold text-primary">NOVA</a>
                </div>

                <!-- Desktop Navigation -->
                <nav class="hidden lg:flex items-center space-x-8">
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-primary font-medium flex items-center">
                            Particuliers
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-primary font-medium flex items-center">
                            Professionnels
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="relative group">
                        <button class="text-gray-700 hover:text-primary font-medium flex items-center">
                            Associations
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </nav>

                <!-- Right Actions -->
                <div class="flex items-center space-x-4">
                    <button class="hidden md:flex items-center text-gray-700 hover:text-primary">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        <span class="text-sm font-medium">Rechercher</span>
                    </button>
                    <a href="#" class="hidden md:inline-block bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition font-medium">
                        Prendre RDV
                    </a>
                    <button class="lg:hidden text-gray-700" id="mobile-menu-btn">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden lg:hidden bg-white border-t">
            <div class="container mx-auto px-4 py-4">
                <nav class="flex flex-col space-y-4">
                    <a href="#" class="text-gray-700 hover:text-primary font-medium">Particuliers</a>
                    <a href="#" class="text-gray-700 hover:text-primary font-medium">Professionnels</a>
                    <a href="#" class="text-gray-700 hover:text-primary font-medium">Associations</a>
                    <a href="#" class="bg-primary text-white px-6 py-2 rounded-full hover:bg-blue-700 transition font-medium text-center">
                        Prendre RDV
                    </a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-blue-50 via-white to-blue-50 py-20 md:py-32 overflow-hidden">
        <!-- Decorative blobs -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-200 opacity-20 blob -translate-x-1/2 -translate-y-1/2"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-red-200 opacity-20 blob translate-x-1/2 translate-y-1/2"></div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Left Content -->
                <div class="text-center lg:text-left animate-fadeInUp">
                    <div class="inline-block bg-blue-100 text-primary px-4 py-2 rounded-full text-sm font-semibold mb-6">
                        ✨ Assureur n°1 de la relation client
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-extrabold text-dark mb-6 leading-tight">
                        À la <span class="gradient-text">NOVA</span>, le service client fait la différence
                    </h1>
                    <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                        Assurance auto, habitation, santé et bien plus encore. Découvrez nos solutions adaptées à vos besoins avec un accompagnement personnalisé.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-8">
                        <a href="#devis" class="group bg-secondary text-white px-8 py-4 rounded-full hover:bg-red-700 transition-all duration-300 font-semibold text-lg shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center">
                            Obtenir un devis gratuit
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#services" class="bg-white text-primary px-8 py-4 rounded-full hover:bg-gray-50 transition-all duration-300 font-semibold text-lg shadow-lg hover:shadow-xl border-2 border-primary hover:scale-105">
                            Nos services
                        </a>
                    </div>
                    <!-- Trust indicators -->
                    <div class="flex flex-wrap gap-6 justify-center lg:justify-start text-sm text-gray-600">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">3M+ sociétaires</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">Note 4.7/5</span>
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                            <span class="font-medium">Assistance 24/7</span>
                        </div>
                    </div>
                </div>

                <!-- Right Content - Hero Image -->
                <div class="relative animate-fadeInUp hidden lg:block">
                    <div class="relative">
                        <!-- Main image placeholder with modern illustration -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=800&h=600&fit=crop"
                                 alt="Happy family"
                                 class="w-full h-[500px] object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/50 to-transparent"></div>
                        </div>

                        <!-- Floating cards -->
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-6 animate-float" style="animation-delay: 0.5s;">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Souscription</p>
                                    <p class="font-bold text-dark">En 5 minutes</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-6 -right-6 bg-white rounded-2xl shadow-xl p-6 animate-float" style="animation-delay: 1s;">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Économisez</p>
                                    <p class="font-bold text-dark">Jusqu'à 30%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Access Section -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-white to-gray-50" id="devis">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-dark mb-4">
                        Devis et souscription en ligne
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Obtenez votre devis personnalisé en quelques clics et souscrivez directement en ligne
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
                    <!-- Card 1 - Auto -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-blue-400 to-blue-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-blue-500 to-blue-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Auto</h3>
                            <p class="text-xs text-gray-500">À partir de 15€/mois</p>
                        </div>
                    </div>

                    <!-- Card 2 - Habitation -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-green-400 to-green-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-green-500 to-green-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Habitation</h3>
                            <p class="text-xs text-gray-500">À partir de 8€/mois</p>
                        </div>
                    </div>

                    <!-- Card 3 - Moto -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-purple-400 to-purple-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-purple-500 to-purple-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Moto</h3>
                            <p class="text-xs text-gray-500">À partir de 12€/mois</p>
                        </div>
                    </div>

                    <!-- Card 4 - Vie -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-yellow-500 to-yellow-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Vie</h3>
                            <p class="text-xs text-gray-500">Épargne responsable</p>
                        </div>
                    </div>

                    <!-- Card 5 - Famille -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-pink-400 to-pink-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-pink-500 to-pink-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Famille</h3>
                            <p class="text-xs text-gray-500">Protection complète</p>
                        </div>
                    </div>

                    <!-- Card 6 - Santé -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-red-400 to-red-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-red-500 to-red-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Santé</h3>
                            <p class="text-xs text-gray-500">Mutuelle adaptée</p>
                        </div>
                    </div>

                    <!-- Card 7 - Vélo -->
                    <div class="group bg-white rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer border border-gray-100 hover:border-primary hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-20 h-20 mb-4">
                                <div class="absolute inset-0 bg-gradient-to-br from-teal-400 to-teal-600 rounded-2xl transform group-hover:rotate-6 transition-transform"></div>
                                <div class="relative w-full h-full bg-gradient-to-br from-teal-500 to-teal-700 rounded-2xl flex items-center justify-center">
                                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                    </svg>
                                </div>
                            </div>
                            <h3 class="font-bold text-dark text-base mb-1">Assurance Vélo</h3>
                            <p class="text-xs text-gray-500">Mobilité verte</p>
                        </div>
                    </div>

                    <!-- Card 8 - Autres -->
                    <div class="group bg-gradient-to-br from-secondary to-red-700 rounded-3xl p-6 hover:shadow-2xl transition-all duration-300 cursor-pointer hover:-translate-y-2">
                        <div class="flex flex-col items-center text-center justify-center h-full">
                            <svg class="w-12 h-12 text-white mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                            </svg>
                            <h3 class="font-bold text-white text-base mb-1">Nos autres solutions</h3>
                            <p class="text-xs text-white/80">Découvrir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Banner -->
    <section class="relative py-16 md:py-20 overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-r from-secondary via-red-600 to-red-700"></div>
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-10 left-10 w-64 h-64 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-10 right-10 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <div class="grid lg:grid-cols-2 gap-8 items-center max-w-6xl mx-auto">
                <!-- Left Content -->
                <div class="text-center lg:text-left text-white">
                    <div class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-4">
                        🔒 Nouvelle protection
                    </div>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold mb-4 leading-tight">
                        ASSURANCE AUTO : Assurez votre voiture contre le vol
                    </h2>
                    <p class="text-lg md:text-xl mb-6 text-white/90">
                        Protection complète, même par piratage électronique. Roulez l'esprit tranquille avec notre couverture innovante.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#" class="group bg-white text-secondary px-8 py-4 rounded-full hover:bg-gray-100 transition-all duration-300 font-bold shadow-xl hover:shadow-2xl hover:scale-105 flex items-center justify-center">
                            Découvrir l'assurance auto
                            <svg class="w-5 h-5 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                            </svg>
                        </a>
                        <a href="#" class="bg-white/10 backdrop-blur-sm text-white px-8 py-4 rounded-full hover:bg-white/20 transition-all duration-300 font-semibold border-2 border-white/30">
                            En savoir plus
                        </a>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="hidden lg:block">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1449965408869-eaa3f722e40d?w=600&h=400&fit=crop"
                             alt="Modern car"
                             class="rounded-3xl shadow-2xl w-full h-80 object-cover">
                        <div class="absolute -bottom-6 -left-6 bg-white rounded-2xl shadow-xl p-6">
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500">Protection</p>
                                    <p class="font-bold text-dark">100% sécurisée</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 md:py-20 bg-white" id="services">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4 text-center">
                    Vos services en ligne
                </h2>
                <p class="text-center text-gray-600 mb-12">
                    Accessibles 24h/24, simples et rapides
                </p>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Télécharger une attestation</h3>
                        <p class="text-gray-600 mb-4">Accédez à vos attestations d'assurance en quelques clics depuis votre espace personnel</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Accéder
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Prendre RDV en délégation</h3>
                        <p class="text-gray-600 mb-4">Rencontrez un conseiller dans l'agence la plus proche de chez vous</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Prendre rendez-vous
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Consulter vos garanties</h3>
                        <p class="text-gray-600 mb-4">Retrouvez le détail de toutes vos garanties dans votre espace personnel</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Consulter
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Application mobile</h3>
                        <p class="text-gray-600 mb-4">Gérez vos contrats et déclarez vos sinistres depuis votre smartphone</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Télécharger
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Déclarer un sinistre</h3>
                        <p class="text-gray-600 mb-4">Déclarez et suivez vos sinistres en ligne rapidement et facilement</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Déclarer
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-light rounded-xl p-8 hover:shadow-lg transition">
                        <div class="w-12 h-12 bg-primary rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-dark mb-3">Assistance 24/7</h3>
                        <p class="text-gray-600 mb-4">Une équipe disponible jour et nuit pour vous assister en cas d'urgence</p>
                        <a href="#" class="text-primary font-semibold hover:underline flex items-center">
                            Contacter
                            <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-7xl mx-auto">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-extrabold text-dark mb-4">
                        Un projet ? <span class="gradient-text">NOVA</span> vous accompagne
                    </h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                        Découvrez nos solutions adaptées à chaque étape de votre vie
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Project 1 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1554224155-8d04cb21cd6c?w=600&h=400&fit=crop"
                                 alt="Patrimoine"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-blue-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-dark mb-4">Se constituer un patrimoine</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Épargner pour les imprévus</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Investir pour vos projets</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-blue-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Préparer l'avenir de vos enfants</span>
                                </li>
                            </ul>
                            <a href="#" class="group/link inline-flex items-center text-primary font-bold hover:text-blue-700 transition">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1579621970563-ebec7560ff3e?w=600&h=400&fit=crop"
                                 alt="Retraite"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-green-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-dark mb-4">Préparer votre retraite</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Estimer vos futurs revenus</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Anticiper, épargner, investir</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-green-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Accéder à une retraite meilleure</span>
                                </li>
                            </ul>
                            <a href="#" class="group/link inline-flex items-center text-primary font-bold hover:text-blue-700 transition">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="group bg-white rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                        <div class="relative h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1511895426328-dc8714191300?w=600&h=400&fit=crop"
                                 alt="Prévoyance"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/80 to-transparent"></div>
                            <div class="absolute bottom-4 left-4">
                                <div class="w-14 h-14 bg-white rounded-2xl flex items-center justify-center shadow-lg">
                                    <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-8">
                            <h3 class="text-2xl font-bold text-dark mb-4">Anticiper les aléas de la vie</h3>
                            <ul class="space-y-3 mb-6">
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Comprendre la prévoyance</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Choisir le bon contrat</span>
                                </li>
                                <li class="flex items-start">
                                    <div class="w-5 h-5 bg-purple-100 rounded-full flex items-center justify-center mr-3 mt-0.5 flex-shrink-0">
                                        <svg class="w-3 h-3 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <span class="text-gray-600">Protéger vous et vos proches</span>
                                </li>
                            </ul>
                            <a href="#" class="group/link inline-flex items-center text-primary font-bold hover:text-blue-700 transition">
                                En savoir plus
                                <svg class="w-5 h-5 ml-2 group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials / Stats Section -->
    <section class="py-16 md:py-20 bg-primary text-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">
                        20 ans que nous sommes l'assureur n°1 de la relation client !
                    </h2>
                    <p class="text-xl text-blue-100">
                        C'est grâce à vous. Merci pour votre confiance.
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8 text-center">
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                        <div class="text-5xl font-bold mb-2">4.7/5</div>
                        <div class="text-blue-100">Note moyenne clients</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                        <div class="text-5xl font-bold mb-2">3M+</div>
                        <div class="text-blue-100">Sociétaires</div>
                    </div>
                    <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-8">
                        <div class="text-5xl font-bold mb-2">24/7</div>
                        <div class="text-blue-100">Assistance disponible</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="py-16 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-dark mb-4">
                        Toujours assureur, plus que jamais militant
                    </h2>
                    <p class="text-lg text-gray-600">
                        Avec vous et auprès de vous, NOVA réaffirme ses engagements
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-dark mb-3">Plus humaine</h3>
                        <p class="text-gray-600">
                            Mettre l'humain au cœur de toutes nos actions et de tous nos choix
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-dark mb-3">Plus solidaire</h3>
                        <p class="text-gray-600">
                            Appartenir à un collectif engagé soucieux du mieux commun
                        </p>
                    </div>

                    <div class="text-center">
                        <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold text-dark mb-3">Plus responsable</h3>
                        <p class="text-gray-600">
                            Agir pour un monde plus durable, attentifs à notre impact sur l'environnement
                        </p>
                    </div>
                </div>

                <div class="text-center mt-12">
                    <p class="text-2xl font-bold text-primary mb-6">#ChaqueActeCompte</p>
                    <a href="#" class="inline-block bg-primary text-white px-8 py-3 rounded-full hover:bg-blue-700 transition font-semibold">
                        Découvrir toutes nos actions
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-12">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-4 gap-8 mb-8">
                    <!-- Column 1 -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Découvrir NOVA</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition">L'Entreprise</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">NOVA Recrute</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Espace presse</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Adhérer à NOVA</a></li>
                        </ul>
                    </div>

                    <!-- Column 2 -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Nos assurances</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Assurance auto</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Assurance habitation</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Assurance moto</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Assurance vie</a></li>
                        </ul>
                    </div>

                    <!-- Column 3 -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Nos conseils</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition">FAQ</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Conseils de prévention</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Nos partenaires</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Blog</a></li>
                        </ul>
                    </div>

                    <!-- Column 4 -->
                    <div>
                        <h4 class="font-bold text-lg mb-4">Nous contacter</h4>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Par téléphone</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Par e-mail</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Trouver une agence</a></li>
                            <li><a href="#" class="text-gray-300 hover:text-white transition">Réclamations</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="border-t border-gray-700 pt-8">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <div class="flex space-x-6 mb-4 md:mb-0">
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-gray-300 hover:text-white transition">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.373 0 0 5.373 0 12s5.373 12 12 12 12-5.373 12-12S18.627 0 12 0zm4.441 16.892c-2.102.144-6.784.144-8.883 0C5.282 16.736 5.017 15.622 5 12c.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0C18.718 7.264 18.982 8.378 19 12c-.018 3.629-.285 4.736-2.559 4.892zM10 9.658l4.917 2.338L10 14.342V9.658z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="text-gray-400 text-sm">
                            <a href="#" class="hover:text-white">Mentions légales</a> |
                            <a href="#" class="hover:text-white ml-2">Données personnelles</a> |
                            <a href="#" class="hover:text-white ml-2">Cookies</a>
                        </div>
                    </div>
                    <div class="text-center text-gray-400 text-sm mt-4">
                        © 2025 NOVA - Tous droits réservés
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Mobile Menu Toggle Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>